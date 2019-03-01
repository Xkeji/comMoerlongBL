<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-01 11:29:43
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message\enums;


/**
 * 通知的类型
 * 通知的类型
 * 
 */
class EnumNotificationType
{
	const description=array('1'=>'加好友的请求','2'=>'加好友的请求已通过','4'=>'好友上线','8'=>'好友下线','16'=>'加群的请求','32'=>'加群的请求已通过','64'=>'群成员发生了变动','128'=>'系统通知','256'=>'转线请求','512'=>'转线请求已通过','1024'=>'转线请求被取消');
		
	/**
     * 加好友的请求
	 * 加好友的请求
     */
    const contactAddingRequest = 1;	
		
	/**
     * 加好友的请求已通过
	 * 加好友的请求已通过
     */
    const contactAddingRequestAgreed = 2;	
		
	/**
     * 好友上线
	 * 好友上线
     */
    const online = 4;	
		
	/**
     * 好友下线
	 * 好友下线
     */
    const offline = 8;	
		
	/**
     * 加群的请求
	 * 加群的请求
     */
    const chatRoomJoinRequest = 16;	
		
	/**
     * 加群的请求已通过
	 * 加群的请求已通过
     */
    const chatRoomJoinRequestAgreed = 32;	
		
	/**
     * 群成员发生了变动
	 * 群成员发生了变动
     */
    const chatRoomMemberChanged = 64;	
		
	/**
     * 系统通知
	 * 系统通知
     */
    const system = 128;	
		
	/**
     * 转线请求
	 * 转线请求
     */
    const redirectRequest = 256;	
		
	/**
     * 转线请求已通过
	 * 转线请求已通过
     */
    const redirectRequestAgreed = 512;	
		
	/**
     * 转线请求被取消
	 * 转线请求被取消
     */
    const redirectRequestCancelled = 1024;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumNotificationType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumNotificationType","displayName":"通知的类型","description":"通知的类型","items": [{"value":"1","name":"contactAddingRequest","displayName":"加好友的请求","description":"加好友的请求"},{"value":"2","name":"contactAddingRequestAgreed","displayName":"加好友的请求已通过","description":"加好友的请求已通过"},{"value":"4","name":"online","displayName":"好友上线","description":"好友上线"},{"value":"8","name":"offline","displayName":"好友下线","description":"好友下线"},{"value":"16","name":"chatRoomJoinRequest","displayName":"加群的请求","description":"加群的请求"},{"value":"32","name":"chatRoomJoinRequestAgreed","displayName":"加群的请求已通过","description":"加群的请求已通过"},{"value":"64","name":"chatRoomMemberChanged","displayName":"群成员发生了变动","description":"群成员发生了变动"},{"value":"128","name":"system","displayName":"系统通知","description":"系统通知"},{"value":"256","name":"redirectRequest","displayName":"转线请求","description":"转线请求"},{"value":"512","name":"redirectRequestAgreed","displayName":"转线请求已通过","description":"转线请求已通过"},{"value":"1024","name":"redirectRequestCancelled","displayName":"转线请求被取消","description":"转线请求被取消"}]}';
	}
}
