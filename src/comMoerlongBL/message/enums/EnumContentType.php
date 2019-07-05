<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-07-04 10:55:12
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message\enums;


/**
 * 消息内容的类型
 * 消息内容的类型
 * 
 */
class EnumContentType
{
	const description=array('1'=>'文本','2'=>'图片','4'=>'声音','8'=>'文件','16'=>'表情');
		
	/**
     * 文本
	 * 文本类型的消息
     */
    const text = 1;	
		
	/**
     * 图片
	 * 图片类型的消息
     */
    const image = 2;	
		
	/**
     * 声音
	 * 声音类型的消息
     */
    const voice = 4;	
		
	/**
     * 文件
	 * 文件类型的消息
     */
    const file = 8;	
		
	/**
     * 表情
	 * 表情
     */
    const emoji = 16;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumContentType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumContentType","displayName":"消息内容的类型","description":"消息内容的类型","items": [{"value":"1","name":"text","displayName":"文本","description":"文本类型的消息"},{"value":"2","name":"image","displayName":"图片","description":"图片类型的消息"},{"value":"4","name":"voice","displayName":"声音","description":"声音类型的消息"},{"value":"8","name":"file","displayName":"文件","description":"文件类型的消息"},{"value":"16","name":"emoji","displayName":"表情","description":"表情"}]}';
	}
}
