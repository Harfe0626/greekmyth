
    <div id="head">
        <div id="logo"><a href="/"><img src="/img/logo.gif" alt=""></a></div>
        <nav id="top_menu">
            <?php 
            session_start(); 
            if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"]; 
            else $userid = ""; 
            if (isset($_SESSION["username"])) $username = $_SESSION["username"];
            else $username = "";
            if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
            else $userlevel = "";
            if (isset($_SESSION["userpoint"])) $userlevel = $_SESSION["userpoint"];
            else $userpoint = "";
            ?>
            <ul>
                <?php if(!$userid) { ?>
                <li><a href="/LogIn/login_form.php">LogIn</a></li> 
                <?php } else { ?>
                    <li><a href="/LogIn/member_modify_form.php"><?=$userid?> </li>
                    <li><a href="/LogIn/logout.php">LogOut</a></li>
                <?php } ?>
                <li><a href="">Home</a></li>
                <li><a href="">English</a></li>
                <li><a href="">Japanese</a></li>
                <li><a href="">Chinese</a></li>
            </ul>
        </nav>
   </div>  
   <div class="header_shadow"></div>
   <nav id="main_menu">
       <ul>
           <li><a href="/AboutUs/introduction.php">그리스신화박물관</a>
               <ul class="sub_menu">
                   <li><a href="/AboutUs/Introduction.php">박물관소개</a></li>
                   <li><a href="/AboutUs/GreekMyth.php">그리스신화란</a></li>
                   <li><a href="/AboutUs/Provideo.php">홍보동영상</a></li>
                   <li><a href="/AboutUs/Blogger.php">블로거와 함께하는 그리스신화박물관</a></li>
                   <li><a href="/AboutUs/Pictures.php">사진으로보는 그리스신화박물관</a></li>
               </ul>
           </li>
           <li><a href="/Exhibition/All.php">전시안내</a>
               <ul class="sub_menu">
                   <li><a href ="/Exhibition/All.php">전체</a></li>
                   <li><a href ="/Exhibition/Creation.php">창조관</a></li>
                   <li><a href ="/Exhibition/Olympus.php">올림포스관</a></li>
                   <li><a href ="/Exhibition/Oracle.php">신탁관</a></li>
                   <li><a href ="/Exhibition/Hero.php">영웅관</a></li>
                   <li><a href ="/Exhibition/Human.php">휴먼관</a></li>
                   <li><a href ="/Exhibition/Love.php">사랑관</a></li>
                   <li><a href ="/Exhibition/Greekcity.php">그리스마을</a></li>
               </ul>
           </li>
           <li><a href="">체험하기</a>
                <ul class="sub_menu">
                    <li><a href = "">전체</a></li>
                    <li><a href = "">그리스의상 체험</a></li>
                    <li><a href = "">스탬프북</a></li>
                    <li><a href = "">아테네시민권 발급체험</a></li>
                    <li><a href = "">가면만들기 체험</a></li>
                    <li><a href = "">아트토이 체험</a></li>
                </ul>
           </li>
           <li><a href="">관람안내</a>
                <ul class="sub_menu"> 
                    <li><a href="">관람안내</a></li>
                    <li><a href="">오시는길</a></li>
                </ul>                
           </li>
           <li><a href="/Community/Notice.php">커뮤니티</a>
                <ul class="sub_menu">
                    <li><a href="/Community/Notice.php">공지사항</a></li>
                    <li><a href="/Community/Faq.php">자주하는 질문</a></li>
                    <li><a href="/Community/QnA.php">묻고 답하기</a></li>
                </ul>               
           </li>
           <li><a href="">이벤트</a>
                <ul class="sub_menu">
                    <li><a href="">이벤트 안내</a></li>
                </ul>               
            </li>
       </ul>
   </nav>
   <nav id="quick_menu">
       <ul>
           <li><a href=""><img src="/img/main/quick01.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick02.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick03.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick04.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick05.gif" alt=""></a></li> 
           <li><a href=""><img src="/img/main/quick06.gif" alt=""></a></li>                    
           <li><a href=""><img src="/img/main/quick07.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick08.gif" alt=""></a></li>
           <li><a href=""><img src="/img/main/quick09.gif" alt=""></a></li> 
           <li><a href=""><img src="/img/main/quick10.gif" alt=""></a></li>               
        </ul>
   </nav>
