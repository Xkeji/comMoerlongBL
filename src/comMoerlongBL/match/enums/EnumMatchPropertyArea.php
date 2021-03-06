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
 * 房产区域
 * 房产区域
 * 
 */
class EnumMatchPropertyArea
{
	const description=array('0'=>'未定义','1'=>'主城区','2'=>'郊县');
		
	/**
     * 主城区
	 * 主城区
     */
    const mainCity = 1;	
		
	/**
     * 郊县
	 * 郊县
     */
    const suburbs = 2;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumMatchPropertyArea","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPropertyArea","displayName":"房产区域","description":"房产区域","items": [{"value":"1","name":"mainCity","displayName":"主城区","description":"主城区"},{"value":"2","name":"suburbs","displayName":"郊县","description":"郊县"}]}';
	}
}
