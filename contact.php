<?php
$page = 'Project | Home';
$pageDesc = '""';
$pageTag = '""';
include 'includes/header.php';
$page = 'Home';
?>

<section class="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="form8">
                <h2>Contact us </h2>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 col-xxl-5 contact2 mt-3 form6" data-aos="fade-right"  data-aos-duration="1500">
                <form action="">
                    <div class="d-flex form1">
                        <div class="mb-3 form3 form3">
                            <label for="exampleInputEmail1" class="form-label">Name*</label>
                            <input type="text" class="form-control" placeholder="Enter your name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3  form3 cont3">
                            <label for="exampleInputEmail1" class="form-label">Phone*</label>
                            <input type="tell" class="form-control" placeholder="Enter your Phone no" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3 form3 form2">
                        <label for="exampleInputEmail1" class="form-label">Email Address*</label>
                        <input type="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form4">
                        <label for="exampleFormControlTextarea1" class="form-label">Message*</label>
                        <textarea class="form-control" placeholder="Type here.." id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="text-center">
                        <a href="" class="btn form5 ">Submit</a>
                    </div>

                </form>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 col-xx-5 form6"  data-aos="fade-left"  data-aos-duration="1500">
                <img src="images/contact.webp" width="100%" class="img-fluid" alt="">

            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'Home';
?>