<?php

namespace App\Models\Contracts;


Interface CrudInterface{


    public function create(array $date) : int;

    public function find(int $id) : object;

    
    public function read(array $columns) : array;


    public function update(array $data) : int;


    public function delete(int $id) : int;
    
}