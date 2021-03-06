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
 * 产权类型
 * 产权类型
 * 
 */
class EnumPropertyRight
{
	const description=array('0'=>'未定义','1'=>'全款','2'=>'按揭','4'=>'抵押');
		
	/**
     * 全款
	 * 全款（默认）
     */
    const fullPayment = 1;	
		
	/**
     * 按揭
	 * 按揭
     */
    const mortgage = 2;	
		
	/**
     * 抵押
	 * 抵押
     */
    const guaranty = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumPropertyRight","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumPropertyRight","displayName":"产权类型","description":"产权类型","items": [{"value":"1","name":"fullPayment","displayName":"全款","description":"全款（默认）"},{"value":"2","name":"mortgage","displayName":"按揭","description":"按揭"},{"value":"4","name":"guaranty","displayName":"抵押","description":"抵押"}]}';
	}
}
