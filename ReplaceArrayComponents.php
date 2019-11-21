<?php
namespace app\components;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
 
class ReplaceArrayComponents extends Component{
	
	public static function getHotelTypeUrl($type){
		$replace = array("0" => "Oteli", "1" => "Chastnyj-sektor");
		return $replace[$type];
	}
	public static function getHotelTypeName($type){
		$replace = array("0" => "Гостиница", "1" => "Частный сектор");
		return $replace[$type];
	}
}
?>