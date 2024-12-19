<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class UsersRepository extends BaseRepository
{
    public function __construct(public Model $model, public array $relationships)
    {
        parent::__construct($model, $relationships);
    }
}
