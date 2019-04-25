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
 * 子订单进度状态
 * 子订单进度任务状态
 * 
 */
class EnumProjectProcessState
{
	const description=array('1'=>'等待','2'=>'操作中','4'=>'完成','8'=>'取消');
		
	/**
     * 等待
	 * 等待
     */
    const waited = 1;	
		
	/**
     * 操作中
	 * 操作中
     */
    const operating = 2;	
		
	/**
     * 完成
	 * 完成
     */
    const finished = 4;	
		
	/**
     * 取消
	 * 取消
     */
    const canceled = 8;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumProjectProcessState","fullName":"App\\Http\\Modules\\AgreementComponent\\GeneratedCodes\\Enum\\EnumProjectProcessState","displayName":"子订单进度状态","description":"子订单进度任务状态","items": [{"value":"1","name":"waited","displayName":"等待","description":"等待"},{"value":"2","name":"operating","displayName":"操作中","description":"操作中"},{"value":"4","name":"finished","displayName":"完成","description":"完成"},{"value":"8","name":"canceled","displayName":"取消","description":"取消"}]}';
	}
}
