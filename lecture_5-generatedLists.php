<?php
$array = [
    [
         "Кофе",
         "Чай",
        "Молоко",
     "Колбаса",
      ]
];




function generateOl(array $array )
{
    $html = '<h3> Список поупок </h3>';

    $html .= '<ul>';
    foreach ($array[0] as $item) {
        $html .= "<li>$item</li>";
    }
    $html .= '<ul>';

    return $html;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>формирования html списков для массива</title>

</head>
<body>
<?= generateOl($array) ?>


</body>
</html>
