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
 * 贷款期数
 * 贷款期数（按揭车）
 * 
 */
class EnumMatchVehicleRepaymentPeriod
{
	const description=array('0'=>'未定义','1'=>'6期以下','2'=>'6~12期','4'=>'13~36期','8'=>'36期以上');
		
	/**
     * 6期以下
	 * 6期以下
     */
    const below6 = 1;	
		
	/**
     * 6~12期
	 * 6~12期
     */
    const between6to12 = 2;	
		
	/**
     * 13~36期
	 * 13~36期
     */
    const between13to36 = 4;	
		
	/**
     * 36期以上
	 * 36期以上
     */
    const above36 = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchVehicleRepaymentPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehicleRepaymentPeriod","displayName":"贷款期数","description":"贷款期数（按揭车）","items": [{"value":"1","name":"below6","displayName":"6期以下","description":"6期以下"},{"value":"2","name":"between6to12","displayName":"6~12期","description":"6~12期"},{"value":"4","name":"between13to36","displayName":"13~36期","description":"13~36期"},{"value":"8","name":"above36","displayName":"36期以上","description":"36期以上"}]}';
	}
}
