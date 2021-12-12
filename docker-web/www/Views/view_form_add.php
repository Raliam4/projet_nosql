<?php require "view_begin.php"; ?>
<h1>Add a Nobel prize</h1>
    <form action = "?controller=set&action=add" method="post">
			<p> <label> Name: <input type="text" name="name"/> </label> </p>
			<p> <label> Year: <input type="text" name="year"/> </label></p>
			<p> <label> Birth Date: <input type="text" name="birthdate"/></label> </p>
			<p> <label> Birth Place: <input type="text" name="birthplace"/> </label></p>
			<p> <label> County: <input type="text" name="county"/></label> </p>
			<p> <label> Story: <input type="text" name="story"/></label></p>

			<p>
				<label> <input type="radio" name="category" value="chemistry" /> Chemistry </label>
				<label> <input type="radio" name="category" value="economics" /> Economics </label>
				<label> <input type="radio" name="category" value="literature" /> Literature </label>
				<label> <input type="radio" name="category" value="medicine" /> Medicine </label>
				<label> <input type="radio" name="category" value="peace" /> Peace </label>
				<label> <input type="radio" name="category" value="physics" /> Physics </label>

			</p>
			<textarea name="motivation" cols="70" rows="10"></textarea>
			<p>  <input type="submit" value="Add in database"/> </p>
    </form>
<?php require "view_end.php"; ?>
