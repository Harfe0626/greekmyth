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
                <h3>묻고 답하기<span>HOME>커뮤니티>묻고 답하기</span></h3>
            <table align=center>
            <thead align="center">
                <tr>
                    <td width="50" align="center">No</td>
                    <td width="460" align="center">제목</td>
                    <td width="100" align="center">작성자</td>
                    <td width="80" align="center">파일</td>
                    <td width="160" align="center">작성일</td>
                    <td width="50" align="center">조회</td>
                </tr>
            </thead>

            <tbody>
                <?php
                    while ($rows = mysqli_fetch_assoc($result)) 
                    {
                        if ($total % 2 == 0) 
                        {
                            ?>
                            <tr class="even">
                            <?php   
                        } 
                else
                {
                    ?>
                    <tr>
                    <?php 
                } 
                    ?>
                <td width="50" align="center"><?php echo $total ?></td>
                <td width="460" align="center">
                    <a href="qna_view.php?num=<?php echo $rows['num'] ?>">
                    <?php echo $rows['subject'] ?>
                </td>
                <td width="100" align="center"><?php echo $rows['name'] ?></td>
                <td width="80" align="center"><?php echo $rows['file_type'] ?></td>
                <td width="160" align="center"><?php echo $rows['regist_day'] ?></td>
                <td width="50" align="center"><?php echo $rows['hit'] ?></td>
                </tr>
                <?php
                $total--;
                }
                ?>
            </tbody>

            </table>
            <div class=text>
                <button class="read_btn1" onclick="location.href='qna_write_form.php'">글쓰기</button>
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