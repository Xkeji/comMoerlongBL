<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-22 18:03:22
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
	const Description=array('1'=>'好友','2'=>'聊天室','4'=>'陌生人');
		
	/**
     * 好友
	 * 联系人（好友）之间发送的消息
     */
    const Contact = 1;	
		
	/**
     * 聊天室
	 * 在聊天室里发送的消息
     */
    const ChatRoom = 2;	
		
	/**
     * 陌生人
	 * 陌生人之间发送的消息
     */
    const Stranger = 4;	
      
	public static function getDescription($key){
        return isset(self::Description[$key])?self::Description[$key]:'';
    }
}
