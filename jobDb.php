<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "CV";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $postName = $_POST['Full_name'];
  $postEmail = $_POST['Email'];
  $postPhone = $_POST['Phone_number'];
  $postAddress = $_POST['Address'];
  $postDOB = $_POST['DOB'];
  $postGender = $_POST['Gender'];
  $postNationality = $_POST['Nationality'];
  $postJTitle = $_POST['Job_title'];
  $postWorkE = $_POST['work_experience'];
  $postET = $_POST['education_training'];
  $postPS = $_POST['prsonal_skills'];
  $postOS = $_POST['Other_skills'];



  $sql = "insert into resume (Full_name, Email, Phone_number, Address, DOB, Gender, Nationality, Job_title,
   work_experience, education_training, personal_skills, Other_skills) values (?,?,?,?,?,?,?,?,?,?,?,?)";

  $stmt = mysqli_stmt_init($conn);
  $result = mysqli_query($conn, $sql);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Unable to save post";
  } else {
    mysqli_stmt_bind_param($stmt, "sss", $postName, $postEmail, $postPhone, $postAddress, $postDOB, $postGender,
     $postNationality, $postJTitle, $postWorkE, $postET, $postPS, $postOS);
    mysqli_stmt_execute($stmt);
    echo "Post has been saved successfully";
  }
}

?>