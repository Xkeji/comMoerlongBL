<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-04 10:22:59
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 缴纳期数
 * 保单缴纳期数（按年）
 * 
 */
class EnumMatchPolicePaymentPeriodByYear
{
	const description=array('1'=>'不足2年3期','2'=>'2年3期','4'=>'3年4期','8'=>'4年5期','16'=>'6年6期','32'=>'6年7期以上');
		
	/**
     * 不足2年3期
	 * 不足2年3期
     */
    const below2Y3P = 1;	
		
	/**
     * 2年3期
	 * 2年3期
     */
    const twoY3P = 2;	
		
	/**
     * 3年4期
	 * 3年4期
     */
    const threeY4P = 4;	
		
	/**
     * 4年5期
	 * 4年5期
     */
    const fourY5P = 8;	
		
	/**
     * 6年6期
	 * 6年6期
     */
    const fiveY6P = 16;	
		
	/**
     * 6年7期以上
	 * 6年7期以上
     */
    const above6Y7P = 32;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchPolicePaymentPeriodByYear","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentPeriodByYear","displayName":"缴纳期数","description":"保单缴纳期数（按年）","items": [{"value":"1","name":"below2Y3P","displayName":"不足2年3期","description":"不足2年3期"},{"value":"2","name":"twoY3P","displayName":"2年3期","description":"2年3期"},{"value":"4","name":"threeY4P","displayName":"3年4期","description":"3年4期"},{"value":"8","name":"fourY5P","displayName":"4年5期","description":"4年5期"},{"value":"16","name":"fiveY6P","displayName":"6年6期","description":"6年6期"},{"value":"32","name":"above6Y7P","displayName":"6年7期以上","description":"6年7期以上"}]}';
	}
}
