<?php include 'header-reg.php' ;
session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
  {
    header("location: index.php");  
    exit ;
  }
?>

<!--== about Content Start ==-->
<section id="page-content-wrap">
    <div class="about-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">2017</span>
                        <img src="assets/css/css_img/im1.jpg" alt="About" class="img-fluid img-left">
                        <h2 class="h3">ESTD of This Alumni Assotitation</h2>
                        <p>
                <br>
                <br>
                <br> 
                        </p>
                        <p>The years go by and the number of familiar faces at campus diminishes, but the memories
                      we all carry within us seem stronger all the time.Student Alumni association of CSE_JnU unifies the
                    alumni for betterment of every alumnus and the institute. Anecdotes of fellow students,
                     escapades, distinctive acts of professors, and tales of a sporting glory, among others have
                   dominated many a conversation years after the result sheets have faded and torn.</p>
                   <p>We started this association with five members but now we are a big family.
                      The Alumni Association allows more frequent
                         and widespread interaction between alumni, Students, Staff members and the Management.
                        With the profileration of the association, alumni all over the world can stay in touch.

                        </p>
                        <br>
                    </div>
                    <!-- Single about text End -->
                    
                </div>
            </div>
        </div>
    </div>

    <div class="people-to-say section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>Some Speech About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="people-to-say-wrapper owl-carousel">
                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="assets/img/sp1.jpg" alt="Alumni" class="img-fluid">
                            </div>
                            <i class="quote-icon"></i>
                            <p>Every members are so active.The decoration of the program is too attractive.
                                Thanks to the Chairman and another teacher
                                of the department for guiding them.</p>
                            <h4>Mijanur Rahman<span class="people-deg">Vice-Chancellor</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="assets/img/sp4.jpg" alt="" class="img-fluid">
                            </div>
                            <i class="quote-icon"></i>
                            <p>Difference types of interactive occasions are arranged by the Alumni team members that
                                is full of much fun
                                and entertaining</p>
                            <h4>Uzzal Kumar Acharjee <span class="people-deg">Chairman</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="assets/img/sp2.jpg" alt="" class="img-fluid">
                            </div>
                            <i class="quote-icon"></i>
                            <p>Excellent performence has done by the committee.They welcomed us in a good manner.Students are so polite and 
                                meritorious.
                                The presentation of all activities are too good.</p>
                            <h4>Nurul Islam<span class="people-deg">Minister of Education</span></h4>
                        </div>
                        <!-- Single People Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Committee Page Content End ==-->
<?php include 'footer.php'?>