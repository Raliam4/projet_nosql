<?php require "view_begin.php"; ?>
<?php require "view_list_nobel.php"; ?>
<?php if(isset($_GET['start'])) : $start=$_GET['start'] ?>
<?php else : $start=1 ?>
<?php endif ?>
<?php if($start==1) : $prev_start=$start ?>
<?php else : $prev_start=$start - 1 ?>
<?php endif ?>
<?php if($start==$last_page) : $suiv_start=$start ?>
<?php else : $suiv_start=$start + 1 ?>
<?php endif ?>
<div class="listePages">
  <p>Pages</p>
  <a  class="lienStart" href="?controller=<?=$_GET['controller']?>&action=pagination&start=<?=$prev_start?>"><img class="icone" src="Content/img/previous-icon.png" alt=""></a>
  <?php for ($i=1; $i <= $last_page ; $i++) :?>
    <?php if($i==$start) : ?>
      <a class="active" href="?controller=<?=$_GET['controller']?>&action=pagination&start=<?=$i?>"><?=$i?></a>
    <?php else : ?>
      <a class='lienStart'href="?controller=<?=$_GET['controller']?>&action=pagination&start=<?=$i?>"><?=$i?></a>
    <?php endif ?>
  <?php endfor ?>
  <a class="lienStart" href="?controller=<?=$_GET['controller']?>&action=pagination&start=<?=$suiv_start?>"><img class="icone" src="Content/img/next-icon.png" alt=""></a>
</div>
<?php require "view_end.php"; ?>
