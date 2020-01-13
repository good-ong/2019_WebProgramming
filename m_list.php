<?php
require_once('fixview/fix_top_and_ltside.php');
?>
<table border="0" width="750" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4" height="40">
      <small>상품정보 바로가기 >> <small>
      <select onchange="location.href(this.value)">
      <option value='m_list.php?cate=1' selected='selected'> </option>
      <option value='m_list.php?cate=1'>STEEL BOX</option>
      <option value='m_list.php?cate=2'>STAINLESS BOX</option>
      <option value='m_list.php?cate=3'>분전반</option>
      <option value='m_list.php?cate=4'>표준분전반</option>
      <option value='m_list.php?cate=5'>접지</option>
      <option value='m_list.php?cate=6'>계전기</option>
      <option value='m_list.php?cate=7'>배선기구</option>
      <option value='m_list.php?cate=8'>기타 배선기구</option>
      </select>
    </td>
  </tr>
  <tr valign="center" height="40" bgcolor="#810000">
    <?php echo "<td colspan='4'><img src='h_img/side_category/side".$_GET['cate'].".gif'></td>"; ?>
  </tr>
  <tr><td colspan="4" height="20"></td></tr>
  <?php echo file_get_contents("item_data/".$_GET['cate']); ?>
  <tr>
    <td colspan="4" height="40"></td>
  </tr>
</table>
<?php
require_once('fixview/fix_bottom.php');
?>
