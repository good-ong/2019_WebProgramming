<?php
	$db = new mysqli('localhost', 'root', '111111', 'ssy');

	if ($db->connect_error) {
		die('데이터베이스 연결에 문제가 있습니다. 관리자에게 문의 바랍니다.');
	}

	$db->set_charset('utf8');
?>
