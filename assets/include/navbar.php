<!-- Bootstrap CSS (LOCAL) -->
<link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>
    .nav-header {
        position: sticky;
        top: 0;
        background: #fff;
        border-bottom: 1px solid #eaeaea;
        box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.06);
        z-index: 999;
        font-family: var(--bs-font-sans-serif);
    }
    /* No override here on purpose: .container keeps Bootstrap's normal
       responsive max-width (tops out at 1540px, same as every content
       section on the page) so the nav lines up with the page content
       instead of stretching edge-to-edge. */

    .nav-wrap {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: calc(var(--bs-gutter-x) * .5) 0;
        position: relative;
    }

    .nav-logo {
        font-size: 28px;
        font-weight: 700;
        color: var(--bs-body-color);
        text-decoration: none;
        flex: 1;
    }

    .nav-logo img {
        height: 40px;
        width: auto;
        display: block;
    }

    .nav-center {
        flex: 2;
        display: flex;
        justify-content: center;
    }

    .nav-menu {
        display: flex;
        gap: 40px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        padding: 12px 0;
    }

    .nav-link {
        text-decoration: none;
        color: var(--bs-body-color);
        font-weight: 600;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #D81F28;
    }

    .nav-btn-wrap {
        flex: 1;
        display: flex;
        justify-content: flex-end;
    }

    .nav-btn {
        background: #D81F28;
        color: #fff;
        padding: 12px 24px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
    }

    .nav-mega {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #FDFDFD;
        border-top: 3px solid #D81F28;
        padding: 40px calc(var(--bs-gutter-x) * .5);
        border-radius: 0 0 20px 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
    }

    .nav-services:hover .nav-mega,
    .nav-about:hover .nav-mega {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .nav-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
    }

    .nav-col h6 {
        margin: 0 0 15px;
        /* font-size: 20px; */
        font-weight: 600;
        color: #D81F28;
    }

    .nav-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-col li {
        margin-bottom: 10px;
    }

    .nav-col a {
        color: var(--bs-body-color);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .nav-col a:hover {
        color: #D81F28;
        text-decoration: underline;
    }

    /* Services mega menu — text columns */
    .nav-services .nav-grid {
        gap: 0;
    }

    .nav-services .nav-col {
        padding: 0 32px;
        border-right: 1px solid #ececec;
    }

    .nav-services .nav-col:first-child {
        padding-left: 0;
    }

    .nav-services .nav-col:last-child {
        border-right: none;
    }

    .nav-services .nav-col h6 {
        display: flex;
        align-items: center;
        gap: 10px;
        padding-bottom: 12px;
        margin-bottom: 16px;
        border-bottom: 1px solid #f0f0f0;
    }

    .nav-services .nav-col h6 i {
        font-size: 1.05rem;
        color: #D81F28;
    }

    .nav-services .nav-col li {
        margin-bottom: 2px;
    }

    .nav-services .nav-col a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 7px 10px;
        margin: 0 -10px;
        border-radius: 8px;
    }

    .nav-services .nav-col a::before {
        content: "";
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #D3D3D3;
        flex-shrink: 0;
        transition: background 0.25s ease;
    }

    .nav-services .nav-col a:hover {
        background: #FBEAEA;
        color: #D81F28;
        text-decoration: none;
        transform: translateX(2px);
    }

    .nav-services .nav-col a:hover::before {
        background: #D81F28;
    }

    /* About mega menu — image cards */
    .nav-about .nav-col a:hover {
        text-decoration: none;
    }

    .nav-menu-img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 20px;
        margin-bottom: 16px;
        transition: 0.3s ease;
        display: block;
    }

    .nav-col:hover .nav-menu-img {
        transform: scale(1.03);
    }

    .nav-toggle {
        display: none;
        font-size: 30px;
        cursor: pointer;
    }
    .nav-link {
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.nav-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
    margin-left: 10px;
    line-height: 1;
}

/* desktop hover */
.nav-services:hover .nav-arrow,
.nav-about:hover .nav-arrow {
    transform: rotate(180deg);
}

/* mobile open state */
.nav-item.nav-open .nav-arrow {
    transform: rotate(180deg);
}

