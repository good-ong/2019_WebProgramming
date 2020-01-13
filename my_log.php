<?php
require_once('fixview/fix_top_and_ltside.php');
    echo "<p>아이디 : ".$_SESSION['userId']."</p>
          <p>이름 : ".$_SESSION['name']."</p>
          <p>소속 : ".$_SESSION['company']."</p>
          <p>주소 : ".$_SESSION['address']."</p>
          <p>연락처 : ".$_SESSION['phoneNum']."</p>
          <br><a href='updateForm.php'>정보수정</a>
          <a href='home.php'>홈으로</a>
          <a href='del_user.php'>회원탈퇴</a>
          ";

require_once('fixview/fix_bottom.php');
?>
