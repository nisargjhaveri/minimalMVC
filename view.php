<?php

class View {

    public $data = null;

    function __construct($view_name_noconflict, $data_noconflict = array()) {
        $this->data = $data_noconflict;
        extract($this->data);
        include(APPPATH . "views/$view_name_noconflict.php");
    }

    /**
     * Load a view fragment
     *
     * Data passed to main view is already passed, you can optionally extend or
     * override some data
     *
     * @param string $frag_name_noconflict Name of the view fragment
     * @param array $data_noconflict (optional) Data as an associative array
     */
    function load_fragment($frag_name_noconflict, $data_noconflict = array()) {
        extract($this->data);
        extract($data_noconflict);
        include(APPPATH . "views/$frag_name_noconflict.php");
    }

}