/* Breakpoint is 991px (not the usual 767px) because at 768–991px
   Bootstrap's own .container caps at 720px — too narrow to fit the
   logo + 5 menu items + CTA button on one line without overlapping. */
@media (max-width: 991px) {
    .nav-toggle {
        display: block !important;
        font-size: 30px;
        cursor: pointer;
        z-index: 1001;
    }

    .nav-btn-wrap {
        display: none !important;
    }

    .nav-center {
        display: none !important;
        /* position: fixed (not absolute) so the panel is anchored to the
           viewport edges — position: absolute here would inherit .nav-wrap's
           box, which sits inset by the .container's own left/right gutter,
           leaving a sliver of page content visible on both sides. */
        position: fixed;
        top: 70px;
        left: 0;
        right: 0;
        width: auto;
        max-height: calc(100vh - 70px);
        max-height: calc(100dvh - 70px);
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        background: #fff;
        padding: 20px;
        box-shadow: 0 12px 25px rgba(0,0,0,0.08);
        z-index: 1000;
        flex: unset !important;
    }

    .nav-center.nav-active {
        display: block !important;
    }

    .nav-menu {
      display: flex !important;
        flex-direction: column;
        gap: 0;
        width: 100%;
    }

    .nav-item {
        cursor: pointer;
        padding: 14px 0;
    }

    .nav-link {
        display: inline-flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .nav-mega {
        position: static !important;
        width: 100%;
        padding: 12px 0 0;
        border-top: none;
        box-shadow: none;
        display: none;
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
    }

    .nav-services .nav-col {
        padding: 0;
        border-right: none;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 16px;
        margin-bottom: 16px;
    }

    .nav-services .nav-col:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }

    .nav-item.nav-open .nav-mega {
        display: block;
    }

    .nav-grid {
        display: block !important;
    }

    .nav-col {
        margin-bottom: 20px;
    }

    .nav-menu-img {
        width: 100%;
        height: 140px;
        margin-bottom: 12px;
    }
}
</style>

