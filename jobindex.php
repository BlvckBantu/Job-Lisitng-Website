<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - Jobs</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    
    <style>
     .View{
  font-size: 50px;
  font-weight: bolder;
  font-family: cursive;
  color: #00bcd4;
  text-align: center;
  justify-content: center;
  text-decoration: underline;
}
     
    </style>
  </head>
  <body>



 <header>
  <ul>
  <li><a class = "active1" href="Jobseeker-login.php">Log Out</a></li>
  <!--<li><a class = "active2" href="#ne"></a></li>-->
  <!--<li><a class = "active3" href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="Organization-login.php">Log Out</a></li>
</ul>
</header>
<br><br>-->
<h1 class = "View">View Jobs</h1>

    <div class="width-body">
      <?php
      /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */
      $link = mysqli_connect("localhost", "root", "", "demo");

      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }

      // Attempt select query execution
      $sql = "SELECT * FROM jobs";
      if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0) {

              while($row = mysqli_fetch_array($result)) {
      ?>
                <div class="job">
      <?php
                  echo '<div class="date">' . $row['created'] . "</div>";
                  ?>
      <?php

                  ?>
                  <a class="title-link" href="job.php">

                    <?php
                        echo '<div class="title">' . $row['post_title'] . "</div>";
                    ?>
                  </a>

      <?php
                  echo '<div class="post">' . $row['post_content'] . "</div>";
      ?>
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
