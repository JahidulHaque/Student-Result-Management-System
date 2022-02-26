
<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Marks</title>
  <style type="text/css">
    .a{
      margin-left: 450px;
      margin-top: 20px;
    }
  </style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

   

  <div class="a">
    
  
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Mark Update</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="POST">

                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                          <label for="">Satudent ID</label>
                            <input type="" id="" class="form-control" name="id">
                            
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                           <label for="">Semester</label>
                            <input type="" id="" class="form-control" name="cid">
                           
                        </div>
                    </div>

                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                          <label for="">Enter Session</label>
                            <input type="number" id="" class="form-control" name="sid">
                            
                        </div>
                    </div>
                </div>

                <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                          <label for="">Enter Course Id</label>
                            <input type="" id="" class="form-control" name="subid">
                            
                        </div>
                    </div>
              

                <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                          <label for="">Enter Term</label>
                            <input type="" id="" class="form-control" name="term">
                            
                        </div>
                    </div>
               

                <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                          <label for="">Enter Updated Marks</label>
                            <input type="" id="" class="form-control" name="umark">
                            
                        </div>
                    </div>
                

            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Submit</button>

        </form>
        <!-- Form -->

    </div>

</div>


<?php 

if (isset($_POST['submit'])) {

 $subid=$_POST['subid'];
 $cid=$_POST['cid'];
 $sid=$_POST['sid'];
 $id=$_POST['id'];
 $mark=$_POST['umark'];
 $term=$_POST['term'];



 $slq="UPDATE grade SET grade='$mark' WHERE studentid='$id' AND courseid='$subid' AND classid='$cid' AND session='$sid' AND term='$term'  ";
   $res=mysqli_query($conn,$slq);

 
 $row=mysqli_fetch_assoc($res);

 if ($res) {
    
       echo "<script type='text/javascript'>alert('Marks Updated successfully!')</script>";

   }
   else{
       echo "<script type='text/javascript'>alert('Marks Update unsuccessfull!')</script>";
      
   }
}

?>
</div>
</body>
</html>