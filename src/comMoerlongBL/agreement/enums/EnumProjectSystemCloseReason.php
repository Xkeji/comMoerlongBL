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
 * 子订单系统关闭原因
 * 子订单系统关闭原因
 * 
 */
class EnumProjectSystemCloseReason
{
	const Description=array('1'=>'因订单无效拒单关闭','2'=>'因订单取消签单关闭','4'=>'因订单超时关闭','8'=>'因同一订单中，子订单放款，且已超时，其余子订单超时关闭','16'=>'因同一订单中，子订单完成进件，且已超时，其余子订单超时关闭','32'=>'因其他订单完成放款，其余订单关闭而关闭','64'=>'因其他订单完成进件，其余订单关闭而关闭');
		
	/**
     * 因订单无效拒单关闭
	 * 因订单无效拒单关闭
     */
    const OrderInvalid = 1;	
		
	/**
     * 因订单取消签单关闭
	 * 因订单取消签单关闭
     */
    const OrderCancel = 2;	
		
	/**
     * 因订单超时关闭
	 * 因订单超时关闭
     */
    const OrderTimeout = 4;	
		
	/**
     * 因同一订单中，子订单放款，且已超时，其余子订单超时关闭
	 * 因同一订单中，子订单放款，且已超时，其余子订单超时关闭
     */
    const MoreReason1 = 8;	
		
	/**
     * 因同一订单中，子订单完成进件，且已超时，其余子订单超时关闭
	 * 因同一订单中，子订单完成进件，且已超时，其余子订单超时关闭
     */
    const MoreReason2 = 16;	
		
	/**
     * 因其他订单完成放款，其余订单关闭而关闭
	 * 因其他订单完成放款，其余订单关闭而关闭
     */
    const MoreReason3 = 32;	
		
	/**
     * 因其他订单完成进件，其余订单关闭而关闭
	 * 因其他订单完成进件，其余订单关闭而关闭
     */
    const MoreReason4 = 64;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
