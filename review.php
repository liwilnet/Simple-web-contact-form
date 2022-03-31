<?php
$query = 'Feedback';
$userName = 'Name';
$email = 'example@gmail.com';
$comment = 'comment';

session_start();
$title = "Review Page";
if(isset($_POST['query'])){
  $userName = $_SESSION['userName'] = $_POST['userName'];
  $email = $_SESSION['email'] = $_POST['email'];
  $query = $_POST['query'];
  $comment = $_SESSION['comment'] = $_POST['comment'];
  $title = "$query: Review Page";
  
  

}

$contact_data = array (
  'userName' => $userName,
  'email' => $email,
  'query' => $query,
  'comment' => $comment,
);
$json = json_encode($contact_data);
file_put_contents('contact_data.json', $json);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheet.css">
  <title><?= $title ?></title>
</head>
<body>
  <article>
  <h1><?= $title ?></h1>

  <H2>Hi' <strong><?= $userName ?></strong>, This is your email : <strong><?= $email ?></strong>.</H2>
  <h3>Your Message is:</h3>
  <p><?= $comment ?></p>
  <form action="index.php" method="post">
    <input type="submit" name="edit" value="Edit">
  </form>
  
  </article>
</body>
</html>