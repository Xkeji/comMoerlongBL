<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：I{{StateMachine}}.php.tt
//     生成日期：2019-09-12 14:15:23
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachines\IStateMachine;

interface IOrderBusinessState extends IStateMachine
{
    /**
     * 获取实体当前状态
     *
     * @return 当前状态
     */
    public function getOrderBusinessState();
    /**
     * 为实体设置新的状态
     *
     * @param state 新的状态
     */

    public function setOrderBusinessState($state);

}
