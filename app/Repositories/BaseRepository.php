<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository
{

    public function __construct(
        private readonly Model $model,
        private readonly array $relationships

    )
    {}

    public function getPaginated($query)
    {
        return $this->model->query()->with($this->relationships)->orderBy($query->orderBy, $query->sortBy)->paginate($query->pageSize);
    }


    public function getUnpaginated($orderBy = 'id', $sortBy = 'desc'): Collection
    {
        return $this->model->query()->with($this->relationships)->orderBy($orderBy, $sortBy)->get();
    }

    public function create($data)
    {
        return $this->model->query()->create($data);
    }

    public function updateById($id, $data)
    {
        return tap($this->model->query()->findOrFail($id))->update($data);
    }

    public function getById($id)
    {
        return $this->model->query()->with($this->relationships)->findOrFail($id);
    }

    public function deleteById($id): ?bool
    {
        return $this->model->query()->findOrFail($id)->delete();
    }
}
