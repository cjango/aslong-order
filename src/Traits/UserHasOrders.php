<?php

namespace AsLong\Order\Traits;

use AsLong\Order\Models\Order;

trait UserHasOrders
{

    /**
     * 用户订单
     * @Author:<C.Jason>
     * @Date:2018-10-15T14:56:07+0800
     * @return \AsLong\Order\Models\Order::class
     */
    public function orders()
    {
        return $this->hasOne(hasMany::class);
    }

}
