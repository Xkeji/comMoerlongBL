<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-22 18:03:21
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
	const Description=array('1'=>'客户身份证件无法验真','2'=>'客户处于公司黑名单中','4'=>'客户提交资料不齐');
		
	/**
     * 客户身份证件无法验真
	 * 客户身份证件无法验真
     */
    const IDCheckFail = 1;	
		
	/**
     * 客户处于公司黑名单中
	 * 客户处于公司黑名单中
     */
    const InTheBlacklist = 2;	
		
	/**
     * 客户提交资料不齐
	 * 客户提交资料不齐
     */
    const MissingData = 4;	
      
	public static function getDescription($key){
        return isset(self::Description[$key])?self::Description[$key]:'';
    }
}