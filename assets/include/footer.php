<style>
    .site-footer {
        background: #000;
        padding: 80px 0 48px;
    }

    .footer-logo img {
        height: 36px;
        width: auto;
        display: block;
        margin-bottom: 20px;
    }

    .footer-about p {
        color: #B3B3B3;
        max-width: 340px;
        line-height: 1.7;
    }

    .footer-heading {
        color: #fff;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .footer-links {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 14px;
    }

    .footer-links a {
        color: #B3B3B3;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: color 0.25s ease, transform 0.25s ease;
    }

    .footer-links a:visited {
        color: #B3B3B3;
    }

    .footer-links a:hover,
    .footer-links a:hover:visited {
        color: #D81F28;
        transform: translateX(4px);
    }

    .footer-links a i {
        font-size: 1rem;
        color: #D81F28;
        flex-shrink: 0;
    }

    .footer-links a:hover i {
        color: #D81F28;
    }

    .footer-divider {
        border-color: rgba(255, 255, 255, 0.1);
        margin: 56px 0 40px;
    }

    .footer-bottom {
        background-color: #D81F28;
        min-height: 70px;
    }

    .footer-bottom a {
        color: #fff;
        text-decoration: underline;
    }

    @media (max-width: 767px) {
        .site-footer {
            padding: 56px 0 32px;
            text-align: center;
        }

        .footer-about p {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .footer-links a {
            justify-content: center;
        }
    }
</style>

<footer>
    <div class="site-footer">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-4 col-md-12 footer-about">
                    <a href="index.php" class="footer-logo">
                        <img src="assets/images/Iynix-Logo-White.svg" alt="iYnix Digital">
                    </a>
                    <p class="p-xsm">iYnix Digital offers a full range of services that help you attract more
                        leads, make a great impression, and convert those leads into paying customers. With iYnix,
                        you can be confident that your online marketing efforts are in good hands and that you'll be
                        able to see real results.</p>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <h6 class="footer-heading">Services</h6>
                    <ul class="footer-links">
                        <li><a href="#" class="p-xsm">About Us</a></li>
                        <li><a href="#" class="p-xsm">Blog</a></li>
                        <li><a href="#" class="p-xsm">Contact Us</a></li>
                        <li><a href="#" class="p-xsm">Terms and Conditions</a></li>
                        <li><a href="#" class="p-xsm">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="footer-heading">Connect With Us</h6>
                    <ul class="footer-links">
                        <li><a href="https://www.facebook.com/iynixdigital" class="p-xsm" target="_blank" rel="noopener"><i class="bi bi-facebook"></i>Facebook</a></li>
                        <li><a href="#" class="p-xsm" target="_blank" rel="noopener"><i class="bi bi-instagram"></i>Instagram</a></li>
                        <li><a href="#" class="p-xsm" target="_blank" rel="noopener"><i class="bi bi-twitter-x"></i>Twitter</a></li>
                        <li><a href="https://www.linkedin.com/company/iynix-digital" class="p-xsm" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i>Linkedin</a></li>
                        <li><a href="#" class="p-xsm" target="_blank" rel="noopener"><i class="bi bi-youtube"></i>Youtube</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h6 class="footer-heading">Contact Us</h6>
                    <ul class="footer-links">
                        <li><a href="mailto:info@iynixdigital.com" class="p-xsm"><i class="bi bi-envelope-fill"></i>info@iynixdigital.com</a></li>
                        <li><a href="tel:+911234567890" class="p-xsm"><i class="bi bi-telephone-fill"></i>+91 1234567890</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom d-flex align-items-center justify-content-center text-white">
        <p class="fw-semibold p-xsm mb-0">© Copyright 2026. All Rights Reserved Designed by <a href="https://iynixdigital.com" class="text-white">iYnix Digital</a></p>
    </div>
</footer>
