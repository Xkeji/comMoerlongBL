<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:38
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement;


/**
 * 协议无效签单原因
 * 协议无效签单原因
 * 
 */
class EnumAgreementInvalidReason
{
	const Description=array('1'=>'客户信息不全','2'=>'客户不配合，拒绝提供必要资料');
		
	/**
     * 客户信息不全
	 * 客户信息不全
     */
    const IncompleteInfo = 1;	
		
	/**
     * 客户不配合，拒绝提供必要资料
	 * 客户不配合，拒绝提供必要资料
     */
    const RefuseCooperate = 2;	
      
	public static function getDescription($key){
        return isset(self::Description[$key]) ? self::Description[$key] : '';
    }
}
