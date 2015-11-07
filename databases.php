<?php
class DatabaseFactory {

    /**
     * database connections
     * @var array
     */
    private $connections = [];

    /**
     * Connect to mysql DB, using mysqli
     * @param  string $name Name present in `$cfg['databases']
     * @return mysqli       mysqli connection
     */
    private function _load_db($name) {
        global $cfg;

        if (!array_key_exists('databases', $cfg)) {
            return NULL;
        }

        else if (!array_key_exists($name, $cfg['databases'])) {
            return NULL;
        }

        $db_conf = $cfg['databases'][$name];

        $conn = new mysqli($db_conf['db_host'], $db_conf['db_user'], $db_conf['db_pass'], $db_conf['db_name']);
        if ($conn->connect_errno) {
            //echo "Failed to connect to MySQL: " . $this->DB->connect_errno;
            return NULL;
        }
        $conn->set_charset("utf8");

        return $conn;
    }

    /**
     * Get required database if available in config
     * @param  string $name Name present in `$cfg['databases']
     * @return mysqli       mysqli connection
     */
    public function __get($name) {
        if (!array_key_exists($name, $this->connections)) {
            $this->connections[$name] = $this->_load_db($name);
        }

        return $this->connections[$name];
    }
}
