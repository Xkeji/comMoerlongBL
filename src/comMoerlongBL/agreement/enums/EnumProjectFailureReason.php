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
 * 子订单失败关闭原因
 * 子订单失败关闭原因
 * 
 */
class EnumProjectFailureReason
{
	const Description=array('1'=>'此渠道暂时无法提供资金','2'=>'渠道人员提交资料被打回');
		
	/**
     * 此渠道暂时无法提供资金
	 * 此渠道暂时无法提供资金
     */
    const UnableToLoan = 1;	
		
	/**
     * 渠道人员提交资料被打回
	 * 渠道人员提交资料被打回
     */
    const InfoReturned = 2;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
