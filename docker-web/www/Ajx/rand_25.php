<?php
include "../Models/Model.php";
include "../Utils/functions.php";
$mod = Model::getModel();
$max = (int)($mod->getNbNobelPrizes()/25);
$min = 1; // pas 0 pcq on a déja les 25 premiers 
$offset = rand($min, $max); //un entier au hasard en min et max
$next_25 =  $mod->getNobelPrizesWithLimit($offset);
foreach($next_25 as $key=>$val) :
?>
    <tr>
        <td><a href="?controller=list&action=informations&id=<?= e($val['id'])?>"><?= e($val['name']) ?></a></td>
        <td><?= e($val['category'])?></td>
        <td><?= e($val['year'])?></td>
        <td class='sansBordure'><a href='?controller=set&action=remove&id=<?= e($val['id'])?>'><img class='icone' src='Content/img/remove-icon.png'></a></td>
        <td class='sansBordure'><a href='?controller=set&action=form_update&id=<?= e($val['id'])?>'><img class='icone' src='Content/img/edit-icon.png'></a></td>
    </tr>
<?php endforeach?>
  