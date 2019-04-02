<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-02 10:21:03
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 建成时间
 * 建成时间
 * 
 */
class EnumMatchPropertyCompletionTime
{
	const description=array('1'=>'10年以内','2'=>'10~20年','4'=>'20~30年','8'=>'30年以上');
		
	/**
     * 10年以内
	 * 10年以内
     */
    const below10 = 1;	
		
	/**
     * 10~20年
	 * 10~20年
     */
    const between10to20 = 2;	
		
	/**
     * 20~30年
	 * 20~30年
     */
    const between20to30 = 4;	
		
	/**
     * 30年以上
	 * 30年以上
     */
    const above30 = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchPropertyCompletionTime","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPropertyCompletionTime","displayName":"建成时间","description":"建成时间","items": [{"value":"1","name":"below10","displayName":"10年以内","description":"10年以内"},{"value":"2","name":"between10to20","displayName":"10~20年","description":"10~20年"},{"value":"4","name":"between20to30","displayName":"20~30年","description":"20~30年"},{"value":"8","name":"above30","displayName":"30年以上","description":"30年以上"}]}';
	}
}
