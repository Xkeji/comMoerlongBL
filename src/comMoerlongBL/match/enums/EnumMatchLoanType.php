<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-06-06 13:57:50
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 选择贷款类型（可多选）
 * 选择贷款类型（可多选）
 * 
 */
class EnumMatchLoanType
{
	const description=array('1'=>'房产抵押','2'=>'车辆贷款','4'=>'信用贷款');
		
	/**
     * 房产抵押
	 * 房产抵押
     */
    const mortgage = 1;	
		
	/**
     * 车辆贷款
	 * 车辆贷款
     */
    const vehicleMortage = 2;	
		
	/**
     * 信用贷款
	 * 信用贷款
     */
    const creditLoans = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchLoanType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchLoanType","displayName":"选择贷款类型（可多选）","description":"选择贷款类型（可多选）","items": [{"value":"1","name":"mortgage","displayName":"房产抵押","description":"房产抵押"},{"value":"2","name":"vehicleMortage","displayName":"车辆贷款","description":"车辆贷款"},{"value":"4","name":"creditLoans","displayName":"信用贷款","description":"信用贷款"}]}';
	}
}
