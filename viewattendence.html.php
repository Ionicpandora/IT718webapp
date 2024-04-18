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
    <td><?php echo $result["id"]?></td>
    <td><?php echo $result["groupattended"]?></td>
    <td><?php echo $result["person"]?></td>
    <td><?php echo $result["dateattended"]?></td>
    <td><?php echo $result["attendend"]?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>