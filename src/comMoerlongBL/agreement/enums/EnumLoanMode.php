<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-30 17:01:09
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 贷款方式
 * 贷款方式
 * 
 */
class EnumLoanMode
{
	const description=array('1'=>'标准贷','2'=>'三方贷款','4'=>'拆\续贷业务');
		
	/**
     * 标准贷
	 * 标准贷
     */
    const standardLoan = 1;	
		
	/**
     * 三方贷款
	 * 三方贷款
     */
    const thirdPartLoan = 2;	
		
	/**
     * 拆\续贷业务
	 * 拆\续贷业务
     */
    const continueLoan = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumLoanMode","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumLoanMode","displayName":"贷款方式","description":"贷款方式","items": [{"value":"1","name":"standardLoan","displayName":"标准贷","description":"标准贷"},{"value":"2","name":"thirdPartLoan","displayName":"三方贷款","description":"三方贷款"},{"value":"4","name":"continueLoan","displayName":"拆\续贷业务","description":"拆\续贷业务"}]}';
	}
}
