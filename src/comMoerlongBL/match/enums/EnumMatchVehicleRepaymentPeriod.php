<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-22 18:03:21
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 还款期数
 * 还款期数（按揭车）
 * 
 */
class EnumMatchVehicleRepaymentPeriod
{
	const Description=array('1'=>'6期以下','2'=>'6~12期','4'=>'13~36期','8'=>'36期以上');
		
	/**
     * 6期以下
	 * 6期以下
     */
    const Below6 = 1;	
		
	/**
     * 6~12期
	 * 6~12期
     */
    const Between6to12 = 2;	
		
	/**
     * 13~36期
	 * 13~36期
     */
    const Between13to36 = 4;	
		
	/**
     * 36期以上
	 * 36期以上
     */
    const Above36 = 8;	
      
	public static function getDescription($key){
        return isset(self::Description[$key])?self::Description[$key]:'';
    }
}
