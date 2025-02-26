<html>
<head>
<title><?php echo "Welcome to my web site!";?></title>
</head>
<body>

<?php
foreach ($_SERVER as $var => $value) {
    echo "$var => $value <br />";
}
?>

</body>
</html>

