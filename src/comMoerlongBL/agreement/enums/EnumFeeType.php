<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:23
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 产品服务费收取类型
 * 产品服务费收取类型
 * 
 */
class EnumFeeType
{
	const description=array('0'=>'未定义','1'=>'一口价','2'=>'按比例');
		
	/**
     * 一口价
	 * 一口价
     */
    const price = 1;	
		
	/**
     * 按比例
	 * 按比例
     */
    const prorated = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumFeeType","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumFeeType","displayName":"产品服务费收取类型","description":"产品服务费收取类型","items": [{"value":"1","name":"price","displayName":"一口价","description":"一口价"},{"value":"2","name":"prorated","displayName":"按比例","description":"按比例"}]}';
	}
}
