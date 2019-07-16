<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-07-16 15:13:42
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 订单系统关闭原因
 * 订单系统关闭原因
 * 
 */
class EnumOrderSystemCloseReason
{
	const description=array('1'=>'查验点超时关闭','2'=>'进件未完成超时关闭','4'=>'评估未完成超时关闭','8'=>'放款未完成超时关闭','16'=>'重分配超时关闭','32'=>'所有子订单关闭后订单超时关闭','64'=>'激活再超时关闭');
		
	/**
     * 查验点超时关闭
	 * 查验点超时关闭
     */
    const checkpointTC = 1;	
		
	/**
     * 进件未完成超时关闭
	 * 进件未完成超时关闭
     */
    const incomingNCTC = 2;	
		
	/**
     * 评估未完成超时关闭
	 * 评估未完成超时关闭
     */
    const evaluationNCTC = 4;	
		
	/**
     * 放款未完成超时关闭
	 * 放款未完成超时关闭
     */
    const loanNCTC = 8;	
		
	/**
     * 重分配超时关闭
	 * 重分配超时关闭
     */
    const redistributionTC = 16;	
		
	/**
     * 所有子订单关闭后订单超时关闭
	 * 所有子订单关闭后订单超时关闭
     */
    const allProjectClosedTC = 32;	
		
	/**
     * 激活再超时关闭
	 * 激活再超时关闭
     */
    const activationTimeoutClosure = 64;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumOrderSystemCloseReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumOrderSystemCloseReason","displayName":"订单系统关闭原因","description":"订单系统关闭原因","items": [{"value":"1","name":"checkpointTC","displayName":"查验点超时关闭","description":"查验点超时关闭"},{"value":"2","name":"incomingNCTC","displayName":"进件未完成超时关闭","description":"进件未完成超时关闭"},{"value":"4","name":"evaluationNCTC","displayName":"评估未完成超时关闭","description":"评估未完成超时关闭"},{"value":"8","name":"loanNCTC","displayName":"放款未完成超时关闭","description":"放款未完成超时关闭"},{"value":"16","name":"redistributionTC","displayName":"重分配超时关闭","description":"重分配超时关闭"},{"value":"32","name":"allProjectClosedTC","displayName":"所有子订单关闭后订单超时关闭","description":"所有子订单关闭后订单超时关闭"},{"value":"64","name":"activationTimeoutClosure","displayName":"激活再超时关闭","description":"激活再超时关闭"}]}';
	}
}
