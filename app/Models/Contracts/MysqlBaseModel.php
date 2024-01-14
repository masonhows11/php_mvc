<?php


namespace App\Models\Contracts;


class MysqlBaseModel extends BaseModel
{
    private $servername = $_ENV['DB_HOST'];
    private $username = $_ENV['DB_USERNAME'];
    private $password = $_ENV['DB_PASSWORD'];
    private $database = $_ENV['DB_DATABASE'];

    protected function __construct()
    {
        try {
            $this->connection = new \PDO("mysql:host={$this->servername};dbname={$this->database}", $this->username, $this->password);
            $this->connection->exec("set names utf8");
        } catch (\PDOException $ex) {
            echo "an error happen during connection:" . $ex->getMessage();
        }
    }

    public function create(array $date): int
    {

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