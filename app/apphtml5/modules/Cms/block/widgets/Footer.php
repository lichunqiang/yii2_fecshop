<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\app\apphtml5\modules\Cms\block\widgets;

use Yii;
use fecshop\interfaces\block\BlockCache;

class Footer implements BlockCache
{
    public function getLastData()
    {
        return [

        ];
    }

    public function getCacheKey()
    {
        $lang = Yii::$service->store->currentLanguage;

        return self::BLOCK_CACHE_PREFIX . '_' . $lang;
    }
}
