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
 * 订单系统关闭原因
 * 订单系统关闭原因
 * 
 */
class EnumOrderSystemCloseReason
{
	const Description=array('1'=>'任一订单完成进件后，其余订单超时关闭','2'=>'任一订单完成放款后，其余订单超时关闭','4'=>'订单完成后，无活跃订单，超时关闭');
		
	/**
     * 任一订单完成进件后，其余订单超时关闭
	 * 任一订单完成进件后，其余订单超时关闭
     */
    const TimeoutAfterOneComplete = 1;	
		
	/**
     * 任一订单完成放款后，其余订单超时关闭
	 * 任一订单完成放款后，其余订单超时关闭
     */
    const TimeoutAfterOneLoaned = 2;	
		
	/**
     * 订单完成后，无活跃订单，超时关闭
	 * 订单完成后，无活跃订单，超时关闭
     */
    const TimeoutAferAllComplete = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}