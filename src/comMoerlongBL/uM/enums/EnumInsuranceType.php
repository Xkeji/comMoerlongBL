<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-05-31 09:49:00
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 投保险种
 * 投保险种
 * 
 */
class EnumInsuranceType
{
	const description=array('1'=>'寿险','2'=>'教育险','4'=>'其他保险');
		
	/**
     * 寿险
	 * 寿险
     */
    const life = 1;	
		
	/**
     * 教育险
	 * 教育险
     */
    const education = 2;	
		
	/**
     * 其他保险
	 * 其他保险
     */
    const others = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumInsuranceType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumInsuranceType","displayName":"投保险种","description":"投保险种","items": [{"value":"1","name":"life","displayName":"寿险","description":"寿险"},{"value":"2","name":"education","displayName":"教育险","description":"教育险"},{"value":"4","name":"others","displayName":"其他保险","description":"其他保险"}]}';
	}
}
