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
    <?php foreach($results as $result):?>
        <input required type="radio" id=<?php echo $result["person"]; ?> name=<?php echo $result["person"]; ?> value=<?php echo $result["person"]; ?>>
        <label for=<?php echo $result["person"]; ?>><?php echo $result["person"]; ?></label><br>
    <?php endforeach; ?>
    <input type="hidden" name="completeattendence" id="completeattendence" required>
    <input type="submit" value="Submit">
  </form>

</body>
</html>