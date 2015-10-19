<?php
class Model {

    /**
    * Contains DB connection or false
    * @var bool|mysqli
    */
    private $DB = false;

    function __construct() {
    }

    /**
     * Connect to mysql DB, using mysqli
     */
    private function _load_db() {
        global $cfg;

        $this->DB = new mysqli($cfg['db_host'], $cfg['db_user'], $cfg['db_pass'], $cfg['db_name']);
        if ($this->DB->connect_errno) {
            //echo "Failed to connect to MySQL: " . $this->DB->connect_errno;
            $this->DB = false;
            return false;
        }
        $this->DB->set_charset("utf8");
    }

    public function __get($var) {
        switch ($var) {
            case "DB":
                if (!($this->DB)) $this->_load_db();
                break;
        }
        return $this->$var;
    }

    /**
     * Load model
     *
     * Copy of load_model in controller.php
     *
     * @param string $name Name of the model
     * @param string $load_as (optional) Load model as this name
     */
    protected function load_model($name, $load_as = false) {
        if ($load_as == false)
            $load_as = $name;
        include_once(APPPATH . 'models/'.$name.'.php');
        $this->$load_as = new $name;
    }

}
