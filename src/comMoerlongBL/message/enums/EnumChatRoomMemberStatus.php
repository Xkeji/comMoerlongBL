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
 * 群成员的状态
 * 群成员的状态枚举
 * 
 */
class EnumChatRoomMemberStatus
{
	const Description=array('1'=>'正常','2'=>'禁言');
		
	/**
     * 正常
	 * 该成员处于正常状态
     */
    const Normal = 1;	
		
	/**
     * 禁言
	 * 该成员已被禁言
     */
    const Banned = 2;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
