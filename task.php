<?php
/**
 * Created by PhpStorm.
 * User: wangpei
 * Date: 2019/4/9
 * Time: 8:44 PM
 */

class Task {
    protected $name;

    /**
     * Task constructor.
     * @param $name
     */
    public function __construct ($name) {
        $this->name = $name;
    }
}