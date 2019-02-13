<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:40
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message;


/**
 * 聊天记录的状态
 * 聊天记录的状态
 * 
 */
class EnumMessageStatus
{
	const Description=array('1'=>'未读','2'=>'已读','4'=>'被撤回');
		
	/**
     * 未读
	 * 该聊天记录尚未被接收者阅读
     */
    const Unread = 1;	
		
	/**
     * 已读
	 * 该聊天记录已被接收者阅读
     */
    const Read = 2;	
		
	/**
     * 被撤回
	 * 该聊天记录已被发送者撤回
     */
    const Cancelled = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}