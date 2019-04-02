<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-02 10:21:03
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 行驶里程数（万公里）
 * 行驶里程数（万公里）
 * 
 */
class EnumMatchVehicleMileage
{
	const description=array('1'=>'12万以内','2'=>'12万以上');
		
	/**
     * 12万以内
	 * 12万以内
     */
    const below12 = 1;	
		
	/**
     * 12万以上
	 * 12万以上
     */
    const above12 = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchVehicleMileage","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehicleMileage","displayName":"行驶里程数（万公里）","description":"行驶里程数（万公里）","items": [{"value":"1","name":"below12","displayName":"12万以内","description":"12万以内"},{"value":"2","name":"above12","displayName":"12万以上","description":"12万以上"}]}';
	}
}
