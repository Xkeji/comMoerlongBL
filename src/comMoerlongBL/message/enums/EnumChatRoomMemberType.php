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
 * 群成员的类型
 * 群成员的类型枚举
 * 
 */
class EnumChatRoomMemberType
{
	const Description=array('1'=>'普通群成员','8'=>'群的管理人员','64'=>'群主');
		
	/**
     * 普通群成员
	 * 普通的群成员
     */
    const Normal = 1;	
		
	/**
     * 群的管理人员
	 * 群的管理人员
     */
    const Manager = 8;	
		
	/**
     * 群主
	 * 群主
     */
    const Owner = 64;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
