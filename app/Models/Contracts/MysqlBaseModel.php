<?php


namespace App\Models\Contracts;

use Medoo\Medoo;
use PDO;

class MysqlBaseModel extends BaseModel
{

    public function __construct()
    {

        // Connect the database.
        try {
            $this->connection = new Medoo([
                // [required]
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_DATABASE'],
                'username' => $_ENV['DB_USERNAME'],
                'password' => $_ENV['DB_PASSWORD'],

                // [optional]
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_general_ci',
                'port' => 3306,

                // [optional] The table prefix. All table names will be prefixed as PREFIX_table.
                'prefix' => '',

                // [optional] To enable logging. It is disabled by default for better performance.
                'logging' => true,

                // [optional]
                // Error mode
                // Error handling strategies when the error has occurred.
                // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
                // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
                'error' => PDO::ERRMODE_EXCEPTION,

                // [optional]
                // The driver_option for connection.
                // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
                'option' => [
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                ],

                // [optional] Medoo will execute those commands after the database is connected.
                'command' => [
                    'SET SQL_MODE=ANSI_QUOTES'
                ]
            ]);
        } catch (\PDOException $ex) {
            echo "an error happen during connection:" . $ex->getMessage();
        }
        //        try {
        //            $this->connection = new \PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}", $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        //            $this->connection->exec("set names utf8");
        //        } catch (\PDOException $ex) {
        //            echo "an error happen during connection:" . $ex->getMessage();
        //        }
    }

    public function create(array $data): int
    {
        $this->connection->insert($this->table, $data);
        return $this->connection->id();
    }

    public function find($id): object
    {
        $result = $this->connection->get($this->table, '*', [$this->primaryKey => $id]);
        return (object)$result;

    }

    public function getAll(): array
    {
        return $this->connection->select($this->table, '*');

    }

    public function get(array $columns, array $where = []): array
    {
        return $this->connection->select($this->table, $columns, $where);
    }

    public function update(array $data, array $where): int
    {
        $result = $this->connection->update($this->table, $data, $where);
        return $result->rowCount();
    }

    public function delete(array $where): int
    {
        $result = $this->connection->delete($this->table, $where);
        return $result->rowCount();
    }
}