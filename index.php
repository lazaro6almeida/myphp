<!DOCTYPE html>
<?php 
        include 'cfunctions.php';
?>

<html>
    <head>
        <title>Lazaro</title>
        <script src="welcome.js"></script>
</head>
<body>



<form action="index.php" method="get">
Edoc: <input type="text" name="edoc"><br>
<input type="submit">
</form>

<?php
stringURL($_GET["edoc"]);
?>


</body>
</html>