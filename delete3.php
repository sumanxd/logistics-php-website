<html>
<body>
<head>
<script>
function myFunction() {
    alert("I am an alert box!");
}
</script>
</head>
<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM payment WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: retrieve.php"); 
?>
</body>
</html>







