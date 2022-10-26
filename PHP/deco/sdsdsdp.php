<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $category = $_GET['category'];
    $categorySql = "SELECT * FROM myBlog WHERE blogDelete = 0 AND blogCategory = '$category' ORDER BY myBlogID DESC LIMIT 10";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows; //갯수세기

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트 만들기</title>

    <?php include "../include/link.php" ?>
</head>
<body>
<div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main">
      <section id ="blog" class="container">
        <div class="blog__inner">
            <div class="blog__title">
                <h2><?=$categoryInfo['blogCategory']?> 블로그</h2>
                <h2><?=$categoryInfo['blogCategory']?>와 관련된 글이 <?=$categoryCount?>개 있습니다 :3</h2>
            </div>
            <div class="blog__contents">
               <!-- <div class="blog__contents__ad"></div> -->
               <!-- <div class="blog__contents__cont"></div> -->
               <!-- <div class="blog__contents__comment"></div> -->
               <div class="card__inner horizon">
<?php foreach($categoryResult as $blog){  ?>
        <div class="card">
            <figure>
                <img src="../assets/img/blog/<?=$blog['blogImgFile']?>" alt="vscode에 scss설치하기">
                <a href="blogView.php?blogID=<?=$blog['myBlogID']?>" class="go" title="컨텐츠 바로가기">
                </a>
                <span class="cate"><?=$blog['blogCategory']?></span>
            </figure>
            <div>
                <a href="blogView.php?blogID=<?=$blog['myBlogID']?>">
                    <h3><?=$blog['blogTitle']?></h3>
                    <p><?=$blog['blogContents']?></p>
                </a>
            </div>
        </div>
<?php } ?>
               </div>
            </div>
            <!-- //blog__contents -->
            <div class="blog__aside">
                <div class="blog__aside__intro">
                    <div class="img">
                        <img src="../assets/img/main_banner_bg.png" alt="나">
                    </div>
                    <p class="intro">
                        어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                    </p>
                </div>
                <div class="blog__aside__cate">
                    <h3>카테고리</h3>
                    <?php include "../include/category.php" ?>
                </div>
                <div class="blog__aside__new">
                    <h3>최신글</h3>
                    <ul>
                        <?php include "../include/blogNew.php" ?>
                    </ul>
                </div>
                <div class="blog__aside__pop">
                    <h3>인기글</h3>
                    <ul>
                        <?php include "../include/blogNew.php" ?>                    
                    </ul>
                </div>
                <div class="blog__aside__comment">
                    <h3>최신 댓글</h3>
                    <ul>
                        <li><a href="#">졸리다 금요일엔 일찍 끝내주실까요? 궁금합니다 :3</a></li>
                        <li><a href="#">졸리다 금요일엔 일찍 끝내주실까요? 궁금합니다 :3</a></li>
                        <li><a href="#">졸리다 금요일엔 일찍 끝내주실까요? 궁금합니다 :3</a></li>
                        <li><a href="#">졸리다 금요일엔 일찍 끝내주실까요? 궁금합니다 :3</a></li>
                    </ul>
                </div>
                <div class="blog__aside__ad"></div>
            </div>
            <div class="blog_relation"></div>
        </div>
      </section>
    
    </main>
    <!-- main -->
    
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>