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
 * 性别
 * 性别
 * 
 */
class EnumGender
{
	const description=array('1'=>'男','2'=>'女');
		
	/**
     * 男
	 * 男（默认）
     */
    const male = 1;	
		
	/**
     * 女
	 * 女
     */
    const female = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumGender","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumGender","displayName":"性别","description":"性别","items": [{"value":"1","name":"male","displayName":"男","description":"男（默认）"},{"value":"2","name":"female","displayName":"女","description":"女"}]}';
	}
}
