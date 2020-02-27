<?php
$msg="";
if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);

    $db=mysqli_connect("localhost","root","","scale vr");
    $image =$_FILES['image']['name'];
    $text=$_POST['text'];
        if($image==''||$text==''){
        $alertmsg= "Fill The Required Fields!!! ";
        echo "<script type='text/javascript'>alert('$alertmsg');</script>";
        }
        else{
        $sql ="INSERT INTO images(image,text)VALUES('$image', '$text')";
        mysqli_query($db,$sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg ="Image Uploaded Successfully";
        }
        else{
        $msg="There was a problem uploading image";
        }
    } 
}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="usersignup.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    </head>
    <body>
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Scale VR</h1>
    <p class="lead">“The truth is, unless you let go, unless you forgive yourself, unless you forgive the situation, unless you realize that the situation is over, you cannot move forward.” 
― Steve Maraboli</p>
  </div>
</div>
    
<div class="wrap">
    <div id="content">
        <form method="post" action="upload.php" enctype="multipart/form-data" id ="form1">
        <input type="hidden" name="size" value="1000000">
        <div>
        <label for="inputPassword4">Select the image to upload...</label><br>
            <input type="file" name="image">    
        </div> <br><br> 
        <div>
        <label for="inputPassword4">Say Some thing about this image...</label>
            <textarea name="text" cols="40" rows="4" value="Say some thing about this image..."></textarea>
        </div><br><br>
        <div>
        
            <input type="submit" class="btn btn-primary col-md-6" name="upload">
        </div>
        </form>
    </div>
</div>
    </body>
</html>