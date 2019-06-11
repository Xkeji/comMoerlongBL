<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-06-06 13:57:50
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 匹配策略
 * 匹配策略
 * 
 */
class EnumMatchStrategy
{
	const description=array('1'=>'智能排序','2'=>'额度最高','4'=>'利息最低');
		
	/**
     * 智能排序
	 * 智能排序
     */
    const smart = 1;	
		
	/**
     * 额度最高
	 * 额度最高
     */
    const edu = 2;	
		
	/**
     * 利息最低
	 * 利息最低
     */
    const lixi = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchStrategy","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchStrategy","displayName":"匹配策略","description":"匹配策略","items": [{"value":"1","name":"smart","displayName":"智能排序","description":"智能排序"},{"value":"2","name":"edu","displayName":"额度最高","description":"额度最高"},{"value":"4","name":"lixi","displayName":"利息最低","description":"利息最低"}]}';
	}
}
