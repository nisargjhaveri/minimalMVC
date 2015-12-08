<?php
require(SYSPATH . 'view.php');

class Loader {

    private $obj;

    /**
     * @param Object $obj Object where things should be loaded, instance of Controller, Model, Library etc.
     */
    public function __construct($obj) {
        $this->obj = $obj;
    }

    /**
     * Load a view and pass some data to view.
     * @param string $name Name of the view
     * @param array $data (optional) Data as an associative array
     */
    public static function view($name, $data = array()) {
        try {
            new View($name, $data);
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

    /**
     * Load model
     * @param string $name Name of the model
     * @param string $load_as (optional) Load model as this name
     */
    public function model($name, $load_as = false) {
        if ($load_as == false)
            $load_as = $name;
        include_once(APPPATH . 'models/'.$name.'.php');
        $this->obj->$load_as = new $name;
    }

    /**
     * Load library
     * @param string $name Name of the library
     * @param string $load_as (optional) Load library as this name
     */
    public function library($name, $load_as = false) {
        if ($load_as == false)
            $load_as = $name;
        $lib_path = APPPATH . 'libraries/'.$name.'.php';
        if (is_file($lib_path)) {
            include_once($lib_path);
        }
        else {
            include_once(SYSPATH . 'libraries/'.$name.'.php');
        }
        $this->obj->$load_as = new $name;
    }

}
