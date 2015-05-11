<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Schueler;

class KlassController extends Controller
{
    public function actionFehlstunden()
    {
		$klasse = '3baif'	
        $query = Schueler::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $schueler = $query-> where('k_name'=>$klasse)
			->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'Schueler' => $schueler,
            'pagination' => $pagination,
			'Klasse' =>$klasse,
        ]);
    }
}