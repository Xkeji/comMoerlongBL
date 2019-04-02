<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-02 10:21:04
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 名下房产
 * 名下房产
 * 
 */
class EnumOwnerHouseProperty
{
	const description=array('1'=>'没有','2'=>'1套','4'=>'2套及其以上');
		
	/**
     * 没有
	 * 没有
     */
    const none = 1;	
		
	/**
     * 1套
	 * 1套
     */
    const one = 2;	
		
	/**
     * 2套及其以上
	 * 2套及其以上
     */
    const twoOrAbove = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumOwnerHouseProperty","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumOwnerHouseProperty","displayName":"名下房产","description":"名下房产","items": [{"value":"1","name":"none","displayName":"没有","description":"没有"},{"value":"2","name":"one","displayName":"1套","description":"1套"},{"value":"4","name":"twoOrAbove","displayName":"2套及其以上","description":"2套及其以上"}]}';
	}
}
