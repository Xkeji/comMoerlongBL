<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-22 16:41:27
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 子订单系统关闭原因
 * 子订单系统关闭原因
 * 
 */
class EnumProjectSystemCloseReason
{
	const description=array('1'=>'协议未分配后台超时关闭','2'=>'查验点超时关闭','4'=>'进件未完成超时关闭','8'=>'评估未完成超时关闭','16'=>'放款未完成超时关闭','32'=>'放款后，新规划子订单未完成进件关闭','64'=>'重分配超时关闭','128'=>'因协议取消签单关闭','256'=>'因订单无效拒单关闭','512'=>'因订单取消签单关闭');
		
	/**
     * 协议未分配后台超时关闭
	 * 协议未分配后台超时关闭
     */
    const unsignedBackgroundBTC = 1;	
		
	/**
     * 查验点超时关闭
	 * 查验点超时关闭
     */
    const checkpointTC = 2;	
		
	/**
     * 进件未完成超时关闭
	 * 进件未完成超时关闭
     */
    const incomingNCTC = 4;	
		
	/**
     * 评估未完成超时关闭
	 * 评估未完成超时关闭
     */
    const evaluationNCTC = 8;	
		
	/**
     * 放款未完成超时关闭
	 * 放款未完成超时关闭
     */
    const loanNCTC = 16;	
		
	/**
     * 放款后，新规划子订单未完成进件关闭
	 * 放款后，新规划子订单未完成进件关闭
     */
    const projectIncomingNotCompleteToClose = 32;	
		
	/**
     * 重分配超时关闭
	 * 重分配超时关闭
     */
    const redistributionTC = 64;	
		
	/**
     * 因协议取消签单关闭
	 * 因协议取消签单关闭
     */
    const agreementCancelToClose = 128;	
		
	/**
     * 因订单无效拒单关闭
	 * 因订单无效拒单关闭
     */
    const orderInvalidToClose = 256;	
		
	/**
     * 因订单取消签单关闭
	 * 因订单取消签单关闭
     */
    const orderCancelToClose = 512;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProjectSystemCloseReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumProjectSystemCloseReason","displayName":"子订单系统关闭原因","description":"子订单系统关闭原因","items": [{"value":"1","name":"unsignedBackgroundBTC","displayName":"协议未分配后台超时关闭","description":"协议未分配后台超时关闭"},{"value":"2","name":"checkpointTC","displayName":"查验点超时关闭","description":"查验点超时关闭"},{"value":"4","name":"incomingNCTC","displayName":"进件未完成超时关闭","description":"进件未完成超时关闭"},{"value":"8","name":"evaluationNCTC","displayName":"评估未完成超时关闭","description":"评估未完成超时关闭"},{"value":"16","name":"loanNCTC","displayName":"放款未完成超时关闭","description":"放款未完成超时关闭"},{"value":"32","name":"projectIncomingNotCompleteToClose","displayName":"放款后，新规划子订单未完成进件关闭","description":"放款后，新规划子订单未完成进件关闭"},{"value":"64","name":"redistributionTC","displayName":"重分配超时关闭","description":"重分配超时关闭"},{"value":"128","name":"agreementCancelToClose","displayName":"因协议取消签单关闭","description":"因协议取消签单关闭"},{"value":"256","name":"orderInvalidToClose","displayName":"因订单无效拒单关闭","description":"因订单无效拒单关闭"},{"value":"512","name":"orderCancelToClose","displayName":"因订单取消签单关闭","description":"因订单取消签单关闭"}]}';
	}
}
