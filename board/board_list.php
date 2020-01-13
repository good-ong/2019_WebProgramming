<?php
require_once('fixview/fix_top_and_ltside.php');
?>
<?php
  require_once('dbconfig.php');
  // 페이징 시작
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  // 검색 시작
  if(isset($_GET['searchColummn'])) {
    $searchColummn = $_GET['searchColummn'];
    $subString .= '&amp;searchColummn='.$searchColummn;
  }
  if(isset($_GET['searchText'])) {
    $searchText = $_GET['searchText'];
    $subString .= '&amp;searchText='.$searchText;
  }
  if(isset($searchColummn) && isset($searchText)) {
    $searchSql = ' where '.$searchColummn.' like "%'.$searchText.'%"';
  } else {
    $searchSql='';
  }
  // 검색 끝
  $sql_board = 'select count(*) as cnt from boards'.$searchSql;
  $result_board = $db -> query($sql_board);
  $row = $result_board -> fetch_assoc();

  $allPost = $row['cnt'];
  if(empty($allPost)) {
    $emptyData = '<tr><td class="textCenter" colspan="5">글이 존재하지 않습니다.</td></tr>';
  } else {
  $onePage = 10;
  $allPage = ceil($allPost / $onePage);
  if($page < 1 || ($allpage && $page > $allPage)) { ?>
    <script>
      alert("존재하지 않는 페이지입니다.");
      history.back();
    </script>
<?php
    exit;
  }

  $oneSection = 10;
  $currentSection = ceil($page / $oneSection);
  $allSection = ceil($allPage / $oneSection);
  $firstPage = ($currentSection * $oneSection) - ($oneSection - 1);
  if($currentSection == $allSection) {
    $lastPage = $allPage;
  } else {
    $lastPage = $currentSection * $oneSection;
  }

  $prevPage = (($currentSection - 1) * $oneSection);
  $nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1);

  $paging = '<ul>';

  if($page != 1) {
    $paging .= '<li class="page page_start"><a href="./board_list.php?page=1'.$subString.'">처음</a></li>';
  }
  if($currentSection != 1) {
    $paging .= '<li class="page page_prev"><a href="./board_list.php?page='.$prevPage.$subString.'">이전</a></li>';
  }
  for($i = $firstPage; $i <= $lastPage; $i++) {
    if ($i == $page) {
      $paging .= '<li class="page current">'.$i.'</li>';
    } else {
      $paging .= '<li class="page"><a href="./board_list.php?page='.$i.$subString.'">'.$i.'</a></li>';
    }
  }
  if($currentSection != $allSection) {
    $paging .= '<li class="page page_next"><a href="./board_list.php?page='.$nextPage.$subString.'">다음</a></li>';
  }
  if($page != $allPage) {
    $paging .= '<li class="page page_end"><a href="./board_list.php?page='.$allPage.$subString.'">끝</a></li>';
  }
  $paging .= '</ul>';

  //페이징 끝

  $currentLimit = ($onePage * $page) - $onePage;
  $sqlLimit = ' limit '.$currentLimit.','.$onePage;

  $sql_board = 'select * from boards'.$searchSql.' order by Board_Num desc'.$sqlLimit;
  $result_board = $db -> query($sql_board);
  }
?>

<article class="boardArticle">
  <div id="boardList">
  <table>
    <caption class="readHide">
      이미지
    </caption>
    <thead>
      <tr>
        <th scope="col" class="no">번호</th>
        <th scope="col" class="title">제목</th>
        <th scope="col" class="author">작성자</th>
        <th scope="col" class="date">작성일</th>
        <th scope="col" class="hit">조회</th>
      </tr>
    </thead>
    <tbody>
        <?php
        if(isset($emptyData)) {
          echo $emptyData;
        } else {
          while($row = $result_board->fetch_assoc())
          {
            $datetime = explode(' ', $row['Board_Date']);
            $date = $datetime[0];
            $time = $datetime[1];
            if($date == Date('Y-m-d'))
              $row['Board_Date'] = $time;
            else
              $row['Board_Date'] = $date;
        ?>
      <tr>
        <td class="no"><?php echo $row['Board_Num'];?></td>
        <td class="title"><a href="board_view.php?Board_Num=<?php echo $row['Board_Num']?>"><?php echo $row['Board_Name'];?></a></td>
        <td class="author"><?php echo $row['userId'];?></td>
        <td class="date"><?php echo $row['Board_Date'];?></td>
        <td class="hit"><?php echo $row['Board_Hit'];?></td>
      </tr>
        <?php
          }
        }
        ?>
    </tbody>
  </table>
  <div class="btnSet">
    <a href="board_write.php">글쓰기</a>
  </div>
  <div class="paging">
    <?php echo $paging ?>
  </div>
</article>
<?php
require_once('fixview/fix_bottom.php');
?>
