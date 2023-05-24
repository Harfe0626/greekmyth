<?php
$con = mysqli_connect("localhost", "user1", "12345", "sample"); 

$id = $_POST["id"]; 
$pw = $_POST["pw"]; 
$name = $_POST["name"];
$email = $_POST["email"];

$sql = "update members set pw='$pw', name='$name', email='$email'"; 
$sql .= " where id='$id'";
mysqli_query($con, $sql);
mysqli_close($con);
echo "
<script>
    location.href = '../index.php'; 
</script>
";
?>