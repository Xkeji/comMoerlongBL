<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-04-02 10:21:04
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 合作类型
 * 合作类型
 * 
 */
class EnumCooperationType
{
	const description=array('1'=>'收款合作','2'=>'交单合作','4'=>'资金渠道','8'=>'推广合作','16'=>'其他');
		
	/**
     * 收款合作
	 * 收款合作
     */
    const acquirer = 1;	
		
	/**
     * 交单合作
	 * 交单合作
     */
    const surrender = 2;	
		
	/**
     * 资金渠道
	 * 资金渠道
     */
    const capitalChannel = 4;	
		
	/**
     * 推广合作
	 * 推广合作
     */
    const promotionOfCooperative = 8;	
		
	/**
     * 其他
	 * 其他
     */
    const other = 16;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumCooperationType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCooperationType","displayName":"合作类型","description":"合作类型","items": [{"value":"1","name":"acquirer","displayName":"收款合作","description":"收款合作"},{"value":"2","name":"surrender","displayName":"交单合作","description":"交单合作"},{"value":"4","name":"capitalChannel","displayName":"资金渠道","description":"资金渠道"},{"value":"8","name":"promotionOfCooperative","displayName":"推广合作","description":"推广合作"},{"value":"16","name":"other","displayName":"其他","description":"其他"}]}';
	}
}
