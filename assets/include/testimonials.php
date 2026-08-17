<?php
// Global testimonials/review slider. Include on any page after setting:
//   $testimonials_heading    (optional, default below)
//   $testimonials_subheading (optional, default below)
// Styles live in assets/css/custom.css (.rev-*), behavior in
// assets/vendor/js/main.js (initReviewSliders) — both shared site-wide.
if (!isset($testimonials_heading)) {
    $testimonials_heading = 'What Our Clients Say?';
}
if (!isset($testimonials_subheading)) {
    $testimonials_subheading = 'Reviews from our satisfied clients';
}
?>
<section class="rev-slider-section section-gap-top">
    <div class="container">

        <h2 class="mb-3 fw-semibold text-black text-center"><?php echo $testimonials_heading; ?></h2>
        <p class="text-black text-center"><?php echo $testimonials_subheading; ?></p>

        <div class="rev-slider mt-5">

            <button class="rev-arrow rev-prev">
                <img src="assets/images/services/slider-left.svg" alt="">
            </button>
            <button class="rev-arrow rev-next">
                <img src="assets/images/services/slider-right.svg" alt="">
            </button>

            <div class="rev-viewport">
                <div class="rev-track">

                    <div class="rev-card">
                        <img src="assets/images/services/ratings.svg" alt="" class="mb-6">
                        <p class="p-xsm mb-6 text-black">If you are looking for the best digital marketing services, look no further than iYnix Digital. They have a perfect 5.0 rating for a reason. They handled our website and marketing campaigns seamlessly, and the ROI has been fantastic. Highly recommend them to anyone looking to scale their brand</p>
                        <span class="text-crimson p-sm fw-semibold">→ Deepak Kumar</span>
                    </div>

                    <div class="rev-card">
                        <img src="assets/images/services/ratings.svg" alt="" class="mb-6">
                        <p class="p-xsm mb-6 text-black">Iynix Digital is a results-driven digital marketing service providing SEO, website design, and website development solutions. The team focuses on delivering visually appealing, user-friendly, and high-performance digital experiences that help businesses grow online. With a strategic and professional approach, Iynix Digital ensures reliable and effective results tailored to client needs.</p>
                        <span class="text-crimson p-sm fw-semibold">→ Divya Gupta</span>
                    </div>

                    <div class="rev-card">
                        <img src="assets/images/services/ratings.svg" alt="" class="mb-6">
                        <p class="p-xsm mb-6 text-black">iYnix Digital provided excellent digital and web development services. The team was professional, responsive, and delivered quality work on time. Communication was smooth throughout. Highly recommended for reliable digital solutions.</p>
                        <span class="text-crimson p-sm fw-semibold">→ Khushi Sahni</span>
                    </div>

                    <div class="rev-card">
                        <img src="assets/images/services/ratings.svg" alt="" class="mb-6">
                        <p class="p-xsm mb-6 text-black">Excellent marketing agency to grow your brand digitally. We had a great experience working with them.</p>
                        <span class="text-crimson p-sm fw-semibold">→ Gunjan Nagpal</span>
                    </div>

                    <div class="rev-card">
                        <img src="assets/images/services/ratings.svg" alt="" class="mb-6">
                        <p class="p-xsm mb-6 text-black">I've had a great experience working with Iynix, They're highly responsive, knowledgeable, and truly care about delivering results. My website looks amazing and their marketing strategies have helped me attract more customers. Highly recommend!</p>
                        <span class="text-crimson p-sm fw-semibold">→ Het Patel</span>
                    </div>

                    <div class="rev-card">
                        <img src="assets/images/services/ratings.svg" alt="" class="mb-6">
                        <p class="p-xsm mb-6 text-black">My experience with iYnix Digital was excellent. Their team is extremely skilled in digital solutions and website development, and their responses are also very professional and quick to respond. They delivered excellent work on schedule and had a clear understanding of my needs. Throughout the entire process, communication was seamless. Strongly advised for anyone searching for reliable internet services.</p>
                        <span class="text-crimson p-sm fw-semibold">→ Akash Kumar</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
