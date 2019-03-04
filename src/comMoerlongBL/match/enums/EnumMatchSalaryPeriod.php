<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-04 10:22:59
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 打卡工资期数
 * 打卡工资期数
 * 
 */
class EnumMatchSalaryPeriod
{
	const description=array('0'=>'无','1'=>'1~3个月','2'=>'4~6个月','4'=>'7~12个月','8'=>'13~24个月','16'=>'25~36个月','32'=>'36个月以上');
		
	/**
     * 无
	 * 无
     */
    const none = 0;	
		
	/**
     * 1~3个月
	 * 1~3个月
     */
    const oneto3 = 1;	
		
	/**
     * 4~6个月
	 * 4~6个月
     */
    const fourto6 = 2;	
		
	/**
     * 7~12个月
	 * 7~12个月
     */
    const sevento12 = 4;	
		
	/**
     * 13~24个月
	 * 13~24个月
     */
    const thirteento24 = 8;	
		
	/**
     * 25~36个月
	 * 25~36个月
     */
    const tweentyfiveto36 = 16;	
		
	/**
     * 36个月以上
	 * 36个月以上
     */
    const above36 = 32;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchSalaryPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchSalaryPeriod","displayName":"打卡工资期数","description":"打卡工资期数","items": [{"value":"0","name":"none","displayName":"无","description":"无"},{"value":"1","name":"oneto3","displayName":"1~3个月","description":"1~3个月"},{"value":"2","name":"fourto6","displayName":"4~6个月","description":"4~6个月"},{"value":"4","name":"sevento12","displayName":"7~12个月","description":"7~12个月"},{"value":"8","name":"thirteento24","displayName":"13~24个月","description":"13~24个月"},{"value":"16","name":"tweentyfiveto36","displayName":"25~36个月","description":"25~36个月"},{"value":"32","name":"above36","displayName":"36个月以上","description":"36个月以上"}]}';
	}
}
