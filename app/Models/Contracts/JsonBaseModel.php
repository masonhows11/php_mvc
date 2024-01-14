<?php


namespace App\Models\Contracts;


class JsonBaseModel extends BaseModel
{
    private $db_path;
    private $table_file_path;

    public function __construct()
    {
        // path for user json file
        $this->db_path = BASE_PATH . "/databases/jsondb/";
        $this->table_file_path = $this->db_path . $this->table . '.json';
    }


    private function write_json(array $data)
    {
        $data_json = json_encode($data);
        file_put_contents($this->table_file_path, (string)$data_json);
    }

    private function read_json(array $data): array
    {
        $table_data = json_decode(file_get_contents($this->table_file_path));
        return $table_data;

    }

    public function create(array $date): int
    {
        $table_data = $this->read_json($date);
        $table_data[] = $date;
        $this->write_json((array)$table_data);
        return 1;
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
        return 1;
    }

    public function delete($id, array $where): int
    {
        return 1;
    }
}