<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\appapi\modules\V1\controllers;

use fecshop\app\appapi\modules\AppapiController;
use Yii;

class CustomerController extends AppapiController
{
    public $modelClass;

    public function init()
    {
        //echo
        // 得到当前service相应的model
        $this->modelClass = Yii::$service->customer->getModelName();
        parent::init();
    }
}
