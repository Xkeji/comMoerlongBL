<?php

namespace comMoerlongBL\core\stateMachine;

use Throwable;
use Exception;

/**
 * 状态机的顶级异常
 *
 * @author 刘志勇 2018-11-28
 * @since 1.0.0
 * @throw Exception
 */

class StateMachineException extends Exception {

    function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->Exception($message);
        parent::__construct($message, $code, $previous);
    }

    private function Exception($message){
        try{
            throw new Exception("状态转换不合法");
        }
        catch (Exception $e){
            echo "状态转换不合法";
        }
    }
}


