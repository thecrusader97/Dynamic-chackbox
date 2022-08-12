<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create dynamic CheckBox in PHP using MySQL database records</title>
</head>

<body>

<?php

include 'config.php';


?>
<h2> Dynamic CheckBox </h2>
 
 <form method="post" action=" ">
 
 <?php
 $get_data = mysqli_query($conn,"SELECT * FROM checkbox");
 while($row = mysqli_fetch_array($get_data)) {
 echo "<input type='checkbox' value='{$row['Value']}'>" . $row['Name'] . '</br>';
}

?>
 
 </form>

</body>
</html>