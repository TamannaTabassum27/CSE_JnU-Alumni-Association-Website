<?php include 'header-reg.php';
session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
  {
    header("location: index.php");  
    exit ;
  }
 ?>
<div class="map-area-wrap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.0871042405693!2d90.40890761485338!3d23.708583296289582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9072be4c8a9%3A0x1278bcef6c7c345!2sJagannath+University!5e0!3m2!1sen!2sbd!4v1530950011263" width="1600" height="600" frameborder="0" style="border:0" allowfullscreen>
    </iframe>
</div>

<!--== Contact Page Content Start ==-->
<section id="page-content-wrap">
    <div class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-content-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Map Area Start -->
                                <div class="map-area-wrap">
                                    <iframe src="assets/img/pic4.jpg"></iframe>
                                </div>
                                <!-- Map Area End -->
                            </div>

                            <div class="col-lg-6 m-auto">
                                <div class="contact-form-wrap">
                                  <h3>send message</h3>
                                    <form action="#" id="cbx-contact-form">
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label for="cbxname">Name</label>
                                              <input type="text" name="cbxname" required id="cbxname" class="form-control">
                                            </div>
                                          </div>

                                          <div class="col">
                                            <div class="form-group">
                                              <label for="cbxemail">Email</label>
                                              <input type="email" name="cbxemail" required id="cbxemail" class="form-control">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="cbxsubject">Subjet</label>
                                          <input type="text" name="cbxsubject" id="cbxsubject" class="form-control">
                                        </div>

                                        <div class="form-group">
                                          <label for="cbxmessage">Message</label>
                                          <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80" class="form-control"></textarea>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cbxsendme" name="cbxsendme" value="on">
                                            
                                        </div>

                                        <button class="btn btn-reg">Send</button>
                                        <div id="cbx-formalert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Contact Page Content End ==-->

<?php include 'footer.php'; ?>