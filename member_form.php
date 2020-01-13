<?php include('server.php'); ?>
<?php
require_once('fixview/fix_top_and_ltside.php');
?>

<article class="container">
  <div class="page-header">
    <h1>회원가입 <small>Sign up</small></h1>
  </div>

  <form action="member_form.php" method="post">
      <?php include('errors.php'); ?>
        <div class="m_input">
          <p><label for="InputId">* 아이디</label>
          <input type="text" name="user_id" placeholder="아이디"></p>
          <p><label for="InputPassword1">* 비밀번호</label>
          <input type="password" name="user_pw" placeholder="비밀번호"></p>
          <p><label for="InputPassword2">* 비밀번호 확인</label>
          <input type="password" name="user_pw2" placeholder="비밀번호 확인">
          <p><label for="username">* 이름</label>
          <input type="text" name="user_name" placeholder="이름을 입력해 주세요"></p>
          <p><label for="InputEmail">* 주소</label>
          <input type="text" name="user_adr" placeholder="상품 배송 받을 주소를 입력해 주세요."></p>
          <p><label for="InputEmail">소속</label>
          <input type="text" name="user_company" placeholder="ex) 개인사업자, 쌍용전기, xx산업 등 간단히 작성"></p>
          <p><label for="InputEmail">* 연락처</label>
          <input type="text" name="user_phoneNum" placeholder="ex) 01012345678"></p>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-info" name="reg_user">회원가입<i class="fa fa-check spaceLeft"></i></button>
          <button type="submit" class="btn btn-warning" name="no_reg">가입취소<i class="fa fa-times spaceLeft"></i></button>
        </div>
  </form>

</article>
<?php
require_once('fixview/fix_bottom.php');
?>
