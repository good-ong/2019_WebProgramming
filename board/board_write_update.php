<?php
	require_once("dbconfig.php");
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];
	$date = date('Y-m-d H:i:s');
	$sql_board = 'insert into boards (Board_Num, Board_Name, userId, Board_Date, BoardInfo, b_hit) values (null, "'.$bTitle.'", "' . $userId . '", "'. $date .'", "'.$bContent.'", 0';
	$result_board = $db->query($sql_board);
	if($result_board) { // query가 정상실행 되었다면,
		$msg = "정상적으로 글이 등록되었습니다.";
		$Board_Num = $db->insert_id;
		$replaceURL = 'board_view.php?bno=' . $Board_Num;
	} else {
		$msg = "글을 등록하지 못했습니다.";
?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
	}
?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>
