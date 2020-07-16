<h1> Artist Insertion Template</h1>
<p> Enter artist name that you want to insert </p>
<?php
  
   $user = 'user';
   $password = 'redhat';
   $host = 'localhost';
   $db = 'albums';
   $dbh = mysqli_connect($host,$user,$password,$db);
   if (isset($_GET['submit'])) {
   	$c = $_GET['centigrade'];
   	$query = "insert into artists (artist_name) values ('$c')";
   	$result = mysqli_query($dbh,$query);
   }
?>


<form method="get"  act`ion="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="centigrade"> </input>
<br>
<input type="submit" value="Convert" name="submit"></input>
</form>
