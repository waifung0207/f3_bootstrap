<?php

namespace controllers;

abstract class _Base extends \Prefab {

    protected $response;

    public function __construct() {
        $this->f3 = \Base::instance();
        //$this->logger = \Registry::get('logger');
    }
}