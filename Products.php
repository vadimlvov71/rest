<?php

namespace app\models;

use PDO;
//class User extends \yii\base\Object implements \yii\web\IdentityInterface
class Products extends \yii\db\ActiveRecord 
{
	
	////////
	public static function tableName()
    {
		return 'products';
    }
	public function attributeLabels()
    {
        return array(
            'name' => 'Название',
			'cat_translit' => 'Транслитация url',
		
        );
	}
	
    public static function getTopMenu()
    {
		$wrapper = array();
		$container = array();
		$arr = static::find()
		->select(['COUNT(goods.id) as total', 'categories.id', 'categories.name', 'cat_translit'])
		->leftJoin('goods', 'goods.category_id = categories.id')
		->groupBy('goods.category_id')
		->all();
		foreach ($arr as $a){
			
				$container["name"] = $a["name"];
				$container["cat_translit"] = $a["cat_translit"];
				$container["total"] = $a["total"];
				$wrapper[] = $container;
		}
		/*echo "<pre>";
		print_r($arr[0]);*/
        return $wrapper;  
            
    }
	
}
