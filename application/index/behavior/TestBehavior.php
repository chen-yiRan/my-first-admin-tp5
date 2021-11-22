<?php

namespace app\index\behavior;

class TestBehavior
{
    public function appInit(){
        echo "appInit!\n";
    }
    public function appBegin(){
        echo "appBegin!\n";
        echo \app\index\facade\TestIndexFacade::hello();
        echo "\n";
    }
}