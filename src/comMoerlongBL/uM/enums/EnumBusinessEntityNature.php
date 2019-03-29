<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-22 16:41:33
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 工作单位类别
 * 工作单位类别
 * 
 */
class EnumBusinessEntityNature
{
	const description=array('64'=>'投资公司','128'=>'二手车交易','256'=>'其他');
		
	/**
     * 投资公司
	 * 投资公司
     */
    const classG = 64;	
		
	/**
     * 二手车交易
	 * 二手车交易
     */
    const classH = 128;	
		
	/**
     * 其他
	 * 其他
     */
    const classI = 256;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumBusinessEntityNature","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumBusinessEntityNature","displayName":"工作单位类别","description":"工作单位类别","items": [{"value":"64","name":"classG","displayName":"投资公司","description":"投资公司"},{"value":"128","name":"classH","displayName":"二手车交易","description":"二手车交易"},{"value":"256","name":"classI","displayName":"其他","description":"其他"}]}';
	}
}