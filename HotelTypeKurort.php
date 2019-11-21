<?php

namespace app\models;

use PDO;

class HotelTypeKurort extends \yii\db\ActiveRecord 
{
	
	////////
	public static function tableName()
    {
		return 'hotel-type-kurort';
    }
	public function attributeLabels()
    {
        return array(
            'name' => 'Название',
			'cat_translit' => 'Транслитация url',
		
        );
	}
	
    
	
}
