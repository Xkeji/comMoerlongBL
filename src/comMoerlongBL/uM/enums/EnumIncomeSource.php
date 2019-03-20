<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-19 16:10:44
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 收入来源
 * 收入来源
 * 
 */
class EnumIncomeSource
{
	const description=array('1'=>'无','2'=>'打卡','4'=>'现金');
		
	/**
     * 无
	 * 无
     */
    const no = 1;	
		
	/**
     * 打卡
	 * 打卡
     */
    const card = 2;	
		
	/**
     * 现金
	 * 现金
     */
    const cash = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumIncomeSource","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumIncomeSource","displayName":"收入来源","description":"收入来源","items": [{"value":"1","name":"no","displayName":"无","description":"无"},{"value":"2","name":"card","displayName":"打卡","description":"打卡"},{"value":"4","name":"cash","displayName":"现金","description":"现金"}]}';
	}
}
