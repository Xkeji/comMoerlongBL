<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:40
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM;


/**
 * 收入来源
 * 收入来源
 * 
 */
class EnumIncomeSource
{
	const Description=array('1'=>'无','2'=>'打卡','4'=>'现金');
		
	/**
     * 无
	 * 无
     */
    const No = 1;	
		
	/**
     * 打卡
	 * 打卡
     */
    const Card = 2;	
		
	/**
     * 现金
	 * 现金
     */
    const Cash = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
