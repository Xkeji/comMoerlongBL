<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-25 16:29:58
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\agreement\enums;


/**
 * 子订单业务状态
 * 子订单业务状态
 * 
 */
class EnumProjectState
{
	const description=array('1'=>'初始','2'=>'等待中','4'=>'操作中','8'=>'关闭');
		
	/**
     * 初始
	 * 初始状态
     */
    const inital = 1;	
		
	/**
     * 等待中
	 * 等待中状态
     */
    const waiting = 2;	
		
	/**
     * 操作中
	 * 操作中状态
     */
    const running = 4;	
		
	/**
     * 关闭
	 * 已关闭
     */
    const closed = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProjectState","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumProjectState","displayName":"子订单业务状态","description":"子订单业务状态","items": [{"value":"1","name":"inital","displayName":"初始","description":"初始状态"},{"value":"2","name":"waiting","displayName":"等待中","description":"等待中状态"},{"value":"4","name":"running","displayName":"操作中","description":"操作中状态"},{"value":"8","name":"closed","displayName":"关闭","description":"已关闭"}]}';
	}
}
