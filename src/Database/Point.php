<?php
namespace App\Database;

// Our value object is immutable.
class Point
{
    protected $_lat;
    protected $_long;

    // Factory method.
    public static function parse($value)
    {
        // Parse the data from MySQL.
        return new static($value[0], $value[1]);
    }

    public function __construct($lat, $long)
    {
        $this->_lat = $lat;
        $this->_long = $long;
    }

    public function lat()
    {
        return $this->_lat;
    }

    public function long()
    {
        return $this->_long;
    }
}
?>