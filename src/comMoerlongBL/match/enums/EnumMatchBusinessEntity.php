<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-22 18:03:21
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 经营实体
 * 经营实体
 * 
 */
class EnumMatchBusinessEntity
{
	const Description=array('1'=>'无','2'=>'无，可新办','4'=>'有且可考察','8'=>'有，可考察且注册满2年');
		
	/**
     * 无
	 * 无
     */
    const None = 1;	
		
	/**
     * 无，可新办
	 * 无，可新办
     */
    const NoneButRegisterable = 2;	
		
	/**
     * 有且可考察
	 * 有且可考察
     */
    const OwnerAndInvestigated = 4;	
		
	/**
     * 有，可考察且注册满2年
	 * 有，可考察且注册满2年
     */
    const OwnerAbove2years = 8;	
      
	public static function getDescription($key){
        return isset(self::Description[$key])?self::Description[$key]:'';
    }
}
