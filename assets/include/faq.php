<?php
// Global FAQ accordion. Include on any page after setting:
//   $faq_heading_pre  (optional, text before the highlighted span)
//   $faq_heading_hi   (optional, the crimson-highlighted span text)
//   $faq_items        (required, array of ['q' => ..., 'a' => ...]; first item opens pre-expanded)
// Styles are already global in assets/css/custom.css (.hs-s-*), behavior in
// assets/vendor/js/main.js (initFaqAccordions).
if (!isset($faq_heading_pre)) {
    $faq_heading_pre = 'Have Some Questions? ';
}
if (!isset($faq_heading_hi)) {
    $faq_heading_hi = 'Let Us Clear!';
}
if (!isset($faq_items) || !is_array($faq_items) || count($faq_items) === 0) {
    $faq_items = [
        [
            'q' => 'What is your decision about selecting the appropriate marketing strategy in my market?',
            'a' => 'We look at your audience, competitors and market demand and then select the channels that would best suit your business and region: SEO, Google Ads, Meta Ads or AI-led growth.',
        ],
        [
            'q' => 'What is your measure of success in various markets?',
            'a' => 'We measure success based on ROI, lead quality, conversion rate and sustainable growth metrics.',
        ],
        [
            'q' => 'I have had previous experience with agencies. How are you different?',
            'a' => 'We measure success based on ROI, lead quality, conversion rate and sustainable growth metrics.',
        ],
        [
            'q' => 'Will you be able to assist us in scaling out of one country or region?',
            'a' => 'We measure success based on ROI, lead quality, conversion rate and sustainable growth metrics.',
        ],
        [
            'q' => 'Will I have visibility into performance and progress?',
            'a' => 'We focus on performance driven marketing backed by data, transparency and optimization.',
        ],
    ];
}
?>
<section class="hs-s-faq section-gap-top px-2a">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-semibold"><?php echo $faq_heading_pre; ?><span class="text-crimson"><?php echo $faq_heading_hi; ?></span></h2>
        </div>

        <div class="hs-s-accordion">
            <?php foreach ($faq_items as $i => $item): ?>
                <div class="hs-s-item sbg-gray<?php echo $i === 0 ? ' active' : ''; ?>">
                    <div class="hs-s-question">
                        <h3><?php echo $item['q']; ?></h3>
                        <div class="hs-s-icon">+</div>
                    </div>
                    <div class="hs-s-answer fw-light">
                        <?php echo $item['a']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
