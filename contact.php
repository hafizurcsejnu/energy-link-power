<?php include('_header.php');?>

<!-- Start Page Header Area -->
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    <h1>Contact Us</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->

<!-- Start Page Content Wrapper -->
<div class="page-content-wrap">
    <div class="contact-page-area-wrapper">
        <div class="row g-lg-0">
            <div class="col-lg-6">
                <div class="contact-content-wrap w-75 mx-auto pt-84 pt-sm-54 pb-90 pb-sm-60 mb-xl-30 px-3 px-lg-0">
                    <div class="contact-page-content">
                        <div class="section-title-wrap mb-24">
                            <h2>Get In Touch</h2>
                        </div>
                        <div class="office-info">

                        

                            <p><i class="fa fa-map-marker"></i> Mukto Bangla Complex,8th Floor Space-205 <br>
House # 12, Road # 04, Block # D, Mirpur-1, Dhaka.</p>
                            <p><i class="fa fa-phone"></i> +88 01972340066, 01711320683, 01727257909</p>
                            <p><i class="fa fa-envelope-o"></i>hafizurrahman.ep@gmail.com</p>
                            <p><i class="fa fa-clock-o"></i> Sun - Sat: 9:00 - 6:00</p>
                        </div>
                    </div>

                    <div class="contact-page-form-area mt-60 mt-sm-40">
                        <div class="section-title-wrap mb-24">
                            <h2>Send Us A Quote</h2>
                        </div>

                        <div class="contact-form">
                            <form id="contact-form" action="http://htmlmail.hasthemes.com/raju/duncan-mail.php"
                                    method="post">
                                <div class="contact-form-content">
                                    <div class="form-input-item">
                                        <input type="text" name="con_name" placeholder="Your Name*" required/>
                                    </div>

                                    <div class="form-input-item">
                                        <input type="text" name="con_phone" placeholder="Your Phone"/>
                                    </div>

                                    <div class="form-input-item">
                                        <input type="email" name="con_email" placeholder="Your Email*" required/>
                                    </div>

                                    <div class="form-input-item">
                                        <textarea name="con_message" id="con_message" cols="30" rows="4"
                                                    placeholder="Write your Message*" required></textarea>
                                    </div>

                                    <div class="form-input-item">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </div>

                                <!-- Show Message Notification -->
                                <div class="form-message mt-1"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-map">
                    <div id="map_content" class="h-100" data-lat="38.907192" data-lng="-77.036873" data-zoom="12"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content Wrapper -->
<?php include('_footer.php');?>