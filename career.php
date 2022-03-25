<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-swidth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career | Web link Services Pvt. Ltd. | Pune, Maharashtra, India </title>

    <style>
    option:checked {
        color: white;
        background: red !important;
    }

    option:hover {
        color: white;
        background: red !important;
        padding-left: 10px;
        font-size: 16px !important;

    }
    </style>


</head>


<?php
    include('header.php');
?>

<main class="page-height overflow-hidden">
    <header class="commn-header-section position-relative" id="particles-js">
        <div class="container mt-5 breadcrumb-customize d-flex justify-content-between">
            <h1 class="text-white breadcrumb-heading">Career</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white breadcrumb-link">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Career</li>
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
    <!-- Privacy sectio start -->
    <section class="website-price-section bg-cricle-animation position-relative py-lg-4 py-4">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 order-lg-1 mb-3" data-aos="fade-left">
                    <form action="#" id="career-form" method="post" enctype="multipart/form-data"
                        accept-charset="utf-8">
                        <div class="quote-form card p-sm-5 card-body shadow">
                            <h2 class="anton-font h3 text-theme mb-4">Apply Now</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact_no">Mobile No<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" onkeyup="onlyNumber(this)"
                                            minlength="10" maxlength="10" id="contact_no" name="contact_no"
                                            placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email Address<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="team">Select Post<span class="text-danger">*</span></label>
                                        <!-- <select class="form-control" id="team" name="team"> -->
                                        <select class="form-control" id="team" name="team" onfocus='this.size=7;'
                                            onchange='this.size=1; this.blur();'
                                            style="position: absolute;z-index: 999;width:90%">
                                            <option value="">Select</option>
                                            <option value="Web-Application-Development">
                                                Web Application Development</option>
                                            <option value="Web-Designing"> Web Designing</option>
                                            <option value="Graphic-Designing"> Graphic Designing</option>

                                            <option value="Sales">Sales</option>
                                            <option value="HR">HR</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="qualification">Qualification <span class="text-danger">*</span<
                                                    /label>
                                                <input type="text" class="form-control" id="qualification"
                                                    name="qualification" placeholder="Qualification">
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none">
                                    <div class="form-group">
                                        <label for="webname">Webname</label>
                                        <input type="text" class="form-control" id="webname" name="webname"
                                            placeholder="Webname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="resume">Upload Resume <span class="text-danger">*</span< /label>
                                                <div class="custom-file form-group text-truncate">
                                                    <input type="file" class="custom-file-input" id="resume"
                                                        name="resume" onchange="imagePreview(this, 'pdf_doc')">
                                                    <label class="custom-file-label" for="resume">Choose file</label>
                                                </div>
                                                <label id="resume-error" class="invalid-input" for="resume"
                                                    style="display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="location">Your Current Location<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location"
                                            placeholder="Your Current Location">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <label for="workfromoffice">Ready to Work From Office<span
                                            class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="workfromoffice"
                                                id="work_office_yes" value="yes">
                                            <label class="form-check-label" for="work_office_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="workfromoffice"
                                                id="work_office_no" value="no">
                                            <label class="form-check-label" for="work_office_no">No</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="comments">Job Experiance </label>
                                        <input type="text" class="form-control" id="location" name="location"
                                            placeholder="Months, Years">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Comments</label>
                                        <textarea class="form-control" name="comments" placeholder="Comments"
                                            id="comments" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LcqFg8UAAAAADUK7coDHgoeTXEdJ9JQICdCyVcP">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center"> </div>
                                <div class="col-lg-6 text-center">
                                    <button type="Submit"
                                        class="btn btn-contact text-center px-4 bg-theme text-white rounded-0  submit-button">Submit</button>
                                </div>
                                <div class="col-lg-3 text-center"> </div>
                            </div>
                        </div>
                    </form>
                </div>




                <div class="col-lg-6 order-lg-0 order-xs-0" data-aos="fade-right">
                    <!-- <div class="careers-main-image-part">
                            <img src="assets-web/images/normal-vector/career.png" alt="Career" class="w-100">
                        </div> -->


                    <!-- accordation -->
                    <!-- Card -->
                    <div class=" card-image">

                        <!-- Content -->
                        <div class="rgba-black-strong py-5 px-4">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 col-xl-12">

                                    <!--Accordion wrapper-->
                                    <div class="accordion md-accordion accordion-5" id="accordionEx5" role="tablist"
                                        aria-multiselectable="true">

                                        <!-- Accordion card -->
                                        <div class="card mb-3">

                                            <!-- Card header -->
                                            <div class="card-header p-0 z-depth-1" role="tab" id="heading33">
                                                <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse33"
                                                    aria-expanded="true" aria-controls="collapse32">

                                                    <h5 class="text-capitalize text-danger mb-0 py-3 mt-1">
                                                        <img src="assets-web/images/career-vector/web-developer.png"
                                                            alt="defaultuser" class="user-img  mr-3 px-1"> Web Developer
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse33" class="collapse" role="tabpanel"
                                                aria-labelledby="heading33" data-parent="#accordionEx5">
                                                <div class="card-body rgba-black-light white-text z-depth-1">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Reporting to :</td>
                                                            <td> Branch Manager</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Locations :</td>
                                                            <td> Pimpri Chicnhwad - Pune</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Summary : </td>
                                                            <td>Web /graphic Designer (UI Designer)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary:</td>
                                                            <td>NO BARRED FOR RIGHT CANDIDATES</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Job Profile:</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Key Responsibility Areas:</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">

                                                                    <li> Should have Deep knowledge about HTML, HTML5,
                                                                        CSS, CSS3, JavaScript, Advanced JavaScript,
                                                                        Ajax, JQuery, Bootstrap and basic knowledge
                                                                        about PHP/.NET .</li>
                                                                    <li>Should have deep knowledge about Custom Website
                                                                        Design.</li>
                                                                    <li>Should have deep knowledge about Logo , Brochure
                                                                        Design and Graphics Design in Corel Draw &
                                                                        Photoshop.</li>
                                                                    <li>Basic Knowledge about Template/CMS based
                                                                        websites.</li>
                                                                    <li>Knowledge of Website Hosting.</li>
                                                                    <li>Must have UI Designing (Mobile websites)
                                                                        ability.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Desired Profile :</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Qualification :</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Experience:</td>
                                                            <td>0-1 yrs Experience in Advertising Industry/Print Media,
                                                                B2B Would be preferred.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Required Skills:</td>
                                                            <td>

                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Good Report Management Skills with competency in
                                                                        MS Office especially Excel</li>
                                                                    <li>Should be an Internet Savvy</li>
                                                                    <li>Excellent verbal/ written communication and
                                                                        presentation skills</li>
                                                                    <li>Excellent sales skills</li>
                                                                    <li>Must be target driven</li>
                                                                </ul>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mandatory:</td>
                                                            <td>Laptop</td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="card mb-3">

                                            <!-- Card header -->
                                            <div class="card-header p-0 z-depth-1" role="tab" id="heading34">
                                                <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse34"
                                                    aria-expanded="true" aria-controls="collapse32">

                                                    <h5 class="text-capitalize text-danger mb-0 py-3 mt-1">
                                                        <img src="assets-web/images/career-vector/graphics-designer.png"
                                                            alt="defaultuser" class="user-img  mr-3 px-1"> Graphic
                                                        Designer
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse34" class="collapse" role="tabpanel"
                                                aria-labelledby="heading34" data-parent="#accordionEx5">
                                                <div class="card-body rgba-black-light white-text z-depth-1">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Reporting to :</td>
                                                            <td> Branch Manager</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Locations :</td>
                                                            <td> Pune</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Summary : </td>
                                                            <td>The profile requires leading a group of sales
                                                                representatives. Acquire new customers on a regular
                                                                basis by selling the e-commerce concept & leveraging
                                                                relationships with them.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary:</td>
                                                            <td>NO BARRED FOR RIGHT CANDIDATES with Attractive
                                                                INCENTIVES</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Job Profile:</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Key Responsibility Areas:</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li class>This role is primarily responsible for
                                                                        acquisition of new customers</li>
                                                                    <li>Ensure that daily meeting targets of the team
                                                                        are met</li>
                                                                    <li>Ensuring that the Team Sales Targets are met by
                                                                        ensuring the closure of the leads generated by
                                                                        them</li>
                                                                    <li>Ensure 100% compliance of the Sales Process</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Desired Profile :</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Qualification :</td>
                                                            <td>MBA/ B.Tech or Graduates with minimum relevant Sales
                                                                Experience</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Experience:</td>
                                                            <td>2-5 yrs experience in sales with min 1+ years experience
                                                                in handling a team</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Required Skills:</td>
                                                            <td>

                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Should have flair towards sales</li>
                                                                    <li>Should have a pleasing personality</li>
                                                                    <li>Should have good written and verbal
                                                                        communication skills</li>
                                                                    <li>Similar industry candidate will be given
                                                                        preference</li>
                                                                    <li>Must have Team handling experience</li>
                                                                </ul>

                                                            </td>
                                                        </tr>


                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->


                                        <!-- Accordion card -->
                                        <div class="card mb-3">

                                            <!-- Card header -->
                                            <div class="card-header p-0 z-depth-1" role="tab" id="heading35">
                                                <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse35"
                                                    aria-expanded="true" aria-controls="collapse32">

                                                    <h5 class="text-capitalize text-danger mb-0 py-3 mt-1">
                                                        <img src="assets-web/images/career-vector/smo.png"
                                                            alt="defaultuser" class="user-img  mr-3 px-1"> Social Media
                                                        Optimization
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse35" class="collapse" role="tabpanel"
                                                aria-labelledby="heading35" data-parent="#accordionEx5">
                                                <div class="card-body rgba-black-light white-text z-depth-1">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Reporting to :</td>
                                                            <td> Branch Manager</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Locations :</td>
                                                            <td> Pune</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Summary : </td>
                                                            <td>The profile requires leading a group of sales
                                                                representatives. Acquire new customers on a regular
                                                                basis by selling the e-commerce concept & leveraging
                                                                relationships with them.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary:</td>
                                                            <td>NO BARRED FOR RIGHT CANDIDATES with Attractive
                                                                INCENTIVES</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Job Profile:</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Key Responsibility Areas:</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li class>This role is primarily responsible for
                                                                        acquisition of new customers</li>
                                                                    <li>Ensure that daily meeting targets of the team
                                                                        are met</li>
                                                                    <li>Ensuring that the Team Sales Targets are met by
                                                                        ensuring the closure of the leads generated by
                                                                        them</li>
                                                                    <li>Ensure 100% compliance of the Sales Process</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Desired Profile :</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Qualification :</td>
                                                            <td>MBA/ B.Tech or Graduates with minimum relevant Sales
                                                                Experience</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Experience:</td>
                                                            <td>2-5 yrs experience in sales with min 1+ years experience
                                                                in handling a team</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Required Skills:</td>
                                                            <td>

                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Should have flair towards sales</li>
                                                                    <li>Should have a pleasing personality</li>
                                                                    <li>Should have good written and verbal
                                                                        communication skills</li>
                                                                    <li>Similar industry candidate will be given
                                                                        preference</li>
                                                                    <li>Must have Team handling experience</li>
                                                                </ul>

                                                            </td>
                                                        </tr>


                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->
                                        <!-- Accordion card -->
                                        <div class="card mb-3">

                                            <!-- Card header -->
                                            <div class="card-header p-0 z-depth-1" role="tab" id="heading30">
                                                <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30"
                                                    aria-expanded="true" aria-controls="collapse30">

                                                    <h5 class="text-capitalize text-danger mb-0 py-3 mt-1">
                                                        <img src="assets-web/images/sales.svg" alt="defaultuser"
                                                            class="user-img mr-3 px-1  "> Sales Executive - Client
                                                        Acquisition
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse30" class="collapse " role="tabpanel"
                                                aria-labelledby="heading30" data-parent="#accordionEx5">
                                                <div class="card-body rgba-black-light white-text z-depth-1">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Reporting to :</td>
                                                            <td> Branch Manager</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Locations :</td>
                                                            <td> Pune</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Summary : </td>
                                                            <td>The profile requires leading a group of sales
                                                                representatives. Acquire new customers on a regular
                                                                basis by selling the e-commerce concept & leveraging
                                                                relationships with them.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary:</td>
                                                            <td>NO BARRED FOR RIGHT CANDIDATES with Attractive
                                                                INCENTIVES</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Job Profile:</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Key Responsibility Areas:</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li class>This role is primarily responsible for
                                                                        acquisition of new customers</li>
                                                                    <li>Ensure that daily meeting targets of the team
                                                                        are met</li>
                                                                    <li>Ensuring that the Team Sales Targets are met by
                                                                        ensuring the closure of the leads generated by
                                                                        them</li>
                                                                    <li>Ensure 100% compliance of the Sales Process</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Desired Profile :</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Qualification :</td>
                                                            <td>MBA/ B.Tech or Graduates with minimum relevant Sales
                                                                Experience</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Experience:</td>
                                                            <td>2-5 yrs experience in sales with min 1+ years experience
                                                                in handling a team</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Required Skills:</td>
                                                            <td>

                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Should have flair towards sales</li>
                                                                    <li>Should have a pleasing personality</li>
                                                                    <li>Should have good written and verbal
                                                                        communication skills</li>
                                                                    <li>Similar industry candidate will be given
                                                                        preference</li>
                                                                    <li>Must have Team handling experience</li>
                                                                </ul>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mandatory:</td>
                                                            <td> Bike & Laptop</td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="card mb-3">

                                            <!-- Card header -->
                                            <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
                                                <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31"
                                                    aria-expanded="true" aria-controls="collapse31">


                                                    <h5 class="text-capitalize text-danger mb-0 py-3 mt-1">
                                                        <img src="assets-web/images/career-vector/sales-manager.png"
                                                            alt="defaultuser" class="user-img mr-3 px-1"> Sales manager
                                                        (Team Lead) - Client Acquisition
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse31" class="collapse" role="tabpanel"
                                                aria-labelledby="heading31" data-parent="#accordionEx5">
                                                <div class="card-body rgba-black-light white-text z-depth-1">


                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Reporting to :</td>
                                                            <td> Branch Manager</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Locations :</td>
                                                            <td> Pune</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Summary : </td>
                                                            <td>The profile requires leading a group of sales
                                                                representatives. Acquire new customers on a regular
                                                                basis by selling the e-commerce concept & leveraging
                                                                relationships with them.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary:</td>
                                                            <td>NO BARRED FOR RIGHT CANDIDATES with Attractive
                                                                INCENTIVES</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Job Profile:</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Key Responsibility Areas:</td>
                                                            <td>


                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li class>This role is primarily responsible for
                                                                        acquisition of new customers</li>
                                                                    <li>Ensure that daily meeting targets of the team
                                                                        are met</li>
                                                                    <li>Ensuring that the Team Sales Targets are met by
                                                                        ensuring the closure of the leads generated by
                                                                        them</li>
                                                                    <li>Ensure 100% compliance of the Sales Process</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Desired Profile :</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Qualification :</td>
                                                            <td>MBA/ B.Tech or Graduates with minimum relevant Sales
                                                                Experience</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Experience:</td>
                                                            <td>2-5 yrs experience in sales with min 1+ years experience
                                                                in handling a team</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Required Skills:</td>
                                                            <td>

                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Should have flair towards sales</li>
                                                                    <li>Should have a pleasing personality</li>
                                                                    <li>Should have good written and verbal
                                                                        communication skills</li>
                                                                    <li>Similar industry candidate will be given
                                                                        preference</li>
                                                                    <li>Must have Team handling experience</li>
                                                                </ul>

                                                            </td>
                                                        </tr>


                                                    </table>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->

                                        <!-- Accordion card -->
                                        <div class="card mb-3">

                                            <!-- Card header -->
                                            <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                                                <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse32"
                                                    aria-expanded="true" aria-controls="collapse32">

                                                    <h5 class="text-capitalize text-danger mb-0 py-3 mt-1">
                                                        <img src="assets-web/images/career-vector/hr.png"
                                                            alt="defaultuser" class="user-img  mr-3 px-1">
                                                        Telecaller/Telemarketing Executive
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Card body -->
                                            <div id="collapse32" class="collapse" role="tabpanel"
                                                aria-labelledby="heading32" data-parent="#accordionEx5">
                                                <div class="card-body rgba-black-light white-text z-depth-1">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Reporting to :</td>
                                                            <td> Branch Manager</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Locations :</td>
                                                            <td> Pimpri Chicnhwad - Pune</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Summary : </td>
                                                            <td>The profile holder will be required to Call to the
                                                                Companies or Clients & generate appointments for sales
                                                                team.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Salary:</td>
                                                            <td>NO BARRED FOR RIGHT CANDIDATES with Attractive
                                                                INCENTIVES</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Job Profile:</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Key Responsibility Areas:</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Candidate Will be responsible for generate Fresh
                                                                        meeting for New Sales Department</li>

                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Desired Profile :</td>

                                                        </tr>

                                                        <tr>
                                                            <td>Qualification :</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li>Minimum 12th Pass Or Pursuing Graduate.</li>
                                                                    <li>Candidate should be familiar with Hindi &
                                                                        English.</li>
                                                                    <li>Marathi Candidate Would be preferred.</li>
                                                                    <ul>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Experience:</td>
                                                            <td>0-1 yrs Experience in Advertising Industry/Print Media,
                                                                B2B Would be preferred.</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Required Skills:</td>
                                                            <td>
                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li> Good Report Management Skills with competency
                                                                        in MS Office especially Excel</li>
                                                                    <li>Should be an Internet Savvy</li>
                                                                    <li>Excellent verbal/ written communication and
                                                                        presentation skills</li>
                                                                    <li>Excellent sales skills</li>
                                                                    <li>Must be target driven</li>
                                                                </ul>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Important Note :</strong></td>
                                                            <td>

                                                                <ul style="list-style-type:circle" class="pl-3">
                                                                    <li> No Doubt Salary Will be no barred for right
                                                                        candidate.</li>ś
                                                                    <li>Attractive Incentive for Sales on telecaller
                                                                        meeting.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                    </table>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->




                                    </div>
                                    <!--/.Accordion wrapper-->

                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Card -->


                </div>
            </div>
            <span class="dot-image-shape iq-objects-02" data-bottom="transform:translatey(100px)"
                data-top="transform:translatey(-100px);" style="">
                <img src="assets-web/images/dot-image.png" alt="dot-image" class="dot-image">
            </span>
        </div>
    </section>
    <!-- Privacy sectio end -->

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
AOS.init({
    duration: 1000
});
$("#career-form").validate({
    errorClass: "invalid-input",
    rules: {
        name: {
            required: true,
            noSpace: true,
            alpha_numeric: true
        },
        contact_no: {
            required: true,
            mobile_regex: /^[6789]\d{9}$/
        },
        email: {
            required: true,
            email_regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b$/i
        },
        team: {
            required: true
        },
        workfromoffice: {
            required: true
        },
        location: {
            required: true
        },
        resume: {
            extension: 'pdf,doc,docx'
        },
    },
    messages: {
        name: {
            required: "Please Enter Name."
        },
        contact_no: {
            required: "Please Enter Mobile No."
        },
        email: {
            required: "Please Enter Email."
        },
        team: {
            required: "Please Select Team."
        },
        workfromoffice: {
            required: "Are you Ready to Work From Office?"
        },
        location: {
            required: "Please Enter Your Current Location"
        },
        resume: {
            extension: messages['invalid-pdf-doc']
        },
    },
    submitHandler: function(form) {
        showLoader()
        form.submit();
    }
});
skrollr.init();
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
                <a href="#" class="free-estimation-link stretched-link">Free Estimation</a>
            </div>
        </div>
        <div class="footer-bottom-col">
            <div class="call-number">
                <a href="tel:+91 72491 75114" class="link-unstyled"><img
                        src="assets-web/images/footer-fixed-icon/phone-call.svg" alt="Call" class="call-image"></a>
            </div>
        </div>
    </div>
