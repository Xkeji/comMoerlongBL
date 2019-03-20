<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：$BE$AllEnumMD.php.tt
//     生成日期：2019-03-19 16:10:43
// </auto-generated>
//------------------------------------------------------------------------------	

namespace comMoerlongBL\match\metadata;

/**
 * BE下所有元数据 
 */
class MatchComponentMDFactory
{
	
	public static function getAllEnumJSON(){
		return '[{"name":"EnumMatchCreaditQualification","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchCreaditQualification","displayName":"信用贷资质(可多选)","description":"信用贷资质(可多选)","items": [{"value":"1","name":"salaryOnCard","displayName":"银行打卡工资","description":"银行打卡工资"},{"value":"2","name":"policy23","displayName":"缴存2年3期以上商业保单","description":"缴存2年3期以上商业保单"},{"value":"4","name":"socialSecurity6","displayName":"本地连续缴纳6个月以上的社保、公积金","description":"本地连续缴纳6个月以上的社保、公积金"}]},{"name":"EnumMatchBusinessEntity","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchBusinessEntity","displayName":"经营实体","description":"经营实体","items": [{"value":"1","name":"none","displayName":"无","description":"无"},{"value":"2","name":"noneButRegisterable","displayName":"无，可新办","description":"无，可新办"},{"value":"4","name":"ownerAndInvestigated","displayName":"有且可考察","description":"有且可考察"},{"value":"8","name":"ownerAbove2years","displayName":"有，可考察且注册满2年","description":"有，可考察且注册满2年"}]},{"name":"EnumCensus","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumCensus","displayName":"户籍","description":"户籍","items": [{"value":"1","name":"local","displayName":"本地","description":"本地"},{"value":"2","name":"field","displayName":"外地","description":"外地"}]},{"name":"EnumMatchSalaryPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchSalaryPeriod","displayName":"打卡工资期数","description":"打卡工资期数","items": [{"value":"0","name":"none","displayName":"无","description":"无"},{"value":"1","name":"oneto3","displayName":"1~3个月","description":"1~3个月"},{"value":"2","name":"fourto6","displayName":"4~6个月","description":"4~6个月"},{"value":"4","name":"sevento12","displayName":"7~12个月","description":"7~12个月"},{"value":"8","name":"thirteento24","displayName":"13~24个月","description":"13~24个月"},{"value":"16","name":"tweentyfiveto36","displayName":"25~36个月","description":"25~36个月"},{"value":"32","name":"above36","displayName":"36个月以上","description":"36个月以上"}]},{"name":"EnumMatchLoanType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchLoanType","displayName":"选择贷款类型（可多选）","description":"选择贷款类型（可多选）","items": [{"value":"1","name":"mortgage","displayName":"房产抵押","description":"房产抵押"},{"value":"2","name":"vehicleMortage","displayName":"车辆贷款","description":"车辆贷款"},{"value":"4","name":"creditLoans","displayName":"信用贷款","description":"信用贷款"}]},{"name":"EnumMatchCreditInformation","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchCreditInformation","displayName":"征信情况","description":"征信情况","items": [{"value":"1","name":"noCreditCardAndLoan","displayName":"无信用卡或贷款","description":"无信用卡或贷款"},{"value":"2","name":"goodCredit","displayName":"信用良好","description":"信用良好"},{"value":"4","name":"badCredit","displayName":"1年多次逾期","description":"1年多次逾期"}]},{"name":"EnumMatchPropertyArea","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPropertyArea","displayName":"房产区域","description":"房产区域","items": [{"value":"1","name":"mainCity","displayName":"主城区","description":"主城区"},{"value":"2","name":"suburbs","displayName":"郊县","description":"郊县"}]},{"name":"EnumMatchPropertyCompletionTime","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPropertyCompletionTime","displayName":"建成时间","description":"建成时间","items": [{"value":"1","name":"below10","displayName":"10年以内","description":"10年以内"},{"value":"2","name":"between10to20","displayName":"10~20年","description":"10~20年"},{"value":"4","name":"between20to30","displayName":"20~30年","description":"20~30年"},{"value":"8","name":"above30","displayName":"30年以上","description":"30年以上"}]},{"name":"EnumMatchConstructionArea","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchConstructionArea","displayName":"建筑面积","description":"建筑面积","items": [{"value":"1","name":"below60","displayName":"60以下","description":"60以下"},{"value":"2","name":"between60to100","displayName":"60~100","description":"60~100"},{"value":"4","name":"between100to200","displayName":"100~200","description":"100~200"},{"value":"8","name":"above200","displayName":"200以上","description":"200以上"}]},{"name":"EnumMatchOwnershipCertificationTime","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchOwnershipCertificationTime","displayName":"持证时间","description":"持证时间","items": [{"value":"1","name":"none","displayName":"无证","description":"无证"},{"value":"2","name":"below1","displayName":"1年以内","description":"1年以内"},{"value":"4","name":"above1","displayName":"1年以上","description":"1年以上"}]},{"name":"EnumMatchVehicleMileage","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehicleMileage","displayName":"行驶里程数（万公里）","description":"行驶里程数（万公里）","items": [{"value":"1","name":"below12","displayName":"12万以内","description":"12万以内"},{"value":"2","name":"above12","displayName":"12万以上","description":"12万以上"}]},{"name":"EnumMatchSalary","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchSalary","displayName":"每月银行卡打卡工资","description":"每月银行卡打卡工资","items": [{"value":"1","name":"below3K","displayName":"少于3千","description":"少于3千"},{"value":"2","name":"between3Kto4K","displayName":"3~4千","description":"3~4千"},{"value":"4","name":"between4Kto6K","displayName":"4~6千","description":"4~6千"},{"value":"8","name":"between6Kto8K","displayName":"6~8千","description":"6~8千"},{"value":"16","name":"between8Kto1W","displayName":"8千~1万","description":"8千~1万"},{"value":"32","name":"between1Wto2W","displayName":"1万~2万","description":"1万~2万"},{"value":"64","name":"between2Wto3W","displayName":"2万~3万","description":"2万~3万"},{"value":"128","name":"above3W","displayName":"3万以上","description":"3万以上"}]},{"name":"EnumMatchHousePropertyType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchHousePropertyType","displayName":"房产类型","description":"房产类型","items": [{"value":"1","name":"fullHouse","displayName":"全款房","description":"全款房"},{"value":"2","name":"mortgageHouse","displayName":"按揭房","description":"按揭房"}]},{"name":"EnumMatchHouseRepaymentPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchHouseRepaymentPeriod","displayName":"还款期数","description":"还款期数（按揭房）","items": [{"value":"1","name":"between1to3","displayName":"1~3期","description":"1~3期"},{"value":"2","name":"between4to6","displayName":"4~6期","description":"4~6期"},{"value":"4","name":"between7to12","displayName":"7~12期","description":"7~12期"},{"value":"8","name":"between13to24","displayName":"13~24期","description":"13~24期"},{"value":"16","name":"between25to36","displayName":"25~36期","description":"25~36期"},{"value":"32","name":"between37to60","displayName":"37~60期","description":"37~60期"},{"value":"64","name":"above60","displayName":"60期以上","description":"60期以上"}]},{"name":"EnumMatchVehicleRepaymentPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehicleRepaymentPeriod","displayName":"还款期数","description":"还款期数（按揭车）","items": [{"value":"1","name":"below6","displayName":"6期以下","description":"6期以下"},{"value":"2","name":"between6to12","displayName":"6~12期","description":"6~12期"},{"value":"4","name":"between13to36","displayName":"13~36期","description":"13~36期"},{"value":"8","name":"above36","displayName":"36期以上","description":"36期以上"}]},{"name":"EnumMatchSocialSecurityStatus","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchSocialSecurityStatus","displayName":"社保缴存情况","description":"社保缴存情况","items": [{"value":"1","name":"none","displayName":"无社保","description":"无社保"},{"value":"2","name":"continuous","displayName":"持续缴纳中","description":"持续缴纳中"}]},{"name":"EnumMatchProvidentFundStatus","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchProvidentFundStatus","displayName":"公积金缴存情况","description":"公积金缴存情况","items": [{"value":"1","name":"none","displayName":"无公积金","description":"无公积金"},{"value":"2","name":"syncWithSocialSecurity","displayName":"同社保","description":"同社保"},{"value":"4","name":"continuous","displayName":"持续缴纳中","description":"持续缴纳中"}]},{"name":"EnumMatchSocialSecurityPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchSocialSecurityPeriod","displayName":"连续缴存期数","description":"连续缴存期数","items": [{"value":"1","name":"below6M","displayName":"6个月以下","description":"6个月以下"},{"value":"2","name":"between6Mto1Y","displayName":"6个月~1年","description":"6个月~1年"},{"value":"4","name":"between1Yto2Y","displayName":"1~2年","description":"1~2年"},{"value":"8","name":"between2Yto3Y","displayName":"2~3年","description":"2~3年"},{"value":"16","name":"above3Y","displayName":"3年以上","description":"3年以上"}]},{"name":"EnumMatchSocialSecurityBasic","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchSocialSecurityBasic","displayName":"社保缴存基数","description":"社保缴存基数","items": [{"value":"1","name":"bySalary","displayName":"按工资收入","description":"按工资收入"},{"value":"2","name":"below3K","displayName":"少于3千","description":"少于3千"},{"value":"4","name":"between3Kto4K","displayName":"3~4千","description":"3~4千"},{"value":"8","name":"between4Kto6K","displayName":"4~6千","description":"4~6千"},{"value":"16","name":"between6Kto8K","displayName":"6~8千","description":"6~8千"},{"value":"32","name":"between8Kto1W","displayName":"8千~1万","description":"8千~1万"},{"value":"64","name":"between1Wto2W","displayName":"1万~2万","description":"1万~2万"},{"value":"128","name":"between2Wto3W","displayName":"2万~3万","description":"2万~3万"},{"value":"256","name":"above3W","displayName":"3万以上","description":"3万以上"}]},{"name":"EnumMatchProvidentFundPeriod","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchProvidentFundPeriod","displayName":"连续缴存期数","description":"连续缴存期数","items": [{"value":"1","name":"between6Mto1Y","displayName":"6个月~1年","description":"6个月~1年"},{"value":"2","name":"between1Yto2Y","displayName":"1~2年","description":"1~2年"},{"value":"4","name":"between2Yto3Y","displayName":"2~3年","description":"2~3年"},{"value":"8","name":"above3Y","displayName":"3年以上","description":"3年以上"}]},{"name":"EnumMatchProvidentFundBasic","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchProvidentFundBasic","displayName":"公积金缴存基数","description":"公积金缴存基数","items": [{"value":"1","name":"bySalary","displayName":"按工资收入","description":"按工资收入"},{"value":"2","name":"below3K","displayName":"少于3千","description":"少于3千"},{"value":"4","name":"between3Kto4K","displayName":"3~4千","description":"3~4千"},{"value":"8","name":"between4Kto6K","displayName":"4~6千","description":"4~6千"},{"value":"16","name":"between6Kto8K","displayName":"6~8千","description":"6~8千"},{"value":"32","name":"between8Kto1W","displayName":"8千~1万","description":"8千~1万"},{"value":"64","name":"between1Wto2W","displayName":"1万~2万","description":"1万~2万"},{"value":"128","name":"between2Wto3W","displayName":"2万~3万","description":"2万~3万"},{"value":"256","name":"above3W","displayName":"3万以上","description":"3万以上"}]},{"name":"EnumMatchPolicePaymentType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentType","displayName":"缴纳方式","description":"保单缴纳方式","items": [{"value":"1","name":"byYear","displayName":"按年","description":"按年"},{"value":"2","name":"byMonth","displayName":"按月","description":"按月"},{"value":"4","name":"bySeason","displayName":"按季","description":"按季"},{"value":"8","name":"onetime","displayName":"趸交","description":"趸交"}]},{"name":"EnumMatchPolicePaymentPeriodByYear","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentPeriodByYear","displayName":"缴纳期数","description":"保单缴纳期数（按年）","items": [{"value":"1","name":"below2Y3P","displayName":"不足2年3期","description":"不足2年3期"},{"value":"2","name":"twoY3P","displayName":"2年3期","description":"2年3期"},{"value":"4","name":"threeY4P","displayName":"3年4期","description":"3年4期"},{"value":"8","name":"fourY5P","displayName":"4年5期","description":"4年5期"},{"value":"16","name":"fiveY6P","displayName":"6年6期","description":"6年6期"},{"value":"32","name":"above6Y7P","displayName":"6年7期以上","description":"6年7期以上"}]},{"name":"EnumMatchPolicePaymentPeriodByMonth","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentPeriodByMonth","displayName":"缴纳期数","description":"保单缴纳期数（按月）","items": [{"value":"1","name":"below2","displayName":"2期以下","description":"2期以下"},{"value":"2","name":"between2to4","displayName":"2~4期","description":"2~4期"},{"value":"4","name":"between5to8","displayName":"5~8期","description":"5~8期"},{"value":"8","name":"above8","displayName":"8期以上","description":"8期以上"}]},{"name":"EnumMatchPolicePaymentPeriodBySeason","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchPolicePaymentPeriodBySeason","displayName":"缴纳期数","description":"保单缴纳期数（按季）","items": [{"value":"1","name":"below6","displayName":"6期以下","description":"6期以下"},{"value":"2","name":"between6to12","displayName":"6~12期","description":"6~12期"},{"value":"4","name":"between13to24","displayName":"13~24期","description":"13~24期"},{"value":"8","name":"above24","displayName":"24期以上","description":"24期以上"}]},{"name":"EnumMatchStrategy","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchStrategy","displayName":"匹配策略","description":"匹配策略","items": [{"value":"1","name":"smart","displayName":"智能排序","description":"智能排序"},{"value":"2","name":"edu","displayName":"额度最高","description":"额度最高"},{"value":"4","name":"lixi","displayName":"利息最低","description":"利息最低"}]},{"name":"EnumMatchVehiclePropertyType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehiclePropertyType","displayName":"车辆类型","description":"车辆类型","items": [{"value":"1","name":"full","displayName":"全款车","description":"全款车"},{"value":"2","name":"mortgage","displayName":"按揭车","description":"按揭车"}]},{"name":"EnumApplicationCancelReason","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumApplicationCancelReason","displayName":"取消报单原因","description":"取消报单原因","items": [{"value":"1","name":"alreadyHaveFunds","displayName":"客户已筹措到资金","description":"客户已筹措到资金"},{"value":"2","name":"dataChange","displayName":"客户资料需要修改","description":"客户资料需要修改"},{"value":"4","name":"reconnect","displayName":"需重新与客户沟通","description":"需重新与客户沟通"}]},{"name":"EnumApplicationInvalidReason","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumApplicationInvalidReason","displayName":"签单申请无效关闭原因","description":"签单申请无效关闭原因","items": [{"value":"1","name":"iDCheckFail","displayName":"客户身份证件无法验真","description":"客户身份证件无法验真"},{"value":"2","name":"inTheBlacklist","displayName":"客户处于公司黑名单中","description":"客户处于公司黑名单中"},{"value":"4","name":"missingData","displayName":"客户提交资料不齐","description":"客户提交资料不齐"}]},{"name":"EnumApplicationTimeoutReason","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumApplicationTimeoutReason","displayName":"签单申请超期关闭原因","description":"签单申请超期关闭原因","items": [{"value":"1","name":"timeoutBySign","displayName":"等待签单时间超期","description":"等待签单时间超期"},{"value":"2","name":"timeoutbyAgreement","displayName":"方案转协议超期","description":"方案转协议超期"}]},{"name":"EnumApplicationCloseType","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumApplicationCloseType","displayName":"签单申请关闭类型","description":"签单申请关闭类型","items": [{"value":"0","name":"none","displayName":"未关闭","description":"未关闭"},{"value":"1","name":"signed","displayName":"已签单","description":"已签单"},{"value":"2","name":"timeout","displayName":"超期关闭","description":"超期关闭"},{"value":"4","name":"invalid","displayName":"无效关闭","description":"无效关闭"},{"value":"8","name":"cancel","displayName":"取消报单","description":"取消报单"},{"value":"16","name":"repeat","displayName":"重复报单","description":"重复报单"}]},{"name":"EnumMatchIndustryCategory","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchIndustryCategory","displayName":"行业类别","description":"行业类别","items": [{"value":"1","name":"classA","displayName":"公务员（非公检法）","description":"公务员（非公检法）"},{"value":"2","name":"classB","displayName":"公检法","description":"公检法"},{"value":"4","name":"classC","displayName":"事业单位","description":"事业单位"},{"value":"8","name":"classD","displayName":"国有企业、银行","description":"国有企业、银行"},{"value":"16","name":"classE","displayName":"上市公司、世界500强","description":"上市公司、世界500强"},{"value":"32","name":"classF","displayName":"投资公司","description":"投资公司"},{"value":"64","name":"classG","displayName":"二手车交易","description":"二手车交易"},{"value":"128","name":"classH","displayName":"其他","description":"其他"}]},{"name":"EnumMatchVehicleRegistraionTime","fullName":"App\\Http\\Modules\\MatchComponent\\GeneratedCodes\\Enum\\EnumMatchVehicleRegistraionTime","displayName":"车辆上户情况","description":"车辆上户情况","items": [{"value":"1","name":"below3M","displayName":"不足3个月","description":"不足3个月"},{"value":"2","name":"above3M","displayName":"超过3个月","description":"超过3个月"}]}]';
	}
}

