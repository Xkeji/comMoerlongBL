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
 * 协议取消签单原因
 * 协议取消签单原因
 * 
 */
class EnumAgreementCancelReason
{
	const description=array('0'=>'未定义','1'=>'客户改变决定，放弃签单','2'=>'客户已筹措到资金');
		
	/**
     * 客户改变决定，放弃签单
	 * 客户改变决定，放弃签单
     */
    const changeMind = 1;	
		
	/**
     * 客户已筹措到资金
	 * 客户已筹措到资金
     */
    const alreadyHaveFunds = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumAgreementCancelReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumAgreementCancelReason","displayName":"协议取消签单原因","description":"协议取消签单原因","items": [{"value":"1","name":"changeMind","displayName":"客户改变决定，放弃签单","description":"客户改变决定，放弃签单"},{"value":"2","name":"alreadyHaveFunds","displayName":"客户已筹措到资金","description":"客户已筹措到资金"}]}';
	}
}
