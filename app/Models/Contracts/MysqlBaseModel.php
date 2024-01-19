<?php


namespace App\Models\Contracts;


class MysqlBaseModel extends BaseModel
{
   
    protected function __construct()
    {
        try {
            $this->connection = new \PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}", $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
            $this->connection->exec("set names utf8");
        } catch (\PDOException $ex) {
            echo "an error happen during connection:" . $ex->getMessage();
        }
    }

    public function create(array $date): int
    {
            return 1;
    }

    public function find($id): object
    {

        return (object)[];
    }

    public function get(array $columns, array $where): array
    {
        return [];
    }

    public function getAll() : array
    {
        return [];
    }

    public function update(array $data, array $where): int
    {

    }

    public function delete($id, array $where): int
    {

    }
}