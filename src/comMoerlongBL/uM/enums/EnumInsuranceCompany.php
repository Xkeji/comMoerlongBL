<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-05-31 09:49:00
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\uM\enums;


/**
 * 保险公司
 * 保险公司
 * 
 */
class EnumInsuranceCompany
{
	const description=array('1'=>'中国人寿','2'=>'中国平安','4'=>'太平洋保险','8'=>'华夏保险','16'=>'中国太平','32'=>'新华保险','64'=>'泰康保险','128'=>'中国人保','256'=>'生命人寿','512'=>'中邮人寿','1024'=>'阳光保险','2048'=>'安邦保险','4096'=>'天安人寿','8192'=>'中英人寿','16384'=>'中意人寿','32768'=>'工银安盛','65536'=>'百年人寿','131072'=>'长城人寿','262144'=>'光大永明','524288'=>'恒大人寿','1048576'=>'其它保险公司');
		
	/**
     * 中国人寿
	 * 中国人寿（默认）
     */
    const cLIC = 1;	
		
	/**
     * 中国平安
	 * 中国平安
     */
    const pAI = 2;	
		
	/**
     * 太平洋保险
	 * 太平洋保险
     */
    const tPIC = 4;	
		
	/**
     * 华夏保险
	 * 华夏保险
     */
    const hLIC = 8;	
		
	/**
     * 中国太平
	 * 中国太平
     */
    const tAIPING = 16;	
		
	/**
     * 新华保险
	 * 新华保险
     */
    const nCLIC = 32;	
		
	/**
     * 泰康保险
	 * 泰康保险
     */
    const tLIC = 64;	
		
	/**
     * 中国人保
	 * 中国人保
     */
    const pICC = 128;	
		
	/**
     * 生命人寿
	 * 生命人寿
     */
    const lIFE = 256;	
		
	/**
     * 中邮人寿
	 * 中邮人寿
     */
    const cPL = 512;	
		
	/**
     * 阳光保险
	 * 阳光保险
     */
    const sPCIC = 1024;	
		
	/**
     * 安邦保险
	 * 安邦保险
     */
    const aBIC = 2048;	
		
	/**
     * 天安人寿
	 * 天安人寿
     */
    const tIC = 4096;	
		
	/**
     * 中英人寿
	 * 中英人寿
     */
    const aVIVA = 8192;	
		
	/**
     * 中意人寿
	 * 中意人寿
     */
    const aGC = 16384;	
		
	/**
     * 工银安盛
	 * 工银安盛
     */
    const aXA = 32768;	
		
	/**
     * 百年人寿
	 * 百年人寿
     */
    const aEONLIFE = 65536;	
		
	/**
     * 长城人寿
	 * 长城人寿
     */
    const gW = 131072;	
		
	/**
     * 光大永明
	 * 光大永明
     */
    const sUNLIFE = 262144;	
		
	/**
     * 恒大人寿
	 * 恒大人寿
     */
    const hD = 524288;	
		
	/**
     * 其它保险公司
	 * 其它保险公司
     */
    const other = 1048576;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumInsuranceCompany","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumInsuranceCompany","displayName":"保险公司","description":"保险公司","items": [{"value":"1","name":"cLIC","displayName":"中国人寿","description":"中国人寿（默认）"},{"value":"2","name":"pAI","displayName":"中国平安","description":"中国平安"},{"value":"4","name":"tPIC","displayName":"太平洋保险","description":"太平洋保险"},{"value":"8","name":"hLIC","displayName":"华夏保险","description":"华夏保险"},{"value":"16","name":"tAIPING","displayName":"中国太平","description":"中国太平"},{"value":"32","name":"nCLIC","displayName":"新华保险","description":"新华保险"},{"value":"64","name":"tLIC","displayName":"泰康保险","description":"泰康保险"},{"value":"128","name":"pICC","displayName":"中国人保","description":"中国人保"},{"value":"256","name":"lIFE","displayName":"生命人寿","description":"生命人寿"},{"value":"512","name":"cPL","displayName":"中邮人寿","description":"中邮人寿"},{"value":"1024","name":"sPCIC","displayName":"阳光保险","description":"阳光保险"},{"value":"2048","name":"aBIC","displayName":"安邦保险","description":"安邦保险"},{"value":"4096","name":"tIC","displayName":"天安人寿","description":"天安人寿"},{"value":"8192","name":"aVIVA","displayName":"中英人寿","description":"中英人寿"},{"value":"16384","name":"aGC","displayName":"中意人寿","description":"中意人寿"},{"value":"32768","name":"aXA","displayName":"工银安盛","description":"工银安盛"},{"value":"65536","name":"aEONLIFE","displayName":"百年人寿","description":"百年人寿"},{"value":"131072","name":"gW","displayName":"长城人寿","description":"长城人寿"},{"value":"262144","name":"sUNLIFE","displayName":"光大永明","description":"光大永明"},{"value":"524288","name":"hD","displayName":"恒大人寿","description":"恒大人寿"},{"value":"1048576","name":"other","displayName":"其它保险公司","description":"其它保险公司"}]}';
	}
}
