
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>querystrings</title>
    <link rel="stylesheet" href="les6.css">
</head>
<body>
    <?php
 
echo $_GET['stad'];
echo "<br>";
echo $_GET['temperatuur'];
echo "<br>";
echo $_GET['land'];

?>

</body>
</html>


<!-- http://localhost:88/06/querystrings.php?stad=Amsterdam&temperatuur=23&land=Nederland -->