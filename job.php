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
  $postPS = $_POST['personal_skills'];
  $postOS = $_POST['Other_skills'];



  $sql = "insert into resume (Full_name, Email, Phone_number, Address, DOB, Gender, Nationality, Job_title,
   work_experience, education_training, personal_skills, Other_skills) values (?,?,?,?,?,?,?,?,?,?,?,?)";

  $stmt = mysqli_stmt_init($conn);
  $result = mysqli_query($conn, $sql);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Unable to save post";
  } else {
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $postName, $postEmail, $postPhone, $postAddress, $postDOB, $postGender,
     $postNationality, $postJTitle, $postWorkE, $postET, $postPS, $postOS);
    mysqli_stmt_execute($stmt);
    echo "Post has been saved successfully";
  }
}

?>










<!DOCTYPE html>
<html>
<head>
<title>Form site</title>


<style>
    body {
      font-family: verdana;
    }

    .container {
      width: 500px;
      margin: 0 auto;
    }

    h3 {
      line-height: 20px;
      font-size: 20px;
    }

    input {
      display: block;
      width: 350px;
      height: 20px;
      margin: 10px 0;
    }

    textarea {
      display: block;
      width: 350px;
      margin: 10px 0;
    }

    button {
      background: green;
      border: 1px solid green;
      width: 70px;
      height: 30px;
      color: #ffffff
    }
    .Back{
    color: white;
    padding: 5px;
    text-decoration: none;
    margin-left: 15px 5;
    font-size: 14px;

    background: green;
    border: 1px solid green;
    width: 75px;
    height: 22px;
    color: #ffffff
    }
    a:hover {
    background-color: black;
    color: white;
        }
  </style>
</head>
<body>
<div class="container">
    <h3>Post Advert</h3>


    <form action="job.php" method="post">
      <input type="text" name="Full_name" placeholder="Full names" required>
      

      <input type="text" name="Email" placeholder="Email" required>
      

      <input type="text" name="Phone_number" placeholder="Phone number" required>
     

      <input type="text" name="Address" placeholder="Address" required>

    
      <input type="text" name="DOB" placeholder="Date of Birth" required>


      <input type="text" name="Gender" placeholder="Gender" required>


      <input type="text" name="Nationality" placeholder="Nationality" required>


      <input type="text" name="Job_title" placeholder="Job You're enrolling for" required>


      
     

  
      <textarea cols="40" placeholder="Work Experience" rows="10" name="work_experience" required></textarea>

      
      <textarea cols="40" placeholder="Education And Training" rows="10" name="education_training" required></textarea>

     
      <textarea cols="40" placeholder="Personal Skills" rows="10" name="personal_skills" required></textarea>

      
      <textarea cols="40" placeholder="Other skills and competencies" rows="8" name="Other_skills" required></textarea>


     
      <button type="submit" name="submit">Submit</button>
      <a class = "Back" href="job-seeker-view.php">Go Back</a>
    </form>
  </div>
</form>
</body>
</html>