</div>
<!-- whatsapp box -->

<div class="main-box-pop">
    <div class="card main-card">
        <div class="card-header custom-card-header bg-whatsapp">
            <div class="media">
                <img src="assets-web/images/whatsapp.png" alt="whatsapp" class="whatsapp-img mr-3">
                <div class="media-body">
                    <h5 class="mt-0 h5 text-white mb-1 header-heading">Start a Conversation</h5>
                    <p class="text-white mb-0 text-whatsapp"><small>Hi..! Click one of our member below to chat on
                            <strong style="font-weight:500;">Whatsapp</strong></small></p>
                </div>
            </div>
        </div>
        <div class="card-body py-3">
            <small class="text-muted d-block mb-3 text-whatsapp">The team typically replies in a few minutes.</small>
            <a href="https://api.whatsapp.com/send?phone=+917249175114" target="_blank" class="d-block link-unstyled">
                <div class="card custom-card-inner-box animated border-0 shadow-sm mb-lg-3 mb-2">
                    <div class="card-body py-2">
                        <div class="media">
                            <img src="assets-web/images/sales.svg" alt="defaultuser" class="user-img mr-3">
                            <div class="media-body">
                                <h5 class="mt-0 h5 text-dark h6 mb-1 whatsaap-label">Sales / Enquiry</h5>
                                <small class="text-muted d-block">Mr. Vaibhav Zope</small>
                            </div>
                        </div>
                        <div class="overlay-icon">
                            <i class="fas fa-whatsapp"></i>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://api.whatsapp.com/send?phone=+919051635394" target="_blank" class="d-block link-unstyled">
                <div class="card custom-card-inner-box animated border-0 shadow-sm mb-lg-3 mb-2">
                    <div class="card-body py-2">
                        <div class="media">
                            <img src="assets-web/images/hr.png" alt="defaultuser" class="user-img mr-3">
                            <div class="media-body">
                                <h5 class="mt-0 h5 text-dark h6 mb-1 whatsaap-label">HR</h5>
                                <small class="text-muted d-block">Miss. Mili Halder</small>
                            </div>
                        </div>
                        <div class="overlay-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- <div class=" footer-shape position-relative">
        <div class="container px-0">
            <div class="footer-contact-info">
                <h2 class="footer-contact-heading">Have Any Project / Website Requirement?</h2>
                <a href="javascript:void(0)" onclick="showRequestQuoteModal(this)" data-source="footer"
                    class="footer-contact-link text-decoration-none">Request a Quote</a>
            </div>
        </div>
        <div class="d-lg-block d-none">
            <svg xmlns="#" viewBox="0 0 1440 320">
                <path fill="#f5f5f5" fill-opacity="1"
                    d="M0,96L60,117.3C120,139,240,181,360,202.7C480,224,600,224,720,224C840,224,960,224,1080,218.7C1200,213,1320,203,1380,197.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </div>
    </div> -->





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

