<?php include 'header-reg.php' ;
require_once "db-config.php";
session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
  {
    header("location: index.php");  
    exit ;
  }
?>
<!--== Single Album Page Content Start ==-->
<br><br>
<section id="page-content-wrap">
    <div class="career-page-wrapper">
        <div class="career-page-topbg">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-10 m-auto">
					 <img src="assets/img/careerbg.png" class="img-fluid" alt="career">
                    </div>
                </div>
            </div>
        </div>
        <?php
          $mem = $_SESSION['username'];
          $query = " SELECT type FROM members WHERE username='$mem'";
          $select_stmt=$db->prepare($query);  //sql select query
          $select_stmt->execute();
          $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
          if( $row['type'] == 1 )
          {
        ?>
            <div class="row">
            <div class="col-sm-11">
              <h3 style="float: right;"><a href="career-up.php">+Add Job_link</a></h3>
            </div>
          </div>
        <?php
          }  
        ?>
      <table class="table table-striped table-bordered table-hover">
        <tbody>
          <tr>
      <?php
      $select_stmt=$db->prepare("SELECT * FROM job");  //sql select query
      $select_stmt->execute();
      while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
      {
      ?>
      <td>
        <div class="container">
            <div class="row">
                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-10 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="assets/img/job/job.jpg" alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3>Job Offer</h3>
                            <p>for <?php echo $row['jobName'] ?><br>click Apply now</p>
                        </div>
                        <a href="<?php echo $row['jobPath'];?> " class="btn btn-job">Apply now</a>
                    </div>
                </div>
            </div>
        </div>
       </td>
        <?php
        } ?>
        </tr>
        </tbody>
      </table>
    </div>
</section>
<!--== Single Album Page Content End ==-->

<?php include 'footer.php'?>