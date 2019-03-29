<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{StateMachine}}Action.php.tt
//     生成日期：2019-03-22 16:41:27
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\stateMachines;

use comMoerlongBL\core\stateMachines\StateMachineException;
use comMoerlongBL\agreement\enums\EnumProjectSettlementState;

/**
 * 子订单客户结算状态机
 * 
 * 子订单客户结算状态机
 */
class ProjectSettlementStateAction
{
		
	/**
     * @Notes 创建
     * @Interface 在协议上新建子订单，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 创建
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectCreate(IProjectSettlementState $entity)
	{       
		if (!empty($entity->getProjectSettlementState())) {
            throw new StateMachineException("当前状态必须是 未设置 时才可使用。");
        }
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单下贷款进度为放款时，执行此方法（二选一），客户已结算时，改变状态至客户结算状态至关闭
     *
     * @param $entity 
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function mPaymentT(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单下贷款进度为放款时，执行此方法（二选一），客户未结算时，改变状态至客户结算状态至等待
     *
     * @param $entity 房款
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function mPaymentF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单上的取消签单按钮，取消签单时，执行此方法（二选一），改变状态至客户结算状态至等待，描述规则见《协议订单子订单状态维护规则》文档。客户已结算时
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function orderRefusallAGreementT(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单上的取消签单按钮，取消签单时，执行此方法（二选一），改变状态至客户结算状态至关闭，描述规则见《协议订单子订单状态维护规则》文档客户未结算时
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function orderRefusallAGreementF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 订单上的无效拒单按钮，无效拒单时，执行此方法（二选一），改变状态至客户结算状态至等待，描述规则见《协议订单子订单状态维护规则》文档，客户已结算时。
     *
     * @param $entity 无效拒单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function orderCancelAgreementT(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 客户未结算时，订单上的无效拒单按钮，无效拒单时，执行此方法（二选一），改变状态至客户结算状态至关闭，描述规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 无效拒单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function orderCancelAgreementF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 已结算时，子订单客户退 单关闭，客户退单时，执行此方法（二选一），改变状态至客户结算状态至等待，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 客户退单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectRefundToCloseT(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Waiting);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 未结算时，子订单客户退 单关闭，客户退单时，执行此方法（二选一），改变状态至客户结算状态至等待，符合规则见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 客户退单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectRefundToCloseF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Closed);
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
	public static function projectFailToClose(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Inital) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Inital,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Inital)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Closed);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单的客户结算，比如处理生成财务单据等
     *
     * @param $entity 子订单客户结算
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectCustomerSettlement(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Waiting,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Waiting)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Running);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消客户退单关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消客户退单关闭
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectCancelRefundClosed(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Waiting,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Waiting)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消需要客户结算的放款引起的子订单关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消需结算放款
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function mCanelPaymentT(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Waiting) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Waiting,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Waiting)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消无效签单引起的子订单关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消无效拒单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function orderNoCancelAgreementF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Closed,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Closed)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消取消签单引起的子订单关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消签单
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function orderCancelRefusallAGreementF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Closed,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Closed)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
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
	public static function projectCancelFailClosed(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Closed,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Closed)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 取消不需要客户结算的放款引起的子订单关闭，描述见《协议订单子订单状态维护规则》文档
     *
     * @param $entity 取消不需结算放款
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function mCanelPaymentF(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Closed) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Closed,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Closed)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Inital);
        return $entity;
    }
		
	/**
     * @Notes 创建
     * @Interface 子订单的财务结算，比如和客户依据生成的单据，结算费用等等
     *
     * @param $entity 子订单财务结算
     *
     * @return entity
     * @throws StateMachineException
     */
	public static function projectFinancialSettlement(IProjectSettlementState $entity)
	{       
		if ($entity->getProjectSettlementState() != EnumProjectSettlementState::Running) {
            throw new StateMachineException(
                sprintf(
                    "当前状态必须是 %d: %s 时才可使用。",                    
                    EnumProjectSettlementState::Running,
                    EnumProjectSettlementState::getDescription(EnumProjectSettlementState::Running)                    
                )
            );
        }
		
            
		$entity->setProjectSettlementState(EnumProjectSettlementState::Closed);
        return $entity;
    }
   
}
