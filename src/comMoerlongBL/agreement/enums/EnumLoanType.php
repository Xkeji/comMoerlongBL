<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-19 16:10:41
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 贷款类型
 * 贷款类型
 * 
 */
class EnumLoanType
{
	const description=array('1'=>'全款房贷','2'=>'房产二抵','4'=>'车辆贷款','8'=>'消费信贷','16'=>'小额信贷','32'=>'企业信贷','64'=>'新一贷');
		
	/**
     * 全款房贷
	 * 全款房抵押贷款
     */
    const fullMortgage = 1;	
		
	/**
     * 房产二抵
	 * 房产再次抵押贷款
     */
    const secondaryMoetgage = 2;	
		
	/**
     * 车辆贷款
	 * 车辆贷款
     */
    const vehicleMortgage = 4;	
		
	/**
     * 消费信贷
	 * 消费金融信贷
     */
    const consumerCredit = 8;	
		
	/**
     * 小额信贷
	 * 小额信用贷款
     */
    const microfinance = 16;	
		
	/**
     * 企业信贷
	 * 企业经营信贷
     */
    const corporateCredit = 32;	
		
	/**
     * 新一贷
	 * 新一贷
     */
    const xinYiDai = 64;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumLoanType","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumLoanType","displayName":"贷款类型","description":"贷款类型","items": [{"value":"1","name":"fullMortgage","displayName":"全款房贷","description":"全款房抵押贷款"},{"value":"2","name":"secondaryMoetgage","displayName":"房产二抵","description":"房产再次抵押贷款"},{"value":"4","name":"vehicleMortgage","displayName":"车辆贷款","description":"车辆贷款"},{"value":"8","name":"consumerCredit","displayName":"消费信贷","description":"消费金融信贷"},{"value":"16","name":"microfinance","displayName":"小额信贷","description":"小额信用贷款"},{"value":"32","name":"corporateCredit","displayName":"企业信贷","description":"企业经营信贷"},{"value":"64","name":"xinYiDai","displayName":"新一贷","description":"新一贷"}]}';
	}
}
