<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：I{{StateMachine}}.php.tt
//     生成日期：2019-07-16 15:13:42
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachines\IStateMachine;

interface IProjectSettlementState extends IStateMachine
{
    /**
     * 获取实体当前状态
     *
     * @return 当前状态
     */
    public function getProjectSettlementState();
    /**
     * 为实体设置新的状态
     *
     * @param state 新的状态
     */

    public function setProjectSettlementState($state);

}
