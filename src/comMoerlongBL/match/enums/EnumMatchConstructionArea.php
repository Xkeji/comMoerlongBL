<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-04 10:22:59
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 建筑面积
 * 建筑面积
 * 
 */
class EnumMatchConstructionArea
{
	const description=array('1'=>'60以下','2'=>'60~100','4'=>'100~200','8'=>'200以上');
		
	/**
     * 60以下
	 * 60以下
     */
    const below60 = 1;	
		
	/**
     * 60~100
	 * 60~100
     */
    const between60to100 = 2;	
		
	/**
     * 100~200
	 * 100~200
     */
    const between100to200 = 4;	
		
	/**
     * 200以上
	 * 200以上
     */
    const above200 = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchConstructionArea","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchConstructionArea","displayName":"建筑面积","description":"建筑面积","items": [{"value":"1","name":"below60","displayName":"60以下","description":"60以下"},{"value":"2","name":"between60to100","displayName":"60~100","description":"60~100"},{"value":"4","name":"between100to200","displayName":"100~200","description":"100~200"},{"value":"8","name":"above200","displayName":"200以上","description":"200以上"}]}';
	}
}
