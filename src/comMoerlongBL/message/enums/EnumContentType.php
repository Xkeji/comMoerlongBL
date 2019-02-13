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
 * 消息内容的类型
 * 消息内容的类型
 * 
 */
class EnumContentType
{
	const Description=array('1'=>'文本','2'=>'图片','4'=>'声音','8'=>'文件','16'=>'表情');
		
	/**
     * 文本
	 * 文本类型的消息
     */
    const Text = 1;	
		
	/**
     * 图片
	 * 图片类型的消息
     */
    const Image = 2;	
		
	/**
     * 声音
	 * 声音类型的消息
     */
    const Voice = 4;	
		
	/**
     * 文件
	 * 文件类型的消息
     */
    const File = 8;	
		
	/**
     * 表情
	 * 表情
     */
    const Emoji = 16;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
