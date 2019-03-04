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
 * 群的状态
 * 群的状态
 * 
 */
class EnumChatRoomStatus
{
	const description=array('1'=>'正常','2'=>'禁言');
		
	/**
     * 正常
	 * 当前群处于正常状态
     */
    const normal = 1;	
		
	/**
     * 禁言
	 * 当前群整体被禁言
     */
    const banned = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumChatRoomStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumChatRoomStatus","displayName":"群的状态","description":"群的状态","items": [{"value":"1","name":"normal","displayName":"正常","description":"当前群处于正常状态"},{"value":"2","name":"banned","displayName":"禁言","description":"当前群整体被禁言"}]}';
	}
}
