<?php 

require_once 'DB.php';
require_once 'DB_functions.php';

class Region
{
    public $id = null;
    public $name = null;
    public $slug = null;

    public function insert()
    {
        $query = "INSERT INTO `regions` (`name`, `slug`) VALUES (?, ?)";
        insert($query, [$this->name, $this->slug]);
        $this->id = last_insert_id();
    }
}

?>