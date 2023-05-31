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
      if (!document.member_form.id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return;
      }
      if (!document.member_form.pw.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pw.focus();
          return;
      }
      if (!document.member_form.check_pw.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.check_pw.focus();
          return;
      }
      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }
      if (!document.member_form.email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email.focus();
          return;
      }
      if (document.member_form.pw.value != 
            document.member_form.check_pw.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pw.focus();
          document.member_form.pw.select();
          return;
      }
      document.member_form.submit();
    }
    function check_id() 
    {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
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
                <h3>회원정보수정
                    <span>USERINFO</span>
                </h3>
                
                <h5>회원께서 가입하신 회원 정보 수정 페이지입니다.</h5>
            <div class="SignUp">
            <form action="member_modify.php" method="post">
                <ul>
                    <li>
                        <label>
                        <input type="text" name="id" id="id" required placeholder="아이디" class="in">
                        <input type="button" id="button" value="아이디중복확인" onclick="check_id()">   
                        </label>
                    </li>
                    <li><input type="password" name="pw" id="pw" required placeholder="비밀번호" class="in"></li>
                    <li><input type="password" name="check_pw" id="check_pw" required placeholder="비밀번호확인" class="in"></li>
                    <li><input type="text" name="name" id="name" required placeholder="이름" class="in"></li>
                    <li>
                        <input type="text" name="email" id="email" required placeholder="이메일" class="in">
                    </li>
                    <li><button type="submit" onclick="check_input()">제출</button> <button type="reset">취소</button></li>
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