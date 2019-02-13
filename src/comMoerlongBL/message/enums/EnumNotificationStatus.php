<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:40
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\message;


/**
 * 通知的状态
 * 通知的处理状态
 * 
 */
class EnumNotificationStatus
{
	const Description=array('1'=>'未处理','2'=>'已同意','4'=>'已拒绝','8'=>'已读','16'=>'已过期','32'=>'已取消');
		
	/**
     * 未处理
	 * 消息尚未被处理，也即等待处理中
     */
    const Waiting = 1;	
		
	/**
     * 已同意
	 * 消息已被处理，处理结果为同意
     */
    const Approved = 2;	
		
	/**
     * 已拒绝
	 * 消息已被处理，处理结果为拒绝
     */
    const Rejected = 4;	
		
	/**
     * 已读
	 * 消息已被处理，并且不需要返回处理结果
     */
    const Read = 8;	
		
	/**
     * 已过期
	 * 通知已超过处理时限，无法再被处理
     */
    const Expired = 16;	
		
	/**
     * 已取消
	 * 通知被取消。如发起者取消转线请求
     */
    const Cancelled = 32;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
