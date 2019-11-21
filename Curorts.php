<?php

namespace app\models;

use PDO;
//class User extends \yii\base\Object implements \yii\web\IdentityInterface
class Curorts extends \yii\db\ActiveRecord 
{
	
	////////
	
	
    public static function getCurortMenu($curort_name)
    {
		$kurort_pages = array();
		//$kurort_pages[""] = " all:".$num." hotels:".$hotels_count." private:".$private_count;
		$kurort_pages["home"] = $curort_name;
		$kurort_pages["Oteli"] = "Гостиницы";
		$kurort_pages["Chastnyj-sektor"] = "Частный сектор";
		$kurort_pages["dostoprimechatelnosti"] = "Достопримечательности";
		$kurort_pages["info"] = "Информация";
        return $kurort_pages;     
    }
	
}
