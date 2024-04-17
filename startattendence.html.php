<!DOCTYPE html>
<html>
<head>
<title>startattendence</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="homepage.html">Homepage</a>
<h1>Start attendence</h1>
<form action="index.php" method="get">
    <?php foreach($followingdata as $result):?>
        <input required type="radio" id=<?php echo $result; ?> name=<?php echo $result; ?> value=<?php echo $result; ?>>
        <label for=<?php echo $result; ?>><?php echo $result; ?></label><br>
    <?php endforeach; ?>
    <input type="hidden" name="completeattendence" id="completeattendence" required>
    <input type="submit" value="Submit">
  </form>

</body>
</html>