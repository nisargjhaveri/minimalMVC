<?php
include_once('databases.php');

class Model {

    /**
    * Contains DB connection or false
    * @var bool|DatabaseFactory
    */
    private $DB = false;

    /**
     * Contains instance of Loader class
     * @var Loader
     */
    private $_l = false;

    /**
     * private getter for loader
     * @return Loader
     */
    private function _loader() {
        if (!$this->_l) {
            $this->_l = new Loader($this);
        }
        return $this->_l;
    }

    public function __get($var) {
        switch ($var) {
            case "DB":
                if (!($this->DB)) $this->DB = new DatabaseFactory();
                break;
        }
        return $this->$var;
    }

    /**
     * Load model
     * @param string $name Name of the model
     * @param string $load_as (optional) Load model as this name
     */
    protected function load_model($name, $load_as = false) {
        return $this->_loader()->model($name, $load_as);
    }

}
