<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-22 18:03:22
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 性别
 * 性别
 * 
 */
class EnumGender
{
	const Description=array('1'=>'男','2'=>'女');
		
	/**
     * 男
	 * 男（默认）
     */
    const Male = 1;	
		
	/**
     * 女
	 * 女
     */
    const Female = 2;	
      
	public static function getDescription($key){
        return isset(self::Description[$key])?self::Description[$key]:'';
    }
}
