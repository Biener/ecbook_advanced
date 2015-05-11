<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1><?=$Klasse?></h1>
<ul>
<?php foreach ($Schueler as $KSchueler): ?>
    <li>
        <?= Html::encode("{$KSchueler->name}") ?>:
        
    </li>
<?php endforeach; ?>
</ul>

