<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-26 11:41:27
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 客户类型
 * 客户类型
 * 
 */
class EnumCustomerType
{
	const description=array('1'=>'潜在客户','2'=>'意向客户');
		
	/**
     * 潜在客户
	 * 潜在客户
     */
    const potential = 1;	
		
	/**
     * 意向客户
	 * 意向客户
     */
    const intentional = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumCustomerType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCustomerType","displayName":"客户类型","description":"客户类型","items": [{"value":"1","name":"potential","displayName":"潜在客户","description":"潜在客户"},{"value":"2","name":"intentional","displayName":"意向客户","description":"意向客户"}]}';
	}
}
