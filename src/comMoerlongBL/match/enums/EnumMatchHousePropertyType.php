<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-19 16:10:43
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 房产类型
 * 房产类型
 * 
 */
class EnumMatchHousePropertyType
{
	const description=array('1'=>'全款房','2'=>'按揭房');
		
	/**
     * 全款房
	 * 全款房
     */
    const fullHouse = 1;	
		
	/**
     * 按揭房
	 * 按揭房
     */
    const mortgageHouse = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchHousePropertyType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchHousePropertyType","displayName":"房产类型","description":"房产类型","items": [{"value":"1","name":"fullHouse","displayName":"全款房","description":"全款房"},{"value":"2","name":"mortgageHouse","displayName":"按揭房","description":"按揭房"}]}';
	}
}
