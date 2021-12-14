<ol id="nobels">

  <?php //var_dump($last_25); ?>
  <?php foreach($all_darwin as $cle => $val) :?>
  <?php //if(isset($_GET['start'])) $num_id = ($nb_nobels-( 25 * ( $_GET['start'] - 1 ))) - $cle;
        //else $num_id = $nb_nobels - $cle;
  ?>
  <li>
    <ul>
      <?php foreach $val as $key => $value?>
        <li><?= e($key)?> : <?= e($value)?></li>
      <?php endforeach?>
    </ul>
    <!--
    <a href="?controller=list&action=informations&id=<?= e($val['id'])?>"><?= e($val['name']) ?></a></td>
    <td><?= e($val['category'])?></td>
    <td><?= e($val['year'])?></td>
    <td class='sansBordure'><a href='?controller=set&action=remove&id=<?= e($val['id'])?>'><img class='icone' src='Content/img/remove-icon.png'></a></td>
    <td class='sansBordure'><a href='?controller=set&action=form_update&id=<?= e($val['id'])?>'><img class='icone' src='Content/img/edit-icon.png'></a></td>
      -->
  </li>
  <?php endforeach?>
</ol>
