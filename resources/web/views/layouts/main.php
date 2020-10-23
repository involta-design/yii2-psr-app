<?php

use App\Assets\AppAsset;

/** @var \yii\web\View $this */
/** @var string $content */

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()?>
<?=$content?>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