<header class="nav-header">
    <div class="container">
        <div class="nav-wrap">

            <a href="index.php" class="nav-logo"><img src="assets/images/Iynix-Logo.svg" alt=""></a>

            <div class="nav-center">
                <ul class="nav-menu">

                
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item nav-services">
                        <a class="nav-link" href="services.php">
        <span>Services</span>
        <span class="nav-arrow">
            <svg viewBox="0 0 24 24" width="16" height="16">
                <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"/>
            </svg>
        </span>
    </a>

                        <div class="nav-mega">
                            <div class="nav-grid">

                                <div class="nav-col">
                                    <h6><i class="bi bi-graph-up-arrow"></i>Digital Marketing</h6>
                                    <ul>
                                        <li><a href="services.php" class="p-xsm">SEO</a></li>
                                        <li><a href="#" class="p-xsm">SEO Audit</a></li>
                                        <li><a href="#" class="p-xsm">Local SEO Services</a></li>
                                        <li><a href="#" class="p-xsm">Page Speed Optimization</a></li>
                                        <li><a href="#" class="p-xsm">Product Marketing</a></li>
                                        <li><a href="#" class="p-xsm">Content Marketing</a></li>
                                        <li><a href="#" class="p-xsm">PPC Management Services</a></li>
                                        <li><a href="#" class="p-xsm">B2B Marketing</a></li>
                                        <li><a href="#" class="p-xsm">B2C Marketing</a></li>
                                        <li><a href="#" class="p-xsm">B2C and D2C</a></li>
                                    </ul>
                                </div>

                                <div class="nav-col">
                                    <h6><i class="bi bi-share-fill"></i>Social Media</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">Social Media Ads</a></li>
                                        <li><a href="#" class="p-xsm">Social Media Marketing</a></li>
                                    </ul>
                                    <br>
                                    <h6><i class="bi bi-phone"></i>Mobile Application Development</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">iOS App Development</a></li>
                                        <li><a href="#" class="p-xsm">Android App Development</a></li>
                                        <li><a href="#" class="p-xsm">Flutter App Development</a></li>
                                        <li><a href="#" class="p-xsm">React Native App Development</a></li>
                                        <li><a href="#" class="p-xsm">Mobile App Testing and Quality Assurance</a></li>
                                        <li><a href="#" class="p-xsm">App Optimization and Performance Tuning</a></li>
                                        <li><a href="#" class="p-xsm">Mobile App Store Submission and Optimization</a></li>
                                    </ul>
                                </div>

                                <div class="nav-col">
                                    <h6><i class="bi bi-code-slash"></i>Website Development</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">Website Design & Development</a></li>
                                        <li><a href="#" class="p-xsm">Website Redesign</a></li>
                                        <li><a href="#" class="p-xsm">Website Optimisation</a></li>
                                        <li><a href="#" class="p-xsm">Rapid Website Design</a></li>
                                        <li><a href="#" class="p-xsm">E-Mail Newsletter Design Services</a></li>
                                    </ul>
                                    <br>
                                    <h6><i class="bi bi-cart3"></i>E-commerce Solutions</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">E-commerce SEO</a></li>
                                        <li><a href="#" class="p-xsm">E-commerce Optimization</a></li>
                                        <li><a href="#" class="p-xsm">E-commerce Marketing</a></li>
                                    </ul>
                                </div>

                                <div class="nav-col">
                                    <h6><i class="bi bi-palette2"></i>UI/UX Design</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">UI Design Services</a></li>
                                        <li><a href="#" class="p-xsm">UX Design Services</a></li>
                                        <li><a href="#" class="p-xsm">Prototyping</a></li>
                                        <li><a href="#" class="p-xsm">Interaction Design</a></li>
                                        <li><a href="#" class="p-xsm">Mobile App Design</a></li>
                                        <li><a href="#" class="p-xsm">Website Design</a></li>
                                        <li><a href="#" class="p-xsm">Responsive Design</a></li>
                                        <li><a href="#" class="p-xsm">Product Design</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-about">
                        <a class="nav-link" href="#">
        <span>About</span>
        <span class="nav-arrow">
            <svg viewBox="0 0 24 24" width="16" height="16">
                <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"/>
            </svg>
        </span>
    </a>

                        <div class="nav-mega">
                            <div class="nav-grid">

                                <div class="nav-col">
                                    <a href=""><img src="assets/images/office-high-five.png" alt="Who We Are" class="nav-menu-img">
                                    <h6>Who We Are</h6></a>
                                </div>

                                <div class="nav-col">
                                    <a href=""><img src="assets/images/Business-goals.png" alt="What We Do" class="nav-menu-img">
                                    <h6>What We Do</h6></a>
                                </div>

                                <div class="nav-col">
                                    <a href=""><img src="assets/images/Still-Confused.png" alt="Our Work" class="nav-menu-img">
                                    <h6>How We Work</h6></a>
                                </div>

                                <div class="nav-col">
                                    <a href=""><img src="assets/images/cash-and-chess.png" alt="Our Leadership" class="nav-menu-img">
                                    <h6>Our Leadership</h6></a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>
            </div>

            <div class="nav-btn-wrap">
                <!-- <a href="#" class="nav-btn">Get Proposal</a> -->
            
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#hsFormModal"
                        style="width: fit-content;">
                        Get Proposal
                    </button>
            </div>

            <div class="nav-toggle">&#9776;</div>

        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.nav-toggle');
    const navCenter = document.querySelector('.nav-center');
    const items = document.querySelectorAll('.nav-item');

    // mobile menu toggle
    toggle.addEventListener('click', function () {
        navCenter.classList.toggle('nav-active');
    });

    // submenu toggle on full item block click
    // NOTE: width is checked live inside the click handler (not once at page
    // load) so this keeps working correctly if the viewport is resized after
    // load — e.g. via Chrome DevTools device toolbar — without a refresh.
    items.forEach(item => {
        const mega = item.querySelector('.nav-mega');

        if (mega) {
            item.addEventListener('click', function (e) {
                if (window.innerWidth > 991) return; // desktop: hover/link behaves normally

                // prevent anchor navigation
                e.preventDefault();
                e.stopPropagation();

                this.classList.toggle('nav-open');
            });
        }
    });

    // if the viewport is resized back to desktop width while the mobile
    // menu/submenu is open, clear that state so nothing is left "stuck"
    window.addEventListener('resize', function () {
        if (window.innerWidth > 991) {
            navCenter.classList.remove('nav-active');
            items.forEach(item => item.classList.remove('nav-open'));
        }
    });
});
</script>