<?php include 'header-reg.php' ;
session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
  {
    header("location: index.php");  
    exit ;
  }
?>
<!--== Page Title Area Start ==-->
<section id="page-title-area">
  <div class="item active" style="background-image: url(assets/img/c.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Committee</h1>
                    <p></p>
                  
                </div>
            </div>
        </div>
    </div>
	</div>
</section>
<!--== Page Title Area End ==-->

<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="committee-content-wrap section-padding">
        <div class="committee-member-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-10 col-md-7 m-auto">
                        <div class="single-committee-member">
                            <img src="assets/css/css_img/cm2.jpg" class="img-fluid" alt="Committee">
                            <h3>Mickey Mouse <span class="committee-deg">President</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="assets/css/css_img/cm3.jpg" class="img-fluid" alt="Committee">
                            <h3>Tom<span class="committee-deg">Vice President</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="assets/css/css_img/cm3.jpg" class="img-fluid" alt="Committee">
                            <h3>Abcde <span class="committee-deg">Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="assets/css/css_img/cm3.jpg" class="img-fluid" alt="Committee">
                            <h3>EFGHI <span class="committee-deg">Asst Secretary</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>UVWX <span class="committee-deg">Office Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>MNOP <span class="committee-deg">Finance Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3> STR <span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>SDFG<span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Committee Page Content End ==-->
<?php include 'footer.php'?>