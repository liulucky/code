<?php

    $a = 'aaa';

    function demo(){

        //函数不能直接访问PHP外部的全局变量
        echo $a;
    }

    demo();

