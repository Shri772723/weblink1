<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-swidth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free Estimation | Web link Services Pvt. Ltd. | Pune, Maharashtra, India </title>

    <style>
    option:checked  {
    color: white;
    background: red !important;
}

 option:hover {
    color: white;
    background: red !important;
    padding-left:10px;
    font-size:16px !important;

}
</style>


</head>


<?php
    include('header.php');
?>

<main class="page-height margin-bottom-none">
    <header class="commn-header-section position-relative" id="particles-js">
        <div class="container d-flex breadcrumb-customize justify-content-between">
            <h1 class="text-white breadcrumb-heading">Free Estimation</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white breadcrumb-link">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Free Estimation</li>
                </ol>
            </nav>
        </div>
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
            </g>
        </svg>
    </header>

    <!-- website price section start -->
    <section class="website-price-section position-relative bg-cricle-animation py-4">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-lg-0 order-xl-0 order-1" data-aos="fade-right">
                    <div class="vector-image parallax-scene">
                        <div data-depth="0.40">
                            <img src="assets-web/images/normal-vector/quote-vector.png" alt="Free Estimation"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1 mb-lg-0 mb-4 order-0" data-aos="fade-left">
                    <div class="quote-form card p-sm-5 card-body shadow">
                        <form action="#" id="estimation-form"
                            method="post" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="quote-heading mb-4 text-theme">Request A Quote</h2>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="your_name">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" style="z-index: 99999;position: absolute;">
                                        <label for="mobile_no">Mobile No <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                            onkeyup="onlyNumberWithSpaceAndPlusSign(this)" name="mobile_no"
                                            id="mobile_no" placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="budget">Select Budget</label>
                                        <select class="form-control" id="budget" onfocus='this.size=5;'  onchange='this.size=1; this.blur();' name="budget" style="position: absolute;z-index: 9999;">
                                            <option value="">Select</option>
                                            <option value="5-10">INR 5K - 10K</option>
                                            <option value="10-50">INR 10K - 50K</option>
                                            <option value="50-100">INR 50K - 100K</option>
                                            <option value="100">INR 100K and above</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-12 pb-3">
                                    <div class="form-group">    
                                        <label for="budget">Select Service</label>
                                        <select class="form-control" id="services" onfocus='this.size=7;'  onchange='this.size=1; this.blur();' name="services" style="position: absolute;z-index: 999;">
                                            <option value="">Select</option>
                                            <option
                                                value="Website-Designing">
                                                Website Designing</option>
                                            <option
                                                value="Web-Application-Development">
                                                Web Application Development</option>
                                            <!-- <option
                                                value="SmJQtHD9Ue0T6mHaW614nNz_84-I34TNUKlisuh4c44tSQaOP1fFv1WkkQ-wMN0YY8199joDxhj-dePB1JkYIw">
                                                Cloud Based ERP Solutions</option> -->
                                            <option
                                                value="CRM-Development-&-Integration">
                                                CRM Development & Integration</option>
                                            <option
                                                value="API-Integration-&-Development">
                                                API Integration & Development</option>
                                            <option
                                                value="UI/UX-Development">
                                                UI/UX Development</option>
                                            <option
                                                value="">
                                                E-Commerce Website</option>
                                            <!-- <option
                                                value="HWZCGxKbSJ5uRMMayisE-I2sGsx_JEy9zsElynt9RuX5LPva6mffqcYfu7dTb-zKTsd04p9kWDKUKnzDm3ITqQ">
                                                Software Testing</option> -->
                                            <option
                                                value="Payment-Gateway-Integration">
                                                Payment Gateway Integration</option>
                                            <option
                                                value="Website-Server-Migration">
                                                Website / Server Migration</option>
                                            <option
                                                value="Website-Maintenance-Service">
                                                Website Maintenance Service</option>
                                                <option
                                                value="Graphics-Design">
                                                Graphics Design</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="type" value="estimate">
                                <input type="hidden" name="country_code" value="">
                                <input type="hidden" name="country_name" value="">
                                <div class="col-3"> </div>
                                <div class="col-6">
                                    <div class="py-3">
                                        <button title="Submit" type="submit"
                                            class="btn btn-contact px-4 bg-theme text-white rounded-0  submit-button">Submit</button>
                                    </div>
                                </div>
                                <div class="col-3"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <span class="dot-image-shape iq-objects-02" data-bottom="transform:translatey(100px)"
                data-top="transform:translatey(-100px);" style="">
                <img src="assets/images/dot-image.png" alt="dot-image" class="dot-image">
            </span>
        </div>
    </section>
    <!-- website price section end -->
</main>



<script src="assets/js/particles.min.js"></script>
<script>
function stats() {

}
particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 409,
            "density": {
                "enable": true,
                "value_area": 9460.131159106586
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 4
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.352750653390415,
            "random": false,
            "anim": {
                "enable": true,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 5,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": false,
            "distance": 16.03412060865523,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 2.0844356791251797
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});
/*
var count_particles, stats, update; 
stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
*/
</script>
<script>
skrollr.init();

AOS.init({
    duration: 1000
});

var input = document.querySelector("#mobile_no");
var iti = window.intlTelInput(input, {
    initialCountry: "in",
});

$("#estimation-form").validate({
    errorClass: "invalid-input",
    rules: {
        name: {
            required: true,
            noSpace: true,
            alpha_numeric: true
        },
        mobile_no: {
            required: true
        },
        email: {
            required: false,
            email_regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b$/i
        },
    },
    messages: {
        name: {
            required: "Please Enter Name."
        },
        mobile_no: {
            required: "Please Enter Mobile No."
        },
        email: {
            required: "Please Enter Email."
        },
    },
    submitHandler: function(form) {

        $('[name="country_code"]').val(iti.getSelectedCountryData().dialCode);
        $('[name="country_name"]').val(iti.getSelectedCountryData().name);

        showLoader()
        form.submit();
    }
});
</script>

<div class="footer-fixed-bottom">
    <div class="footer-bottom-row">
        <div class="footer-bottom-col">
            <div class="main-whatsaap-icon">
                <div class="bg-image"></div>
                <div class="text">Need Help? <strong style="font-weight:500;">Chat with us</strong></div>
            </div>
        </div>
        <div class="estimation-col position-relative">
            <div class="text-center">
                <a href="website-price.html" class="free-estimation-link stretched-link">Free Estimation</a>
            </div>
        </div>
        <div class="footer-bottom-col">
            <div class="call-number">
                <a href="tel:+91 70160 72891" class="link-unstyled"><img
                        src="assets/images/footer-fixed-icon/phone-call.svg" alt="Call" class="call-image"></a>
            </div>
        </div>
    </div>
</div>





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

<?php
    include('footer.php');
?>