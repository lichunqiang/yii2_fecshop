<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\appfront\widgets;

use fecshop\interfaces\block\BlockCache;
use Yii;

class Menu implements BlockCache
{
    public function getLastData()
    {
        $categoryArr = Yii::$service->page->menu->getMenuData();
        //var_dump($categoryArr);
        return [
            'categoryArr' => $categoryArr,
        ];
    }

    public function getCacheKey()
    {
        $lang = Yii::$service->store->currentLanguage;

        return self::BLOCK_CACHE_PREFIX . '_' . $lang;
    }
}
