<?php 
  session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
      header("location: index.php");  
      exit ;
    }

  require_once "db-config.php";
  include 'header-reg.php'
?>

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
      <h3 style="float: right;"><a href="upload.php">+Add image</a></h3>
    </div>
  </div>
<?php
  }  
?>
<section>
 <div class="container">
   <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <tbody>
          <tr>
      <?php
      $select_stmt=$db->prepare("SELECT * FROM gallery");  //sql select query
      $select_stmt->execute();
      while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
      {
      ?>
      
        <td style="display: inline-block;">
            <img  src="upload/<?php echo $row['picPath']; ?>" width="350px" height="300px">
        </td>
      
        <?php
      }
      ?>
      </tr>
        </tbody>
      </table>
      </div>
 </div>  
</section>                 
</body>
</html>