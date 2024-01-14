<?php


namespace App\Models\Contracts;


class JsonBaseModel extends BaseModel
{
    private $base_path;

    public function __construct()
    {
        $this->base_path = BASE_PATH . "database\jsondb";

    }

    public function create(array $date): int
    {
      return  1;
    }

    public function find($id): object
    {
       // cast array to object
       return (object)[];
    }

    public function get(array $columns, array $where): array
    {
       return [];
    }

    public function update(array $data, array $where): int
    {
       return  1;
    }

    public function delete($id, array $where): int
    {
        return  1;
    }
}