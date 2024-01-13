<?php


namespace App\Models\Contracts;


class MysqlBaseModel extends BaseModel
{

    public function create(array $date): int
    {
        // TODO: Implement create() method.
    }

    public function find($id): object
    {
        // TODO: Implement find() method.
    }

    public function get(array $columns, array $where): array
    {
        // TODO: Implement get() method.
    }

    public function update(array $data, array $where): int
    {
        // TODO: Implement update() method.
    }

    public function delete($id, array $where): int
    {
        // TODO: Implement delete() method.
    }
}