<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Starbucks Coffee Korea</title>

  <!--Open Graph-->
  <!--http://ogp.me/-->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Starbucks" />
  <meta property="og:title" content="Starbucks Coffee Korea" />
  <meta property="og:description" content="스타벅스는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="og:image" content="../images/starbucks_seo.jpg" />
  <meta property="og:url" content="https://starbucks.co.kr" />

  <!--Twitter Card-->
  <!--https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started-->
  <meta property="twitter:card" content="summary" />
  <meta property="twitter:site" content="Starbucks" />
  <meta property="twitter:title" content="Starbucks Coffee Korea" />
  <meta property="twitter:description" content="스타벅스는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="twitter:image" content="../images/starbucks_seo.jpg" />
  <meta property="twitter:url" content="https://starbucks.co.kr" />

  <!--파비콘-->
  <!--<link rel="shortcut icon" href="favicon.ico" />-->
  <link rel="icon" href="../favicon.png" />
  <!--브라우저 스타일 초기화-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" />
  <!--Google Fonts - 나눔고딕-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet" />
  <!--Google Material Icons-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/signin.css" />

  <script defer src="../js/common.js"></script>
</head>
<body>
  <!--HEADER-->
  <header>
  <?php include '../header.php' ?>
 </header>

<section class="signin">
    <h1>로그인</h1>
    <div class="signin__card">
        <h2>
            <strong>Welcome!</strong> 스타벅스에 오신 것을 환영합니다.
        </h2>
        <form method="post" action="signin.php">
            <input type="text" name="id" placeholder="아이디를 입력하세요." required/>
            <input type="password" name="pw" placeholder="비밀번호를 입력하세요." required/>
            <input type="submit" value="로그인" />
            <p>
                * 비밀번호를 타 사이트와 같이 사용할 경우 도용 위험이 있으니,<br />
                정기적으로 비밀번호를 변경하세요!
            </p>
        </form>
        <div class="actions">
            <a href="../member/member_form.php">회원가입</a>
            <a href="javascript:void(0)">아이디 찾기</a>
            <a href="javascript:void(0)">비밀번호 찾기</a>
        </div>
    </div>
</section>
  <!--FOOTER-->
  <footer>
  <?php include '../footer.html' ?>
  </footer>
</body>
</html>