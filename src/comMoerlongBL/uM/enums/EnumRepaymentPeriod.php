<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-02-13 10:28:40
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM;


/**
 * 还款期数
 * 还款期数
 * 
 */
class EnumRepaymentPeriod
{
	const Description=array('1'=>'6期','2'=>'12期','4'=>'24期','8'=>'36期','16'=>'48期','32'=>'60期','64'=>'120期','128'=>'180期','256'=>'240期','512'=>'300期','1024'=>'360期');
		
	/**
     * 6期
	 * 6期
     */
    const P6 = 1;	
		
	/**
     * 12期
	 * 12期
     */
    const P12 = 2;	
		
	/**
     * 24期
	 * 24期
     */
    const P24 = 4;	
		
	/**
     * 36期
	 * 36期
     */
    const P36 = 8;	
		
	/**
     * 48期
	 * 48期
     */
    const P48 = 16;	
		
	/**
     * 60期
	 * 60期
     */
    const P60 = 32;	
		
	/**
     * 120期
	 * 120期
     */
    const P120 = 64;	
		
	/**
     * 180期
	 * 180期
     */
    const P180 = 128;	
		
	/**
     * 240期
	 * 240期（默认）
     */
    const P240 = 256;	
		
	/**
     * 300期
	 * 300期
     */
    const P300 = 512;	
		
	/**
     * 360期
	 * 360期
     */
    const P360 = 1024;	
      
	public static function getDescription($key){
        return self::Description[$key];
    }
}
