<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-02 10:21:03
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 缴纳期数
 * 保单缴纳期数（按月）
 * 
 */
class EnumMatchPolicePaymentPeriodByMonth
{
	const description=array('1'=>'2期以下','2'=>'2~4期','4'=>'5~8期','8'=>'8期以上');
		
	/**
     * 2期以下
	 * 2期以下
     */
    const below2 = 1;	
		
	/**
     * 2~4期
	 * 2~4期
     */
    const between2to4 = 2;	
		
	/**
     * 5~8期
	 * 5~8期
     */
    const between5to8 = 4;	
		
	/**
     * 8期以上
	 * 8期以上
     */
    const above8 = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchPolicePaymentPeriodByMonth","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentPeriodByMonth","displayName":"缴纳期数","description":"保单缴纳期数（按月）","items": [{"value":"1","name":"below2","displayName":"2期以下","description":"2期以下"},{"value":"2","name":"between2to4","displayName":"2~4期","description":"2~4期"},{"value":"4","name":"between5to8","displayName":"5~8期","description":"5~8期"},{"value":"8","name":"above8","displayName":"8期以上","description":"8期以上"}]}';
	}
}
