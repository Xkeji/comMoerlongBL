<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:38
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement;


/**
 * 协议系统关闭原因
 * 协议系统关闭原因
 * 
 */
class EnumAgreementSystemCloseReason
{
	const Description=array('1'=>'签单后未提交订单超时，且超期未分配订单','2'=>'订单无效后超时','4'=>'订单完成后超时');
		
	/**
     * 签单后未提交订单超时，且超期未分配订单
	 * 签单后未提交订单超时，且超期未分配订单
     */
    const TimeOutAfterSigned = 1;	
		
	/**
     * 订单无效后超时
	 * 订单无效后超时
     */
    const TimeoutAfterInvalid = 2;	
		
	/**
     * 订单完成后超时
	 * 订单完成后超时
     */
    const TimeoutAfterComplete = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
