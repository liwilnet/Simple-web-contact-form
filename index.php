<?php
$title = "Simple web contact form";
$userName = "";
$email = "";
$comment = "";
session_start();  
if(isset($_POST['edit'])){
  $userName = $_SESSION['userName'];
  $email = $_SESSION['email'];
  $comment = $_SESSION['comment'];
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<link rel="stylesheet" href="stylesheet.css">
  <title><?= $title ?></title>


  
</head>
<body>
  <article>

  <h1><?= $title ?></h1>
  <form action="review.php" method="post" class="contact_form">
    <input type="text" name="userName" id="userName" placeholder="Your Name" value="<?= $userName ?>" required>

    <input type="email" name="email" id="email" placeholder="example@gmail.com" value="<?= $email ?>" required>

      <select name="query" id="query">
        <option value="Query">Query</option>
        <option value="Feedback" selected>Feedback</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
      </select>

    <div id="commentar"><textarea name="comment" id="comment" value="<?= "Annaba" ?>" ><?= $comment  ?></textarea></div>
  
    <div id="terms"><input type="checkbox" name="terms" required> I acccepted Terms & Conditions</div>
   
    <input type="submit" value="Send" name="submit" id="submit">
  </form>


  
  </article>
  

  <script>
    
    $(document).ready(function() {
  $('#comment').summernote();
  
});

    
  </script>
</body>
</html>