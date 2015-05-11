<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "klasse".
 *
 * @property string $k_name
 * @property string $k_jahrgang
 * @property string $k_abschlussjahr
 * @property integer $k_schueleranzahl
 * @property string $k_abt_bezeichnung
 * @property string $k_semester
 * @property integer $Schulform_schf_id
 *
 * @property Abteilung $kAbtBezeichnung
 * @property Schulform $schulformSchf
 * @property Schueler[] $schuelers
 */
class Klasse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'klasse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['k_name', 'k_abt_bezeichnung', 'Schulform_schf_id'], 'required'],
            [['k_schueleranzahl', 'Schulform_schf_id'], 'integer'],
            [['k_semester'], 'safe'],
            [['k_name', 'k_jahrgang', 'k_abschlussjahr', 'k_abt_bezeichnung'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'k_name' => 'K Name',
            'k_jahrgang' => 'K Jahrgang',
            'k_abschlussjahr' => 'K Abschlussjahr',
            'k_schueleranzahl' => 'K Schueleranzahl',
            'k_abt_bezeichnung' => 'K Abt Bezeichnung',
            'k_semester' => 'K Semester',
            'Schulform_schf_id' => 'Schulform Schf ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKAbtBezeichnung()
    {
        return $this->hasOne(Abteilung::className(), ['abt_bezeichnung' => 'k_abt_bezeichnung']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchulformSchf()
    {
        return $this->hasOne(Schulform::className(), ['schf_id' => 'Schulform_schf_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchuelers()
    {
        return $this->hasMany(Schueler::className(), ['k_name' => 'k_name']);
    }
}
