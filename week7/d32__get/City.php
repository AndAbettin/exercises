<?php
require_once 'DB.php';

DB::connect('127.0.0.1', 'world', 'root', '');
class City
{

    public $id = null;
    public $name = null;
    public $country_id = null;
    public $district = null;
    public $population = null;

    public static function getCitiesForCountry($country_id)
    {
        $query = "
            SELECT *
            FROM `cities`
            WHERE `country_id` = ?
        ";
        $values = [$country_id];
        $cities = DB::select($query, $values, 'City');
        return $cities;
    }
}