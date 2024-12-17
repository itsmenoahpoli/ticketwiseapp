<?php

namespace App\Traits;

trait ParamsHelper
{
    public function createPaginationParams($query)
    {
        return (object) [
            'page'      => $query['page'] ? intval($query['page']) : 1,
            'pageSize'  => $query['pageSize'] ? intval($query['pageSize']) : 1,
            'orderBy'   => $query['orderBy'] ?? 'created_at',
            'sortBy'    => $query['sortBy'] ?? 'desc',
        ];
    }
}
