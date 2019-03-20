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
 * 子订单关闭类型
 * 子订单关闭类型
 * 
 */
class EnumProjectCloseType
{
	const description=array('0'=>'未关闭','1'=>'渠道放款','2'=>'失败关闭','4'=>'客户退单','8'=>'系统关闭','16'=>'历史数据');
		
	/**
     * 未关闭
	 * 未关闭
     */
    const none = 0;	
		
	/**
     * 渠道放款
	 * 渠道放款
     */
    const getLoan = 1;	
		
	/**
     * 失败关闭
	 * 失败关闭
     */
    const failure = 2;	
		
	/**
     * 客户退单
	 * 客户退单
     */
    const chargeback = 4;	
		
	/**
     * 系统关闭
	 * 系统关闭
     */
    const system = 8;	
		
	/**
     * 历史数据
	 * 历史数据
     */
    const history = 16;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProjectCloseType","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumProjectCloseType","displayName":"子订单关闭类型","description":"子订单关闭类型","items": [{"value":"0","name":"none","displayName":"未关闭","description":"未关闭"},{"value":"1","name":"getLoan","displayName":"渠道放款","description":"渠道放款"},{"value":"2","name":"failure","displayName":"失败关闭","description":"失败关闭"},{"value":"4","name":"chargeback","displayName":"客户退单","description":"客户退单"},{"value":"8","name":"system","displayName":"系统关闭","description":"系统关闭"},{"value":"16","name":"history","displayName":"历史数据","description":"历史数据"}]}';
	}
}
