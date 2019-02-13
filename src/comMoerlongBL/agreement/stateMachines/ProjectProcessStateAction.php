<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{StateMachine}}Action.php.tt
//     生成日期：2019-02-13 10:28:38
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\statemachines;

use comMoerlongBL\core\stateMachine\StateMachineException;
use comMoerlongBL\core\stateMachine\StateValidator;
use comMoerlongBL\agreement\enums\EnumProjectProcessState;

/**
 * 子订单进度状态机
 * 
 * 子订单进度状态机
 */
class ProjectProcessStateAction
{
		
	/**
     * @Notes 创建
     * @Interface 创建子订单
     *
     * @param $entity 创建子订单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function create(IProjectProcessState $entity)
	{       
		if (!empty($entity->getProjectProcessState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setProjectProcessState(EnumProjectProcessState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 执行子订单
     *
     * @param $entity 执行子订单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function execute(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::Inital,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::Waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 关闭模版前置进度时
     *
     * @param $entity 操作
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function operate(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::Waiting,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::Waiting)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::Running);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 执行完成本进度时
     *
     * @param $entity 关闭
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function complete(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::Running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::Running,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::Running)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::Closed);
        return $entity;
    }
   
}
