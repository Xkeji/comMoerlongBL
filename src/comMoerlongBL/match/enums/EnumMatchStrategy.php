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
 * 匹配策略
 * 匹配策略
 * 
 */
class EnumMatchStrategy
{
	const Description=array('1'=>'智能排序','2'=>'额度最高','4'=>'利息最低');
		
	/**
     * 智能排序
	 * 智能排序
     */
    const Smart = 1;	
		
	/**
     * 额度最高
	 * 额度最高
     */
    const Edu = 2;	
		
	/**
     * 利息最低
	 * 利息最低
     */
    const Lixi = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
