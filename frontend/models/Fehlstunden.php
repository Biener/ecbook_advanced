<?php

namespace app\models;

use yii\db\ActiveRecord;

class Fehlstunden extends ActiveRecord
{
    public static function tableName()
    {
        return 'fehlstunden';
    }

	$SchuelerKlasse = Schueler::find()
    ->select('Schueler.*')
    ->where(['Klasse' => $_GET['Klasse']])
    ->all();
	
}