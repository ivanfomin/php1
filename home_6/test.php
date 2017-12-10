<?php
include_once 'GuestBook.php';
include_once 'Uploader.php';

$book = new GuestBook(__DIR__ . '/guestBook.txt');

var_dump($book->getData());

$book->append('How are You? ');

var_dump($book->getData());

$book->save();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestForm</title>
</head>
<body>

<?php
$name = 'myFile';
$uploader = new Uploader($name);
?>

<form method="post" action="<?php $uploader->upload(); ?>" enctype="multipart/form-data">
    <input type="file" name=<?php echo $name; ?>>
    <input type="submit">
</form>

</body>
</html>
