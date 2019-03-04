<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-04 10:22:59
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 名下汽车
 * 名下汽车
 * 
 */
class EnumOwnerVehicleProperty
{
	const description=array('1'=>'没有','2'=>'1辆','4'=>'2辆及以上');
		
	/**
     * 没有
	 * 没有
     */
    const none = 1;	
		
	/**
     * 1辆
	 * 1辆
     */
    const one = 2;	
		
	/**
     * 2辆及以上
	 * 2辆及以上
     */
    const twoOrAbove = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumOwnerVehicleProperty","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumOwnerVehicleProperty","displayName":"名下汽车","description":"名下汽车","items": [{"value":"1","name":"none","displayName":"没有","description":"没有"},{"value":"2","name":"one","displayName":"1辆","description":"1辆"},{"value":"4","name":"twoOrAbove","displayName":"2辆及以上","description":"2辆及以上"}]}';
	}
}
