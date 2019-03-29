<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-03-22 16:41:32
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message\enums;


/**
 * 通知的状态
 * 通知的处理状态
 * 
 */
class EnumNotificationStatus
{
	const description=array('1'=>'未处理','2'=>'已同意','4'=>'已拒绝','8'=>'已读','16'=>'已过期','32'=>'已取消');
		
	/**
     * 未处理
	 * 消息尚未被处理，也即等待处理中
     */
    const waiting = 1;	
		
	/**
     * 已同意
	 * 消息已被处理，处理结果为同意
     */
    const approved = 2;	
		
	/**
     * 已拒绝
	 * 消息已被处理，处理结果为拒绝
     */
    const rejected = 4;	
		
	/**
     * 已读
	 * 消息已被处理，并且不需要返回处理结果
     */
    const read = 8;	
		
	/**
     * 已过期
	 * 通知已超过处理时限，无法再被处理
     */
    const expired = 16;	
		
	/**
     * 已取消
	 * 通知被取消。如发起者取消转线请求
     */
    const cancelled = 32;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumNotificationStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumNotificationStatus","displayName":"通知的状态","description":"通知的处理状态","items": [{"value":"1","name":"waiting","displayName":"未处理","description":"消息尚未被处理，也即等待处理中"},{"value":"2","name":"approved","displayName":"已同意","description":"消息已被处理，处理结果为同意"},{"value":"4","name":"rejected","displayName":"已拒绝","description":"消息已被处理，处理结果为拒绝"},{"value":"8","name":"read","displayName":"已读","description":"消息已被处理，并且不需要返回处理结果"},{"value":"16","name":"expired","displayName":"已过期","description":"通知已超过处理时限，无法再被处理"},{"value":"32","name":"cancelled","displayName":"已取消","description":"通知被取消。如发起者取消转线请求"}]}';
	}
}
