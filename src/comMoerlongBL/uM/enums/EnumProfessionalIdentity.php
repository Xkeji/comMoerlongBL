<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:24
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 职业身份
 * 职业身份
 * 
 */
class EnumProfessionalIdentity
{
	const description=array('0'=>'未定义','1'=>'上班族','2'=>'个体户','4'=>'企业主');
		
	/**
     * 上班族
	 * 上班族
     */
    const officeWoker = 1;	
		
	/**
     * 个体户
	 * 个体户
     */
    const selfEmployed = 2;	
		
	/**
     * 企业主
	 * 企业主
     */
    const businessOwner = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProfessionalIdentity","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumProfessionalIdentity","displayName":"职业身份","description":"职业身份","items": [{"value":"1","name":"officeWoker","displayName":"上班族","description":"上班族"},{"value":"2","name":"selfEmployed","displayName":"个体户","description":"个体户"},{"value":"4","name":"businessOwner","displayName":"企业主","description":"企业主"}]}';
	}
}
