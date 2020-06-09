<?php
session_start();
require_once "db-config.php";

if(isset($_REQUEST['btn_insert']))
{
  try
  {
    $name = $_REQUEST['txt_name'];  //textbox name "txt_name"   
    $job_file = $_POST['link_name'];

      $insert_stmt=$db->prepare('INSERT INTO job(jobName,jobPath,username) VALUES(:fname,:fimage,:fuser)');          
      $mem=$_SESSION['username'];
       if($insert_stmt->execute(array(':fname' => $name,':fimage' =>$job_file,':fuser'=>$mem)))
      {
        $insertMsg="File upload successfully....";
        header("refresh:3;career.php");
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
    <input type="text" name="txt_name" class="form-control" placeholder="enter name" required />
    </div>
    </div>
      
      
    <div class="form-group">
    <label class="col-sm-3 control-label">Link</label>
    <div class="col-sm-4">
    <input type="text" name="link_name" class="form-control" required  />
    </div>
    </div>
      
      
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9 m-t-15">
    <input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
    <a href="career.php" class="btn btn-danger">Cancel</a>
    </div>
    </div>
      
  </form>
      
  </div>          
</body>
</html>