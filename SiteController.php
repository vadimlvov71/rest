<?php

namespace app\controllers;

use Yii;
use PDO;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Site;
use app\models\Products;
use app\models\HotelType;
use app\models\Hotels;
use app\models\Catalog;
use app\models\Dost;
use \yii\base\HttpException;
use \yii\db\Expression;
use \yii\helpers\Url;

use yii\web\Response;

class SiteController extends Controller
{

    public function actionIndex()
    {
		//$name = Yii::$app->getRequest()->getQueryParam('name');
		$id_catalog = Yii::$app->params['id_catalog'];
		$catalog = Catalog::find()
			   ->select(['id_catalog', 'name', 'url'])
				->where(['id_catalog' => $id_catalog])
			   //->orWhere(['type' => 11])
			  ->one()
			  ;
		$id_catalog =	$catalog["id_catalog"];
		//////////
		$catalogs = Catalog::find()
			   ->select(['id_catalog', 'name', 'url'])
			   ->orderBy(['id_catalog' => 'DESC'])
			   ->all()
			  ;

		//////////
		$products = Products::find()
		   ->select(['id_product', 'name', 'translit'])
		   //->leftJoin('categories', 'categories.id = goods.category_id')
		   //->distinct()
		  ->where(['id_catalog' => $catalog["id_catalog"]])
		  //->andWhere(['goods.visible' => 'show'])
		   //->orWhere(['type' => 11])
		   ->orderBy(['name' => SORT_DESC])
		   ->limit(12)
		   ->all()
		  ;
		//////////
		$products1 = Products::find()
		   ->select(['id_product', 'name', 'translit'])
		   //->leftJoin('categories', 'categories.id = goods.category_id')
		   //->distinct()
		  ->where(['id_catalog' => $catalog["id_catalog"]])
		  //->andWhere(['goods.visible' => 'show'])
		   //->orWhere(['type' => 11])
		   ->orderBy(['name' => SORT_DESC])
		   ->limit(12)
		   ->offset(12)
		   ->all()
		  ;
		//////////
		$hotel_types = HotelType::find()
			->where(['id_catalog' => $id_catalog])
			->all()
			;
		//////
		$hotels = Hotels::find()
			->select(['doma_id', 'doma.id_product', 'doma.name', 'hotel_type.name as htypename', 'products.name as pname'])
			->leftJoin('products', 'products.id_product = doma.id_product')
			->leftJoin('hotel_type', 'hotel_type.id = doma.sektor')
			->where(['doma.id_catalog' => $id_catalog])
			->andWhere(['doma.gold' => 4])
			->orderBy(['doma.doma_id' => SORT_DESC])
			->limit(8)
			->all()
			;
		//////////
		//////////
		$dosts = Dost::find()
			   ->select(['dost.id_dost', 'dost.id_catalog', 'dost.smallfoto', 'dost.name', 'products.translit as translit', 'catalogs.url as url'])
				->leftJoin('catalogs', 'catalogs.id_catalog = dost.id_catalog')
				->leftJoin('products', 'products.id_product = dost.id_product')
			   ->where(['dost.id_catalog' => $id_catalog])
			   ->orderBy(['dost.id_dost' => SORT_DESC])
				->limit(8)
			   ->all()
			  ;
		
		echo $this->render('/index/index', array(
			'catalogs' => $catalogs,
			'products' => $products,
			'products1' => $products1,
			'catalog' => $catalog,
			'hotels' => $hotels,
			'hotel_types' => $hotel_types,
			'dosts' => $dosts,
		));
    }
   
     public function actionCatalog()
    {
		$name = Yii::$app->getRequest()->getQueryParam('name');
		$catalog = Catalog::find()
			   ->select(['id_catalog', 'name', 'url'])
				->where(['url' => $name])
			   //->orWhere(['type' => 11])
			  ->one()
			  ;
		$id_catalog =	$catalog["id_catalog"];
		//////////
		$catalogs = Catalog::find()
			   ->select(['id_catalog', 'name', 'url'])
			   ->orderBy(['id_catalog' => 'DESC'])
			   ->all()
			  ;

		//////////
		$products = Products::find()
		   ->select(['id_product', 'name', 'translit'])
		   //->leftJoin('categories', 'categories.id = goods.category_id')
		   //->distinct()
		  ->where(['id_catalog' => $catalog["id_catalog"]])
		  //->andWhere(['goods.visible' => 'show'])
		   //->orWhere(['type' => 11])
		   ->orderBy(['name' => 'DESC'])
		   ->limit(12)
		   ->all()
		  ;
		//////////
		$products1 = Products::find()
		   ->select(['id_product', 'name', 'translit'])
		   //->leftJoin('categories', 'categories.id = goods.category_id')
		   //->distinct()
		  ->where(['id_catalog' => $catalog["id_catalog"]])
		  //->andWhere(['goods.visible' => 'show'])
		   //->orWhere(['type' => 11])
		   ->orderBy(['name' => SORT_DESC])
		   ->limit(12)
		   ->offset(12)
		   ->all()
		  ;
		//////////
		$hotel_types = HotelType::find()
			->where(['id_catalog' => $id_catalog])
			->all()
			;
		//////
		$hotels = Hotels::find()
			->select(['doma_id', 'doma.id_product', 'doma.name', 'hotel_type.name as htypename', 'products.name as pname'])
			->leftJoin('products', 'products.id_product = doma.id_product')
			->leftJoin('hotel_type', 'hotel_type.id = doma.sektor')
			->where(['doma.id_catalog' => $id_catalog])
			->andWhere(['doma.gold' => 4])
			->orderBy(['doma.doma_id' => SORT_DESC])
			->limit(8)
			->all()
			;
		//////////
		//////////
		$dosts = Dost::find()
			   ->select(['dost.id_dost', 'dost.id_catalog', 'dost.smallfoto', 'dost.name', 'products.translit as translit', 'catalogs.url as url'])
				->leftJoin('catalogs', 'catalogs.id_catalog = dost.id_catalog')
				->leftJoin('products', 'products.id_product = dost.id_product')
			   ->where(['dost.id_catalog' => $id_catalog])
			   ->orderBy(['dost.id_dost' => SORT_DESC])
				->limit(8)
			   ->all()
			  ;
		
		echo $this->render('/index/catalog', array(
			'catalogs' => $catalogs,
			'products' => $products,
			'products1' => $products1,
			'catalog' => $catalog,
			'hotels' => $hotels,
			'hotel_types' => $hotel_types,
			'dosts' => $dosts,
		));
    }

    
}
