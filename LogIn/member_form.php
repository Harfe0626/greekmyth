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
    <link rel="stylesheet" href="../css/member.css?ver=1">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">   
        $(document).ready( function() {
        
        $("header").load("../header.php");  // 원하는 파일 경로를 삽입하면 된다
        $("footer").load("../footer.html");  // 추가 인클루드를 원할 경우 이런식으로 추가하면 된다
        
        });    
    </script>  
    <script>
        function check_input()
        {
            var pw = document.getElementById("pw").value;
            var check_pw = document.getElementById("check_pw").value;
            if(pw != check_pw)
            {
                alert('비밀번호가 일치하지 않습니다.');history.back();
            }
            else
            {
                document.member_form.submit();
            }
        }
    </script>  
    <script>
        function check_id() 
        {
            var id = document.getElementById("id").value;
            if(id)
            {
                window.open("member_check_id.php?id="+id);
            } 
            else 
            {
                alert("아이디를 입력하세요.");
            }
        } 
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
                <h3>회원가입
                    <span>SIGNUP</span>
                </h3>
                <h5>회원가입 시 상품예약 및 예약확인 등 그리스신화박물관의 모든 서비스를 이용하실 수 있습니다.</h5>

            <div class="SignUp">
            <form action="member_insert.php" method="post">
                <ul>
                    <li>
                        <label>
                        <input type="text" name="id" id="id" required placeholder="아이디" class="in">
                        <input type="button" id="button" value="아이디중복확인" onclick="check_id(); return false;">
                        </label>
                    </li>
                    <li><input type="password" name="pw" id="pw" required placeholder="비밀번호" class="in"></li>
                    <li><input type="password" name="check_pw" id="check_pw" required placeholder="비밀번호확인" class="in"></li>
                    <li><input type="text" name="name" id="name" required placeholder="이름" class="in"></li>
                    <li>
                        <input type="text" name="email" id="email" required placeholder="이메일" class="in">
                    </li>
                    <li>
                        <button type="submit" onclick="check_input()">제출</button> <button type="reset">취소</button>
                    </li>
                </ul>
            </form>
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