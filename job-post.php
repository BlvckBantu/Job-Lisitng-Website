<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $postTitle = $_POST['title'];
  $postContent = $_POST['post_content'];
  $created = date("Y-m-d H:i:s");

  $sql = "insert into jobs (post_title, post_content, created) values (?,?,?)";

  $stmt = mysqli_stmt_init($conn);
  $result = mysqli_query($conn, $sql);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Unable to save post";
  } else {
    mysqli_stmt_bind_param($stmt, "sss", $postTitle, $postContent, $created);
    mysqli_stmt_execute($stmt);
    echo "Post has been saved successfully";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title> Post Advert</title>

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


    <form action="job-post.php" method="post">
      <input type="text" name="title" placeholder="Post Title" required>
      <textarea cols="40" placeholder="Post Description" rows="8" name="post_content" required></textarea>
      <button type="submit" name="submit">Submit</button>
      <a class = "Back" href="index.php">Go Back</a>
    </form>
  </div>
</body>

</html>