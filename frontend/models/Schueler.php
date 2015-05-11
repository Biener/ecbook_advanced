<?php

namespace frontend\models;


use Yii;

/**
 * This is the model class for table "schueler".
 *
 * @property integer $s_schuelernummer
 * @property string $s_religionsbekenntnis
 * @property integer $s_istklassensprecher
<<<<<<< HEAD
 * @property string $p_nachname
 * @property string $p_vorname
 * @property string $p_geburtsdatum
 * @property string $k_name
 * @property string $Eltern_e_id
 * @property string $Schuelercol
 *
 * @property Fehlstunde[] $fehlstundes
 * @property Krankmeldung[] $krankmeldungs
 * @property Eltern $elternE
 * @property Klasse $kName
 * @property Person $pNachname
=======
 * @property string $k_name
 * @property string $e_id
 * @property string $s_nachname
 * @property string $s_vorname
 * @property string $s_geburtsdatum
 *
 * @property Fehlstunde[] $fehlstundes
 * @property Krankmeldung[] $krankmeldungs
 * @property Eltern $e
 * @property Klasse $kName
 * @property Person $sNachname
>>>>>>> 1c0133aafca158e0b9a06c16b1cf59c69b26079b
 */
class Schueler extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schueler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_schuelernummer', 's_istklassensprecher', 'p_nachname', 'p_vorname', 'p_geburtsdatum', 'k_name', 'Eltern_e_id'], 'required'],
            [['s_schuelernummer', 's_istklassensprecher'], 'integer'],
            [['s_religionsbekenntnis', 'p_nachname', 'p_vorname', 'p_geburtsdatum', 'k_name', 'Eltern_e_id', 'Schuelercol'], 'string', 'max' => 45],
            [['s_schuelernummer', 's_istklassensprecher', 'k_name', 's_nachname', 's_vorname', 's_geburtsdatum'], 'required'],
            [['s_schuelernummer', 's_istklassensprecher'], 'integer'],
            [['s_geburtsdatum'], 'safe'],
            [['s_religionsbekenntnis', 'k_name', 'e_id', 's_nachname', 's_vorname'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_schuelernummer' => 'S Schuelernummer',
            's_religionsbekenntnis' => 'S Religionsbekenntnis',
            's_istklassensprecher' => 'S Istklassensprecher',
            'p_nachname' => 'P Nachname',
            'p_vorname' => 'P Vorname',
            'p_geburtsdatum' => 'P Geburtsdatum',
            'k_name' => 'K Name',
            'Eltern_e_id' => 'Eltern E ID',
            'Schuelercol' => 'Schuelercol',
            'k_name' => 'K Name',
            'e_id' => 'E ID',
            's_nachname' => 'S Nachname',
            's_vorname' => 'S Vorname',
            's_geburtsdatum' => 'S Geburtsdatum',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFehlstundes()
    {
        return $this->hasMany(Fehlstunde::className(), ['s_schuelernummer' => 's_schuelernummer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKrankmeldungs()
    {
        return $this->hasMany(Krankmeldung::className(), ['s_schuelernummer' => 's_schuelernummer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getElternE()
    {
        return $this->hasOne(Eltern::className(), ['e_id' => 'Eltern_e_id']);
		}
    public function getE()
    {
        return $this->hasOne(Eltern::className(), ['e_id' => 'e_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKName()
    {
        return $this->hasOne(Klasse::className(), ['k_name' => 'k_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPNachname()
    {
        return $this->hasOne(Person::className(), ['p_nachname' => 'p_nachname', 'p_vorname' => 'p_vorname', 'p_geburtsdatum' => 'p_geburtsdatum']);
    }
	public function getSNachname()
    {
        return $this->hasOne(Person::className(), ['p_nachname' => 's_nachname', 'p_vorname' => 's_vorname', 'p_geburtsdatum' => 's_geburtsdatum']);
    }
	//myCode
	
	
}
