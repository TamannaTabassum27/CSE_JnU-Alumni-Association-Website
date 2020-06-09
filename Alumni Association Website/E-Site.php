<?php require_once "db-config.php";
session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
  {
    header("location: index.php");  
    exit ;
  }
if(isset($_REQUEST['btn_insert']))
{
  try
  {
    $name = $_REQUEST['txt_name']; //textbox name "txt_name"
     
    $image_file = $_FILES["txt_file"]["name"];
    $type  = $_FILES["txt_file"]["type"]; //file name "txt_file" 
    $size  = $_FILES["txt_file"]["size"];
    $temp  = $_FILES["txt_file"]["tmp_name"];
    
    $path="upload/".$image_file; //set upload folder path
    
    if(empty($name)){
     $errorMsg="Please Enter Name";
    }
    else if(empty($image_file)){
     $errorMsg="Please Select a file";
    } 

     else if(!file_exists($path)) //check file not exist in your upload folder path
     {
      if($size < 5000000) //check file size 5MB
      {
       move_uploaded_file($temp, "upload/" .$image_file); //move upload file temperory directory to your upload folder
      }
      else
      {
       $errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
      }
     }
     else
     { 
      $errorMsg="File Already Exists...Check Upload Folder";
     }
    if(!isset($errorMsg))
    {
      $mem = $_SESSION['username'];
      $insert_stmt=$db->prepare('INSERT INTO esite(eName,eFile,username) VALUES(:fname,:fimage,:fuser)');
      if($insert_stmt->execute(array(':fname' => $name,':fimage' =>$image_file,':fuser'=>$mem)))
      {
        $insertMsg="File upload successfully....";
      }
    }
  }
  catch(PDOException $e)
  {
    echo $e->getMessage();
  }
}

?>

<?php include 'header-reg.php'?>
<!--== Scholership Promo Area Start ==-->
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>Jagannath University <span>Scholarship</span> For Talented Student!</h2>
                    <p> Alumnus will give scholarship to the special category student for continueing their studies.</p>
                    <a href="upload/scholarship form.doc" class="btn btn-brand">Scholarship Form</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Scholership Promo Area End ==-->
<section id="edu-site">
  <div class="container"><br>
   <h3><center> UPLOAD FILE PAGE </center> </h3> </font>
    <?php
      if(isset($errorMsg))
      {
    ?>
        <div class="alert alert-danger">
          <strong>WRONG ! <?php echo $errorMsg; ?></strong>
        </div>
        <?php
      }
      if(isset($insertMsg))
      {
        ?>
          <div class="alert alert-success">
            <strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
          </div>
        <?php
      }
        ?> 
        <form id="form3" enctype="multipart/form-data" method="post" action="E-site.php">
                 
          <div class="form-group">
           <label class="col-sm-3 control-label">Name</label>
           <div class="col-sm-4">
             <input type="text" name="txt_name" class="form-control" placeholder="enter name" />
           </div>
          </div>
                   
          <div class="form-group">
           <label class="col-sm-3 control-label">File</label>
           <div class="col-sm-4">
              <input type="file" name="txt_file" class="form-control" />
           </div>
          </div>
                   
          <div class="form-group">
           <div class="col-sm-offset-4 col-sm-9 m-t-15">
             <input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
           <a href="index.php" class="btn btn-danger">Cancel</a>
           </div>
          </div>
        </form>
  </div>
</section>
<section>
    <div class="container">
    <table class="table table-striped table-bordered table-hover">
     <thead>
         <tr>
            <th>Name</th>
            <th>File</th>
            <th>Download</th>
         </tr>
    </thead>
    <tbody>
    <?php
 $stmt=$db->prepare("SELECT * FROM esite"); //sql select query
 $stmt->execute();
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  $file = $row['eFile'];
    ?>
       <tr>
          <td><?php echo $row['eName']; ?></td>
          <td><?php echo $row['eFile']; ?></td>
          <td><a href="upload/<?php echo $file ?>">Download</a></td>

      </tr>
    <?php
 }
    ?>
    </tbody>
</table>
</div>
</section>
  <?php include 'footer.php'?>
