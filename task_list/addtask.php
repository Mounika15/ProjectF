<html>
<body>
<div class="welcome">
<h1>Add Task</h1>
<strong> <p> Welcome, <?php echo $_COOKIE['my_name']?> <?php echo $_COOKIE['my_lname']?></p></strong>
</div>
<div class="login">
<form style="margin-left:18px;" method = 'post' action='index.php'>
<strong> Task: </strong><br> <input type='text' name='task'/><br><br>
<strong> Description: </strong><br> <input type='text' name='description'/><br><br>
<strong> Date: </strong><br> <input type="date" name = "datetodo"><br><br>
<strong> Time: </strong><br> <input type="time" name="timetodo"><br><br>
<input type="hidden" name="userid" value="<?php echo $_COOKIE['my_id']; ?>">
<input type = 'hidden' name = 'action' value='addtask'><br>
<input type="submit" value="Add Task"/>
</form>
</div>
</body>
</html>