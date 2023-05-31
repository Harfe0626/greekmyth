<!DOCTYPE html>
<html lang="kor">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css?ver=1">
    <link rel="stylesheet" href="../css/subpage_common.css?ver=1">
    <link rel="stylesheet" href="../css/about.css?ver=1">
    <link rel="stylesheet" href="../css/login.css?ver=1">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">   
        $(document).ready( function() {
        
        $("header").load("../header.php");  // 원하는 파일 경로를 삽입하면 된다
        $("footer").load("../footer.html");  // 추가 인클루드를 원할 경우 이런식으로 추가하면 된다
        
        });    
    </script>    
</head>
<body>
    <div id="wrap">
        <header>
          
        </header>
        <section id="slider">
           <img src="../img/aboutus/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <section id="sub_contents">
                <h3>로그인
                    <span>LOGIN</span>
                </h3>
                
                <h5>로그인을 통해 상품예약 및 예약확인 등 그리스신화박물관의 모든 서비스를 이용하실 수 있습니다.</h5>
            <div class="Login">
                <form method="post" action="login.php" id="login_form">
                    <input type="text" name="id" placeholder="아이디 입력" class="in" required>
                    <input type="password" name="pw" placeholder="비밀번호 입력(대소문자 구분하여 입력)" class="in" required>
                    <input type="submit" id="btn" value="로그인"><br>
                </form>

                <a href="">아이디 찾기</a> | <a href="">비밀번호 찾기</a> | <a href="member_form.php">회원가입</a>

            </div>
                <article id="sub_contact">
                    <div>
                        <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                    </div>
                </article>
            </section>
        </div>
        <footer>

        </footer>
 </div>
</body>
</html>