<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>쌍용전기</title>
  <!--여기부터 홈페이지 정보-->
  <meta charset="utf-8">
  <meta name="title" content="쌍용전기">
  <meta name="description" content="steel box, stainless box, 분전반, 표준분전반, 접지, 계전기, 배선기구, 기타배선기구 등 판매">
  <meta name="keywords" content="쌍용전기, steel box, stainless box, 분전반, 표준분전반, 접지, 계전기, 배선기구, 기타배선기구, 전기, 전자">
  <meta http-equiv="imagetoolbar" content="no">
  <meta property="og:type" content="website">
  <meta property="og:title" content="쌍용전기">
  <meta property="og:description" content="steel box, stainless box, 분전반, 표준분전반, 접지, 계전기, 배선기구, 기타배선기구 등 판매">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/board.css" />
  <link rel="stylesheet" href="css/style2.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <!--여기까지 홈페이지 정보-->

  <!--     오버추어 연동 가능     -->
  <!-- 네이버 애널리틱스 연동 가능 -->

</head>

  <body bgcolor="#FFFFE4" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
    <!--즐겨찾기, 홈으로, 로그인, 회원가입 시작(작업중)-->
    <table class="fhlm" width="100%" height="35" align="center" bgcolor="#810000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">
          <table width="1000" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="400" align="left"><a href="JavaScript:window.external.AddFavorite('http://ssy-elec.com/','쌍용전기입니다.')" onfocus="blur()"><img src="./h_img/favorite.gif" width="100" height="35"></a></td>
              <td width="600" align="right">
                <!-- 홈으로, 로그인, 회원가입 -->
                <table width="400" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <td width="370" align="right">
                        <?php
                          session_start();
                          if(!isset($_SESSION['userId'])) {
                            echo "<a href='login_form.php'><img src='./h_img/top_loginbtn.gif'></a>
                                  <a href='member_form.php'><img src='./h_img/top_memberbtn.gif'></a>";
                          }
                          else
                          {
                            echo "<strong>".$_SESSION['name']."</strong><small>님 환영합니다.</small>
                            <a href='my_log.php'><img src='./h_img/top_mylogbtn.gif'></a>
                            <a href='logout.php'><img src='./h_img/top_logoutbtn.gif'></a>";
                          }
                        ?>
                      </td>
                  </tr>
                </table>
                <!-- 홈으로, 로그인, 회원가입-->
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!--즐겨찾기, 홈으로, 로그인, 회원가입 끝(작업중)-->

    <!--로고, 검색, 연락처, 네비게이션 바 시작 (작업중)-->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <!--로고, 검색, 연락처 시작-->
      <tr>
        <td align="center" height="120">
          <table width="1000" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <!--로고(완료)-->
              <td class="logo" width="300" align="center"><a href="home.php"><img src="./h_img/logo.png" width="200" height="110"></a></td>
              <!--로고(완료)-->
              <!--검색창 (어떻게 검색결과를 바꾸나?)-->
              <td width="400" align="center">
    		        <table width="350" border="0" cellspacing="0" cellpadding="0">
                  <form method="get" action="search.php" name="top_search" onsubmit="javascript:return check_top_search()">
      		        <tr>
                    <td width="10"><img src="./h_img/search_img01.gif" width="10" height="37"></td>
                    <td width="290" align="left" background="./h_img/search_img02.gif">
                      <input type="text" name="s_str" placeholder="검색어를 입력하세요." size="43" maxlength="100" class="input_search" style="border:0px"></td>
                    <td width="50"><input type=image src="./h_img/search_btn.gif" style="border:0"></td>
                  </tr>
      		        </form>
                </table>
              </td>
              <!--검색창-->
              <!--연락처(완료)-->
              <td width="300" align="center">
                <a href="buynotice.php"><img src="./h_img/call.gif", width="200"></a>
              </td>
              <!--연락처(완료)-->
            </tr>
          </table>
        </td>
      </tr>
      <!--로고, 검색창, 연락처 끝-->
      <!--네비게이션 바 시작-->
      <tr>
        <td align="center" bgcolor="#3F0000">
          <table width="1000" height="40" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" height="40">
                <a href="home.php"><img src="./h_img/topmenu01.gif" width="200" height="40"></a>
                <a href="m_list.php?cate=1"><img src="./h_img/topmenu02.gif" width="200" height="40"></a>
                <a href="index.php"><img src="./h_img/topmenu03.gif" width="200" height="40"></a>
                <a href="buynotice.php"><img src="./h_img/topmenu04.gif" width="200" height="40"></a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!--네비게이션 바 끝-->
      <tr height="20"></tr>
    </table>
    <!--로고, 검색창, 연락처창, 네비게이션 바 끝 (작업중)-->
    <!--메인 시작 (작업중)-->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">
          <table width="1000" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>
                <table width="1000" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <!--사이드 카테고리-->

                    <td width="210" valign="top">
                      <table width="210" border="0" cellspacing="0" cellpadding="0">
                        <tr><td align="center" background="./h_img/sidemenu_table02.gif"><img src="./h_img/sidemenu_table01.gif" width="210" height="60"></td></tr>
                        <tr>
                          <td align="center" background="./h_img/sidemenu_table02.gif">
                            <table width="152" border="0" cellspacing="0" cellpadding="0">
                              <?php
                                $side_cate_num = scandir('item_data');
                                foreach ($side_cate_num as $cate_num) {
                                  if (in_array($cate_num, ['.','..'])) continue;?>
                                  <tr>
                                    <td class="side_text" height="26">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td>
                                            <a href="m_list.php?cate=<?=$cate_num?>">
                                              <img src="./h_img/side_category/side<?=$cate_num?>.gif" border="0">
                                            </a>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                              <?php
                                }
                              ?>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="./h_img/sidemenu_table03.gif" width="210" height="46"></td>
                        </tr>
                      </table>
                    </td>
                    <!--//사이드 카테고리-->
                    <td width="20"></td>
                    <!--변동화면-->
                    <td align="center" valign="center">
