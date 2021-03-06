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
 * 协议客户结算关闭原因
 * 协议客户结算关闭原因
 * 
 */
class EnumAgreementSettlementCloseType
{
	const description=array('0'=>'未关闭','1'=>'结案完成','2'=>'呆账坏账','4'=>'系统关闭','8'=>'未定义');
		
	/**
     * 未关闭
	 * 未关闭（初始）
     */
    const none = 0;	
		
	/**
     * 结案完成
	 * 结案完成
     */
    const complete = 1;	
		
	/**
     * 呆账坏账
	 * 呆账坏账
     */
    const badDebt = 2;	
		
	/**
     * 系统关闭
	 * 系统关闭
     */
    const systemClose = 4;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumAgreementSettlementCloseType","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumAgreementSettlementCloseType","displayName":"协议客户结算关闭原因","description":"协议客户结算关闭原因","items": [{"value":"0","name":"none","displayName":"未关闭","description":"未关闭（初始）"},{"value":"1","name":"complete","displayName":"结案完成","description":"结案完成"},{"value":"2","name":"badDebt","displayName":"呆账坏账","description":"呆账坏账"},{"value":"4","name":"systemClose","displayName":"系统关闭","description":"系统关闭"}]}';
	}
}
