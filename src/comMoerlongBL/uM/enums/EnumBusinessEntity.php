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
 * 经营主体
 * 经营主体
 * 
 */
class EnumBusinessEntity
{
	const Description=array('1'=>'无，不愿新办','2'=>'无，可以新办','4'=>'有，不可考察','8'=>'有，可考察');
		
	/**
     * 无，不愿新办
	 * 无，不愿新办（默认）
     */
    const NoHaveAndNoNew = 1;	
		
	/**
     * 无，可以新办
	 * 无，可以新办
     */
    const NoHaveAndCanNew = 2;	
		
	/**
     * 有，不可考察
	 * 有，不可考察
     */
    const HaveAndAllowInspection = 4;	
		
	/**
     * 有，可考察
	 * 有，可考察
     */
    const HaveAndDenyInspection = 8;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
