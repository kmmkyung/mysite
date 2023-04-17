<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서브페이지 | 2023 보그 코리아(Vogue Korea)</title>
    <meta name="description"  content="컬렉션부터 스타일, 쇼핑, 뷰티, 라이프스타일, 셀러브리티까지 지금 가장 핫한 트렌드 소개" />
    <!-- 파비콘 넣기 -->
    <link rel="shortcut icon" href="./images/icon.jpg" type="image/x-icon" />
    <!-- 아이콘CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css">
    <!-- 외부 CSS 넣기 -->
    <link rel="stylesheet" href="./css/temp.css">
    <!-- 링크시스템 JS -->
    <script src="./js/linksys.js"></script>
    <!-- 외부JS넣기 -->
    <!-- <script src="./js/main.js"></script> -->

    <!-- 부드러운 스크롤 JS -->
    <script src="./js/smoothScroll20.js"></script>
    <!-- 공통 JS -->
    <script src="./js/common.js"></script>
    
    <!-- 링크시스템 JS -->
    <script src="./js/linksys.js"></script>
</head>
<body>
    <!-- 1. 상단영역 -->
    <div id="top">
        <!-- .top.on인 경우 슬림상단 디자인 적용 -->
        <?php include "./inc/top.inc" ?>
    </div>
    <!-- 2. 메인영역 -->
    <div id="cont" class="bgc">
        <main class="ibx cont">
            
        </main>
    </div>
    <!-- 3. 하단영역 -->
    <div id="info" class="bgc">
    <?php include "./inc/info.inc" ?>
    </div>

    <!-- 위로가기버튼 -->
    <a href="#" class="tbtn fi fi-angle-up">
        <span class="ir">위로가기버튼</span>
    </a>
</body>
</html>