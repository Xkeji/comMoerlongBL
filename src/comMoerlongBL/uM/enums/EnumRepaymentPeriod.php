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
 * 贷款期数
 * 贷款期数
 * 
 */
class EnumRepaymentPeriod
{
	const description=array('3'=>'3期','6'=>'6期','9'=>'9期','12'=>'12期','24'=>'24期','36'=>'36期','48'=>'48期','60'=>'60期','72'=>'72期','84'=>'84期','96'=>'96期','108'=>'108期','120'=>'120期','132'=>'132期','146'=>'144期','156'=>'156期','168'=>'168期','180'=>'180期','192'=>'192期','204'=>'204期','216'=>'216期','228'=>'228期','240'=>'240期','252'=>'252期','264'=>'264期','276'=>'276期','288'=>'288期','300'=>'300期','312'=>'312期','324'=>'324期','336'=>'336期','348'=>'348期','360'=>'360期','480'=>'480期','600'=>'600期','720'=>'720期');
		
	/**
     * 3期
	 * 3期
     */
    const p3 = 3;	
		
	/**
     * 6期
	 * 6期
     */
    const p6 = 6;	
		
	/**
     * 9期
	 * 9期
     */
    const p9 = 9;	
		
	/**
     * 12期
	 * 12期
     */
    const p12 = 12;	
		
	/**
     * 24期
	 * 24期
     */
    const p24 = 24;	
		
	/**
     * 36期
	 * 36期
     */
    const p36 = 36;	
		
	/**
     * 48期
	 * 48期
     */
    const p48 = 48;	
		
	/**
     * 60期
	 * 60期
     */
    const p60 = 60;	
		
	/**
     * 72期
	 * 72期
     */
    const p72 = 72;	
		
	/**
     * 84期
	 * 84期
     */
    const p84 = 84;	
		
	/**
     * 96期
	 * 96期
     */
    const p96 = 96;	
		
	/**
     * 108期
	 * 108期
     */
    const p108 = 108;	
		
	/**
     * 120期
	 * 120期
     */
    const p120 = 120;	
		
	/**
     * 132期
	 * 132期
     */
    const p132 = 132;	
		
	/**
     * 144期
	 * 144期
     */
    const p144 = 146;	
		
	/**
     * 156期
	 * 156期
     */
    const p156 = 156;	
		
	/**
     * 168期
	 * 168期
     */
    const p168 = 168;	
		
	/**
     * 180期
	 * 180期
     */
    const p180 = 180;	
		
	/**
     * 192期
	 * 192期
     */
    const p192 = 192;	
		
	/**
     * 204期
	 * 204期
     */
    const p204 = 204;	
		
	/**
     * 216期
	 * 216期
     */
    const p216 = 216;	
		
	/**
     * 228期
	 * 228期
     */
    const p228 = 228;	
		
	/**
     * 240期
	 * 240期（默认）
     */
    const p240 = 240;	
		
	/**
     * 252期
	 * 252期
     */
    const p252 = 252;	
		
	/**
     * 264期
	 * 264期
     */
    const p264 = 264;	
		
	/**
     * 276期
	 * 276期
     */
    const p276 = 276;	
		
	/**
     * 288期
	 * 288期
     */
    const p288 = 288;	
		
	/**
     * 300期
	 * 300期
     */
    const p300 = 300;	
		
	/**
     * 312期
	 * 312期
     */
    const p312 = 312;	
		
	/**
     * 324期
	 * 324期
     */
    const p324 = 324;	
		
	/**
     * 336期
	 * 336期
     */
    const p336 = 336;	
		
	/**
     * 348期
	 * 348期
     */
    const p348 = 348;	
		
	/**
     * 360期
	 * 360期
     */
    const p360 = 360;	
		
	/**
     * 480期
	 * 480期
     */
    const p480 = 480;	
		
	/**
     * 600期
	 * 600期
     */
    const p600 = 600;	
		
	/**
     * 720期
	 * 720期
     */
    const p720 = 720;	
      
	public static function getDescription($key){
        return isset(self::description[$key])?self::description[$key]:'';
    }
	public static function toJSON(){
		return '{"name":"EnumRepaymentPeriod","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumRepaymentPeriod","displayName":"贷款期数","description":"贷款期数","items": [{"value":"3","name":"p3","displayName":"3期","description":"3期"},{"value":"6","name":"p6","displayName":"6期","description":"6期"},{"value":"9","name":"p9","displayName":"9期","description":"9期"},{"value":"12","name":"p12","displayName":"12期","description":"12期"},{"value":"24","name":"p24","displayName":"24期","description":"24期"},{"value":"36","name":"p36","displayName":"36期","description":"36期"},{"value":"48","name":"p48","displayName":"48期","description":"48期"},{"value":"60","name":"p60","displayName":"60期","description":"60期"},{"value":"72","name":"p72","displayName":"72期","description":"72期"},{"value":"84","name":"p84","displayName":"84期","description":"84期"},{"value":"96","name":"p96","displayName":"96期","description":"96期"},{"value":"108","name":"p108","displayName":"108期","description":"108期"},{"value":"120","name":"p120","displayName":"120期","description":"120期"},{"value":"132","name":"p132","displayName":"132期","description":"132期"},{"value":"146","name":"p144","displayName":"144期","description":"144期"},{"value":"156","name":"p156","displayName":"156期","description":"156期"},{"value":"168","name":"p168","displayName":"168期","description":"168期"},{"value":"180","name":"p180","displayName":"180期","description":"180期"},{"value":"192","name":"p192","displayName":"192期","description":"192期"},{"value":"204","name":"p204","displayName":"204期","description":"204期"},{"value":"216","name":"p216","displayName":"216期","description":"216期"},{"value":"228","name":"p228","displayName":"228期","description":"228期"},{"value":"240","name":"p240","displayName":"240期","description":"240期（默认）"},{"value":"252","name":"p252","displayName":"252期","description":"252期"},{"value":"264","name":"p264","displayName":"264期","description":"264期"},{"value":"276","name":"p276","displayName":"276期","description":"276期"},{"value":"288","name":"p288","displayName":"288期","description":"288期"},{"value":"300","name":"p300","displayName":"300期","description":"300期"},{"value":"312","name":"p312","displayName":"312期","description":"312期"},{"value":"324","name":"p324","displayName":"324期","description":"324期"},{"value":"336","name":"p336","displayName":"336期","description":"336期"},{"value":"348","name":"p348","displayName":"348期","description":"348期"},{"value":"360","name":"p360","displayName":"360期","description":"360期"},{"value":"480","name":"p480","displayName":"480期","description":"480期"},{"value":"600","name":"p600","displayName":"600期","description":"600期"},{"value":"720","name":"p720","displayName":"720期","description":"720期"}]}';
	}
}
