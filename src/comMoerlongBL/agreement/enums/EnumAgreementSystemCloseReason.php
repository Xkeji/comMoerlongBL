<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-10-30 10:13:14
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 协议系统关闭原因
 * 协议系统关闭原因
 * 
 */
class EnumAgreementSystemCloseReason
{
	const description=array('0'=>'未定义','1'=>'协议未分配后台超时关闭','2'=>'检查点超时关闭','4'=>'所有订单关闭后协议超时关闭');
		
	/**
     * 协议未分配后台超时关闭
	 * 协议未分配后台超时关闭,TC=Background Timeout Close
     */
    const unsignedBackgroundBTC = 1;	
		
	/**
     * 检查点超时关闭
	 * 检查点超时关闭：TC=Timeout Close
     */
    const checkpointTC = 2;	
		
	/**
     * 所有订单关闭后协议超时关闭
	 * 所有订单关闭后协议超时关闭
     */
    const allOrderClosedTC = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumAgreementSystemCloseReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumAgreementSystemCloseReason","displayName":"协议系统关闭原因","description":"协议系统关闭原因","items": [{"value":"1","name":"unsignedBackgroundBTC","displayName":"协议未分配后台超时关闭","description":"协议未分配后台超时关闭,TC=Background Timeout Close"},{"value":"2","name":"checkpointTC","displayName":"检查点超时关闭","description":"检查点超时关闭：TC=Timeout Close"},{"value":"4","name":"allOrderClosedTC","displayName":"所有订单关闭后协议超时关闭","description":"所有订单关闭后协议超时关闭"}]}';
	}
}
