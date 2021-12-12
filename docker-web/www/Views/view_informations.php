<?php require "view_begin.php"; ?>
<table>
  <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Year</th>
    <th>Birthplace</th>
    <th>Birthdate</th>
    <th>County</th>
    <th>Story</th>
    <th>Motivation</th>
  </tr>
  <tr>
    <?php if($name !== null) : ?>
      <td><?= e($name)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($category !== null) : ?>
      <td><?= e($category)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($year !== null) : ?>
      <td><?= e($year)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($birthplace !== null) : ?>
      <td><?= e($birthplace)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($birthdate !== null) : ?>
      <td><?= e($birthdate)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($county !== null) : ?>
      <td><?= e($county)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($story !== null) : ?>
      <td><?= e($story)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
    <?php if($motivation !== null) : ?>
      <td><?= e($motivation)?></td>
    <?php else :?>
      <td><?= '???'?></td>
    <?php endif ?>
</tr>
</table>
<?php require "view_end.php"; ?>
