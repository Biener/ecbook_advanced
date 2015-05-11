<?
namespace app\models;

use yii\db\ActiveRecord;
use 

class SchuelermKlasse extends ActiveRecord
{ 
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return 'schueler';
    }

	//Funktionsaufruf
	public function Schueler(){
		//AR für Schüler der Klasse 3BAIF alle in ein Array speichern 
	$table = schueler::find()
	->where(['Klasse' => "3BAIF"])
	->orderBy('s_nachname')
	->asArray()
	->all();
	// Wie viele Schüler mit der Klasse
	
	
	//Variablen befüllen
	for
	$name[] = $table->s_nachname + $table->s_vorname;
	$klasse[] = $table->klasse;
	
	return $name, $klasse;
	}*/
	
	
}
?>