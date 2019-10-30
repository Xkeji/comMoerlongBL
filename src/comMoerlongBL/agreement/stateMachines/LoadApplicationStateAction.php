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
use comMoerlongBL\agreement\enums\EnumLoadApplicationState;

/**
 * 签单申请状态机
 * 
 * 签单申请状态机
 */
class LoadApplicationStateAction
{
		
	/**
     * @Notes 创建
     * @Interface 创建签单申请
     *
     * @param $entity 创建签单申请
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function create(ILoadApplicationState $entity)
	{       
		if (!empty($entity->getLoadApplicationState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 提交申请
     *
     * @param $entity 提交申请
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function submit(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::inital,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::inital)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 重复报单
     *
     * @param $entity 重复报单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function repeatSubmit(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::inital,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::inital)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 无效关闭（运营）
     *
     * @param $entity 无效关闭（运营）
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function invalidClose(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::waiting,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::waiting)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消签单（申请人）
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function cancelSign(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::waiting,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::waiting)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 立即签单（报单成功）
     *
     * @param $entity 报单成功
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function signSuccess(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::waiting,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::waiting)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::operating);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 方案转协议
     *
     * @param $entity 签单协议
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function transferAgreement(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::operating) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::operating,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::operating)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消签单（操作）
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function cancelOSign(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::operating) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::operating,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::operating)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 关闭类型=签单协议时不能再次提交
     *
     * @param $entity 取消
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function cancelClose(ILoadApplicationState $entity)
	{       
		if ($entity->getLoadApplicationState() != EnumLoadApplicationState::closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumLoadApplicationState::closed,
                    EnumLoadApplicationState::getDescription(EnumLoadApplicationState::closed)                    
                )
            );
        }
		
            
		$entity->setLoadApplicationState(EnumLoadApplicationState::inital);
        return $entity;
    }
   
}
