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
 * 用户的在线状态
 * 用户的在线状态
 * 
 */
class EnumUserStatus
{
	const description=array('1'=>'不在线','2'=>'在线','4'=>'暂离');
		
	/**
     * 不在线
	 * 当前用户不在线
     */
    const offline = 1;	
		
	/**
     * 在线
	 * 当前用户在线
     */
    const online = 2;	
		
	/**
     * 暂离
	 * 当前用户在线，但长时间没有任何操作，可能不在电脑前
     */
    const leave = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumUserStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumUserStatus","displayName":"用户的在线状态","description":"用户的在线状态","items": [{"value":"1","name":"offline","displayName":"不在线","description":"当前用户不在线"},{"value":"2","name":"online","displayName":"在线","description":"当前用户在线"},{"value":"4","name":"leave","displayName":"暂离","description":"当前用户在线，但长时间没有任何操作，可能不在电脑前"}]}';
	}
}
