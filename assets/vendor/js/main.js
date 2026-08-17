/**
 * Site-wide JS. Each feature below is independent and guards itself — one
 * feature being homepage-only (scroll-reveal) must never block another
 * feature (review slider, FAQ accordion) from running on other pages that
 * also load this file.
 */
document.addEventListener('DOMContentLoaded', function () {
    initScrollReveal();
    initReviewSliders();
    initFaqAccordions();
});

/**
 * Scroll-reveal animations — homepage only.
 *
 * Purely additive: no section markup, layout, color, or spacing is
 * changed. Each <section> fades + slides up into its exact existing
 * position the first time it scrolls into view. If JS fails to run,
 * nothing is hidden — the page still looks and works exactly as before.
 */
function initScrollReveal() {
    // This file is shared across pages via the same <script> include;
    // keep the animation scoped to the homepage only, as requested.
    var isHomepage = !document.querySelector('.services-hero');
    if (!isHomepage) return;

    // Respect users who've asked their OS/browser to reduce motion.
    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    if (!('IntersectionObserver' in window)) return; // very old browsers: just show the page normally

    // Scoped to the homepage already (guard above), so a plain 'section'
    // selector is safe here regardless of nesting depth.
    var sections = document.querySelectorAll('section:not(.d-none)');

    var observer = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -60px 0px'
    });

    sections.forEach(function (section) {
        section.classList.add('reveal-on-scroll');
        observer.observe(section);
    });
}

/**
 * Card sliders (testimonials, "360° approach", etc.) — any element with
 * class .rev-slider on any page. Loops infinitely by cloning the first/last
 * visible cards, shows 1/2/3 cards depending on viewport width.
 */
function initReviewSliders() {
    var sliders = document.querySelectorAll('.rev-slider');

    sliders.forEach(function (slider) {
        var track = slider.querySelector('.rev-track');
        var prev = slider.querySelector('.rev-prev');
        var next = slider.querySelector('.rev-next');
        if (!track || !prev || !next) return;

        var cards = Array.from(track.children);

        function getVisible() {
            if (window.innerWidth < 768) return 1;
            if (window.innerWidth < 992) return 2;
            return 3;
        }

        var visible = getVisible();

        // Clone for the infinite-loop illusion (scoped per slider instance).
        cards.slice(-visible).forEach(function (el) {
            track.insertBefore(el.cloneNode(true), track.firstChild);
        });
        cards.slice(0, visible).forEach(function (el) {
            track.appendChild(el.cloneNode(true));
        });

        var allCards = Array.from(track.children);
        var index = visible;

        function update() {
            var gap = 20;
            var cardWidth = allCards[0].getBoundingClientRect().width + gap;
            track.style.transform = 'translateX(-' + (index * cardWidth) + 'px)';

            allCards.forEach(function (c) { c.classList.remove('is-active'); });

            var center = index + Math.floor((getVisible() - 1) / 2);
            if (allCards[center]) {
                allCards[center].classList.add('is-active');
            }
        }

        function nextSlide() {
            index++;
            track.style.transition = 'transform 0.5s ease';
            update();

            if (index >= allCards.length - visible) {
                setTimeout(function () {
                    track.style.transition = 'none';
                    index = visible;
                    update();
                }, 500);
            }
        }

        function prevSlide() {
            index--;
            track.style.transition = 'transform 0.5s ease';
            update();

            if (index <= 0) {
                setTimeout(function () {
                    track.style.transition = 'none';
                    index = allCards.length - (visible * 2);
                    update();
                }, 500);
            }
        }

        next.addEventListener('click', nextSlide);
        prev.addEventListener('click', prevSlide);

        window.addEventListener('resize', function () {
            visible = getVisible();
            update();
        });

        window.addEventListener('load', update);
        update();
    });
}

/**
 * FAQ accordions — any element with class .hs-s-accordion on any page.
 * One open item at a time; the item marked "active" in the markup opens
 * pre-expanded.
 */
function initFaqAccordions() {
    document.querySelectorAll('.hs-s-accordion').forEach(function (acc) {
        var items = acc.querySelectorAll('.hs-s-item');

        items.forEach(function (item) {
            var answer = item.querySelector('.hs-s-answer');
            var icon = item.querySelector('.hs-s-icon');

            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.innerHTML = '−';
            }

            item.querySelector('.hs-s-question').addEventListener('click', function () {
                items.forEach(function (i) {
                    var a = i.querySelector('.hs-s-answer');
                    var ic = i.querySelector('.hs-s-icon');
                    i.classList.remove('active');
                    a.style.maxHeight = null;
                    ic.innerHTML = '+';
                });

                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.innerHTML = '−';
            });
        });
    });
}
