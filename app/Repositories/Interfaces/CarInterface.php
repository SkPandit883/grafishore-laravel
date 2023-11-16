<?php
namespace App\Repositories\Interfaces;

interface CarInterface{

    public function all();
    public function findById($id);

}
