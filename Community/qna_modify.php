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
    <link rel="stylesheet" href="../css/board_modify.css?ver=1">
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
                $subject = $rows['subject'];
                $content = $rows['content'];
                $id = $rows['name'];
            ?>

            <form method="POST" action="qna_modify_action.php">
                <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
                    <tr>
                        <td style="height:33; float:center;">
                            <p style="font-size:20px; text-align:center; margin-top:15px; margin-bottom:15px"><b>게시글 수정하기</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor=white>
                            <table class="table2">
                                <tr>
                                    <td>작성자</td>
                                    <td><input type=text name="name" size=73 value="<?= $id ?>"></td>
                                </tr>
                                <tr>
                                    <td>제목</td>
                                    <td><input type=text name="subject" size=73 value="<?= $subject ?>"></td>
                                </tr>
                                <tr>
                                    <td>내용</td>
                                    <td><textarea name=content cols=75 rows=15><?= $content ?></textarea></td>
                                </tr>
                            </table>
                            <center>
                                <input type="hidden" name="num" value="<?= $num ?>">
                                <input style="height:26px; width:47px; font-size:16px;" type="submit" value="작성">
                            </center>
                        </td>
                    </tr>
                </table>
            </form>

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