<!DOCTYPE html>
<html>
<head>
<title>Attendence Tracker</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Viewing attendence records of <?php echo $viewgroup ?></h1>
<table>
<?php foreach($results as $result):?>
    <tr>
    <td><?php echo $result[0]?></td>
    <td><?php echo $result[1]?></td>
    <td><?php echo $result[2]?></td>
    <td><?php echo $result[3]?></td>
    <td><?php echo $result[4]?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>