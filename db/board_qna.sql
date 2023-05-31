-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-05-16 05:42
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sample`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board_qna`
--

CREATE TABLE `board_qna` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(15) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `board_qna`
--

INSERT INTO `board_qna` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, '', 'Dimitris Papado', 'Search for your museum', 'Hello, my name is Dimitris Papadooulos. I am undergraduate student of Technological Institution of Western Greece, Department of Museology. The topic of my study is the making of a museum of ancient mythology in Ileia. Because the only in the whole planet about the myth is yours i would like to take piecies of information from the manager or a curator for my study. If you can help for you, i will send you a questionnaire or a skype meeting with me. I prefer to inclue your museum because is similar with the possible making for museum with the same topic in Greece.\r\n\r\nPlease keep my informed!\r\n\r\n', '2017-11-14', 7462, NULL, NULL, NULL),
(2, '', '권해림', '그리스 신화박물관 너무 좋아요', '그리스 신화박물관 너무 좋네요\r\n나중 제주도 가면 제일먼저 가볼게요\r\n사랑합니다\r\n권혜림올림', '2018-03-10', 8156, NULL, NULL, NULL),
(3, '', '11', '반려동물 동반 가능 한가요', '반려동물 동반 가능 한가요', '2018-07-19', 7543, NULL, NULL, NULL),
(4, '', '휴관문의', '휴관문의 드립니다?', '관람 안내에 휴관에 대해서는 안내가 안되어 있는데..\r\n\r\n혹시!! 연중무휴로 운영이 되는지 문의 드립니다.\r\n\r\n확인 부탁 드립니다.', '2018-12-13', 7659, NULL, NULL, NULL),
(5, '', '트립본', '[홍보물 요청] 예비 관광 벤처기업 트립본', '안녕하세요.\r\n\r\n저희는 2019년 예비관광벤처기업으로 선정된 여행정보 기업 트립본입니다.\r\n\r\n이번에 트립본은 한국관광공사와 협약을 맺고 외국인들을 대상으로 한국을 알리는 콘텐츠와 어플리케이션을 제작중입니다.\r\n\r\n저희 콘텐츠에 그리스 신화 박물관을 소개하고 싶은데, 홍보 목적으로 보유하고 계신 사진이나 영상이 따로 있다면 저희가 받아볼 수 있을까요?\r\n아니면 홈페이지나 인스타그램에 올라온 사진을 저희가 사용해도 괜찮을지요?\r\n\r\n감사합니다.\r\n\r\n트립본 신동원 드림', '2019-12-11', 4384, NULL, NULL, NULL),
(6, '', '유지은', '제휴문의', '안녕하세요\r\n인플루언서 협찬플랫폼 포포몬의 유지은입니다.\r\n\r\n저희 회사 위더스콘텐츠는 sns인기채널 여행다녀왔습니다 의 운영사로 영향력 있는 많은 인플루언서를 보유하고 있습니다.\r\n\r\n자사 보유 db를 기반으로 지난 1월 브랜드를 홍보해줄 인플루언서 체험단을 매칭시켜주는 플랫폼 포포몬을 오픈하였습니다.\r\n\r\n\r\n\r\n현재 베타버전으로 전 서비스를 무료로 운영하고 있사오니 들어가셔 확인해보시고, 제휴를 원하시면 아래 명함으로 편하게 연락주세요\r\n\r\n포포몬 바로가기 popomon.com', '2022-04-14', 3661, NULL, NULL, NULL),
(7, 'jjlee', '이수정', '물품보관여부 문의', '내용무', '2022-09-04', 3524, NULL, NULL, NULL),
(8, 'jjlee', '이미란', '관람 가능한 곳이 어디인지요', '1. 그리스신화 박물관은 전시 안내에 나와 있는 것 이외의 전시물이 있는 것인가요?\r\n전시안내에는 창조관, 올림포스관..... 그리스마을이 있어요\r\n\r\n2. 입장권에는 체험하기 [트릭아이미술관]이 있는데, 홈피에는 설명이 없어서 입장권을 개별로 할 지 통합권으로 해야할지...\r\n\r\n3. 홍보 영상에는 그리스 의상 입어보기가 있는데 어떤 티켓을 끊어야 하는지요?\r\n\r\n4. 홍보 영상에 미로 공원도 있던데 입장하면 그곳도 가볼 수 있는지요?\r\n\r\n가보고 싶은데, 어디까지 관람이 가능한지 궁금합니다~\r\n\r\n솔직히 방문 코스에 포함할 지 고민중입니다. 홍보영상에 제시된 곳을 모두 가본다면 꼭 방문하고 싶습니다', '2023-05-16', 3476, NULL, NULL, NULL),
(9, '', '신정엽', 'test1', 'testtesttestttest', '2023-05-16', 0, NULL, NULL, NULL);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board_qna`
--
ALTER TABLE `board_qna`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board_qna`
--
ALTER TABLE `board_qna`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
