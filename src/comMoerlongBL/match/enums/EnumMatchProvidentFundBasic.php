<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-22 16:41:31
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 公积金缴存基数
 * 公积金缴存基数
 * 
 */
class EnumMatchProvidentFundBasic
{
	const description=array('1'=>'按工资收入','2'=>'少于3千','4'=>'3~4千','8'=>'4~6千','16'=>'6~8千','32'=>'8千~1万','64'=>'1万~2万','128'=>'2万~3万','256'=>'3万以上');
		
	/**
     * 按工资收入
	 * 按工资收入
     */
    const bySalary = 1;	
		
	/**
     * 少于3千
	 * 少于3千
     */
    const below3K = 2;	
		
	/**
     * 3~4千
	 * 3~4千
     */
    const between3Kto4K = 4;	
		
	/**
     * 4~6千
	 * 4~6千
     */
    const between4Kto6K = 8;	
		
	/**
     * 6~8千
	 * 6~8千
     */
    const between6Kto8K = 16;	
		
	/**
     * 8千~1万
	 * 8千~1万
     */
    const between8Kto1W = 32;	
		
	/**
     * 1万~2万
	 * 1万~2万
     */
    const between1Wto2W = 64;	
		
	/**
     * 2万~3万
	 * 2万~3万
     */
    const between2Wto3W = 128;	
		
	/**
     * 3万以上
	 * 3万以上
     */
    const above3W = 256;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchProvidentFundBasic","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchProvidentFundBasic","displayName":"公积金缴存基数","description":"公积金缴存基数","items": [{"value":"1","name":"bySalary","displayName":"按工资收入","description":"按工资收入"},{"value":"2","name":"below3K","displayName":"少于3千","description":"少于3千"},{"value":"4","name":"between3Kto4K","displayName":"3~4千","description":"3~4千"},{"value":"8","name":"between4Kto6K","displayName":"4~6千","description":"4~6千"},{"value":"16","name":"between6Kto8K","displayName":"6~8千","description":"6~8千"},{"value":"32","name":"between8Kto1W","displayName":"8千~1万","description":"8千~1万"},{"value":"64","name":"between1Wto2W","displayName":"1万~2万","description":"1万~2万"},{"value":"128","name":"between2Wto3W","displayName":"2万~3万","description":"2万~3万"},{"value":"256","name":"above3W","displayName":"3万以上","description":"3万以上"}]}';
	}
}
