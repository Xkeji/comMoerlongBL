<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-10-30 10:13:14
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 签单申请状态
 * 签单申请状态
 * 
 */
class EnumLoadApplicationState
{
	const description=array('0'=>'未定义','1'=>'初始','2'=>'等待中','4'=>'操作中','8'=>'已关闭');
		
	/**
     * 初始
	 * 初始
     */
    const inital = 1;	
		
	/**
     * 等待中
	 * 等待中
     */
    const waiting = 2;	
		
	/**
     * 操作中
	 * 操作中
     */
    const operating = 4;	
		
	/**
     * 已关闭
	 * 已关闭
     */
    const closed = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumLoadApplicationState","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumLoadApplicationState","displayName":"签单申请状态","description":"签单申请状态","items": [{"value":"1","name":"inital","displayName":"初始","description":"初始"},{"value":"2","name":"waiting","displayName":"等待中","description":"等待中"},{"value":"4","name":"operating","displayName":"操作中","description":"操作中"},{"value":"8","name":"closed","displayName":"已关闭","description":"已关闭"}]}';
	}
}
