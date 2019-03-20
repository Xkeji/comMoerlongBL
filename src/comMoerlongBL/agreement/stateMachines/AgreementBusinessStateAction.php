<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{StateMachine}}Action.php.tt
//     生成日期：2019-03-19 16:10:41
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachines\StateMachineException;
use comMoerlongBL\agreement\enums\EnumAgreementBusinessState;

/**
 * 协议状态机
 * 
 * 协议状态机
 */
class AgreementBusinessStateAction
{
		
	/**
     * @Notes 创建
     * @Interface 新创建一份协议
     *
     * @param $entity 新建
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aCreate(IAgreementBusinessState $entity)
	{       
		if (!empty($entity->getAgreementBusinessState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::initial);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 提交创建的子订单到后台操作人员处，并生成订单和选定订单处理人。
     *
     * @param $entity 提交
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aSubmit(IAgreementBusinessState $entity)
	{       
		if ($entity->getAgreementBusinessState() != EnumAgreementBusinessState::initial) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumAgreementBusinessState::initial,
                    EnumAgreementBusinessState::getDescription(EnumAgreementBusinessState::initial)                    
                )
            );
        }
		
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 执行任一子订单
     *
     * @param $entity 执行
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aExecute(IAgreementBusinessState $entity)
	{       
		if ($entity->getAgreementBusinessState() != EnumAgreementBusinessState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumAgreementBusinessState::waiting,
                    EnumAgreementBusinessState::getDescription(EnumAgreementBusinessState::waiting)                    
                )
            );
        }
		
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::running);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消签单，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aCancelAgreement(IAgreementBusinessState $entity)
	{       
		if ($entity->getAgreementBusinessState() != EnumAgreementBusinessState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumAgreementBusinessState::waiting,
                    EnumAgreementBusinessState::getDescription(EnumAgreementBusinessState::waiting)                    
                )
            );
        }
		
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 无效签单，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 无效签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function ainvalidAgreement(IAgreementBusinessState $entity)
	{       
		if ($entity->getAgreementBusinessState() != EnumAgreementBusinessState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumAgreementBusinessState::waiting,
                    EnumAgreementBusinessState::getDescription(EnumAgreementBusinessState::waiting)                    
                )
            );
        }
		
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 协议业务完成，并关闭
     *
     * @param $entity 业务完成
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aFInish(IAgreementBusinessState $entity)
	{       
		if ($entity->getAgreementBusinessState() != EnumAgreementBusinessState::running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumAgreementBusinessState::running,
                    EnumAgreementBusinessState::getDescription(EnumAgreementBusinessState::running)                    
                )
            );
        }
		
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消关闭
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aCancelClosed(IAgreementBusinessState $entity)
	{       
		if ($entity->getAgreementBusinessState() != EnumAgreementBusinessState::closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumAgreementBusinessState::closed,
                    EnumAgreementBusinessState::getDescription(EnumAgreementBusinessState::closed)                    
                )
            );
        }
		
            
		$entity->setAgreementBusinessState(EnumAgreementBusinessState::running);
        return $entity;
    }
   
}
