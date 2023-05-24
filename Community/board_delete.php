<?php
$con = mysqli_connect("localhost", "user1", "12345", "sample") or die("fail");
$num = $_GET['num'];

$query = "select id from board_notice where num = $num";
$result = $con->query($query);
$rows = mysqli_fetch_assoc($result);

$userid = $rows['id'];

session_start();

$URL = "Notice.php";
?>

<?php
    $query1 = "delete from board_notice where num = $num";
    $result1 = $con->query($query1); ?>
    <script>
        alert("게시글이 삭제되었습니다.");
        location.replace("<?php echo $URL ?>");
    </script>
?>