<?php include('server.php'); ?>
<?php
require_once('fixview/fix_top_and_ltside.php');
?>
<table width="750" border="0" cellspacing="0" cellpadding="0">
  <tr height="40" align="center" valign="center">
    <td colspan="2"><img src="h_img/lock.gif"></td>
  </tr>
  <tr valign="center">
    <td align="center">
      <form action="login_form.php" method="post">
        <table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr align="center" valign="center">
            <td>
              <table border="0">
                <tr>
                  <td height="35"><input type="text" name="userId" placeholder="아이디 입력" style="width:200px"></td>
                </tr>
                <tr>
                  <td height="35"><input type="password" name="password" placeholder="비밀번호 입력" style="width:200px"></td>
                </tr>
              </table>
            </td>
            <td>
              <button type="submit" name="login_user"><img src="h_img/user_login.gif"></button>
              <a href="member_form.php"><img src="h_img/user_member.gif"></a>
            </td>
          </tr>
        </table>
        <?php include('errors.php'); ?>
      </form>
    </td>
  </tr>
  <tr height="50" align="center" valign="center">
    <td>
      <a href="#"><img src="h_img/find_id.gif"></a>
      <a href="#"><img src="h_img/find_pw.gif"></a>
    </td>
  </tr>
  <tr>
    <td height="50"></td>
  </tr>
</table>
<?php
require_once('fixview/fix_bottom.php');
?>
