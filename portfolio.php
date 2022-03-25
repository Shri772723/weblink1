<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Web link Services Pvt. Ltd. | Pune, Maharashtra, India</title>
</head>

<?php
    include('header.php');
?>
<main class="page-height custom-portfolio-page">
    <!-- slider section start -->
    <section class="portfolio-slider position-relative py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-heading text-white text-center ">
                        <h1 class="header-heading">Portfolio</h1>
                    </div>
                    <div class="slider-content">
                        <div class="swiper-container two custom-shadow">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="assets-web/images/portfolio/4block-events.png"
                                            alt="Aayurved Shakti" class="portfolio-slider-image">
                                    </div>
                                    <div class="slider-website-name text-center"><a target="_blank"
                                            href="#"
                                            class="slider-heading-link text-decoration-none">4Block Events</a></div>
                                </div>
                                  
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="assets-web/images/portfolio/soft-wlspl.png"
                                            alt="F4U - Chicken Price Management System" class="portfolio-slider-image">
                                    </div>
                                    <div class="slider-website-name text-center"><a target="_blank" href="#"
                                            class="slider-heading-link text-decoration-none">WLSPL - Efforts</a></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="assets-web/images/portfolio/ecom-supercaps.png"
                                            alt="F4U - Chicken Price Management System" class="portfolio-slider-image">
                                    </div>
                                    <div class="slider-website-name text-center"><a target="_blank" href="#"
                                            class="slider-heading-link text-decoration-none">E-commerce Websites</a></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-image">
                                        <img src="assets-web/images/portfolio/graphics-design.png"
                                            alt="F4U - Chicken Price Management System" class="portfolio-slider-image">
                                    </div>
                                    <div class="slider-website-name text-center"><a target="_blank" href="#"
                                            class="slider-heading-link text-decoration-none">Graphics Designing</a></div>
                                </div>
                              
                                <!-- Add Pagination -->
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-shap-animation"></div>
    </section>
    <!-- slider section end -->

    <!-- portfolio type section start -->
    <section class="portfolio-type position-relative py-lg-5 py-4">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="zoom-in">
                    <a href="portfolio-website-designing.php"
                        class="portfolio-customize position-relative text-decoration-none">
                        <div class="portfolio-card shadow-sm position-relative">
                            <div class="portfolio-image-part position-relative">
                                <img src="assets-web/images/portfolio/4block-events.png"
                                    alt="Website Designing" class="destop-image">
                            </div>
                            <span class="card-shape"></span>
                        </div>
                        <div class="portfolio-type-name">Website Designing</div>
                    </a>
                </div>
                <div class="col-lg-6 mb-4" data-aos="zoom-in">
                    <a href="#"
                        class="portfolio-customize position-relative text-decoration-none">
                        <div class="portfolio-card shadow-sm position-relative">
                            <div class="portfolio-image-part position-relative">
                                <img src="assets-web/images/portfolio/soft-wlspl.png"
                                    alt="Web Application Development" class="destop-image">
                            </div>
                            <span class="card-shape"></span>
                        </div>
                        <div class="portfolio-type-name">Web Application Development</div>
                    </a>
                </div>
                <div class="col-lg-6 mb-4" data-aos="zoom-in">
                    <a href="#"
                        class="portfolio-customize position-relative text-decoration-none">
                        <div class="portfolio-card shadow-sm position-relative">
                            <div class="portfolio-image-part position-relative">
                                <img src="assets-web/images/portfolio/ecom-factsheet.png"
                                    alt="E-commerce Websites" class="destop-image">
                            </div>
                            <span class="card-shape"></span>
                        </div>
                        <div class="portfolio-type-name">E-commerce Websites</div>
                    </a>
                </div>
                <div class="col-lg-6 mb-4" data-aos="zoom-in">
                    <a href="#"
                        class="portfolio-customize position-relative text-decoration-none">
                        <div class="portfolio-card shadow-sm position-relative">
                            <div class="portfolio-image-part position-relative">
                                <img src="assets-web/images/portfolio/graphics-design.png   "
                                    alt="Graphics Designing" class="destop-image">
                            </div>
                            <span class="card-shape"></span>
                        </div>
                        <div class="portfolio-type-name">Graphics Designing</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio type section end -->





    <div class="modal modal-custom-enquiry fade" id="enquiry_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content custom-modal-content">
            <form id="enquiry_modal_form">
                <div class="modal-header custom-modal-header position-relative">
                    <div class="request-a-quote-modal-title">
                        <h5 class="modal-title">Request a Quote</h5>
                    </div>
                    <span class="modal-title-services-name"></span>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="request_name">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="request_name" id="request_name"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="request_mobile_no" class="d-block">Mobile No<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control custom-form-input"
                                    onkeyup="onlyNumberWithSpaceAndPlusSign(this)" name="request_mobile_no"
                                    id="request_mobile_no" placeholder="Mobile No">
                                <label id="request_mobile_no-error" class="invalid-input" for="request_mobile_no"
                                    style="display: none;"></label>
                            </div>
                        </div>
                        <div class="col-12 d-none">
                            <div class="form-group">
                                <label for="request_webname"></label>
                                <input type="text" class="form-control" name="request_webname" id="request_webname"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="request_email_address">Email Address</label>
                                <input type="text" class="form-control" name="request_email_address"
                                    id="request_email_address" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="request_source">
                <input type="hidden" name="request_service_id">
                <div class="modal-footer justify-content-center">
                    <button type="button" onclick="submitRequestQuoteModal(this)" title="Submit"
                        class="btn modal-form-submit ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



</main>


<script>
skrollr.init();
AOS.init({
    duration: 1000
});

var mySwiper = document.querySelector('.swiper-container.two').swiper

// Now you can use all slider methods like
var swiper = new Swiper('.swiper-container.two', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    effect: 'coverflow',
    slidesPerView: 3,
    // initialSlide: 3,
    loop: true,
    slideToClickedSlide: true,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    grabCursor: true,
    coverflowEffect: {
        rotate: 15,
        stretch: 150,
        depth: 900,
        modifier: 1,
        slideShadows: true
    },
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    watchSlidesVisibility: true,
});
</script>


<?php
    include('footer.php');
?>