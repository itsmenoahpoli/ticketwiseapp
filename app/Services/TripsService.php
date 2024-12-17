<?php

namespace App\Services;

use App\Repositories\TripsRepository;
use App\Models\Trips\Trip;

class TripsService extends TripsRepository
{
    public function __construct(Trip $model)
    {
        parent::__construct($model, []);
    }
}
