<?php
require_once('fixview/fix_top_and_ltside.php');
require_once("dbconfig.php");
?>
	<article class="boardArticle">
		<div id="boardWrite">
			<form action="board_write_update.php" method="post">
				<table id="boardWrite">
					<caption class="readHide">자유게시판 글쓰기</caption>
					<tbody>
						<tr>
							<th scope="row"><label for="bID">아이디</label></th>
							<td class="id"><?=$_SESSION['userId']?></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">작성</button>
					<a href="board_list.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
<?php
require_once('fixview/fix_bottom.php');
?>
