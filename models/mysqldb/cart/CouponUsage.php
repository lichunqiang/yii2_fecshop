<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace fecshop\models\mysqldb\cart;

use yii\db\ActiveRecord;

/**
 * @author Terry Zhao <2358269014@qq.com>
 *
 * @since 1.0
 */
class CouponUsage extends ActiveRecord
{
    public static function tableName()
    {
        return 'sales_coupon_usage';
    }
}
