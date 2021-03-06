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
 * 证件类型
 * 证件类型
 * 
 */
class EnumCertificate
{
	const description=array('0'=>'未定义','1'=>'身份证','2'=>'驾照','4'=>'军官证','8'=>'营业执照','16'=>'户口本','32'=>'婚姻证明','64'=>'护照','128'=>'港澳台及其他身份证明');
		
	/**
     * 身份证
	 * 身份证
     */
    const identity = 1;	
		
	/**
     * 驾照
	 * 驾照
     */
    const driving = 2;	
		
	/**
     * 军官证
	 * 军官证
     */
    const office = 4;	
		
	/**
     * 营业执照
	 * 营业执照
     */
    const business = 8;	
		
	/**
     * 户口本
	 * 户口本
     */
    const household = 16;	
		
	/**
     * 婚姻证明
	 * 婚姻证明
     */
    const marriage = 32;	
		
	/**
     * 护照
	 * 护照
     */
    const passport = 64;	
		
	/**
     * 港澳台及其他身份证明
	 * 港澳台及其他身份证明
     */
    const other = 128;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumCertificate","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCertificate","displayName":"证件类型","description":"证件类型","items": [{"value":"1","name":"identity","displayName":"身份证","description":"身份证"},{"value":"2","name":"driving","displayName":"驾照","description":"驾照"},{"value":"4","name":"office","displayName":"军官证","description":"军官证"},{"value":"8","name":"business","displayName":"营业执照","description":"营业执照"},{"value":"16","name":"household","displayName":"户口本","description":"户口本"},{"value":"32","name":"marriage","displayName":"婚姻证明","description":"婚姻证明"},{"value":"64","name":"passport","displayName":"护照","description":"护照"},{"value":"128","name":"other","displayName":"港澳台及其他身份证明","description":"港澳台及其他身份证明"}]}';
	}
}
