<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\appapi\modules\V1\controllers;

use Yii;
use fecshop\app\appapi\modules\AppapiController;

class ArticleController extends AppapiController
{
    public $modelClass;

    public function init()
    {
        # 得到当前service相应的model
        $this->modelClass = Yii::$service->cms->article->getModelName();
        parent::init();
    }

    public function actionTest()
    {
        //echo 11;exit;
        //var_dump(get_class(Yii::$service->cms->article->getByPrimaryKey('')));
    }
}
