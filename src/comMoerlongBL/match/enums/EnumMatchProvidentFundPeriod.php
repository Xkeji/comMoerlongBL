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
 * 连续缴存期数
 * 连续缴存期数
 * 
 */
class EnumMatchProvidentFundPeriod
{
	const description=array('0'=>'未定义','1'=>'6个月~1年','2'=>'1~2年','4'=>'2~3年','8'=>'3年以上');
		
	/**
     * 6个月~1年
	 * 6个月~1年
     */
    const between6Mto1Y = 1;	
		
	/**
     * 1~2年
	 * 1~2年
     */
    const between1Yto2Y = 2;	
		
	/**
     * 2~3年
	 * 2~3年
     */
    const between2Yto3Y = 4;	
		
	/**
     * 3年以上
	 * 3年以上
     */
    const above3Y = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchProvidentFundPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchProvidentFundPeriod","displayName":"连续缴存期数","description":"连续缴存期数","items": [{"value":"1","name":"between6Mto1Y","displayName":"6个月~1年","description":"6个月~1年"},{"value":"2","name":"between1Yto2Y","displayName":"1~2年","description":"1~2年"},{"value":"4","name":"between2Yto3Y","displayName":"2~3年","description":"2~3年"},{"value":"8","name":"above3Y","displayName":"3年以上","description":"3年以上"}]}';
	}
}
