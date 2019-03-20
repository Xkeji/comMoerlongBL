<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-19 16:10:43
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 持证时间
 * 持证时间
 * 
 */
class EnumMatchOwnershipCertificationTime
{
	const description=array('1'=>'无证','2'=>'1年以内','4'=>'1年以上');
		
	/**
     * 无证
	 * 无证
     */
    const none = 1;	
		
	/**
     * 1年以内
	 * 1年以内
     */
    const below1 = 2;	
		
	/**
     * 1年以上
	 * 1年以上
     */
    const above1 = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchOwnershipCertificationTime","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchOwnershipCertificationTime","displayName":"持证时间","description":"持证时间","items": [{"value":"1","name":"none","displayName":"无证","description":"无证"},{"value":"2","name":"below1","displayName":"1年以内","description":"1年以内"},{"value":"4","name":"above1","displayName":"1年以上","description":"1年以上"}]}';
	}
}
