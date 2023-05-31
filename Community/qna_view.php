<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css?ver=1">
    <link rel="stylesheet" href="../css/subpage_common.css?ver=1">
    <link rel="stylesheet" href="../css/community.css?ver=1">
    <link rel="stylesheet" href="../css/board_view.css?ver=1">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div id="wrap">
        <header>
            <?php include "../header.php"  ?>          
        </header>
        <section id="slider">
           <img src="../img/aboutus/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
               <?php include "left_menu.html" ?>
            </aside>
        <section id="sub_contents">
            <h3>묻고 답하기<span>HOME>커뮤니티>묻고 답하기</span></h3>

            <?php
            $con = mysqli_connect("localhost", "user1", "12345", "sample");
            $num = $_GET['num'];
            $query = "select subject, content, regist_day, hit, name from board_qna where num = $num";
            $result = $con->query($query);
            $rows = mysqli_fetch_assoc($result);
            ?>

            <table class="read_table" align=center>
                <tr>
                    <td colspan="6" class="read_title"><?php echo $rows['subject'] ?></td>
                </tr>
                <tr>
                    <td class="read_day">작성일</td>
                    <td class="read_day2"><?php echo $rows['regist_day'] ?></td>
                    <td class="read_id">작성자</td>
                    <td class="read_id2"><?php echo $rows['name'] ?></td>
                    <td class="read_hit">조회수</td>
                    <td class="read_hit2"><?php echo $rows['hit'] ?></td>
                </tr>
                <tr>
                    <td colspan="6" class="read_content" valign="top">
                    <?php echo $rows['content'] ?></td>
                </tr>
            </table>

            <div class="read_btn">
                <button class="read_btn1" onclick="location.href='QnA.php'">목록</button>&nbsp;&nbsp;
                <button class="read_btn1" onclick="location.href='qna_modify.php?num=<?= $num ?>'">수정</button>&nbsp;&nbsp;
                <button class="read_btn1" a onclick="ask();">삭제</button>
                <script> 
                    function ask() {
                        if (confirm("게시글을 삭제하시겠습니까?")) {
                            window.location = "qna_delete.php?num=<?= $num ?>"
                        }
                    }
                </script>
            </div>


            <article id="sub_contact">
                <div>
                    <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                </div>
            </article>
        </section>
        </div>
        <footer>
           <?php  include "../footer.html" ?>
        </footer>
 </div>
    
</body>
</html>