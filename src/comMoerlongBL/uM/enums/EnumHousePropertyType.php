<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-22 16:41:33
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 房产类型
 * 房产类型
 * 
 */
class EnumHousePropertyType
{
	const description=array('1'=>'住宅','2'=>'70年公寓','4'=>'40年公寓','8'=>'40年商铺','16'=>'40年办公','32'=>'别墅','64'=>'其它');
		
	/**
     * 住宅
	 * 住宅
     */
    const residential = 1;	
		
	/**
     * 70年公寓
	 * 70年公寓
     */
    const apartment70 = 2;	
		
	/**
     * 40年公寓
	 * 40年公寓
     */
    const apartment40 = 4;	
		
	/**
     * 40年商铺
	 * 40年商铺
     */
    const pavement40 = 8;	
		
	/**
     * 40年办公
	 * 40年办公
     */
    const office40 = 16;	
		
	/**
     * 别墅
	 * 别墅
     */
    const villa = 32;	
		
	/**
     * 其它
	 * 其它
     */
    const other = 64;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumHousePropertyType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumHousePropertyType","displayName":"房产类型","description":"房产类型","items": [{"value":"1","name":"residential","displayName":"住宅","description":"住宅"},{"value":"2","name":"apartment70","displayName":"70年公寓","description":"70年公寓"},{"value":"4","name":"apartment40","displayName":"40年公寓","description":"40年公寓"},{"value":"8","name":"pavement40","displayName":"40年商铺","description":"40年商铺"},{"value":"16","name":"office40","displayName":"40年办公","description":"40年办公"},{"value":"32","name":"villa","displayName":"别墅","description":"别墅"},{"value":"64","name":"other","displayName":"其它","description":"其它"}]}';
	}
}
