<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-07-04 10:55:11
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 缴纳方式
 * 保单缴纳方式
 * 
 */
class EnumMatchPolicePaymentType
{
	const description=array('1'=>'按年','2'=>'按月','4'=>'按季','8'=>'趸交');
		
	/**
     * 按年
	 * 按年
     */
    const byYear = 1;	
		
	/**
     * 按月
	 * 按月
     */
    const byMonth = 2;	
		
	/**
     * 按季
	 * 按季
     */
    const bySeason = 4;	
		
	/**
     * 趸交
	 * 趸交
     */
    const onetime = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchPolicePaymentType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentType","displayName":"缴纳方式","description":"保单缴纳方式","items": [{"value":"1","name":"byYear","displayName":"按年","description":"按年"},{"value":"2","name":"byMonth","displayName":"按月","description":"按月"},{"value":"4","name":"bySeason","displayName":"按季","description":"按季"},{"value":"8","name":"onetime","displayName":"趸交","description":"趸交"}]}';
	}
}
