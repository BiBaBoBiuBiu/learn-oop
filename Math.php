<?php

class Math {

    // func_get_args() -> 旧版本的写法 ...$num -> 新版本
    public static function add (...$num) {
        return array_sum($num);
    }
}

var_dump(Math::add(1, 2, 3));
//$math = new Math();

//var_dump($math->add(1,2,3));