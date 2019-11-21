<?php

namespace app\models;

use PDO;

class HotelType extends \yii\db\ActiveRecord 
{
	
	////////
	public static function tableName()
    {
		return 'hotel_type';
    }
	public function attributeLabels()
    {
        return array(
            'name' => 'Название',
			'cat_translit' => 'Транслитация url',
		
        );
	}
	
    
	
}
