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
 * APP应用联系方式
 * APP应用联系方式
 * 
 */
class EnumAPPContact
{
	const description=array('0'=>'未定义','1'=>'qq号','2'=>'微信','4'=>'支付宝账号');
		
	/**
     * qq号
	 * qq号
     */
    const qQ = 1;	
		
	/**
     * 微信
	 * 微信
     */
    const wexin = 2;	
		
	/**
     * 支付宝账号
	 * 支付宝账号
     */
    const alipay = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumAPPContact","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumAPPContact","displayName":"APP应用联系方式","description":"APP应用联系方式","items": [{"value":"1","name":"qQ","displayName":"qq号","description":"qq号"},{"value":"2","name":"wexin","displayName":"微信","description":"微信"},{"value":"4","name":"alipay","displayName":"支付宝账号","description":"支付宝账号"}]}';
	}
}
