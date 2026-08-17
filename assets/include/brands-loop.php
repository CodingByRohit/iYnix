<?php
// Global "Trusted by Brands" 2-row logo marquee for service pages.
// Distinct from the homepage's assets/include/trusted-brands.php (single
// row) — this is its own design: top row loops leftward, bottom row loops
// rightward, continuously. Include on any page after optionally setting:
//   $brands_heading_pre   (text before the highlighted span)
//   $brands_heading_hi    (the crimson-highlighted span text)
//   $brands_subheading
// Styles live in assets/css/custom.css (.ss-brands-*), reusing the same
// .ban-sl-left/.ban-sl-right infinite-loop animation already used by the
// homepage hero.
if (!isset($brands_heading_pre)) {
    $brands_heading_pre = 'Trusted by Brands That Believe in ';
}
if (!isset($brands_heading_hi)) {
    $brands_heading_hi = 'Real Growth!';
}
if (!isset($brands_subheading)) {
    $brands_subheading = 'We work with businesses across industries to improve visibility, leads, and real business results.';
}

$brands_logo_path = 'assets/images/services/brands-service-page/';
$brands_row_top = [
    'boulder-decisions.png',
    'radiance-aesthetic-medicine.png',
    'be-so-well.png',
    'conscious-medicine.png',
    'pro-roofing.png',
    'college-laundry.png',
    'she-shifts.png',
    'fynga.png',
];
$brands_row_bottom = [
    'etowah-group.png',
    'top-tech-mechanical.png',
    'house-cleaning-specialist.png',
    'heartquest-professional.png',
    'myatlguy.png',
    'heal.png',
    'suloom.png',
    'phd-bathroom-remodeling.png',
];
?>
<section class="ss-brands-section section-gap-top">
    <div class="container text-center">
        <h2 class="fw-semibold mb-3">
            <?php echo $brands_heading_pre; ?><span class="text-crimson"><?php echo $brands_heading_hi; ?></span>
        </h2>
        <p class="ss-brands-sub mb-5"><?php echo $brands_subheading; ?></p>
    </div>

    <div class="container">
        <div class="ss-brands-loop">
            <div class="ss-brands-row ss-brands-row-top">
                <div class="ban-sl-row ban-sl-left">
                    <?php foreach (array_merge($brands_row_top, $brands_row_top) as $logo): ?>
                        <div class="ss-brands-item"><img src="<?php echo $brands_logo_path . $logo; ?>" alt=""></div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="ss-brands-row">
                <div class="ban-sl-row ban-sl-right">
                    <?php foreach (array_merge($brands_row_bottom, $brands_row_bottom) as $logo): ?>
                        <div class="ss-brands-item"><img src="<?php echo $brands_logo_path . $logo; ?>" alt=""></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
