<section class="hs-d-smart-section bg-dark section-gap">

        <div class="container text-center">

            <h2 class="hs-d-smart-title mb-3 fw-semibold text-light">
                Trusted by Brands That Believe in <br>
                <span class="text-crimson">Real Growth!</span>
            </h2>

            <p class="hs-d-smart-sub mb-5 text-light">
                We work with businesses across industries to improve visibility, leads, and real business
                results.
            </p>

        </div>


        <div class="hs-d-logo-section">

            <div class="container-fluid">

                <div class="hs-d-logo-track" id="hs-d-track">

                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-01.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-02.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-03.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-04.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-05a.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-06a.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-07.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-08.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-09.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-10.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-11.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-12.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-13.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-14a.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-16.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-17.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-18.png"></div>
                    <div class="hs-d-logo-item"><img src="assets/images/logos/logos-19.png"></div>

                </div>

            </div>

        </div>


        <script>
            window.addEventListener("load", function () {

                const track = document.querySelector("#hs-d-track");
                if (!track) return;

                track.innerHTML += track.innerHTML;

                let pos = 0;
                let speed = 0.9;

                function animate() {
                    pos -= speed;

                    if (pos <= -track.scrollWidth / 2) {
                        pos = 0;
                    }

                    track.style.transform = `translateX(${pos}px)`;

                    requestAnimationFrame(animate);
                }

                animate();

            });
        </script>



    </section>