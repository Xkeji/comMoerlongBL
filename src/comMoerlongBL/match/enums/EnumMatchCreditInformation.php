<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:23
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 征信情况
 * 征信情况
 * 
 */
class EnumMatchCreditInformation
{
	const description=array('0'=>'未定义','1'=>'无信用卡或贷款','2'=>'信用良好','4'=>'1年多次逾期');
		
	/**
     * 无信用卡或贷款
	 * 无信用卡或贷款
     */
    const noCreditCardAndLoan = 1;	
		
	/**
     * 信用良好
	 * 信用良好
     */
    const goodCredit = 2;	
		
	/**
     * 1年多次逾期
	 * 1年多次逾期
     */
    const badCredit = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchCreditInformation","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchCreditInformation","displayName":"征信情况","description":"征信情况","items": [{"value":"1","name":"noCreditCardAndLoan","displayName":"无信用卡或贷款","description":"无信用卡或贷款"},{"value":"2","name":"goodCredit","displayName":"信用良好","description":"信用良好"},{"value":"4","name":"badCredit","displayName":"1年多次逾期","description":"1年多次逾期"}]}';
	}
}
