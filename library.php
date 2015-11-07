<?php
class Library {

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

    /**
     * Load a view and pass some data to view.
     * @param string $name Name of the view
     * @param array $data (optional) Data as an associative array
     */
    protected function load_view($name, $data = array()) {
        return $this->_loader()->view($name, $data);
    }

    /**
     * Load model
     * @param string $name Name of the model
     * @param string $load_as (optional) Load model as this name
     */
    protected function load_model($name, $load_as = false) {
        return $this->_loader()->model($name, $load_as);
    }

    /**
     * Load library
     * @param string $name Name of the library
     * @param string $load_as (optional) Load library as this name
     */
    protected function load_library($name, $load_as = false) {
        return $this->_loader()->library($name, $load_as);
    }
}
