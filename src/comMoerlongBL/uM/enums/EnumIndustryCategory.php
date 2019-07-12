<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-07-12 14:54:55
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 行业类别
 * 行业类别
 * 
 */
class EnumIndustryCategory
{
	const description=array('1'=>'公务员（非公检法）','2'=>'公检法','4'=>'事业单位','8'=>'国有企业、银行','16'=>'上市公司、世界500强','32'=>'投资公司','64'=>'二手车交易','128'=>'其他');
		
	/**
     * 公务员（非公检法）
	 * 公务员（非公检法）
     */
    const classA = 1;	
		
	/**
     * 公检法
	 * 公检法
     */
    const classB = 2;	
		
	/**
     * 事业单位
	 * 事业单位
     */
    const classC = 4;	
		
	/**
     * 国有企业、银行
	 * 国有企业、银行
     */
    const classD = 8;	
		
	/**
     * 上市公司、世界500强
	 * 上市公司、世界500强
     */
    const classE = 16;	
		
	/**
     * 投资公司
	 * 投资公司
     */
    const classF = 32;	
		
	/**
     * 二手车交易
	 * 二手车交易
     */
    const classG = 64;	
		
	/**
     * 其他
	 * 其他
     */
    const classH = 128;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumIndustryCategory","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumIndustryCategory","displayName":"行业类别","description":"行业类别","items": [{"value":"1","name":"classA","displayName":"公务员（非公检法）","description":"公务员（非公检法）"},{"value":"2","name":"classB","displayName":"公检法","description":"公检法"},{"value":"4","name":"classC","displayName":"事业单位","description":"事业单位"},{"value":"8","name":"classD","displayName":"国有企业、银行","description":"国有企业、银行"},{"value":"16","name":"classE","displayName":"上市公司、世界500强","description":"上市公司、世界500强"},{"value":"32","name":"classF","displayName":"投资公司","description":"投资公司"},{"value":"64","name":"classG","displayName":"二手车交易","description":"二手车交易"},{"value":"128","name":"classH","displayName":"其他","description":"其他"}]}';
	}
}
