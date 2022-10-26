<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    var_dump($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/mypage.css">
</head>
<body>
    <!-- 프로필 변경 -->
    <div class="login__popup" style="display:none">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>LOGIN</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                        <div class="Email">
                            <label for="youEmail" class="ir">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div class="Pass">
                            <label for="youPass" class="ir">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                            
                        </div>
                        <div class="btom-btn">
                            <a href="../login/findID.php">아이디 찾기</a>
                            <a href="../login/findPass.php">비밀번호 찾기</a>
                            <a href="../join/joinAgree.php">회원가입</a>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">로그인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 비밀번호 변경 -->
    <div class="login__popup" style="display:none">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>LOGIN</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                        <div class="Email">
                            <label for="youEmail" class="ir">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div class="Pass">
                            <label for="youPass" class="ir">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                            
                        </div>
                        <div class="btom-btn">
                            <a href="../login/findID.php">아이디 찾기</a>
                            <a href="../login/findPass.php">비밀번호 찾기</a>
                            <a href="../join/joinAgree.php">회원가입</a>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">로그인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 생년월일 변경 -->
    <div class="login__popup" style="display:none">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>LOGIN</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                        <div class="Email">
                            <label for="youEmail" class="ir">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div class="Pass">
                            <label for="youPass" class="ir">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                            
                        </div>
                        <div class="btom-btn">
                            <a href="../login/findID.php">아이디 찾기</a>
                            <a href="../login/findPass.php">비밀번호 찾기</a>
                            <a href="../join/joinAgree.php">회원가입</a>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">로그인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 닉네임 변경 -->
    <div class="login__popup" style="display:none">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>LOGIN</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                        <div class="Email">
                            <label for="youEmail" class="ir">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div class="Pass">
                            <label for="youPass" class="ir">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                            
                        </div>
                        <div class="btom-btn">
                            <a href="../login/findID.php">아이디 찾기</a>
                            <a href="../login/findPass.php">비밀번호 찾기</a>
                            <a href="../join/joinAgree.php">회원가입</a>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">로그인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 전화번호 변경 -->
    <div class="login__popup" style="display:none">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>LOGIN</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="../login/loginSave.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                        <div class="Email">
                            <label for="youEmail" class="ir">이메일</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                        </div>
                        <div class="Pass">
                            <label for="youPass" class="ir">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                            
                        </div>
                        <div class="btom-btn">
                            <a href="../login/findID.php">아이디 찾기</a>
                            <a href="../login/findPass.php">비밀번호 찾기</a>
                            <a href="../join/joinAgree.php">회원가입</a>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">로그인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 스크롤 -->
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>

    <!-- 메인 -->
    <div class="wrap">
        <div class="site">
            <?php include "../include/header.php" ?>

            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/site_main_mypage.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_05" alt="">
                    
                    <h2>MY PAGE</h2>
                    <p>내 정보를 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="myPage__view">   
                    <div class="myPage__inner">
                        <div class="myPage__menu">
<?php
    // 두개의 테이블 join
    $myMemberID = $_SESSION['myMemberID'];
    $sql = "SELECT myMemberID, youEmail, youImageFile, youName, youPass FROM myMember WHERE myMemberID = '$myMemberID'";
    $result = $connect -> query($sql);
    // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.boardImgFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myMemberID LIKE '$myMemberID' ORDER BY myBoardID DESC LIMIT 0, 3";
    // var_dump($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
    echo "<div class='myPage__img__cont'>";
    echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='' class='myPage__img'>";
    echo "<h4 class='profile__image__mod'>+</h4>";
    echo "</div>";
    echo "<p class='profile__title'>".$info['youName']."</p>";
    echo "<p class='profile__title'>".$info['youEmail']."</p>";
?>
                            <!-- <div class="myPage__img__cont">
                                <img src="../../assets/img/test/12.png" alt="" class="myPage__img">
                                <h4 class="profile__image__mod">+</h4>
                            </div>
                            <p class="profile__title">너무추우어</p>
                            <p class="profile__title">to_before@naver.com</p> -->
                            <div class="list">
                                <div>
                                    <span>댓글</span>
                                    <span>1개</span>
                                </div>
                                <div>
                                    <span>게시물</span>
                                    <span>1개</span>
                                </div>
                                <div>
                                    <span>방문수</span>
                                    <span>1개</span>
                                </div>
                            </div>
                            <hr class="profile_hr">
                            <p class="profile_alert">꼼꼼히 확인해주세요!</p>
                        </div>
                        <div class="myPage__cont">
                            <div class="myPage__cont__board">
                                <h2 class="myPage__title">내 게시물</h2>


<?php
    // 두개의 테이블 join
    $myMemberID = $_SESSION['myMemberID'];

    $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.boardImgFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myMemberID LIKE '$myMemberID' ORDER BY myBoardID DESC LIMIT 0, 3";
    var_dump($sql);
    // $sql = $sql."ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
    // $result = $connect -> query($sql);

    // $sql = "ALTER TABLE myBoard AUTO_INCREMENT = 1";
    $connect -> query($sql);
    // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) WHERE myMemberID = '$myMemberID' ORDER BY boardView DESC LIMIT 0, 3";
    $result = $connect -> query($sql);
    if($result){
        $viewCount = $result -> num_rows;
        if($viewCount > 0){
            for($i=1; $i<=3; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<a href='../../PHP/board/boardView.php?myBoardID={$info['myBoardID']}' class='myPage_myboard_list'>";
                echo "<p class='myPage_myboard_list_num'>".$info['myBoardID']."</p>";
                echo "<div class='info_cont'>";
                echo "<p class='contents_section'>".$info['boardSection']."</p>";
                echo "<h2>".$info['boardTitle']."</h2>";
                echo "<h2>".$info['boardContents']."</h2>";
                echo "</div>";
                echo "<div class='info_cont'>";
                echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
                echo "<p class='contents_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "<p class='contents_view'>".$info['boardView']." VIEW</p>";
                echo "<p class='contents_view'>".$info['youName']."</p>";
                echo "</div>";
                echo "<img class='myPage_item_background'src='../../assets/img/blog_board/".$info['boardImgFile']."' alt='게시물 이미지'>";
                echo "</a>";
            }
        }
        else {
            echo "<div class='rank_item'>게시글 오류입니다. 관리자에게 문의하세요!</div>";
        }
    }
?>
                                <div class="board__item 01">
                                    <h2>이게 대체..?</h2>
                                    <p>이게 뭐라고 생각하...</p>
                                    <p class="commentCount">2</p>
                                </div>
                                <div class="board__item 02">
                                    <h2>이게 대체..?</h2>
                                    <p>이게 뭐라고 생각하...</p>
                                    <p class="commentCount">2</p>
                                </div>
                                <div class="board__item 03">
                                    <h2>이게 대체..?</h2>
                                    <p>이게 뭐라고 생각하...</p>
                                    <p class="commentCount">2</p>
                                </div>
                            </div>
                            <h2 class="myPage__title">내 정보 수정</h2>
                            <div class="myPlage__cont__item">
                                <p>비밀번호 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item">
                                <p>생년월일 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item">
                                <p>닉네임 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item">
                                <p>전화번호 변경</p>
                                <p>></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    const commentName = $("#commentName"); //댓글 이름
    const commentPass = $("#commentPass"); //댓글 비밀번호
    const commentWrite = $("#commentWrite"); //댓글 내용
    
    let commentID = "";

    // 댓글 삭제버튼
    $(".comment__del__del").click(function(e){
        e.preventDefault();
        

        $(".comment__delete").fadeIn();
        
        // 클릭한 ID 값
        commentID = $(this).parent().parent().parent().parent().attr("id");
	    $(this).after($(".comment__delete"));

    });

    // 댓글 삭제 버튼 --> 취소 버튼 클릭
    $("#commentDeleteCancel").click(function(){
        $(".comment__delete").fadeOut();
    })

    // 댓글 삭제 버튼 --> 진짜 삭제 버튼 클릭
    $("#commentDeleteButton").click(function(){

        // comment14 : 0~9 까지 여러개(g)의 값을 교환
        let number = commentID.replace(/[^0-9]/g, "");

        if($("#commentDeletePass").val()==""){
            alert("댓글 작성시 비밀번호를 적어주세요");
            $("#commentDeletePass").focus();

        } else {
            $.ajax({
                url: "boardCommentDelete.php",
                method: "POST",
                dataType: "json",
                data: {
                    "pass" : $("#commentDeletePass").val(),
                    "commentID" : number
                },
                // 성공했을때
                success : function(data){
                    console.log(data);
                    location.reload();
                },
                // 오류시 3가지 값을 알려줍니다
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    })

    // 댓글 수정버튼
    $(".comment__del__mod").click(function(e){
        e.preventDefault();
        
        $(".comment__modify").fadeIn();
        // 클릭한 ID 값
        commentID = $(this).parent().parent().parent().parent().attr("id");
	    $(this).after($(".comment__modify"));
    });

    $("#commentModifyCancel").click(function(e){
        e.preventDefault();
        
        $(".comment__modify").fadeOut();
    });

    // 댓글 수정 버튼 --> 진짜 수정 버튼 클릭
    $("#commentModifyButton").click(function(){

        // comment14 : 0~9 까지 여러개(g)의 값을 교환
        let number = commentID.replace(/[^0-9]/g, "");

        if($("#commentModifyPass").val()=="" || $("#commentModifyMsg").val()==""){
            alert("댓글 수정시 빈칸을 모두 채워주세요");
            $("#commentModifyMsg").focus();

        } else {
            $.ajax({
                url: "boardCommentModify.php",
                method: "POST",
                dataType: "json",
                data: {
                    "msg" : $("#commentModifyMsg").val(),
                    "pass" : $("#commentModifyPass").val(),
                    "commentID" : number
                },
                // 성공했을때
                success : function(data){
                    console.log(data);
                    location.reload();
                },
                // 오류시 3가지 값을 알려줍니다
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    })




    
    // 댓글 쓰기 버튼
    $("#commentBtn").click(function(){
        if($("#commentWrite").val()==""){
            alert("댓글을 써주세요!!");
            $("#commentWrite").focus();
        } else {
            $.ajax({
                // 블로그 커멘트 php로 넘겨줍니다.
                url: "boardCommentWrite.php",
                method : "POST",
                // json 파일로 제작하기 때문에 데이터 타입은 json
                dataType: "json",
                // 넣어줄 값
                data: {
                    "boardID" : <?=$myBoardID?>,
                    "myLoginID" : <?=$_SESSION['myMemberID']?>,
                    "name" : commentName.val(),
                    "pass" : commentPass.val(),
                    "msg"  : commentWrite.val()
                },
                // 성공했을때
                success : function(data){
                    console.log(data);
                    location.reload();
                },
                // 오류시 3가지 값을 알려줍니다
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    })
</script>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>