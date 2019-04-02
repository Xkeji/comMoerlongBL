<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{StateMachine}}Action.php.tt
//     生成日期：2019-04-02 10:21:01
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachines\StateMachineException;
use comMoerlongBL\agreement\enums\EnumProjectState;

/**
 * 子订单业务状态机
 * 
 * 子订单业务状态机
 */
class ProjectStateAction
{
		
	/**
     * @Notes 创建
     * @Interface 在协议上新建子订单，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 新建子订单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectCreateOnA(IProjectState $entity)
	{       
		if (!empty($entity->getProjectState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setProjectState(EnumProjectState::inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 在订单上新建子订单，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 新建子订单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectCreateOnO(IProjectState $entity)
	{       
		if (!empty($entity->getProjectState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setProjectState(EnumProjectState::waiting);
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
	public static function aSubmit(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::inital,
                    EnumProjectState::getDescription(EnumProjectState::inital)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::waiting);
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
	public static function aExecute(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::waiting,
                    EnumProjectState::getDescription(EnumProjectState::waiting)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::running);
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
	public static function orderRefusallAGreement(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::waiting,
                    EnumProjectState::getDescription(EnumProjectState::waiting)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::closed);
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
	public static function orderCancelAgreement(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::waiting,
                    EnumProjectState::getDescription(EnumProjectState::waiting)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单下贷款进度为放款
     *
     * @param $entity 放款
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function mLoan(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::running,
                    EnumProjectState::getDescription(EnumProjectState::running)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单失败关闭，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 失败关闭
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function sOFailToClose(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::running,
                    EnumProjectState::getDescription(EnumProjectState::running)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单客户退单关闭，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 客户退单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function sORefundToClose(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::running,
                    EnumProjectState::getDescription(EnumProjectState::running)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消客户退单关闭，描述见《协议订单子订单状态维护规则》文档]
     *
     * @param $entity 取消客户退单关闭
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectCancelRefundClosed(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::closed,
                    EnumProjectState::getDescription(EnumProjectState::closed)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::running);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消失败关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消失败关闭
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function sOCancelFailClosed(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::closed,
                    EnumProjectState::getDescription(EnumProjectState::closed)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::running);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 特殊情况重开子订单，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 特殊情况重开
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectReopen(IProjectState $entity)
	{       
		if ($entity->getProjectState() != EnumProjectState::closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectState::closed,
                    EnumProjectState::getDescription(EnumProjectState::closed)                    
                )
            );
        }
		
            
		$entity->setProjectState(EnumProjectState::running);
        return $entity;
    }
   
}
