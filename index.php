<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADB - Assignment 06</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>

  <div>
    <form action="result.php" method="post">
      <p>
        <label for="Name">Enter text to find:</label>
        <input type="text" name="word">
      </p>
      <p>
        <input type="submit" name="Submit" value="Search">
      </p>
    </form>
  </div><br><br>

  <div>
  	<h3>Click below to view books!</h3>
  	<a href="books.php?name=Alice.txt">Alice.txt</a><br>
  	<a href="books.php?name=CandideEn.txt">CandideEn.txt</a><br>
  	<a href="books.php?name=CandideFr.txt">CandideFr.txt</a><br>
  	<a href="books.php?name=Shakespeare.txt">Shakespeare.txt</a><br>
  	<a href="books.php?name=Adventures.txt">Adventures.txt</a>
  </div>
</body>
</html>