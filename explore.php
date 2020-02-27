<!DOCTYPE html>
<html>
<head>
<title>Image Explore</title>
<link rel="stylesheet" href="explore.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="usersignup.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="explore.js" ></script>
    <script type="text/javascript">
var counter1 = 0;
var counter2=0;
</script>
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
<?php
$db = mysqli_connect("localhost", "root","", "scale vr");
$msg1="360 view";
$msg2="LIKE";
$msg3="UNLIKE";
$sql = "SELECT * FROM images";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<div id='img_div'>" ;
        echo "<a href='".$row['image']."html' ><img id ='image' name='image' src='images/".$row['image']."' ></a>";
        echo "<p id='text' name='text'>".$row['text']."</p>"  ;
        echo "<button type='submit'  id = 'submit'   name='submit'>.$msg1.</button><br>";
        echo "<button type='submit' id = 'submit' onclick='counter1++'  name='submit'><p>10</p>".$msg2."</button><br>";
        echo "<button type='submit' id = 'submit'  onclick='counter2++' name='submit'><p>12</p>.$msg3.</button><br>";
    echo "</div>";
}
?>
</div>
</div>
</div>
</body>
</html>