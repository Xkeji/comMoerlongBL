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
 * 行业类别
 * 行业类别
 * 
 */
class EnumMatchIndustryCategory
{
	const Description=array('1'=>'公务员、事业单位、政府、烟草、水电等','2'=>'国企，上市公司，世界500强','4'=>'其它行业');
		
	/**
     * 公务员、事业单位、政府、烟草、水电等
	 * 公务员、事业单位、政府、烟草、水电等
     */
    const ClassA = 1;	
		
	/**
     * 国企，上市公司，世界500强
	 * 国企，上市公司，世界500强
     */
    const ClassB = 2;	
		
	/**
     * 其它行业
	 * 其它行业
     */
    const ClassC = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}