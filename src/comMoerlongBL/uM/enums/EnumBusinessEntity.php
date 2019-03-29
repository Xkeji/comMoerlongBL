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
 * 经营主体
 * 经营主体
 * 
 */
class EnumBusinessEntity
{
	const description=array('1'=>'无，不愿新办','2'=>'无，可以新办','4'=>'有，不可考察','8'=>'有，可考察');
		
	/**
     * 无，不愿新办
	 * 无，不愿新办（默认）
     */
    const noHaveAndNoNew = 1;	
		
	/**
     * 无，可以新办
	 * 无，可以新办
     */
    const noHaveAndCanNew = 2;	
		
	/**
     * 有，不可考察
	 * 有，不可考察
     */
    const haveAndAllowInspection = 4;	
		
	/**
     * 有，可考察
	 * 有，可考察
     */
    const haveAndDenyInspection = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumBusinessEntity","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumBusinessEntity","displayName":"经营主体","description":"经营主体","items": [{"value":"1","name":"noHaveAndNoNew","displayName":"无，不愿新办","description":"无，不愿新办（默认）"},{"value":"2","name":"noHaveAndCanNew","displayName":"无，可以新办","description":"无，可以新办"},{"value":"4","name":"haveAndAllowInspection","displayName":"有，不可考察","description":"有，不可考察"},{"value":"8","name":"haveAndDenyInspection","displayName":"有，可考察","description":"有，可考察"}]}';
	}
}
