<?php

namespace app\database\models;

class Read extends Model
{
    protected $connect;

    public function all($table, $fields = '*')
    {
        try {
            $query = $this->connect->query("SELECT {$fields} FROM {$table};");
            $query->execute();

            return $query->fetchAll();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
}