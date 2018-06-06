<?php

namespace App\Controller;

use HuanL\Core\App\Controller\Controller;

/**
 * Class testController
 * @package App\Controller
 */
class indexController extends Controller {

    /**
     * @route /
     */
    public function index() {
        return $this->view();
    }

}