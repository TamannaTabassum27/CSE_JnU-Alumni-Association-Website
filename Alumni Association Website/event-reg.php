<?php include 'header-reg.php';
require_once "db-config.php";
session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
  {
    header("location: index.php");  
    exit ;
  }

 ?>
<!--== Page Title Area Start ==-->
<br><br>
<section id="page-title-area" style="background-image:url(fst2.jpg)">
</section>
<!--== Page Title Area End ==-->
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
              <h3 style="float: right;"><a href="event-up.php">+Add Event</a></h3>
            </div>
          </div>
        <?php
          }  
        ?>
<!--== Gallery Page Content Start ==-->
<?php
      $select_stmt=$db->prepare("SELECT * FROM event");  //sql select query
      $select_stmt->execute();
      while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
      {
      ?>
<section id="page-content-wrap">
<div class="event-page-content-wrap section-padding">
<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <div class="all-event-list">
        <!-- Single Event Start -->
        <div class="single-upcoming-event">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="up-event-thumb">
                            <img src="assets/css/css_img/event_2.jpg" class="img-fluid" alt="Upcoming Event">
                            <h4 class="up-event-date">It&#x2018;s <?php echo $row['year']."/".$row['month']."/".$row['dates']?></h4>
                        </div>
                    </div>
                     <?php
                     $date=date_create();
                     date_date_set($date,$row['year'],$row['month'],$row['dates']);
                    ?>


                    <div class="col-lg-7">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="up-event-text">
                                    <div class="event-countdown">
                                        <div class="event-countdown-counter" data-date=" <?php echo date_format($date,"Y/m/d")?>"></div>
                                        <p>Remaining</p>
                                    </div>
                                    <h3>Hurry Up!! Hurry Up!!</h3>
                                    <p>Hello everybody,we are arranging a <?php echo $row['eventName']; ?> in our department.</p>
                                      <a href="<?php echo $row['eventPath'];?>" class="btn btn-brand btn-brand-dark">join with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Single Event End -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
        } ?>
<!--== Gallery Page Content End ==-->
<?php include 'footer.php' ?>