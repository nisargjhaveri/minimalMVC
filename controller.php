<?php
class Controller {

    /**
     * Contains instance of Loader class
     * @var Loader
     */
    private $loader;

    function __construct() {
        $this->loader = new Loader($this);
    }

    /**
     * Load a view and pass some data to view.
     * @param string $name Name of the view
     * @param array $data (optional) Data as an associative array
     */
    protected function load_view($name, $data = array()) {
        return $this->loader->view($name, $data);
    }

    /**
     * Load model
     * @param string $name Name of the model
     * @param string $load_as (optional) Load model as this name
     */
    protected function load_model($name, $load_as = false) {
        return $this->loader->model($name, $load_as);
    }

    /**
     * Load library
     * @param string $name Name of the library
     * @param string $load_as (optional) Load library as this name
     */
    protected function load_library($name, $load_as = false) {
        return $this->loader->library($name, $load_as);
    }

}
