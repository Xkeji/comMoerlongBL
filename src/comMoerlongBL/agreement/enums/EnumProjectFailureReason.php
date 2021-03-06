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
 * 子订单失败关闭原因
 * 子订单失败关闭原因
 * 
 */
class EnumProjectFailureReason
{
	const description=array('0'=>'未定义','1'=>'此渠道暂时无法提供资金','2'=>'渠道人员提交资料被打回','4'=>'客户征信不良','8'=>'大数据不通过','16'=>'资质不符');
		
	/**
     * 此渠道暂时无法提供资金
	 * 此渠道暂时无法提供资金
     */
    const unableToLoan = 1;	
		
	/**
     * 渠道人员提交资料被打回
	 * 渠道人员提交资料被打回
     */
    const infoReturned = 2;	
		
	/**
     * 客户征信不良
	 * 客户征信不良
     */
    const creditIssue = 4;	
		
	/**
     * 大数据不通过
	 * 大数据不通过
     */
    const bigdataIssue = 8;	
		
	/**
     * 资质不符
	 * 资质不符
     */
    const qualificationIssue = 16;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProjectFailureReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumProjectFailureReason","displayName":"子订单失败关闭原因","description":"子订单失败关闭原因","items": [{"value":"1","name":"unableToLoan","displayName":"此渠道暂时无法提供资金","description":"此渠道暂时无法提供资金"},{"value":"2","name":"infoReturned","displayName":"渠道人员提交资料被打回","description":"渠道人员提交资料被打回"},{"value":"4","name":"creditIssue","displayName":"客户征信不良","description":"客户征信不良"},{"value":"8","name":"bigdataIssue","displayName":"大数据不通过","description":"大数据不通过"},{"value":"16","name":"qualificationIssue","displayName":"资质不符","description":"资质不符"}]}';
	}
}
