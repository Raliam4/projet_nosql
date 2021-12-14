<?php require "view_begin.php"; ?>
<h1>Add a Darwin prize</h1>
    <form action = "?controller=set&action=add_darwin" method="post">
			<p> <label> Name: <input type="text" name="name"/> </label> </p>
			<p> <label> Death Cause: <input type="text" name="death_cause"/> </label></p>
			<p>  <input type="submit" value="Add in database"/> </p>
    </form>
<?php require "view_end.php"; ?>
