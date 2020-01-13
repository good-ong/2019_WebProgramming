<?php
require_once('fixview/fix_top_and_ltside.php');
    echo "<p>아이디 : ".$_SESSION['user_id']."</p>
          <p>이름 : ".$_SESSION['user_name']."</p>
          <form class='' action='update_ok.php' method='post'>
          <p>새 비밀번호 : <input type='password' name='re_user_pw' value=''></p>
          <p>새 비밀번호 확인 : <input type='password' name='re_user_pw2' value=''></p>
          <p>소속 : <input type='text' name='re_user_temper' value='".$_SESSION['user_temper']."'></p>
          <p>주소 : <input type='text' name='re_user_adr' value='".$_SESSION['user_adr']."'></p>
          <p>연락처 : <input type='text' name='re_user_phone' value='".$_SESSION['user_phone']."'></p>
          <br><a href='update_ok.php'>확인</a>
          <a href='home.php'>취소</a></form>";
require_once('fixview/fix_bottom.php');
?>
