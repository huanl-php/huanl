<?php

namespace App\Controller;

use App\Model\VerifyTestModel;
use HuanL\Core\App\Controller\Controller;

/**
 * Class indexController
 * @package App\Controller
 */
class indexController extends Controller {

    /**
     * @route /
     */
    public function index() {
        return $this->view();
    }

    /**
     * @route /model
     */
    public function model() {
        $v = new VerifyTestModel($_GET);
        if ($v->__check()) {
            return ['code' => 0, 'msg' => 'success'];
        }
        return ['code' => -1, 'msg' => $v->getLastError()];
    }
}