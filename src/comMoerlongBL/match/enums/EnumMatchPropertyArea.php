<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:40
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match;


/**
 * 房产区域
 * 房产区域
 * 
 */
class EnumMatchPropertyArea
{
	const Description=array('1'=>'主城区','2'=>'郊县');
		
	/**
     * 主城区
	 * 主城区
     */
    const MainCity = 1;	
		
	/**
     * 郊县
	 * 郊县
     */
    const Suburbs = 2;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
