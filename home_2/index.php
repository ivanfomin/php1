<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            border: 1px black solid;
        }

        td {
            border: 1px black dotted;
        }

        tr > td {
            text-align: center;
        }

        .table {
            display: inline-table;
        }
    </style>
    <title>Document</title>
</head>
<body>
<h1>HomeWork 2</h1>
<h2>Таблица истинности</h2>
<div class="table">
    <h3>Конъюнкция</h3>
    <table>
        <tr>
            <td><?php echo '||'; ?></td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>0</td>
            <td><?php var_dump(0 || 0); ?></td>
            <td><?php var_dump(0 || 1); ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php var_dump(1 || 0); ?></td>
            <td><?php var_dump(1 || 1); ?></td>
        </tr>
    </table>
</div>
<div class="table">
    <h3>Дизъюнкция</h3>
    <table>
        <tr>
            <td><?php echo '&&'; ?></td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>0</td>
            <td><?php var_dump(0 && 0); ?></td>
            <td><?php var_dump(0 && 1); ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php var_dump(1 && 0); ?></td>
            <td><?php var_dump(1 && 1); ?></td>
        </tr>

    </table>
</div>
<div class="table">
    <h3>Исключающие или</h3>
    <table>
        <tr>
            <td><?php echo 'xor'; ?></td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>0</td>
            <td><?php var_dump(0 xor 0); ?></td>
            <td><?php var_dump(0 xor 1); ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php var_dump(1 xor 0); ?></td>
            <td><?php var_dump(1 xor 1); ?></td>
        </tr>
    </table>
</div>

<!---------------------------------------------------------------->

<h2> Дискриминант квадратного уравнения</h2>
<?php
function disc($a, $b, $c)
{
    if ($a == 0) {
        return null;    //на ноль делить нельзя
    }
    $d = $b * $b - 4 * $a * $c;
    if ($d < 0) {
        return null;    //нет решений
    }
    $x1 = (-$b + sqrt($d)) / 2 * $a;
    $x2 = (-$b - sqrt($d)) / 2 * $a;

    return [$x1, $x2];
}

var_dump(disc(1, 3, 2));  //array(2) { [0]=> float(-1) [1]=> float(-2) }
var_dump(disc(1, 2, 3));  //NULL
var_dump(disc(2, -4, 2));   //array(2) { [0]=> float(4) [1]=> float(4) }
?>

<!---------------------------------------------------------->

<h2>Оператор include</h2>
<?php
$arr = include __DIR__ . '/array.php';
var_dump($arr); //array(3) { [0]=> string(1) "A" [1]=> string(1) "B" [2]=> string(1) "C" }
?>

<!------------------------------------------------------------------->

<h2>Пол человека</h2>
<?php
function gender(string $name)
{
    //примитивное решение
    $sym = substr($name, -2);
    if ($sym == 'а' || $sym == 'я') {
        return 'female';
    } elseif ($sym == 'ь' || $sym == 'ъ' || $sym == 'ы') {
        return null;
    } else {
        return 'male';
    }
}

echo gender('Марина');  //female
echo gender('Катя');    //female
echo gender('Борис');   //male
echo gender('Алексей');   //male
var_dump( gender("Окунь"));   //NULL

?>
</body>
</html>
