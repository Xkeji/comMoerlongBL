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
 * 持证时间
 * 持证时间
 * 
 */
class EnumMatchOwnershipCertificationTime
{
	const Description=array('1'=>'无证','2'=>'一年以内','4'=>'一年以上');
		
	/**
     * 无证
	 * 无证
     */
    const None = 1;	
		
	/**
     * 一年以内
	 * 一年以内
     */
    const Below1 = 2;	
		
	/**
     * 一年以上
	 * 一年以上
     */
    const Above1 = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}