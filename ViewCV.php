<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - Jobs</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    
    <style>
     
    </style>
  </head>
  <body>



  <header>
  <ul>

  <!--<li><a class = "active2" href="#ne"></a></li>-->
  <li><a class = "active3" href="index.php">Back To Homepage</a></li>
  <li style="float:right"><a class="active" href="Jobseeker-login.php">Log Out</a></li>
</ul>
</header>
<br><br>

    <div class="width-body">
      <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "", "CV");

      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      // Attempt select query execution
      $sql = "SELECT * FROM resume";
      if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0) {

              while($row = mysqli_fetch_array($result)) {
      ?>
                <div class="job">
      <?php
                  echo '<div class="date">' . $row['Job_title'] . "</div>";
                  ?>
      <?php

                  ?>
                  <a class="title-link" href="job.php">

                    <?php
                        echo '<div class="title">' . $row['Full_name'] . "</div>";
                    ?>
                  </a>

      <?php
                  echo '<div class="post">' . $row['Email'] . "</div>";
      ?>

<br>

    <?php
                  echo '<div class="post">' . $row['Phone_number'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['Address'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['DOB'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['Gender'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['Nationality'] . "</div>";
      ?>

<br>

 <?php
                  echo '<div class="post">' . $row['Job_title'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['work_experience'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['education_training'] . "</div>";
      ?>

      <br>

<?php
                  echo '<div class="post">' . $row['personal_skills'] . "</div>";
      ?>

<br>

<?php
                  echo '<div class="post">' . $row['Other_skills'] . "</div>";
      ?>

<br>

                </div>
      <?php

              }

              // Free result set
              mysqli_free_result($result);
          } else{
              echo "No records matching your query were found.";
          }
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }

      // Close connection
      mysqli_close($link);
      ?>

      <img src="upload/Twitter.jpg" alt="">
    </div>

  </body>
</html>
