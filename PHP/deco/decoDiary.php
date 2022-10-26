<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>다이어리 꾸미기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="deco__Diary">
            <div class="diary__inner">
                <div class="color__section">
                    <div class="book">
                        이미지
                    </div>
                        <h3>좋아하는 색상을 골라주세요 :3</h3>
                        <!-- <ul>
                            <li><a href="bookOpen.php?color=red">레드</a></li>
                            <li><a href="bookOpen.php?color=blue">블루</a></li>
                        </ul> -->
                        <form action="bookOpen.php" name="bookOpen" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>블로그 게시글 작성 영역</legend>
                            <div>
                                <label for="color">카테고리</label>
                                <select name="color" id="color">
                                    <option value="red">레드</option>
                                    <option value="blue">블루</option>
                                </select>
                            </div>
                            <div>
                                <label for="testImage">파일</label>
                                <input type="file" name="testImage" id="testImage" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요">
                            </div>
                            <button type="submit" value="저장하기">저장하기</button>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>