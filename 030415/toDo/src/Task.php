<?php

class Task

{
    private $description;
    private $time_remain;

    function __construct($description, $time_remain)
    {
        $this->description = $description;
        $this->time_remain = $time_remain;
    }

    function getDescription()
    {
        return $this->description;
    }
    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }
    function save()
    {
        array_push($_SESSION['list_of_tasks'], $this);
    }
    function getTimeRemain()
    {
        return $this->time_remain;
    }
    function setTimeRemain($new_time)
    {
        $this->time_remain = (float) $new_time;
    }
    static function getAll()
    {
        return $_SESSION['list_of_tasks'];
    }
    static function deleteAll()
    {
        $_SESSION['list_of_tasks'] = array();
    }
}
?>
