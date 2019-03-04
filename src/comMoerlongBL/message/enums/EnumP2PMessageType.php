<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-04 10:22:59
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message\enums;


/**
 * 点对点消息的类型
 * 点对点（个人与个人）消息的类型
 * 
 */
class EnumP2PMessageType
{
	const description=array('1'=>'好友','2'=>'聊天室','4'=>'陌生人');
		
	/**
     * 好友
	 * 联系人（好友）之间发送的消息
     */
    const contact = 1;	
		
	/**
     * 聊天室
	 * 在聊天室里发送的消息
     */
    const chatRoom = 2;	
		
	/**
     * 陌生人
	 * 陌生人之间发送的消息
     */
    const stranger = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumP2PMessageType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumP2PMessageType","displayName":"点对点消息的类型","description":"点对点（个人与个人）消息的类型","items": [{"value":"1","name":"contact","displayName":"好友","description":"联系人（好友）之间发送的消息"},{"value":"2","name":"chatRoom","displayName":"聊天室","description":"在聊天室里发送的消息"},{"value":"4","name":"stranger","displayName":"陌生人","description":"陌生人之间发送的消息"}]}';
	}
}
