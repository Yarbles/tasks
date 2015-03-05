<?php
    class Place {
        private $city_name;

        function __construct($city_name)
        {
            $this->city_name=$city_name;
        }
        function setName($new_name)
        {
            $this->city_name= (String) $new_name;
        }
        function getName()
        {
            return $this->city_name;
        }

        static function getAll()
        {
            return $_SESSION['list_of_places'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_places'] = array();
        }

        function save()
        {
            array_push($_SESSION['list_of_places'], $this);
        }


    }
