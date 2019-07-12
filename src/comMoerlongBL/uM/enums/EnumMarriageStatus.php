<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-07-12 14:54:55
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 婚姻状况
 * 婚姻状况
 * 
 */
class EnumMarriageStatus
{
	const description=array('1'=>'已婚','2'=>'未婚','4'=>'离异','8'=>'丧偶');
		
	/**
     * 已婚
	 * 已婚（默认）
     */
    const married = 1;	
		
	/**
     * 未婚
	 * 未婚
     */
    const single = 2;	
		
	/**
     * 离异
	 * 离异
     */
    const divorced = 4;	
		
	/**
     * 丧偶
	 * 丧偶
     */
    const widowed = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMarriageStatus","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumMarriageStatus","displayName":"婚姻状况","description":"婚姻状况","items": [{"value":"1","name":"married","displayName":"已婚","description":"已婚（默认）"},{"value":"2","name":"single","displayName":"未婚","description":"未婚"},{"value":"4","name":"divorced","displayName":"离异","description":"离异"},{"value":"8","name":"widowed","displayName":"丧偶","description":"丧偶"}]}';
	}
}
