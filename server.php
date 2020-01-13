<?php
session_start();

$db = mysqli_connect('localhost', 'root', '111111', 'ssy');

$errors = array();

	if (isset($_POST['reg_user'])) {
    $id = mysqli_real_escape_string($db, $_POST['user_id']);
    $pw_1 = mysqli_real_escape_string($db, $_POST['user_pw']);
    $pw_2 = mysqli_real_escape_string($db, $_POST['user_pw2']);
    $name = mysqli_real_escape_string($db, $_POST['user_name']);
    $adr = mysqli_real_escape_string($db, $_POST['user_adr']);
    $comp = mysqli_real_escape_string($db, $_POST['user_company']);
  	$phone = mysqli_real_escape_string($db, $_POST['user_phoneNum']);

  	if (empty($id)) { array_push($errors, "ID를 입력해주세요."); }
  	if (empty($pw_1)) { array_push($errors, "비밀번호를 입력해주세요."); }
  	if ($pw_1 != $pw_2) { array_push($errors, "비밀번호가 일치하지 않습니다."); }
  	if (empty($name)) { array_push($errors, "이름을 입력해주세요."); }
  	if (empty($adr)) { array_push($errors, "주소를 입력해주세요."); }
  	if (empty($phone)) { array_push($errors, "전화번호를 입력해주세요."); }

  	$user_check_query = "SELECT * FROM users WHERE userId='$id' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  	if ($user['userId'] == $id) {array_push($errors, "해당 아이디가 이미 사용중입니다.");}
  	if (count($errors) == 0) {
  	  	$pw = $pw_1;
  	  	$query = "INSERT INTO users (userId, password, name, address, company, phoneNum) VALUES('$id', '$pw', '$name', '$adr', '$comp', '$phone')";
  	  	mysqli_query($db, $query);
        header('location: login_form.php');
  	}
  }

if(isset($_POST['no_reg'])) { header('location: home.php'); }

	if (isset($_POST['login_user'])) {
	  $id = mysqli_real_escape_string($db, $_POST['userId']);
	  $pw = mysqli_real_escape_string($db, $_POST['password']);

	  if (empty($id)) { array_push($errors, "ID를 입력해주세요."); }
	  if (empty($pw)) {	array_push($errors, "비밀번호를 입력해주세요."); }

		if (count($errors) == 0) {
	  	$query = "SELECT * FROM users WHERE userId='$id' AND password='$pw'";
	    $results = mysqli_query($db, $query);
      $result_key = mysqli_fetch_assoc($results);
			if (mysqli_num_rows($results) == 1) {
	  	  $_SESSION['userId'] = $id;
        $_SESSION['name'] = $result_key['name'];
				$_SESSION['company'] = $result_key['company'];
				$_SESSION['address'] = $result_key['address'];
				$_SESSION['phoneNum'] = $result_key['phoneNum'];
	  	  $_SESSION['success'] = "로그인 성공.";
        header('location: home.php');
	  	} else {
	  		array_push($errors, "ID 또는 비밀번호를 올바르게 입력해주세요.");
	  	}
	  }
	}

?>
