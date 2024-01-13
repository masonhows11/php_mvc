<?php


namespace App\Models\Contracts;


abstract class BaseModel implements CrudInterface
{
        protected $connection;
        protected $table;
        protected $primaryKey = 'id';
        protected $pageSize = 10;

        

}