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
 * 房产区域
 * 房产区域财务专用
 * 
 */
class EnumFinancePropertyArea
{
	const description=array('1'=>'主城区','2'=>'一级郊县','3'=>'二级郊县','4'=>'其他地区');
		
	/**
     * 主城区
	 * 主城区
     */
    const mainCity = 1;	
		
	/**
     * 一级郊县
	 * 一级郊县
     */
    const suburbs1st = 2;	
		
	/**
     * 二级郊县
	 * 二级郊县
     */
    const suburbs2nd = 3;	
		
	/**
     * 其他地区
	 * 其他地区
     */
    const others = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumFinancePropertyArea","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumFinancePropertyArea","displayName":"房产区域","description":"房产区域财务专用","items": [{"value":"1","name":"mainCity","displayName":"主城区","description":"主城区"},{"value":"2","name":"suburbs1st","displayName":"一级郊县","description":"一级郊县"},{"value":"3","name":"suburbs2nd","displayName":"二级郊县","description":"二级郊县"},{"value":"4","name":"others","displayName":"其他地区","description":"其他地区"}]}';
	}
}
