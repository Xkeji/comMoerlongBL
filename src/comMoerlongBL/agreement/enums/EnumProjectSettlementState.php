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
 * 子订单客户结算状态
 * 子订单客户结算状态
 * 
 */
class EnumProjectSettlementState
{
	const Description=array('1'=>'初始','2'=>'等待中','4'=>'结算中','8'=>'已关闭');
		
	/**
     * 初始
	 * 初始
     */
    const Inital = 1;	
		
	/**
     * 等待中
	 * 等待中
     */
    const Waiting = 2;	
		
	/**
     * 结算中
	 * 结算中
     */
    const Running = 4;	
		
	/**
     * 已关闭
	 * 已关闭
     */
    const Closed = 8;	
      
	public static function getDescription($key){
        return isset(self::Description[$key]) ? self::Description[$key] : '';
    }
}
