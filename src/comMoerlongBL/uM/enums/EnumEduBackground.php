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
 * 教育背景
 * 教育背景
 * 
 */
class EnumEduBackground
{
	const description=array('1'=>'大专以下','2'=>'大专','4'=>'本科','8'=>'硕士及以上');
		
	/**
     * 大专以下
	 * 大专以下（默认））
     */
    const collegeOrBelow = 1;	
		
	/**
     * 大专
	 * 大专
     */
    const college = 2;	
		
	/**
     * 本科
	 * 本科
     */
    const undergraduate = 4;	
		
	/**
     * 硕士及以上
	 * 硕士及以上
     */
    const masterOrAbove = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumEduBackground","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumEduBackground","displayName":"教育背景","description":"教育背景","items": [{"value":"1","name":"collegeOrBelow","displayName":"大专以下","description":"大专以下（默认））"},{"value":"2","name":"college","displayName":"大专","description":"大专"},{"value":"4","name":"undergraduate","displayName":"本科","description":"本科"},{"value":"8","name":"masterOrAbove","displayName":"硕士及以上","description":"硕士及以上"}]}';
	}
}
