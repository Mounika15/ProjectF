<?php
foreach ($result3 as $res3):
endforeach;
?>
<html>

<body>

<h1>Edit Task</h1>
<strong> <p> Welcome, <?php $fname = $_SESSION['first_name']; echo $fname;?> <?php $lname = $_SESSION['last_name']; echo $lname;?></p></strong>



<div class="login">
<h3>Previous Tasks</h3>
<strong>Task: </strong><input type="text" name="" value=" <?php echo $res3['todo']; ?>"><br>
<strong>Description: </strong><input type="text" name="" value=" <?php echo $res3['description']; ?>"><br>
<strong>Date: </strong><input type="text" name="" value=" <?php echo $res3['date']; ?>"><br>
<strong>Time: </strong><input type="text" name="" value=" <?php echo $res3['time']; ?>"><br>
</div>
<br>
<div class="login1">
 <h3>Tasks to be Done</h3>

<form style="margin-top: 15px;" action="index.php" method="post">
 <strong>Task: </strong><input type="text" name="edtask"><br>
 <strong>Description: </strong><input type="text" name="edescription"><br>
 <strong>Date: </strong><input type="date" name="date" ><br>
 <strong>Time: </strong><input type="time" name="time" ><br><br><br>
 <input type="hidden" name="user_id" value="<?php echo $res3['id']; ?>">
 <input type="submit" value="Edit">
 <input type="hidden" name='action' value="etask">
 </form>
 </div>


</body>
</html>
