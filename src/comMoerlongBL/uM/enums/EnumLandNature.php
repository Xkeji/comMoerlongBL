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
 * 土地性质
 * 土地性质
 * 
 */
class EnumLandNature
{
	const description=array('1'=>'出让','2'=>'划拨');
		
	/**
     * 出让
	 * 出让（默认）
     */
    const transfer = 1;	
		
	/**
     * 划拨
	 * 划拨
     */
    const allocation = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumLandNature","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumLandNature","displayName":"土地性质","description":"土地性质","items": [{"value":"1","name":"transfer","displayName":"出让","description":"出让（默认）"},{"value":"2","name":"allocation","displayName":"划拨","description":"划拨"}]}';
	}
}
