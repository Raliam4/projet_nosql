<?php require "view_begin.php"; ?>
<h1>Add a Darwin prize</h1>
    <form action = "?controller=set&action=add" method="post">
			<p> <label> Name: <input type="text" name="name"/> </label> </p>
			<p> <label> Domain: <input type="text" name="domain"/> </label></p>
			<p> <label> Death Date: <input type="text" name="deathdate"/></label> </p>
			<p> <label> Death Cause: <input type="text" name="deathcause"/> </label></p>
			<p>  <input type="submit" value="Add in database"/> </p>
    </form>
<?php require "view_end.php"; ?>
