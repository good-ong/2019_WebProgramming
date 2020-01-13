<?php
require_once('fixview/fix_top_and_ltside.php');
require_once("dbconfig.php");
$bNo = $_GET['bno'];

$sql_board = 'select Board_Name, BoardInfo, Board_Date, Board_Hit, userId from boards where Board_Num = ' . $Board_Num;
$result_board = $db->query($sql_board);
$row = $result_board->fetch_assoc();
?>

<article class="boardArticle">
<div id="boardView">
  <h3 id="boardTitle"><?php echo $row['Board_Name']?></h3>
  <div id="boardInfo">
  <span id="boardID">작성자: <?php echo $row['userId']?></span>
  <span id="boardDate">작성일: <?php echo $row['Board_Date']?></span>
  <span id="boardHit">조회: <?php echo $row['Board_Hit']?></span>
</div>
<div id="boardContent"><?php echo $row['BoardInfo']?></div>
</div>
<div>
  <a href="board_list.php">이전으로</a>
</div>
</article>
<?php
require_once('fixview/fix_bottom.php');
?>
