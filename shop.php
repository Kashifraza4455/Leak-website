<?php
$page = 'Project | Home';
$pageDesc = '""';
$pageTag = '""';
include 'includes/header.php';
$page = 'Home';
?>


<section class="shop">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">
                <div class="home10">
                <h2>Protect your home from water <br> intrusion, anytime, anywhere.</h2>
                </div>
                <div class="home9 mt-5 text-center">
                    <a href="#">VIEW PRODUCT</a>
                </div>

            </div>
        </div>
    </div>

</section>
<section class="main10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 headsphone2 aos-init aos-animate"data-aos="fade-down-right"   data-aos-duration="1500">
               <div class="home11">
               <h2>X-Sense Wi-Fi Water Leak Detector, Smart Water Sensor Alarm</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <h6>$500</h6>
               </div>
                <form id="myform" method="POST" class="input" action="#">
                    <input type="button" value="-" class="minus text-white" field="quantity">
                    <input type="text" name="quantity" value="0" class="input3">
                    <input type="button" value="+" class="input plus text-white" field="quantity">
                </form>
                <div class="home12 mt-5">
                    <a href="#">Add to Cart &nbsp; &nbsp; <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 aos-init aos-animate" data-aos="fade-down-left"   data-aos-duration="1500">
                <img src="images/Group 20.png" width="100%" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'Home';
?>