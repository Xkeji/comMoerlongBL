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
 * 经营实体
 * 经营实体
 * 
 */
class EnumMatchBusinessEntity
{
	const description=array('1'=>'无','2'=>'无，可新办','4'=>'有且可考察','8'=>'有，可考察且注册满2年');
		
	/**
     * 无
	 * 无
     */
    const none = 1;	
		
	/**
     * 无，可新办
	 * 无，可新办
     */
    const noneButRegisterable = 2;	
		
	/**
     * 有且可考察
	 * 有且可考察
     */
    const ownerAndInvestigated = 4;	
		
	/**
     * 有，可考察且注册满2年
	 * 有，可考察且注册满2年
     */
    const ownerAbove2years = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchBusinessEntity","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchBusinessEntity","displayName":"经营实体","description":"经营实体","items": [{"value":"1","name":"none","displayName":"无","description":"无"},{"value":"2","name":"noneButRegisterable","displayName":"无，可新办","description":"无，可新办"},{"value":"4","name":"ownerAndInvestigated","displayName":"有且可考察","description":"有且可考察"},{"value":"8","name":"ownerAbove2years","displayName":"有，可考察且注册满2年","description":"有，可考察且注册满2年"}]}';
	}
}
