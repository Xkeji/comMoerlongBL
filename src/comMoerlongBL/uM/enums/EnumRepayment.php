<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:24
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 还款方式
 * 还款方式
 * 
 */
class EnumRepayment
{
	const description=array('0'=>'未定义','1'=>'随借随还','2'=>'先息后本','4'=>'等额本息','8'=>'等额本金','16'=>'循环贷','32'=>'计划还款','64'=>'气球贷');
		
	/**
     * 随借随还
	 * 随借随还
     */
    const repayAnyTime = 1;	
		
	/**
     * 先息后本
	 * 先息后本
     */
    const beforInstallment = 2;	
		
	/**
     * 等额本息
	 * 等额本息
     */
    const fixedInstallment = 4;	
		
	/**
     * 等额本金
	 * 等额本金
     */
    const fixedPrincipal = 8;	
		
	/**
     * 循环贷
	 * 循环贷
     */
    const revolvingLoan = 16;	
		
	/**
     * 计划还款
	 * 计划还款
     */
    const plannedRepayment = 32;	
		
	/**
     * 气球贷
	 * 气球贷
     */
    const balloonLoan = 64;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumRepayment","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumRepayment","displayName":"还款方式","description":"还款方式","items": [{"value":"1","name":"repayAnyTime","displayName":"随借随还","description":"随借随还"},{"value":"2","name":"beforInstallment","displayName":"先息后本","description":"先息后本"},{"value":"4","name":"fixedInstallment","displayName":"等额本息","description":"等额本息"},{"value":"8","name":"fixedPrincipal","displayName":"等额本金","description":"等额本金"},{"value":"16","name":"revolvingLoan","displayName":"循环贷","description":"循环贷"},{"value":"32","name":"plannedRepayment","displayName":"计划还款","description":"计划还款"},{"value":"64","name":"balloonLoan","displayName":"气球贷","description":"气球贷"}]}';
	}
}
