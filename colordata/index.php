<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="father">
        <div class="son">
            <form action="" method="post">
            <h1>Insert data</h1>
            <input type="text" placeholder="Enter Id" name="no1"><br>
            <input type="text" placeholder="Enter Color name" name="no2"><br>
            <input type="submit" name="save">
            </form>
        </div>
    </div>
</body>
</html>
<?php
$locations=mysqli_connect("localhost","root","","color");
if(isset($_POST["save"])){
    $a=$_POST["no1"];
    $b=$_POST["no2"];
    $mys="insert into color_data(id,name)values('$a','$b')";
    mysqli_query($locations,$mys);
    echo"<script>alert('Data inserted!')</script>";
}
$abc="select * from color_data";
$c=mysqli_query($locations,$abc);
while($mydata=mysqli_fetch_array($c)){
    echo $mydata[0].". ".$mydata[1]."<br>";
}
?>