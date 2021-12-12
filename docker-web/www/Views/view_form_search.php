<?php require "view_begin.php"; ?>
<h1>Find among Nobel Prizes</h1>
    <form action = "?controller=search&action=pagination" method="post">
			<p> <label> Name contains: <input type="text" name="name"/> </label> </p>
			<p> <label> Year:</label>
          <select name="Sign">
            <option value="=">=</option>
            <option value="&lt;=">&lt;=</option>
            <option value="&gt;=">&gt;=</option>
          </select>
          <input type="text" name="year" value=""/>
      </p>
			<p>  <input type="submit" value="Search"/> </p>
    </form>
<?php require "view_end.php"; ?>
