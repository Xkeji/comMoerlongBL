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
 * 订单关闭类型
 * 订单关闭类型
 * 
 */
class EnumOrderCloseType
{
	const description=array('0'=>'未关闭','1'=>'业务完成','2'=>'无效拒单','4'=>'取消签单','8'=>'系统关闭');
		
	/**
     * 未关闭
	 * 未关闭
     */
    const none = 0;	
		
	/**
     * 业务完成
	 * 业务完成
     */
    const complete = 1;	
		
	/**
     * 无效拒单
	 * 无效拒单
     */
    const invalid = 2;	
		
	/**
     * 取消签单
	 * 取消签单
     */
    const cancel = 4;	
		
	/**
     * 系统关闭
	 * 系统关闭
     */
    const system = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumOrderCloseType","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumOrderCloseType","displayName":"订单关闭类型","description":"订单关闭类型","items": [{"value":"0","name":"none","displayName":"未关闭","description":"未关闭"},{"value":"1","name":"complete","displayName":"业务完成","description":"业务完成"},{"value":"2","name":"invalid","displayName":"无效拒单","description":"无效拒单"},{"value":"4","name":"cancel","displayName":"取消签单","description":"取消签单"},{"value":"8","name":"system","displayName":"系统关闭","description":"系统关闭"}]}';
	}
}
