<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\appfront\widgets;

use Yii;
use fecshop\interfaces\block\BlockCache;

class Head implements BlockCache
{
    public function getLastData()
    {
        return [

        ];
    }

    public function getCacheKey()
    {
        $store = Yii::$service->store->currentStore;
        $moduleId = Yii::$app->controller->module->id;
        $controllerId = Yii::$app->controller->id;
        $actionId = Yii::$app->controller->action->id;
        $urlPathKey = $moduleId . '_' . $controllerId . '_' . $actionId;

        return self::BLOCK_CACHE_PREFIX . '_' . $store . '_' . $urlPathKey;
    }
}
