<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：$BE$AllEnumMD.php.tt
//     生成日期：2019-05-31 09:49:00
// </auto-generated>
//------------------------------------------------------------------------------	

namespace comMoerlongBL\uM\metadata;

/**
 * BE下所有元数据 
 */
class UMComponentMDFactory
{
	
	public static function getAllEnumJSON(){
		return '[{"name":"EnumHousePropertyType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumHousePropertyType","displayName":"房产类型","description":"房产类型","items": [{"value":"1","name":"residential","displayName":"住宅","description":"住宅"},{"value":"2","name":"apartment70","displayName":"70年公寓","description":"70年公寓"},{"value":"4","name":"apartment40","displayName":"40年公寓","description":"40年公寓"},{"value":"8","name":"pavement40","displayName":"40年商铺","description":"40年商铺"},{"value":"16","name":"office40","displayName":"40年办公","description":"40年办公"},{"value":"32","name":"villa","displayName":"别墅","description":"别墅"},{"value":"64","name":"other","displayName":"其它","description":"其它"}]},{"name":"EnumLandNature","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumLandNature","displayName":"土地性质","description":"土地性质","items": [{"value":"1","name":"transfer","displayName":"出让","description":"出让（默认）"},{"value":"2","name":"allocation","displayName":"划拨","description":"划拨"}]},{"name":"EnumPropertyRight","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumPropertyRight","displayName":"产权类型","description":"产权类型","items": [{"value":"1","name":"fullPayment","displayName":"全款","description":"全款（默认）"},{"value":"2","name":"mortgage","displayName":"按揭","description":"按揭"},{"value":"4","name":"guaranty","displayName":"抵押","description":"抵押"}]},{"name":"EnumLoanInstitution","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumLoanInstitution","displayName":"贷款机构","description":"贷款机构","items": [{"value":"1","name":"bOC","displayName":"中国银行","description":"中国银行（默认）"},{"value":"2","name":"aBC","displayName":"农业银行","description":"农业银行"},{"value":"4","name":"iCBC","displayName":"工商银行","description":"工商银行"},{"value":"8","name":"cCB","displayName":"建设银行","description":"建设银行"},{"value":"16","name":"bCM","displayName":"交通银行","description":"交通银行"},{"value":"32","name":"cMB","displayName":"招商银行","description":"招商银行"},{"value":"64","name":"cEB","displayName":"光大银行","description":"光大银行"},{"value":"128","name":"cIB","displayName":"兴业银行","description":"兴业银行"},{"value":"256","name":"pAB","displayName":"平安银行","description":"平安银行"},{"value":"512","name":"cITIC","displayName":"中信银行","description":"中信银行"},{"value":"1024","name":"sPD","displayName":"浦发银行","description":"浦发银行"},{"value":"2048","name":"hXB","displayName":"华夏银行","description":"华夏银行"},{"value":"4096","name":"cGB","displayName":"广发银行","description":"广发银行"},{"value":"8192","name":"tFB","displayName":"天府银行","description":"天府银行"},{"value":"16384","name":"cZB","displayName":"浙商银行","description":"浙商银行"},{"value":"32768","name":"cBH","displayName":"渤海银行","description":"渤海银行"},{"value":"65536","name":"cMBC","displayName":"民生银行","description":"民生银行"},{"value":"131072","name":"bOCD","displayName":"成都银行","description":"成都银行"},{"value":"262144","name":"pZHCCB","displayName":"攀枝花商业银行","description":"攀枝花商业银行"},{"value":"524288","name":"other","displayName":"其它银行","description":"其它银行"}]},{"name":"EnumRepayment","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumRepayment","displayName":"还款方式","description":"还款方式","items": [{"value":"1","name":"repayAnyTime","displayName":"随借随还","description":"随借随还"},{"value":"2","name":"beforInstallment","displayName":"先息后本","description":"先息后本"},{"value":"4","name":"fixedInstallment","displayName":"等额本息","description":"等额本息"},{"value":"8","name":"fixedPrincipal","displayName":"等额本金","description":"等额本金"},{"value":"16","name":"revolvingLoan","displayName":"循环贷","description":"循环贷"},{"value":"32","name":"plannedRepayment","displayName":"计划还款","description":"计划还款"},{"value":"64","name":"balloonLoan","displayName":"气球贷","description":"气球贷"}]},{"name":"EnumRepaymentPeriod","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumRepaymentPeriod","displayName":"贷款期数","description":"贷款期数","items": [{"value":"3","name":"p3","displayName":"3期","description":"3期"},{"value":"6","name":"p6","displayName":"6期","description":"6期"},{"value":"9","name":"p9","displayName":"9期","description":"9期"},{"value":"12","name":"p12","displayName":"12期","description":"12期"},{"value":"24","name":"p24","displayName":"24期","description":"24期"},{"value":"36","name":"p36","displayName":"36期","description":"36期"},{"value":"48","name":"p48","displayName":"48期","description":"48期"},{"value":"60","name":"p60","displayName":"60期","description":"60期"},{"value":"72","name":"p72","displayName":"72期","description":"72期"},{"value":"84","name":"p84","displayName":"84期","description":"84期"},{"value":"96","name":"p96","displayName":"96期","description":"96期"},{"value":"108","name":"p108","displayName":"108期","description":"108期"},{"value":"120","name":"p120","displayName":"120期","description":"120期"},{"value":"132","name":"p132","displayName":"132期","description":"132期"},{"value":"146","name":"p144","displayName":"144期","description":"144期"},{"value":"156","name":"p156","displayName":"156期","description":"156期"},{"value":"168","name":"p168","displayName":"168期","description":"168期"},{"value":"180","name":"p180","displayName":"180期","description":"180期"},{"value":"192","name":"p192","displayName":"192期","description":"192期"},{"value":"204","name":"p204","displayName":"204期","description":"204期"},{"value":"216","name":"p216","displayName":"216期","description":"216期"},{"value":"228","name":"p228","displayName":"228期","description":"228期"},{"value":"240","name":"p240","displayName":"240期","description":"240期（默认）"},{"value":"252","name":"p252","displayName":"252期","description":"252期"},{"value":"264","name":"p264","displayName":"264期","description":"264期"},{"value":"276","name":"p276","displayName":"276期","description":"276期"},{"value":"288","name":"p288","displayName":"288期","description":"288期"},{"value":"300","name":"p300","displayName":"300期","description":"300期"},{"value":"312","name":"p312","displayName":"312期","description":"312期"},{"value":"324","name":"p324","displayName":"324期","description":"324期"},{"value":"336","name":"p336","displayName":"336期","description":"336期"},{"value":"348","name":"p348","displayName":"348期","description":"348期"},{"value":"360","name":"p360","displayName":"360期","description":"360期"},{"value":"480","name":"p480","displayName":"480期","description":"480期"},{"value":"600","name":"p600","displayName":"600期","description":"600期"},{"value":"720","name":"p720","displayName":"720期","description":"720期"}]},{"name":"EnumVNAreaCode","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumVNAreaCode","displayName":"车辆号牌区号","description":"车辆号牌区号","items": [{"value":"1","name":"beijing","displayName":"京","description":"北京"},{"value":"2","name":"tianjin","displayName":"津","description":"天津"},{"value":"3","name":"hebei","displayName":"冀","description":"河北"},{"value":"4","name":"shanxi","displayName":"晋","description":"山西省"},{"value":"5","name":"neimenggu","displayName":"蒙","description":"内蒙古自治区"},{"value":"6","name":"liaoning","displayName":"辽","description":"辽宁省"},{"value":"7","name":"jilin","displayName":"吉","description":"吉林省"},{"value":"8","name":"heilongjiang","displayName":"黑","description":"黑龙江省"},{"value":"9","name":"shanghai","displayName":"沪","description":"上海市"},{"value":"10","name":"jiangsu","displayName":"苏","description":"江苏省"},{"value":"11","name":"zhejiang","displayName":"浙","description":"浙江省"},{"value":"12","name":"anhui","displayName":"皖","description":"安徽省"},{"value":"13","name":"fujian","displayName":"闽","description":"福建省"},{"value":"14","name":"jiangxi","displayName":"赣","description":"江西省"},{"value":"15","name":"shandong","displayName":"鲁","description":"山东省"},{"value":"16","name":"henan","displayName":"豫","description":"河南省"},{"value":"17","name":"hubei","displayName":"鄂","description":"湖北省"},{"value":"18","name":"hunan","displayName":"湘","description":"湖南省"},{"value":"19","name":"guangdong","displayName":"粤","description":"广东省"},{"value":"20","name":"guangxi","displayName":"桂","description":"广西壮族自治区"},{"value":"21","name":"hainan","displayName":"琼","description":"海南省"},{"value":"22","name":"chongqing","displayName":"渝","description":"重庆市"},{"value":"23","name":"sichuan","displayName":"川","description":"四川省"},{"value":"24","name":"guizhou","displayName":"贵","description":"贵州省"},{"value":"25","name":"yunnan","displayName":"云","description":"云南省"},{"value":"26","name":"xizang","displayName":"藏","description":"西藏自治区"},{"value":"27","name":"shaanxi","displayName":"陕","description":"陕西省"},{"value":"28","name":"gansu","displayName":"甘","description":"甘肃省"},{"value":"29","name":"qinghai","displayName":"青","description":"青海省"},{"value":"30","name":"ningxia","displayName":"宁","description":"宁夏回族自治区"},{"value":"31","name":"xinjiang","displayName":"新","description":"新疆维吾尔自治区"}]},{"name":"EnumVehicleUse","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumVehicleUse","displayName":"车辆用途","description":"车辆用途","items": [{"value":"1","name":"selfUse","displayName":"自用","description":"自用"},{"value":"2","name":"operation","displayName":"运营","description":"运营"}]},{"name":"EnumGender","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumGender","displayName":"性别","description":"性别","items": [{"value":"1","name":"male","displayName":"男","description":"男（默认）"},{"value":"2","name":"female","displayName":"女","description":"女"}]},{"name":"EnumMarriageStatus","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumMarriageStatus","displayName":"婚姻状况","description":"婚姻状况","items": [{"value":"1","name":"married","displayName":"已婚","description":"已婚（默认）"},{"value":"2","name":"single","displayName":"未婚","description":"未婚"},{"value":"4","name":"divorced","displayName":"离异","description":"离异"},{"value":"8","name":"widowed","displayName":"丧偶","description":"丧偶"}]},{"name":"EnumEduBackground","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumEduBackground","displayName":"教育背景","description":"教育背景","items": [{"value":"1","name":"collegeOrBelow","displayName":"大专以下","description":"大专以下（默认））"},{"value":"2","name":"college","displayName":"大专","description":"大专"},{"value":"4","name":"undergraduate","displayName":"本科","description":"本科"},{"value":"8","name":"masterOrAbove","displayName":"硕士及以上","description":"硕士及以上"}]},{"name":"EnumProfessionalIdentity","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumProfessionalIdentity","displayName":"职业身份","description":"职业身份","items": [{"value":"1","name":"officeWoker","displayName":"上班族","description":"上班族"},{"value":"2","name":"selfEmployed","displayName":"个体户","description":"个体户"},{"value":"4","name":"businessOwner","displayName":"企业主","description":"企业主"}]},{"name":"EnumOwnerHouseProperty","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumOwnerHouseProperty","displayName":"名下房产","description":"名下房产","items": [{"value":"1","name":"none","displayName":"没有","description":"没有"},{"value":"2","name":"one","displayName":"1套","description":"1套"},{"value":"4","name":"twoOrAbove","displayName":"2套及其以上","description":"2套及其以上"}]},{"name":"EnumOwnerVehicleProperty","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumOwnerVehicleProperty","displayName":"名下汽车","description":"名下汽车","items": [{"value":"1","name":"none","displayName":"没有","description":"没有"},{"value":"2","name":"one","displayName":"1辆","description":"1辆"},{"value":"4","name":"twoOrAbove","displayName":"2辆及以上","description":"2辆及以上"}]},{"name":"EnumInsuranceCompany","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumInsuranceCompany","displayName":"保险公司","description":"保险公司","items": [{"value":"1","name":"cLIC","displayName":"中国人寿","description":"中国人寿（默认）"},{"value":"2","name":"pAI","displayName":"中国平安","description":"中国平安"},{"value":"4","name":"tPIC","displayName":"太平洋保险","description":"太平洋保险"},{"value":"8","name":"hLIC","displayName":"华夏保险","description":"华夏保险"},{"value":"16","name":"tAIPING","displayName":"中国太平","description":"中国太平"},{"value":"32","name":"nCLIC","displayName":"新华保险","description":"新华保险"},{"value":"64","name":"tLIC","displayName":"泰康保险","description":"泰康保险"},{"value":"128","name":"pICC","displayName":"中国人保","description":"中国人保"},{"value":"256","name":"lIFE","displayName":"生命人寿","description":"生命人寿"},{"value":"512","name":"cPL","displayName":"中邮人寿","description":"中邮人寿"},{"value":"1024","name":"sPCIC","displayName":"阳光保险","description":"阳光保险"},{"value":"2048","name":"aBIC","displayName":"安邦保险","description":"安邦保险"},{"value":"4096","name":"tIC","displayName":"天安人寿","description":"天安人寿"},{"value":"8192","name":"aVIVA","displayName":"中英人寿","description":"中英人寿"},{"value":"16384","name":"aGC","displayName":"中意人寿","description":"中意人寿"},{"value":"32768","name":"aXA","displayName":"工银安盛","description":"工银安盛"},{"value":"65536","name":"aEONLIFE","displayName":"百年人寿","description":"百年人寿"},{"value":"131072","name":"gW","displayName":"长城人寿","description":"长城人寿"},{"value":"262144","name":"sUNLIFE","displayName":"光大永明","description":"光大永明"},{"value":"524288","name":"hD","displayName":"恒大人寿","description":"恒大人寿"},{"value":"1048576","name":"other","displayName":"其它保险公司","description":"其它保险公司"}]},{"name":"EnumInsuranceType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumInsuranceType","displayName":"投保险种","description":"投保险种","items": [{"value":"1","name":"life","displayName":"寿险","description":"寿险"},{"value":"2","name":"education","displayName":"教育险","description":"教育险"},{"value":"4","name":"others","displayName":"其他保险","description":"其他保险"}]},{"name":"EnumInsurancePaymentType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumInsurancePaymentType","displayName":"缴费方式","description":"缴费方式","items": [{"value":"1","name":"byYear","displayName":"按年","description":"按年"},{"value":"2","name":"byMonth","displayName":"按月","description":"按月"},{"value":"4","name":"bySeason","displayName":"按季","description":"按季"},{"value":"8","name":"onetime","displayName":"趸缴","description":"趸缴"}]},{"name":"EnumBusinessEntity","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumBusinessEntity","displayName":"经营主体","description":"经营主体","items": [{"value":"1","name":"noHaveAndNoNew","displayName":"无，不愿新办","description":"无，不愿新办（默认）"},{"value":"2","name":"noHaveAndCanNew","displayName":"无，可以新办","description":"无，可以新办"},{"value":"4","name":"haveAndAllowInspection","displayName":"有，不可考察","description":"有，不可考察"},{"value":"8","name":"haveAndDenyInspection","displayName":"有，可考察","description":"有，可考察"}]},{"name":"EnumEthnicity","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumEthnicity","displayName":"民族","description":"民族","items": [{"value":"1","name":"other","displayName":"其他","description":"其他"},{"value":"2","name":"han","displayName":"汉","description":"汉"},{"value":"3","name":"man","displayName":"满","description":"满"},{"value":"4","name":"mengGU","displayName":"蒙古","description":"蒙古"},{"value":"5","name":"hui","displayName":"回","description":"回"},{"value":"6","name":"zang","displayName":"藏","description":"藏"},{"value":"7","name":"weiWuEr","displayName":"维吾尔","description":"维吾尔"},{"value":"8","name":"miao","displayName":"苗","description":"苗"},{"value":"9","name":"yi","displayName":"彝","description":"彝"},{"value":"10","name":"zhuang","displayName":"壮","description":"壮"},{"value":"11","name":"buYi","displayName":"布依","description":"布依"},{"value":"12","name":"tong","displayName":"侗","description":"侗"},{"value":"13","name":"yao","displayName":"瑶","description":"瑶"},{"value":"14","name":"bai","displayName":"白","description":"白"},{"value":"15","name":"tuJia","displayName":"土家","description":"土家"},{"value":"16","name":"haNi","displayName":"哈尼","description":"哈尼"},{"value":"17","name":"haSaKe","displayName":"哈萨克","description":"哈萨克"},{"value":"18","name":"dai","displayName":"傣","description":"傣"},{"value":"19","name":"li","displayName":"黎","description":"黎"},{"value":"20","name":"liSu","displayName":"傈僳","description":"傈僳"},{"value":"21","name":"wa","displayName":"佤","description":"佤"},{"value":"22","name":"she","displayName":"畲","description":"畲"},{"value":"23","name":"gaoShan","displayName":"高山","description":"高山"},{"value":"24","name":"laHu","displayName":"拉祜","description":"拉祜"},{"value":"25","name":"shui","displayName":"水","description":"水"},{"value":"26","name":"dongXiang","displayName":"东乡","description":"东乡"},{"value":"27","name":"naXi","displayName":"纳西","description":"纳西"},{"value":"28","name":"jingPo","displayName":"景颇","description":"景颇"},{"value":"29","name":"keErKeZi","displayName":"柯尔克孜","description":"柯尔克孜"},{"value":"30","name":"tu","displayName":"土","description":"土"},{"value":"31","name":"daWoEr","displayName":"达斡尔","description":"达斡尔"},{"value":"32","name":"muLao","displayName":"仫佬","description":"仫佬"},{"value":"33","name":"qiang","displayName":"羌","description":"羌"},{"value":"34","name":"buLang","displayName":"布朗","description":"布朗"},{"value":"35","name":"saLa","displayName":"撒拉","description":"撒拉"},{"value":"36","name":"maoNan","displayName":"毛南","description":"毛南"},{"value":"37","name":"geLao","displayName":"仡佬","description":"仡佬"},{"value":"38","name":"xiBo","displayName":"锡伯","description":"锡伯"},{"value":"39","name":"aChang","displayName":"阿昌","description":"阿昌"},{"value":"40","name":"puMi","displayName":"普米","description":"普米"},{"value":"41","name":"chaoXian","displayName":"朝鲜","description":"朝鲜"},{"value":"42","name":"taJiKe","displayName":"塔吉克","description":"塔吉克"},{"value":"44","name":"wuZiBieKe","displayName":"乌孜别克","description":"乌孜别克"},{"value":"43","name":"nu","displayName":"怒","description":"怒"},{"value":"45","name":"eLuoSi","displayName":"俄罗斯","description":"俄罗斯"},{"value":"46","name":"eWenKe","displayName":"鄂温克","description":"鄂温克"},{"value":"47","name":"deAng","displayName":"德昂","description":"德昂"},{"value":"48","name":"baoAn","displayName":"保安","description":"保安"},{"value":"49","name":"yuGu","displayName":"裕固","description":"裕固"},{"value":"50","name":"jing","displayName":"京","description":"京"},{"value":"51","name":"taTaEr","displayName":"塔塔尔","description":"塔塔尔"},{"value":"52","name":"duLong","displayName":"独龙","description":"独龙"},{"value":"53","name":"eLunChun","displayName":"鄂伦春","description":"鄂伦春"},{"value":"54","name":"heZhe","displayName":"赫哲","description":"赫哲"},{"value":"55","name":"menBa","displayName":"门巴","description":"门巴"},{"value":"56","name":"luoBa","displayName":"珞巴","description":"珞巴"},{"value":"57","name":"jiNuo","displayName":"基诺","description":"基诺"}]},{"name":"EnumIncomeSource","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumIncomeSource","displayName":"收入来源","description":"收入来源","items": [{"value":"1","name":"no","displayName":"无","description":"无"},{"value":"2","name":"card","displayName":"打卡","description":"打卡"},{"value":"4","name":"cash","displayName":"现金","description":"现金"}]},{"name":"EnumCustomerType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCustomerType","displayName":"客户类型","description":"客户类型","items": [{"value":"1","name":"potential","displayName":"潜在客户","description":"潜在客户"},{"value":"2","name":"intentional","displayName":"意向客户","description":"意向客户"}]},{"name":"EnumIndustryCategory","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumIndustryCategory","displayName":"行业类别","description":"行业类别","items": [{"value":"1","name":"classA","displayName":"公务员（非公检法）","description":"公务员（非公检法）"},{"value":"2","name":"classB","displayName":"公检法","description":"公检法"},{"value":"4","name":"classC","displayName":"事业单位","description":"事业单位"},{"value":"8","name":"classD","displayName":"国有企业、银行","description":"国有企业、银行"},{"value":"16","name":"classE","displayName":"上市公司、世界500强","description":"上市公司、世界500强"},{"value":"32","name":"classF","displayName":"投资公司","description":"投资公司"},{"value":"64","name":"classG","displayName":"二手车交易","description":"二手车交易"},{"value":"128","name":"classH","displayName":"其他","description":"其他"}]},{"name":"EnumAPPContact","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumAPPContact","displayName":"APP应用联系方式","description":"APP应用联系方式","items": [{"value":"1","name":"qQ","displayName":"qq号","description":"qq号"},{"value":"2","name":"wexin","displayName":"微信","description":"微信"},{"value":"4","name":"alipay","displayName":"支付宝账号","description":"支付宝账号"}]},{"name":"EnumCertificate","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCertificate","displayName":"证件类型","description":"证件类型","items": [{"value":"1","name":"identity","displayName":"身份证","description":"身份证"},{"value":"2","name":"driving","displayName":"驾照","description":"驾照"},{"value":"4","name":"office","displayName":"军官证","description":"军官证"},{"value":"8","name":"business","displayName":"营业执照","description":"营业执照"},{"value":"16","name":"household","displayName":"户口本","description":"户口本"},{"value":"32","name":"marriage","displayName":"婚姻证明","description":"婚姻证明"},{"value":"64","name":"passport","displayName":"护照","description":"护照"},{"value":"128","name":"other","displayName":"港澳台及其他身份证明","description":"港澳台及其他身份证明"}]},{"name":"EnumCooperationType","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCooperationType","displayName":"合作类型","description":"合作类型","items": [{"value":"1","name":"acquirer","displayName":"收款合作","description":"收款合作"},{"value":"2","name":"surrender","displayName":"交单合作","description":"交单合作"},{"value":"4","name":"capitalChannel","displayName":"资金渠道","description":"资金渠道"},{"value":"8","name":"promotionOfCooperative","displayName":"推广合作","description":"推广合作"},{"value":"16","name":"other","displayName":"其他","description":"其他"}]},{"name":"EnumCreditOverdue","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumCreditOverdue","displayName":"征信逾期","description":"征信逾期天数","items": [{"value":"1","name":"none","displayName":"无","description":"无逾期"},{"value":"2","name":"d30","displayName":"30天内","description":"30天内"},{"value":"4","name":"d30T60","displayName":"30-60天","description":"30-60天"},{"value":"8","name":"d60T90","displayName":"60-90天","description":"60-90天"},{"value":"16","name":"d90T120","displayName":"90-120天","description":"90-120天"},{"value":"32","name":"d120P","displayName":"120天以上","description":"120天以上"}]},{"name":"EnumBusinessEntityNature","fullName":"App\\Http\\Modules\\UMComponent\\GeneratedCodes\\Enum\\EnumBusinessEntityNature","displayName":"工作单位类别","description":"工作单位类别","items": [{"value":"64","name":"classG","displayName":"投资公司","description":"投资公司"},{"value":"128","name":"classH","displayName":"二手车交易","description":"二手车交易"},{"value":"256","name":"classI","displayName":"其他","description":"其他"}]}]';
	}
}

