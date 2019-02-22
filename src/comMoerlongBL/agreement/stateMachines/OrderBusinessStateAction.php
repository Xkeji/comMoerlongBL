<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{StateMachine}}Action.php.tt
//     生成日期：2019-02-22 18:03:21
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachine\StateMachineException;
use comMoerlongBL\core\stateMachine\StateValidator;
use comMoerlongBL\agreement\enums\EnumOrderBusinessState;

/**
 * 订单业务状态机
 * 
 * 订单业务状态机
 */
class OrderBusinessStateAction
{
		
	/**
     * @Notes 创建
     * @Interface 提交创建的子订单到后台操作人员处，并生成订单和选定订单处理人。
     *
     * @param $entity 提交
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function aSubmit(IOrderBusinessState $entity)
	{       
		if (!empty($entity->getOrderBusinessState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Initial);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单首次被阅读时，对应改变订单状态。描述见《协议订单子订单状态维护规则》
     *
     * @param $entity 查看订单详情
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function oRead(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Initial) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Initial,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Initial)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 依据条件重新分配订单负责人
     *
     * @param $entity 再分配
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function oDistribute(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Initial) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Initial,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Initial)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Initial);
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
	public static function aExecute(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Waiting,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Waiting)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Running);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单上的取消签单按钮，描述规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function oRefusallAGreement(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Waiting,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Waiting)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单上的无效拒单按钮，描述规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 无效拒单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function oCancelAgreement(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Waiting,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Waiting)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单完成，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 订单业务完成
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function oFinish(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Running,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Running)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Closed);
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
	public static function oCancelClosed(IOrderBusinessState $entity)
	{       
		if ($entity->getOrderBusinessState() != EnumOrderBusinessState::Closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumOrderBusinessState::Closed,
                    EnumOrderBusinessState::getDescription(EnumOrderBusinessState::Closed)                    
                )
            );
        }
		
            
		$entity->setOrderBusinessState(EnumOrderBusinessState::Running);
        return $entity;
    }
   
}
