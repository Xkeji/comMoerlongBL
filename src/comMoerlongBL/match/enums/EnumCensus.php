<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：{{Enum}}.php.tt
//     生成日期：2019-09-12 14:15:23
// </auto-generated>
//------------------------------------------------------------------------------
namespace comMoerlongBL\match\enums;


/**
 * 户籍
 * 户籍
 * 
 */
class EnumCensus
{
	const description=array('0'=>'未定义','1'=>'本地','2'=>'外地');
		
	/**
     * 本地
	 * 本地
     */
    const local = 1;	
		
	/**
     * 外地
	 * 外地
     */
    const field = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumCensus","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumCensus","displayName":"户籍","description":"户籍","items": [{"value":"1","name":"local","displayName":"本地","description":"本地"},{"value":"2","name":"field","displayName":"外地","description":"外地"}]}';
	}
}
