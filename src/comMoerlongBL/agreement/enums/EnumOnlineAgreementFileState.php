<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-22 16:41:27
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 线上协议归档状态
 * 线上协议归档状态
 * 
 */
class EnumOnlineAgreementFileState
{
	const description=array('1'=>'申请','2'=>'归档','4'=>'变更');
		
	/**
     * 申请
	 * 线上协议申请状态
     */
    const apply = 1;	
		
	/**
     * 归档
	 * 线上协议归档状态
     */
    const filed = 2;	
		
	/**
     * 变更
	 * 线上协议无效状态
     */
    const changed = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumOnlineAgreementFileState","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumOnlineAgreementFileState","displayName":"线上协议归档状态","description":"线上协议归档状态","items": [{"value":"1","name":"apply","displayName":"申请","description":"线上协议申请状态"},{"value":"2","name":"filed","displayName":"归档","description":"线上协议归档状态"},{"value":"4","name":"changed","displayName":"变更","description":"线上协议无效状态"}]}';
	}
}
