<?php$UserName=$_SESSION["username"];$connect = mysql_connect("mysql.tour-home.org", "stevenpakfunglau", "libertinelux")  or die("Couldn't connect to the database");mysql_select_db("pakfung_phplogin");	//get the profile of the current user from database.	$query=mysql_query("select * from users natural join profile where username='$UserName'") or die(mysql_error());	$result=mysql_fetch_array($query);	$destination=$result['image'];	$imgpreviewsize=1/2;	$image_size = getimagesize($destination);	echo "Your picture:<br>";	echo "<img src=\"".$destination."\" width=".(200)." height=".(150)." border='0'><br><br>";	?>	<form name='form1' method='post' action="picture.php" enctype="multipart/form-data">	update your picture<br>	<input type="file" name="file1" id="file1"></input></td>	<input name='compare' type='submit' id='compare' value='upload'></input><br>	</form>	<div class='input-prepend'>	<form name='form1' method='post' action='edit_go.php'>	<span class='add-on'>	Contact:<i class='icon-lock'></i>	</span><input class='span2' name='contact' type='text' size='15' id='contact' value="<?php echo $result['contact']; ?>"></input><br><br>	<span class='add-on'>	Age:<i class='icon-envelope'></i>	</span><input class='span2' name='age' type='text' size='15' id='age' value="<?php echo $result['age']; ?>"></input><br><br>	<span class='add-on'>	Gender:<i class='icon-envelope'></i>	</span><input class='span2' name='gender' type='text' size='15' id='gender' value="<?php echo $result['gender']; ?>"></input><br><br>	<button id='signin' type='submit' class='btn btn-primary'>Edit</button>	</form>	</div>		