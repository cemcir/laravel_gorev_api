<?php

namespace App\Core\DataAccess;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseModel
{
    protected $model;

    public function GetAll(array $conditions=null): Collection
    {
        if($conditions!=null) {
            return $this->model::where($conditions)->get();
        }
        return $this->model::all();
    }

    public function Add(array $arr): ?Model
    {
        return $this->model::create($arr);
    }

    public function Update(array $arr,int $id): bool
    {
        $item = $this->model::find($id);
        if($item!=null) {
            return $item->update($arr);
        }
        return false;
    }

    public function Delete(int $id): bool
    {
        $item = $this->model::find($id);
        if($item) {
            return $item->delete();
        }
        return false;
    }

    public function FindById($id):?Model
    {
        return $this->model::find($id);
    }

    public function Get(array $conditions): ?Model
    {
        return $this->model::where($conditions)->first();
    }

    public function LastInsertID(array $arr,string $id="id")
    {
        return $this->model::create($arr)->$id;
    }

    public function TotalRecord(array $conditions): int
    {
        return $this->model::where($conditions)->count();
    }

    public function WhereIn(string $column,array $conditions)
    {
        return $this->model::whereIn($column,$conditions)->get();
    }
    public function TotalPrice(string $column,array $conditions)
    {
        return $this->model::where($conditions)->sum($column);
    }

    public function TotalCount():int
    {
        return $this->model::count();
    }

    public function AddRange(array $arr)
    {
        foreach ($arr as $value) {
            $this->model::create($value);
        }
    }

}
