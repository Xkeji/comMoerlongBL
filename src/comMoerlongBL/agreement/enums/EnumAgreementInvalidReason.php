<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-19 16:10:41
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 协议无效签单原因
 * 协议无效签单原因
 * 
 */
class EnumAgreementInvalidReason
{
	const description=array('1'=>'客户信息不全','2'=>'客户不配合，拒绝提供必要资料');
		
	/**
     * 客户信息不全
	 * 客户信息不全
     */
    const incompleteInfo = 1;	
		
	/**
     * 客户不配合，拒绝提供必要资料
	 * 客户不配合，拒绝提供必要资料
     */
    const refuseCooperate = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumAgreementInvalidReason","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumAgreementInvalidReason","displayName":"协议无效签单原因","description":"协议无效签单原因","items": [{"value":"1","name":"incompleteInfo","displayName":"客户信息不全","description":"客户信息不全"},{"value":"2","name":"refuseCooperate","displayName":"客户不配合，拒绝提供必要资料","description":"客户不配合，拒绝提供必要资料"}]}';
	}
}
