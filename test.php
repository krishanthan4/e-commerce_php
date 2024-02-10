
<?php require "connection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$connection = new mysqli("localhost","root","Abcd!234","eshop","3306");
$rs = $connection->query("SELECT * FROM `gender`");
for ($i=0; $i < $rs->num_rows; $i++) { 
    $result = $rs->fetch_assoc();
?>
<option value="<?= $result["gender_id"]?>">
<?= $result["gender_name"]?>
</option>
<?php
}
?>
</body>
</html>