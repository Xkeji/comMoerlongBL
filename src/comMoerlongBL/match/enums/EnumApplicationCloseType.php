<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:23
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 签单申请关闭类型
 * 签单申请关闭类型
 * 
 */
class EnumApplicationCloseType
{
	const description=array('0'=>'未关闭','1'=>'已签单','2'=>'超期关闭','4'=>'无效关闭','8'=>'取消报单','16'=>'重复报单','32'=>'未定义');
		
	/**
     * 未关闭
	 * 未关闭
     */
    const none = 0;	
		
	/**
     * 已签单
	 * 已签单
     */
    const signed = 1;	
		
	/**
     * 超期关闭
	 * 超期关闭
     */
    const timeout = 2;	
		
	/**
     * 无效关闭
	 * 无效关闭
     */
    const invalid = 4;	
		
	/**
     * 取消报单
	 * 取消报单
     */
    const cancel = 8;	
		
	/**
     * 重复报单
	 * 重复报单
     */
    const repeat = 16;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumApplicationCloseType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumApplicationCloseType","displayName":"签单申请关闭类型","description":"签单申请关闭类型","items": [{"value":"0","name":"none","displayName":"未关闭","description":"未关闭"},{"value":"1","name":"signed","displayName":"已签单","description":"已签单"},{"value":"2","name":"timeout","displayName":"超期关闭","description":"超期关闭"},{"value":"4","name":"invalid","displayName":"无效关闭","description":"无效关闭"},{"value":"8","name":"cancel","displayName":"取消报单","description":"取消报单"},{"value":"16","name":"repeat","displayName":"重复报单","description":"重复报单"}]}';
	}
}
