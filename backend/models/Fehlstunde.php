<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fehlstunde".
 *
 * @property string $fs_datum
 * @property string $fs_grund
 * @property integer $s_schuelernummer
 * @property string $Unterrichtsfach_uf_bezeichnung
 *
 * @property Schueler $sSchuelernummer
 * @property Unterrichtsfach $unterrichtsfachUfBezeichnung
 */
class Fehlstunde extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fehlstunde';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fs_datum', 'fs_grund', 's_schuelernummer', 'Unterrichtsfach_uf_bezeichnung'], 'required'],
            [['fs_datum'], 'safe'],
            [['s_schuelernummer'], 'integer'],
            [['fs_grund', 'Unterrichtsfach_uf_bezeichnung'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fs_datum' => 'Fs Datum',
            'fs_grund' => 'Fs Grund',
            's_schuelernummer' => 'S Schuelernummer',
            'Unterrichtsfach_uf_bezeichnung' => 'Unterrichtsfach Uf Bezeichnung',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSSchuelernummer()
    {
        return $this->hasOne(Schueler::className(), ['s_schuelernummer' => 's_schuelernummer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnterrichtsfachUfBezeichnung()
    {
        return $this->hasOne(Unterrichtsfach::className(), ['uf_bezeichnung' => 'Unterrichtsfach_uf_bezeichnung']);
    }
}