<script type="text/javascript" src="assets/js/twt-main.js"></script>





<!-- Back to top button -->
<a href="#" id="scroll" style="display: none;"><span></span></a>

<!-- footer -->


<footer class="footer pt-lg-0 pt-4 pb-lg-2 mt-5" style="background-image:">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-3 col-md-3 mb-3">
                <div>
                    <h2 class="h6  footer-heading text-center">SOCIAL MEDIA</h2>
                    <div class="mb-2 pt-3 text-center">
                        <img src="assets-web/images/google.png" alt="Google" class="google-image">
                    </div>
                    <div class="mb-4  text-center">
                        <!-- <a class="social-media-link whatsapp-icon" target="_blank"
                            href="https://api.whatsapp.com/send?phone=+91 72491 75114"><i
                                class="fab fa-whatsapp"></i></a> -->
                        <a class="social-media-link facebook-icon" target="_blank"
                            href="https://www.facebook.com/WebLinkServicesPvtLtd"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-media-link linkedin-icon" target="_blank" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="social-media-link instagram-icon" target="_blank" href="#"><i
                                class="fab fa-instagram"></i></a>

                    </div>

                    <!-- <div class="google-start">
                        <i class="fas fa-star star-icon"></i>
                        <i class="fas fa-star star-icon"></i>
                        <i class="fas fa-star star-icon"></i>
                        <i class="fas fa-star star-icon"></i>
                        <i class="fas fa-star star-icon"></i>
                    </div> -->
                    <div class="review-widget_net" data-uuid="a02d53c5-dcf4-4e45-99bf-d090902ac4b0" data-template="10"
                        data-filter="" data-lang="en" data-theme="light">
                        <center><a href="https://www.review-widget.net/" target="_blank" rel="noopener"><img
                                    src="https://grwapi.net/assets/spinner/spin.svg" title="" alt="" loading="lazy"></a>
                        </center>
                    </div>
                    <script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>
                    <!-- <div class="google-review">
                        <p class="google-review-text text-white mb-0">91+ Star Reviews for Our Service Given by Our Valuable
                            Customers.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-9 col-md-9 mb-3">

                <!-- facebook -->
                <!-- <div class="fb-page text-center" data-href="https://www.facebook.com/WebLinkServicesPvtLtd"
                    data-tabs="timeline" data-width="320px" data-height="250" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/WebLinkServicesPvtLtd" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/WebLinkServicesPvtLtd">4 Blocks Events</a>
                    </blockquote>
                </div> -->


                <h2 class="footer-main-title text-white text-center mt-5 blinking-option">What Are You Waiting For?
                </h2>
                <h3 class="footer-title-text text-white text-center mt-3">Need a professional business consultation?
                    <br> Let's discuss your case!
                </h3>
                <div class="text-center pt-4">
                    <a class="a-glow " href="#" target="_blank">Contact Us</a>
                </div>


                <!-- map popup -->

                <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(function () {
    $("#btnShow").click(function () {
        $("#dialog").dialog({
            modal: true,
            title: "Google Map",
            width: 600,
            hright: 450,
            buttons: {
                Close: function () {
                    $(this).dialog('close');
                }
            },
            open: function () {
                var mapOptions = {
                    center: new google.maps.LatLng(19.0606917, 72.83624970000005),
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map($("#dvMap")[0], mapOptions);
            }
        });
    });
});
</script>
<input id = "btnShow" type="button" value="Show Maps"/>
<div id="dialog" style="display: none">
<div id="dvMap" style="height: 380px; width: 580px;">
</div>
</div> -->

                <!-- 
       <h2 class="h6  footer-heading text-center">VISIT</h2>
                    <div class="mb-2 pt-3 text-center">
                        <p class="text-center text-white footer-address">2nd and 3rd Floor , Meera Building, Durga Mata Colony, behind Shivar Garden Restaurant, Pimple Saudagar, Pune, Maharashtra 411027</p>
                    </div>

                    <ul class="list-unstyled mb-0 text-center">
                        <li><a href="mailto:hr@thewildtigers.com"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fa fa-map-marker mr-2"></i>GET DIRECTIONS</a></li>
                        <li><a href="tel:+91 90167 18208"
                                class="contact-text text-decoration-none contact-text-hover"><i class="fas fa-clock-o"></i>HOURS</a></li>
                    </ul> -->


            </div>

            <div class="col-lg-4 col-md-4 col-12 mb-3">

                <!-- <h2 class="h6  footer-heading text-center">SOCIAL MEDIA</h2>
                    <div class="mb-2 pt-3 text-center"></div> -->


                <!-- <h2 class="h6 footer-heading">Contact Us</h2>
                <address class="mb-0 contact-text">
                    <p>E-448 , Sumel Business Park 11,<br />
                        Near Namaste Circle,<br />
                        Besides Reliance Market,<br />
                        Shahibaug, Ahmedabad - 380004</p>
                </address>
                <div class="my-3">
                    <h3 class="footer-sub-heading">Sales Department</h3>
                    <ul class="list-unstyled">
                        <li><a href="mailto:info@thewildtigers.com"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fa fa-envelope mr-2"></i>info@thewildtigers.com</a></li>
                        <li><a href="tel:+91 70160 72891"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fas fa-phone fa-rotate-90 mr-2"></i>+91 70160 72891</a></li>
                    </ul>
                </div>
                <div class="my-3">
                    <h3 class="footer-sub-heading">HR Department</h3>
                    <ul class="list-unstyled mb-0">
                        <li><a href="mailto:hr@thewildtigers.com"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fa fa-envelope mr-2"></i>hr@thewildtigers.com</a></li>
                        <li><a href="tel:+91 90167 18208"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fas fa-phone fa-rotate-90 mr-2"></i>+91 90167 18208</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-sub-heading">Account Department</h3>
                    <ul class="list-unstyled mb-0">
                        <li><a href="mailto:info@thewildtigers.com"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fa fa-envelope mr-2"></i>info@thewildtigers.com</a></li>
                        <li><a href="tel:+91 78598 17617"
                                class="contact-text text-decoration-none contact-text-hover"><i
                                    class="fas fa-phone fa-rotate-90 mr-2"></i>+91 78598 17617</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="copyright border-top pt-2">
            <p class="mb-0 footer-bottom-part text-center text-white">
                <span class="text-center mb-1 w-100 d-block">
                    <span class="pl-lg-4 pl-2"><a class="footer-bottom-link text-decoration-none text-white"
                            target="_blank" href="#">Privacy Policy</a></span>
                    <span class="pl-lg-4 pl-2"><a class="footer-bottom-link text-decoration-none text-white"
                            target="_blank" href="#">Terms & Conditions</a></span>
                    <span class="px-lg-4 px-2"><a class="footer-bottom-link  last-link text-decoration-none text-white"
                            target="_blank" href="#">Payment Option</a></span>
                </span>
                <span class="d-block copyright-text">&copy; 2022 <span class="footer-wlspl blinking-option">Web link
                        Services Pvt. Ltd.</span> All Rights
                    Reserved.</span>
            </p>
        </div>
    </div>
</footer>
<script>
$('.main-whatsaap-icon').on('click', function() {
    if ($('.main-whatsaap-icon').hasClass('wa__active')) {
        $('.main-whatsaap-icon').removeClass('wa__active');
        $('.main-box-pop').removeClass('show-pop');
        $('.custom-card-inner-box').removeClass('fadeInUp');
    } else {
        $('.main-whatsaap-icon').addClass('wa__active');
        $('.main-box-pop').addClass('show-pop');
        $('.custom-card-inner-box').addClass('fadeInUp');
    }
});
</script>

<!-- <div class="modal modal-custom-enquiry fade" id="enquiry_modal" tabindex="-1" role="dialog">
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
</div> -->

<script type="text/javascript" src="assets/js/twt-main.js"></script>


<script>
var requestQuoteValidator = $("#enquiry_modal_form").validate({
    errorClass: "invalid-input",
    rules: {
        request_name: {
            required: true,
            noSpace: true
        },
        request_mobile_no: {
            required: true
        },
        request_email_address: {
            required: false,
            email_regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b$/i
        },
    },
    messages: {
        request_name: {
            required: "Please Enter Name."
        },
        request_mobile_no: {
            required: "Please Enter Mobile No."
        },
    }
});
var input = document.querySelector("#request_mobile_no");
var requestQuoteCountryCode = window.intlTelInput(input, {
    initialCountry: "in",
});

function showRequestQuoteModal(thisitem) {
    var source = $.trim($(thisitem).attr('data-source'));
    var request_service_id = $.trim($(thisitem).attr('data-service-id'));
    var dataServicesName = $.trim($(thisitem).attr('data-services-name'));


    if (dataServicesName != '') {
        $('.request-a-quote-modal-title').addClass('mb-2');
    } else {
        $('.request-a-quote-modal-title').removeClass('mb-2');
    }

    $('.modal-title-services-name').html(dataServicesName);

    $('[name="request_source"]').val(source);
    $('[name="request_service_id"]').val(request_service_id);

    requestQuoteValidator.resetForm();

    $('[name="request_name"]').val('');
    $('[name="request_mobile_no"]').val('');
    $('[name="request_email_address"]').val('');

    $('#enquiry_modal').modal('show');
}

function submitRequestQuoteModal(thisitem) {

    if ($('#enquiry_modal_form').valid() != false) {
        var name = $.trim($('[name="request_name"]').val());
        var mobile_no = $.trim($('[name="request_mobile_no"]').val());
        var email_address = $.trim($('[name="request_email_address"]').val());
        var source = $.trim($('[name="request_source"]').val());
        var webname = $.trim($('[name="webname"]').val());
        var request_service_id = $.trim($('[name="request_service_id"]').val());
        var country_code = requestQuoteCountryCode.getSelectedCountryData().dialCode;
        var country_name = requestQuoteCountryCode.getSelectedCountryData().name;

        $.ajax({
            type: "POST",
            url: site_url + 'guest_controller/submitRequestQuote',
            data: {
                'name': name,
                'mobile_no': mobile_no,
                'email_address': email_address,
                'source': source,
                'webname': webname,
                'country_code': country_code,
                'service': request_service_id,
                'country_name': country_name
            },
            dataType: 'json',
            beforeSend: function() {
                showLoader();
            },
            success: function(response) {
                hideLoader();
                if (response.status_code == 1) {

                    $('#enquiry_modal').modal('hide');

                    alertifyMessage('success', response.message);
                } else {
                    alertifyMessage('error', response.message);
                }
            },
        });

    } else {
        return false;
    }
}
</script>


<!-- back to top btn -->
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script>






<script>
var requestQuoteValidator = $("#enquiry_modal_form").validate({
    errorClass: "invalid-input",
    rules: {
        request_name: {
            required: true,
            noSpace: true
        },
        request_mobile_no: {
            required: true
        },
        request_email_address: {
            required: false,
            email_regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b$/i
        },
    },
    messages: {
        request_name: {
            required: "Please Enter Name."
        },
        request_mobile_no: {
            required: "Please Enter Mobile No."
        },
    }
});
var input = document.querySelector("#request_mobile_no");
var requestQuoteCountryCode = window.intlTelInput(input, {
    initialCountry: "in",
});

function showRequestQuoteModal(thisitem) {
    var source = $.trim($(thisitem).attr('data-source'));
    var request_service_id = $.trim($(thisitem).attr('data-service-id'));
    var dataServicesName = $.trim($(thisitem).attr('data-services-name'));


    if (dataServicesName != '') {
        $('.request-a-quote-modal-title').addClass('mb-2');
    } else {
        $('.request-a-quote-modal-title').removeClass('mb-2');
    }

    $('.modal-title-services-name').html(dataServicesName);

    $('[name="request_source"]').val(source);
    $('[name="request_service_id"]').val(request_service_id);

    requestQuoteValidator.resetForm();

    $('[name="request_name"]').val('');
    $('[name="request_mobile_no"]').val('');
    $('[name="request_email_address"]').val('');

    $('#enquiry_modal').modal('show');
}

function submitRequestQuoteModal(thisitem) {

    if ($('#enquiry_modal_form').valid() != false) {
        var name = $.trim($('[name="request_name"]').val());
        var mobile_no = $.trim($('[name="request_mobile_no"]').val());
        var email_address = $.trim($('[name="request_email_address"]').val());
        var source = $.trim($('[name="request_source"]').val());
        var webname = $.trim($('[name="webname"]').val());
        var request_service_id = $.trim($('[name="request_service_id"]').val());
        var country_code = requestQuoteCountryCode.getSelectedCountryData().dialCode;
        var country_name = requestQuoteCountryCode.getSelectedCountryData().name;

        $.ajax({
            type: "POST",
            url: site_url + 'guest_controller/submitRequestQuote',
            data: {
                'name': name,
                'mobile_no': mobile_no,
                'email_address': email_address,
                'source': source,
                'webname': webname,
                'country_code': country_code,
                'service': request_service_id,
                'country_name': country_name
            },
            dataType: 'json',
            beforeSend: function() {
                showLoader();
            },
            success: function(response) {
                hideLoader();
                if (response.status_code == 1) {

                    $('#enquiry_modal').modal('hide');

                    alertifyMessage('success', response.message);
                } else {
                    alertifyMessage('error', response.message);
                }
            },
        });

    } else {
        return false;
    }
}
</script>



<!-- google captcha -->

<script src='https://www.google.com/recaptcha/api.js'></script>



<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ff18deddf060f156a93b456/1er3p4q8l';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> -->
</body>