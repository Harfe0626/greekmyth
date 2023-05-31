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
    <link rel="stylesheet" href="../css/notice.css?ver=1">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php
                $con = mysqli_connect("localhost", "user1", "12345", "sample");
                $query = "select * from board_qna order by num desc";   
                $result = mysqli_query($con, $query);
                $total = mysqli_num_rows($result);
    ?>
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
            <h3>글쓰기<span>HOME>커뮤니티>묻고 답하기>글쓰기</span></h3>
            <body>
            <form method="post" action="qna_write.php">
            <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>작성자</td>
                            <td><input type="text" name="name" size=30></td>
                        </tr>

                        <tr>
                            <td>제목</td>
                            <td><input type="text" name="subject" size=70></td>
                        </tr>

                        <tr>
                            <td>내용</td>
                            <td><textarea name="content" cols=75 rows=15></textarea></td>
                        </tr>

                        <tr>
                            <td>첨부파일</td>
                            <td><input type="file" name="file" value="1"></td>
                        </tr>
                    </table>
                    <center>
                        <input style="height:26px; width:47px; font-size:16px;" type="submit" value="작성">
                    </center>
                </td>
            </tr>
            </table>
            </form>
            </body>
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