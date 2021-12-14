<table id="nobels">
  <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Year</th>
  </tr>
  <?php //var_dump($last_25); ?>
<?php foreach($last_25 as $cle => $val) :?>
  <?php //if(isset($_GET['start'])) $num_id = ($nb_nobels-( 25 * ( $_GET['start'] - 1 ))) - $cle;
        //else $num_id = $nb_nobels - $cle;
  ?>
  <tr>
    <td><a href="?controller=list&action=informations&id=<?= e($val['id'])?>"><?= e($val['name']) ?></a></td>
    <td><?= e($val['category'])?></td>
    <td><?= e($val['year'])?></td>
    <td class='sansBordure'><a href='?controller=set&action=remove&id=<?= e($val['id'])?>'><img class='icone' src='Content/img/remove-icon.png'></a></td>
    <td class='sansBordure'><a href='?controller=set&action=form_update&id=<?= e($val['id'])?>'><img class='icone' src='Content/img/edit-icon.png'></a></td>
  </tr>
<?php endforeach?>
</table>
