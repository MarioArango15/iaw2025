<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <?php
        $x = TRUE;
        $y = FALSE;
        $z = ($y || $x);
        if ($z) {
            echo "TRUE";
        } else {
            echo "FALSE";
        }
    ?>
</body>
</html>
