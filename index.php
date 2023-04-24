<!DOCTYPE html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<html class="sb-init">

<head>
    <base href="/templates/modex/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/favicon.ico" rel="shortcut icon">
    <!-- CSS -->
    <link href="assets/css/preload.css" rel="stylesheet" type="text/css">
    <link href="assets/css/vendors.css" rel="stylesheet" type="text/css">
    <link href="assets/css/syntaxhighlighter/shCore.css" rel="stylesheet" type="text/css">
    <link href="/lib/jQuery_ui/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style_color.css?v=11" rel="stylesheet" type="text/css" title="default">
    <link href="assets/css/width-full.css" rel="stylesheet" type="text/css" title="default">
    <link href="/templates/modex/css/catalogue/catalogue.css" rel="stylesheet" type="text/css">
    <link href="/modules/slider/css/style.css" rel="stylesheet" type="text/css">
    <link href="css/astself.css" rel="stylesheet" type="text/css">
    <!-- JS -->
    <script async="" src="https://mc.yandex.ru/metrika/tag.js"></script>
    <script src="assets/js/vendors.js"></script>
    <script src="/lib/jQuery_ui/jquery-ui.js"></script>
    <title>Об оплате - AMotors.spb</title>
    <meta name="keywords"
        content="автосервис шушары, автосервис Пушкин, автозапчасть адрес телефон, автозапчасти шушары, магазин автозапчастей +в пушкине, автосервис отзывы">
    <meta name="description" content="Автосервис Автошуши в Шушарах автозапчасти Пушкин СТО">
    <link rel="stylesheet" href="/templates/modex/css/docpart/style.css" type="text/css">
    <script src="/lib/jQuery_ui/jquery-ui.js"></script>
    <link href="/lib/jQuery_ui/jquery-ui.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet"
        type="text/css">
</head>

<?php

class Registry
    implements Iterator
{

    public function set($key, $val)
    {
        $this->storage[$key] = $val;
    }

    public function get($key)
    {
        return $this->storage[$key];
    }

    public function current()
    {
        return current($this->storage);
    }

    public function key()
    {
        return key($this->storage);
    }

    public function next(): void
    {
        next($this->storage);
    }

    public function delete()
    {
        return $this->storage=[];
    }

    public function rewind(): void
    {
        reset($this->storage);
    }

    public function valid(): bool
    {
        return null !== key($this->storage);
    }

}

$test = new Registry;
echo 'До итерации: '; 
$test->set('keywords', 'автосервис шушары, автосервис Пушкин, автозапчасть адрес телефон, автозапчасти шушары, магазин автозапчастей +в пушкине, автосервис отзывы');
$test->set('description', 'Автосервис Автошуши в Шушарах автозапчасти Пушкин СТО');

foreach ($test as $key => $val) {
    echo $key . '=>' . $val;
    echo "<br><br>";
}
?><br><br><?php

$test->delete();

echo 'После итерации: '; 
foreach ($test as $key => $val) {
    echo $key . '=>' . $val;
    echo "<br><br>";
}
?>

</html>