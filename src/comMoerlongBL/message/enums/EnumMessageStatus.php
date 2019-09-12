<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:23
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message\enums;


/**
 * 聊天记录的状态
 * 聊天记录的状态
 * 
 */
class EnumMessageStatus
{
	const description=array('1'=>'未读','2'=>'已读','4'=>'被撤回');
		
	/**
     * 未读
	 * 该聊天记录尚未被接收者阅读
     */
    const unread = 1;	
		
	/**
     * 已读
	 * 该聊天记录已被接收者阅读
     */
    const read = 2;	
		
	/**
     * 被撤回
	 * 该聊天记录已被发送者撤回
     */
    const cancelled = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMessageStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumMessageStatus","displayName":"聊天记录的状态","description":"聊天记录的状态","items": [{"value":"1","name":"unread","displayName":"未读","description":"该聊天记录尚未被接收者阅读"},{"value":"2","name":"read","displayName":"已读","description":"该聊天记录已被接收者阅读"},{"value":"4","name":"cancelled","displayName":"被撤回","description":"该聊天记录已被发送者撤回"}]}';
	}
}
