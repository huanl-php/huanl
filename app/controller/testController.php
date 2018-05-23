<?php

namespace App\Controller;

/**
 * Class testController
 * @package App\Controller
 */
class testController {


    /**
     *
     * @route get,post /tests/ha/{emm?}$
     * @return string
     */
    public function hah($emm) {
        return '哈哈' . $emm;
    }

    /**
     * @return string
     */
    public function asdqw() {
        return '测试呢23333';
    }

    /**
     * @route /emmmmmm
     * @return string
     */
    public function emmm() {
        return '测试呢';
    }

    /**
     * @route /heiheihi
     * @return string
     */
    private function ddd() {
        return 'emmmmmm';
    }
}