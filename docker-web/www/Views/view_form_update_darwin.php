<?php require "view_begin.php"; ?>
<h1>Modify a Nobel prize</h1>
    <form action = "?controller=set&action=update" method="post">
      <input type="hidden" name="id" value="<?=$id?>">
			<p> <label> Name: <input type="text" name="name" value="<?=$name?>"/> </label> </p>
			<p> <label> Year: <input type="text" name="year" value="<?=$year?>"/> </label></p>
			<p> <label> Birth Date: <input type="text" name="birthdate" value="<?=$birthdate?>"/> </label> </p>
			<p> <label> Birth Place: <input type="text" name="birthplace" value="<?=$birthplace?>"/> </label></p>
			<p> <label> County: <input type="text" name="county" value="<?=$county?>"/> </label></p>

			<p>
        <?php foreach ($categories as $key => $value):?>
          <?php if($value === $category) : ?>
            <label> <input type="radio" name="category" value="<?=$value?>" checked/> <?=$value?> </label>
          <?php else : ?>
            <label> <input type="radio" name="category" value="<?=$value?>" /> <?=$value?> </label>
          <?php endif ?>
        <?php endforeach?>
			</p>
			<textarea name="motivation" cols="70" rows="10"><?=$motivation?></textarea>
			<p>  <input type="submit" value="Update in database"/> </p>
    </form>
<?php require "view_end.php"; ?>
