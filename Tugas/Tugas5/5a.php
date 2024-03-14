<?php
$mahasiswa = ["Azhar","Akbar","Azzam"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php
 foreach ($mahasiswa as $list)
 echo "<li>$list</li>"
     ?>
     </ol>
</body>
</html>
