<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\apphtml5\modules\Customer\controllers;

use fecshop\app\apphtml5\modules\AppfrontController;
use Yii;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class PointController extends AppfrontController
{
    //protected $_registerSuccessRedirectUrlKey = 'customer/account';

    public function init()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$service->url->redirectByUrlKey('customer/account/login');
        }
        parent::init();
    }

    public function actionIndex()
    {
        $data = $this->getBlock()->getLastData();

        return $this->render($this->action->id, $data);
    }
}
