<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-01 11:29:43
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 车辆上户情况
 * 车辆上户情况
 * 
 */
class EnumMatchVehicleRegistraionTime
{
	const description=array('1'=>'不足3个月','2'=>'超过3个月');
		
	/**
     * 不足3个月
	 * 不足3个月
     */
    const below3M = 1;	
		
	/**
     * 超过3个月
	 * 超过3个月
     */
    const above3M = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchVehicleRegistraionTime","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehicleRegistraionTime","displayName":"车辆上户情况","description":"车辆上户情况","items": [{"value":"1","name":"below3M","displayName":"不足3个月","description":"不足3个月"},{"value":"2","name":"above3M","displayName":"超过3个月","description":"超过3个月"}]}';
	}
}
