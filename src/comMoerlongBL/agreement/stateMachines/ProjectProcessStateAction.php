<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{StateMachine}}Action.php.tt
//     生成日期：2019-10-30 10:13:14
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachines\StateMachineException;
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
            
		$entity->setProjectProcessState(EnumProjectProcessState::waited);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 操作任务
     *
     * @param $entity 操作
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function operate(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::waited) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::waited,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::waited)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::operating);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 完成任务
     *
     * @param $entity 完成
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function finish(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::operating) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::operating,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::operating)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::finished);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消任务
     *
     * @param $entity 取消
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function cancel(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::operating) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::operating,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::operating)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::canceled);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消操作
     *
     * @param $entity 取消操作
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function oCancel(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::operating) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::operating,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::operating)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::waited);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消完成任务
     *
     * @param $entity 取消
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function fCancel(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::finished) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::finished,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::finished)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::operating);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 回滚取消指令
     *
     * @param $entity 回滚取消
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function cCancel(IProjectProcessState $entity)
	{       
		if ($entity->getProjectProcessState() != EnumProjectProcessState::canceled) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectProcessState::canceled,
                    EnumProjectProcessState::getDescription(EnumProjectProcessState::canceled)                    
                )
            );
        }
		
            
		$entity->setProjectProcessState(EnumProjectProcessState::operating);
        return $entity;
    }
   
}
