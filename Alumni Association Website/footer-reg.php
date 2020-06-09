<?php
session_start();
require_once "db-config.php";

if(isset($_REQUEST['btn_insert']))
{
  try
  {
    $name = $_REQUEST['txt_name'];  //textbox name "txt_name"
    $event_file = $_POST['link_name'];   
    $year= $_POST['year'];
    $month = $_POST['month'];
    $date = $_POST['date'];

      $insert_stmt=$db->prepare('INSERT INTO event(eventName,eventPath,year,month,dates) VALUES(:fname,:fevent,:fyear,:fmonth,:fdate,:fuser)');          
      $mem=$_SESSION['memberID'];
       if($insert_stmt->execute(array(':fname' => $name,':fevent' =>$event_file,':fyear'=>$year,':fmonth'=>$month,':fdate'=>$date,':fuser'=>$mem)))
      {
        $insertMsg="File upload successfully....";
        header("refresh:3;event-reg.php");
      }
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }
}

?>

<?php include 'header-reg.php'?>
  <div class="container">
    
  <?php
  if(isset($errorMsg))
  {
    ?>
          <div class="alert alert-danger">
            <strong>WRONG ! <?php echo $errorMsg; ?></strong>
          </div>
          <?php
  }
  if(isset($insertMsg)){
  ?>
    <div class="alert alert-success">
      <strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
    </div>
      <?php
  }
  ?>   
  
  <form method="post" class="form-horizontal" enctype="multipart/form-data">
      
    <div class="form-group">
    <label class="col-sm-3 control-label">Name</label>
    <div class="col-sm-4">
    <input type="text" name="txt_name" class="form-control" placeholder="enter name" />
    </div>
    </div>
      
    <div class="form-group">
    <label class="col-sm-3 control-label">Link</label>
    <div class="col-sm-4">
    <input type="text" name="link_name" class="form-control" />
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-4">
    <input type="text" name="year" class="form-control" placeholder="Year" />
    <input type="text" name="month" class="form-control" placeholder="Month" />
    <input type="text" name="date" class="form-control" placeholder="Date" />
    </div>
    </div>
      
      
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
    <a href="index.php" class="btn btn-danger">Cancel</a>
    </div>
    </div>
      
  </form>
      
  </div>          
</body>
</html>