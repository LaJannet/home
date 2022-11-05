<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$word = ["врач", "юрист", "учитель"];
$remain = count($word);
$answer = [];
$guess = "";
$answer[0] = $word[0];
$answer[count($word) - 1] = $word[count($word) - 1];
for ($i=1; $i < count($word) - 1; $i++) { 
    echo "$word[$i]\n";
}
ob_end_flush();
?>
<input type="button" name="bb" size="50" value="<?= $check() ?> ">
</body>
</html>
