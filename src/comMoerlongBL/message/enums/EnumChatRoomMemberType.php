<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-02 10:21:04
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message\enums;


/**
 * 群成员的类型
 * 群成员的类型枚举
 * 
 */
class EnumChatRoomMemberType
{
	const description=array('1'=>'普通群成员','8'=>'群的管理人员','64'=>'群主');
		
	/**
     * 普通群成员
	 * 普通的群成员
     */
    const normal = 1;	
		
	/**
     * 群的管理人员
	 * 群的管理人员
     */
    const manager = 8;	
		
	/**
     * 群主
	 * 群主
     */
    const owner = 64;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumChatRoomMemberType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumChatRoomMemberType","displayName":"群成员的类型","description":"群成员的类型枚举","items": [{"value":"1","name":"normal","displayName":"普通群成员","description":"普通的群成员"},{"value":"8","name":"manager","displayName":"群的管理人员","description":"群的管理人员"},{"value":"64","name":"owner","displayName":"群主","description":"群主"}]}';
	}
}
