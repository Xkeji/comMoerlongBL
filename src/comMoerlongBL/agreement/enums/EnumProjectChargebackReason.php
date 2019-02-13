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
 * 子订单客户退单原因
 * 子订单客户退单原因
 * 
 */
class EnumProjectChargebackReason
{
	const Description=array('1'=>'客户已筹措到资金','2'=>'客户对服务不满意，退单','4'=>'客户对可贷款金额不满意，退单');
		
	/**
     * 客户已筹措到资金
	 * 客户已筹措到资金
     */
    const AlreadyHaveFunds = 1;	
		
	/**
     * 客户对服务不满意，退单
	 * 客户对服务不满意，退单
     */
    const ServiceIssue = 2;	
		
	/**
     * 客户对可贷款金额不满意，退单
	 * 客户对可贷款金额不满意，退单
     */
    const InsufficientAmount = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
