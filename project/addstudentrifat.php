<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:studentLoginform.php');
}

?>

<?php
include("connection.php");

error_reporting(0);
?>


<?php

function input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}

$stidErr = $nameErr = $passErr = $phnErr= $emailErr  = $sexErr = $dobErr = $admdobErr = $addErr = $cidErr = $sidErr = "";
$stid = $name = $pass = $phn = $email = $sex = $dob = $admdob = $addr = $sid = $cid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   if (empty($_POST["id"])) {
    $stidErr = 'Student ID is requred';
} else {
    $stid = input($_POST["id"]);
}


if (empty($_POST["name"])) {
    $nameErr = 'Name is requred';
} else {
    $name = input($_POST["name"]);
}

if (empty($_POST["pass"])) {
    $passErr = "Enter password";
} else {
    $pass = input($_POST['pass']);
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/', $pass)) {
        $passErr = "Use at least one Upper and one Lower case and a number. Should be in between 8-20 character'";
    }
}

if (empty($_POST["phone"])) {
    $phnErr = "Please Enter phone number";
} else {
    $phn = input($_POST["phone"]);
    if (!preg_match('/^\+?(88)?0?1[356789]+[0-9]{8}$/', $phn)) {
        $phnErr = "Enter a valid BD phone number";
    } 
}

if (empty($_POST["email"])) {
    $emailErr = "Email is requred";
} else {
    $email = input($_POST['email']);
    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
        $emailErr = "Enter a valid email";
    } 
}

if (empty($_POST["sex"])) {
    $sexErr = 'Gender is requred';
} else {
    $sex = input($_POST["sex"]);
}

if (empty($_POST["dob"])) {
    $dobErr = 'Date of Birth is requred';
} else {
    $dob = input($_POST["dob"]);
}

if (empty($_POST["addate"])) {
    $admdobErr = 'Admission Date is requred';
} else {
    $admdob = input($_POST["addate"]);
}

if (empty($_POST["add"])) {
    $addErr = 'Address is requred';
} else {
    $add = input($_POST["add"]);
}

if (empty($_POST["cid"]))
{
    $cidErr = 'Class ID is requred';
}
else {
    $cid = input($_POST["cid"]);
}
if (empty($_POST["sid"])) {
    $sidErr = 'Session is requred';
} else {
    $sid = input($_POST["sid"]);
}


if (empty($stidErr) && empty($nameErr) && empty($passErr) && empty($emailErr) && empty($phnErr)  && empty($sexErr) && empty($dobErr) && empty($admdobErr)   && empty($cidErr)  && empty($addErr)) {

    $query= "INSERT INTO students(id,name,password,phone,email,sex,dob,admissionDate,session,address,class) VALUES('$stid','$name','$pass','$phn','$email', '$sex', '$dob','$admdob','$sid','$add','$cid')";


    $data=mysqli_query($conn,$query);

    if($data){

     echo "<script type='text/javascript'>alert('Added successfully!')</script>";
       
 }
 else{
     echo "<script type='text/javascript'>alert('Added unsuccessfull!')</script>";
 }

}
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Student Add Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
        .error {color: #FF0000;}

        .a{
            margin-left: 450px;
        }
    </style>

        
</head>

<body class="addstudent">
   <!-- <header>
    <div class="headerdiv">
        <div class="logodiv">
            <img src="mainlogo.gif">
        </div>
        
    
</div>
</header>-->

<div class="a">




<div class="card">

    <h5>
        <strong style="color: black;">Add New Student</strong>
    </h5>


    <div>


        <form class="text-center" style="color: black;" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div>
                <div class="col">

                    <div>
                        <label for="">Student ID</label>
                        <input type="text" id=""  name="id">
                        <span class="error">*<?php if (isset($stidErr)) echo $stidErr; ?></span>
                        
                    </div>
                </div>
                <div>

                    <div>
                       <label for="">Name</label>
                       <input type="text" id=""  name="name">
                       <span class="error">*<?php if (isset($nameErr)) echo $nameErr; ?></span>
                   </div>
               </div>
           </div>

           
           <div>
            <label for="">Password</label>
            <input type="password" id=""  name="pass">
            <span class="error">*<?php if (isset($passErr)) echo $passErr; ?></span>

        </div>

        <div>
            <label for="">Phone Number</label>
            <input type="phone" id="" aria-describedby="" name="phone">
            <span class="error">*<?php if (isset($phnErr)) echo $phnErr; ?></span>


        </div>


        <div>
           <label for="">Email</label>
           <input type="email" id=""  aria-describedby="" name="email">
           <span class="error">*<?php if (isset($emailErr)) echo $emailErr; ?></span>


       </div>

       <div>
        <label for="">Gender</label>
        <input type="radio" id="" aria-describedby="" name="sex" value="Male">Male<br>
        <input type="radio" id=""  aria-describedby="" name="sex" value="Female">Female<br>
        <span class="error">*<?php if (isset($sexErr)) echo $sexErr; ?></span>


    </div>

    <div>
        <label for="">Date of Birth</label>
        <input type="Date" id=""  aria-describedby="" name="dob">
        <span class="error">*<?php if (isset($dobErr)) echo $dobErr; ?></span>


    </div>

    <div >
       <label for="">Admission Date</label>
       <input type="Date" id=""  aria-describedby="" name="addate">
       <span class="error">*<?php if (isset($admdobErr)) echo $admdobErr; ?></span>


   </div>
   <div>
    <label for="">Address</label>
    <input type="" id=""  aria-describedby="" name="add">
    <span class="error">*<?php if (isset($addErr)) echo $addErr; ?></span>


</div>

<div>
    <label for="">Semester</label>
    <input type="" id=""  aria-describedby="" name="cid">
    <span class="error">*<?php if (isset($cidErr)) echo $cidErr; ?></span>

</div>
<div class="md-form">
    <label for="">Session</label>
    <input type="" id="" class="form-control" aria-describedby="" name="sid">
    <span class="error">*<?php if (isset($sidErr)) echo $sidErr; ?></span>

</div>


<button name="submit" value="submit" type="submit">Submit</button>



</form>

</div>
</div>

</div>
</body>
</html>