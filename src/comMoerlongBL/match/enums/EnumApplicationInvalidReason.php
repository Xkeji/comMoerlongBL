<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-01 11:29:43
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 签单申请无效关闭原因
 * 签单申请无效关闭原因
 * 
 */
class EnumApplicationInvalidReason
{
	const description=array('1'=>'客户身份证件无法验真','2'=>'客户处于公司黑名单中','4'=>'客户提交资料不齐');
		
	/**
     * 客户身份证件无法验真
	 * 客户身份证件无法验真
     */
    const iDCheckFail = 1;	
		
	/**
     * 客户处于公司黑名单中
	 * 客户处于公司黑名单中
     */
    const inTheBlacklist = 2;	
		
	/**
     * 客户提交资料不齐
	 * 客户提交资料不齐
     */
    const missingData = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumApplicationInvalidReason","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumApplicationInvalidReason","displayName":"签单申请无效关闭原因","description":"签单申请无效关闭原因","items": [{"value":"1","name":"iDCheckFail","displayName":"客户身份证件无法验真","description":"客户身份证件无法验真"},{"value":"2","name":"inTheBlacklist","displayName":"客户处于公司黑名单中","description":"客户处于公司黑名单中"},{"value":"4","name":"missingData","displayName":"客户提交资料不齐","description":"客户提交资料不齐"}]}';
	}
}
