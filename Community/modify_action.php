<?php
$con = mysqli_connect("localhost", "user1", "12345", "sample") or die("fail");

$num = $_POST['num'];
$subject = $_POST['subject'];
$content = $_POST['content'];
$date = date('Y-m-d');

$URL = 'Notice.php'; 

$query = "update board_notice set subject='$subject', content='$content', regist_day='$date' where num=$num";
$result = $con->query($query);
if ($result) {
?>
    <script>
        alert("수정되었습니다.");
        location.replace("<?php echo $URL ?>");
    </script>
<?php } else {
    echo "다시 시도해주세요.";
}
?>