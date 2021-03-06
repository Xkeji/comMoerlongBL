<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-22 18:03:22
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 合作类型
 * 合作类型
 * 
 */
class EnumUMCooperationType
{
	const Description=array('1'=>'收款合作','2'=>'交单合作','4'=>'资金渠道','8'=>'推广合作','16'=>'其他');
		
	/**
     * 收款合作
	 * 收款合作
     */
    const Acquirer = 1;	
		
	/**
     * 交单合作
	 * 交单合作
     */
    const Surrender = 2;	
		
	/**
     * 资金渠道
	 * 资金渠道
     */
    const CapitalChannel = 4;	
		
	/**
     * 推广合作
	 * 推广合作
     */
    const PromotionOfCooperative = 8;	
		
	/**
     * 其他
	 * 其他
     */
    const Other = 16;	
      
	public static function getDescription($key){
        return isset(self::Description[$key])?self::Description[$key]:'';
    }
}
