<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $character = $_REQUEST["character"];

    $myString = "language";
    echo "String: ". $myString . "<br>";
    $count = 0;
    echo "Vi tri xuat hien cua $character trong string la: ";
    for ($i = 0; $i < strlen($myString) ; $i++) {
        if ($character == $myString[$i]) {
            $count++;
            echo $i . ", ";
        }
    }
    echo "<br>";
    echo $count . " la so lan xuat hien cua " . $character;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Nhap vao mot chuoi</label>
    <br>
    <input type="text" name="character">
    <br>
    <button type="submit">Dem</button>
</form>
</body>
</html>
