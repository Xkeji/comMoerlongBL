<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-07-04 10:55:11
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 公积金缴存情况
 * 公积金缴存情况
 * 
 */
class EnumMatchProvidentFundStatus
{
	const description=array('1'=>'无公积金','2'=>'同社保','4'=>'持续缴纳中');
		
	/**
     * 无公积金
	 * 无公积金
     */
    const none = 1;	
		
	/**
     * 同社保
	 * 同社保
     */
    const syncWithSocialSecurity = 2;	
		
	/**
     * 持续缴纳中
	 * 持续缴纳中
     */
    const continuous = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchProvidentFundStatus","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchProvidentFundStatus","displayName":"公积金缴存情况","description":"公积金缴存情况","items": [{"value":"1","name":"none","displayName":"无公积金","description":"无公积金"},{"value":"2","name":"syncWithSocialSecurity","displayName":"同社保","description":"同社保"},{"value":"4","name":"continuous","displayName":"持续缴纳中","description":"持续缴纳中"}]}';
	}
}
