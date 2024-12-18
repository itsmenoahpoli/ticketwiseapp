<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TripsRepository extends BaseRepository
{
    public function __construct(public Model $model, public array $relationships)
    {
        parent::__construct($model, $relationships);
    }
}
