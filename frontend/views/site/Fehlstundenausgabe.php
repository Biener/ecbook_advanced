<?php
/* @var $this yii\web\View */
$this->title = 'Fehlstunden';
$this->params['breadcrumbs'][] = $this->title;
use common\models;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;
$x = 1; 


?>
<div class="site-index">
	<?php
	print ('Informationen zu'+$this->Klasse+' Fehlstunden');
	?>
 
    <div class="body-content">
	<?php
	echo Highcharts::widget([
	'scripts' => [
        'modules/exporting',
        'themes/grid-light',
    ],
   'options' => [
      'type'=> 'column' 
       'title' => [
            'text' => 'Fehlstunden der '+$this->Klasse+'',
        ],
	'xAxis' => [
            'categories' => 
				$this->Schuelername;
				,
        ],
	'series' => [
	$this[]->Schueler;
		]	
   ]
])
	
	?>
    </div>
</div>
