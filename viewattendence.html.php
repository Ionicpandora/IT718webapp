<!DOCTYPE html>
<html>
<head>
<title>takingattendence</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>viewing attendenc records of: <?php echo $viewgroup;?></h1>
<table>
    <?php foreach($results as $result):?>
        <tr>
            <input required type="radio" id=<?php echo $result?> name=<?php echo $result?> value=<?php echo $result?>>
            <label for=<?php echo $result?>><?php echo $result?></label><br>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>