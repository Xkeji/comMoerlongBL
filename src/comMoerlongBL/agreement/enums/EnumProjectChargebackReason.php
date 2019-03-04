<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-04 10:22:57
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 子订单客户退单原因
 * 子订单客户退单原因
 * 
 */
class EnumProjectChargebackReason
{
	const description=array('1'=>'客户已筹措到资金','2'=>'客户对服务不满意，退单','4'=>'客户对可贷款金额不满意，退单');
		
	/**
     * 客户已筹措到资金
	 * 客户已筹措到资金
     */
    const alreadyHaveFunds = 1;	
		
	/**
     * 客户对服务不满意，退单
	 * 客户对服务不满意，退单
     */
    const serviceIssue = 2;	
		
	/**
     * 客户对可贷款金额不满意，退单
	 * 客户对可贷款金额不满意，退单
     */
    const insufficientAmount = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProjectChargebackReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumProjectChargebackReason","displayName":"子订单客户退单原因","description":"子订单客户退单原因","items": [{"value":"1","name":"alreadyHaveFunds","displayName":"客户已筹措到资金","description":"客户已筹措到资金"},{"value":"2","name":"serviceIssue","displayName":"客户对服务不满意，退单","description":"客户对服务不满意，退单"},{"value":"4","name":"insufficientAmount","displayName":"客户对可贷款金额不满意，退单","description":"客户对可贷款金额不满意，退单"}]}';
	}
}
