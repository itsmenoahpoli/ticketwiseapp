<?php

namespace App\Traits;

trait ParamsHelper
{
    public function createPaginationParams($query)
    {
        return (object) [
            'pageSize'  => isset($query['pageSize']) ? intval($query['pageSize']) : 1,
            'orderBy'   => isset($query['orderBy']) ? $query['orderBy'] : 'id',
            'sortBy'    => isset($query['sortBy']) ? $query['sortBy'] : 'desc',
        ];
    }
}
