<?php session_start(); ?>
<html>
<head>
    <title>Access Denied</title>
</head>
<body>
<?php echo $_SESSION['Username']; ?>
<h1>You are not allowed on this page</h1>
<?php if (!isset($_SESSION['Login'])) {
    echo "<p>You will be redirected to the login page in 5 seconds.</p>";
    echo "<meta http-equiv=\"refresh\" content=\"5;url=login.php\"/>"; //Refreshes page in 5 seconds
} else if (!isset($_SESSION['Admin'])) {
    echo "<p>You will be redirected to your homepage in 5 seconds.</p>";
    echo "<meta http-equiv=\"refresh\" content=\"5;url=login.php\"/>";
}
?>


</body>
</html>