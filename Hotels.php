<?php

namespace app\models;

use PDO;

class Hotels extends \yii\db\ActiveRecord 
{
	public $pname;
	public $htypename;
	////////
	public static function tableName()
    {
		return 'doma';
    }
	public function attributeLabels()
    {
        return array(
            'name' => 'Название',
			'cat_translit' => 'Транслитация url',
		
        );
	}
	
    
	
}
