<?php
namespace App\Repositories\Implementations;

use App\Models\Car;
use App\Repositories\Interfaces\CarInterface;

class CarRepository implements CarInterface
{
    public function __construct(protected Car $model)
    {

    }

    public function all()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->with(['brand:id,name','fuel'])->findOrFail($id);
    }
}
