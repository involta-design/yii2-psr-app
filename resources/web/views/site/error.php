<?php

use yii\base\Exception as BaseException;
use yii\helpers\Html;
use yii\web\AssetBundle;
use yii\web\View;
use Yiisoft\Http\Status;

/** @var View $this */
/** @var AssetBundle $themeAssets */
/** @var BaseException $exception */
/** @var string $message */

$assetUrl = $themeAssets->baseUrl;

$this->params['errorStatusCode'] = $exception->statusCode;
?>

<?php
if ($exception->statusCode === Status::NOT_FOUND): ?>
    <div class="container">
        <div class="theme theme-basket not-found">
            <h1>Страница не найдена</h1>
            <div class="medium-text">
                <p> Проверьте написание ссылки или пути в строке ввода
                    адреса сайта</p>
            </div>
            <div class="mt-40">
                <div class="columns">
                    <div class="column col-6 md-col-12">
                        <a href="/" class="button button-full button-glass active">Вернуться на главную</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
else: ?>
    <div class="header-main"><h1><?= nl2br(Html::encode($message)) ?></h1></div>
<?php
endif ?>