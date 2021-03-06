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
 * 拒单原因
 * 拒单原因
 * 
 */
class EnumLoanReasonForRejection
{
	const description=array('0'=>'未定义','1'=>'大数据核查不通过','2'=>'失信，有诉讼执行','4'=>'经营考察不过','8'=>'评分不足','16'=>'禁入行业','32'=>'征信不良','64'=>'抵押物太差','128'=>'负债过高','256'=>'流水违禁','512'=>'面谈违禁','1024'=>'电话异常（信息虚假）');
		
	/**
     * 大数据核查不通过
	 * 大数据核查不通过
     */
    const dataVerificationFails = 1;	
		
	/**
     * 失信，有诉讼执行
	 * 失信，有诉讼执行
     */
    const litigationExecution = 2;	
		
	/**
     * 经营考察不过
	 * 经营考察不过
     */
    const businessInvestigateFails = 4;	
		
	/**
     * 评分不足
	 * 评分不足
     */
    const underestimation = 8;	
		
	/**
     * 禁入行业
	 * 禁入行业
     */
    const forbiddenIndustry = 16;	
		
	/**
     * 征信不良
	 * 征信不良
     */
    const badCredit = 32;	
		
	/**
     * 抵押物太差
	 * 抵押物太差
     */
    const badCollateral = 64;	
		
	/**
     * 负债过高
	 * 负债过高
     */
    const highDebt = 128;	
		
	/**
     * 流水违禁
	 * 流水违禁
     */
    const illegalFundFlow = 256;	
		
	/**
     * 面谈违禁
	 * 面谈违禁
     */
    const illegalInterview = 512;	
		
	/**
     * 电话异常（信息虚假）
	 * 电话异常（信息虚假）
     */
    const falseInformatio = 1024;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumLoanReasonForRejection","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumLoanReasonForRejection","displayName":"拒单原因","description":"拒单原因","items": [{"value":"1","name":"dataVerificationFails","displayName":"大数据核查不通过","description":"大数据核查不通过"},{"value":"2","name":"litigationExecution","displayName":"失信，有诉讼执行","description":"失信，有诉讼执行"},{"value":"4","name":"businessInvestigateFails","displayName":"经营考察不过","description":"经营考察不过"},{"value":"8","name":"underestimation","displayName":"评分不足","description":"评分不足"},{"value":"16","name":"forbiddenIndustry","displayName":"禁入行业","description":"禁入行业"},{"value":"32","name":"badCredit","displayName":"征信不良","description":"征信不良"},{"value":"64","name":"badCollateral","displayName":"抵押物太差","description":"抵押物太差"},{"value":"128","name":"highDebt","displayName":"负债过高","description":"负债过高"},{"value":"256","name":"illegalFundFlow","displayName":"流水违禁","description":"流水违禁"},{"value":"512","name":"illegalInterview","displayName":"面谈违禁","description":"面谈违禁"},{"value":"1024","name":"falseInformatio","displayName":"电话异常（信息虚假）","description":"电话异常（信息虚假）"}]}';
	}
}
