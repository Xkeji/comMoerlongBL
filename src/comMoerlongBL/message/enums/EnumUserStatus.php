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
 * 用户的在线状态
 * 用户的在线状态
 * 
 */
class EnumUserStatus
{
	const Description=array('1'=>'不在线','2'=>'在线','4'=>'暂离');
		
	/**
     * 不在线
	 * 当前用户不在线
     */
    const Offline = 1;	
		
	/**
     * 在线
	 * 当前用户在线
     */
    const Online = 2;	
		
	/**
     * 暂离
	 * 当前用户在线，但长时间没有任何操作，可能不在电脑前
     */
    const Leave = 4;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}