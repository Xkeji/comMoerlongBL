<?php
//-------------------------------声明-------------------------------------------
// <auto-generated>
//     此文件是自动生成的文件，对这个文件的任何修改在下次自动生成的时候都会丢失。
//     模板名称：$BE$AllEnumMD.php.tt
//     生成日期：2019-03-19 16:10:43
// </auto-generated>
//------------------------------------------------------------------------------	

namespace comMoerlongBL\message\metadata;

/**
 * BE下所有元数据 
 */
class MessageComponentMDFactory
{
	
	public static function getAllEnumJSON(){
		return '[{"name":"EnumUserStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumUserStatus","displayName":"用户的在线状态","description":"用户的在线状态","items": [{"value":"1","name":"offline","displayName":"不在线","description":"当前用户不在线"},{"value":"2","name":"online","displayName":"在线","description":"当前用户在线"},{"value":"4","name":"leave","displayName":"暂离","description":"当前用户在线，但长时间没有任何操作，可能不在电脑前"}]},{"name":"EnumChatRoomMemberType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumChatRoomMemberType","displayName":"群成员的类型","description":"群成员的类型枚举","items": [{"value":"1","name":"normal","displayName":"普通群成员","description":"普通的群成员"},{"value":"8","name":"manager","displayName":"群的管理人员","description":"群的管理人员"},{"value":"64","name":"owner","displayName":"群主","description":"群主"}]},{"name":"EnumChatRoomMemberStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumChatRoomMemberStatus","displayName":"群成员的状态","description":"群成员的状态枚举","items": [{"value":"1","name":"normal","displayName":"正常","description":"该成员处于正常状态"},{"value":"2","name":"banned","displayName":"禁言","description":"该成员已被禁言"}]},{"name":"EnumChatRoomStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumChatRoomStatus","displayName":"群的状态","description":"群的状态","items": [{"value":"1","name":"normal","displayName":"正常","description":"当前群处于正常状态"},{"value":"2","name":"banned","displayName":"禁言","description":"当前群整体被禁言"}]},{"name":"EnumMessageStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumMessageStatus","displayName":"聊天记录的状态","description":"聊天记录的状态","items": [{"value":"1","name":"unread","displayName":"未读","description":"该聊天记录尚未被接收者阅读"},{"value":"2","name":"read","displayName":"已读","description":"该聊天记录已被接收者阅读"},{"value":"4","name":"cancelled","displayName":"被撤回","description":"该聊天记录已被发送者撤回"}]},{"name":"EnumP2PMessageType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumP2PMessageType","displayName":"点对点消息的类型","description":"点对点（个人与个人）消息的类型","items": [{"value":"1","name":"contact","displayName":"好友","description":"联系人（好友）之间发送的消息"},{"value":"2","name":"chatRoom","displayName":"聊天室","description":"在聊天室里发送的消息"},{"value":"4","name":"stranger","displayName":"陌生人","description":"陌生人之间发送的消息"}]},{"name":"EnumNotificationType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumNotificationType","displayName":"通知的类型","description":"通知的类型","items": [{"value":"1","name":"contactAddingRequest","displayName":"加好友的请求","description":"加好友的请求"},{"value":"2","name":"contactAddingRequestAgreed","displayName":"加好友的请求已通过","description":"加好友的请求已通过"},{"value":"4","name":"online","displayName":"好友上线","description":"好友上线"},{"value":"8","name":"offline","displayName":"好友下线","description":"好友下线"},{"value":"16","name":"chatRoomJoinRequest","displayName":"加群的请求","description":"加群的请求"},{"value":"32","name":"chatRoomJoinRequestAgreed","displayName":"加群的请求已通过","description":"加群的请求已通过"},{"value":"64","name":"chatRoomMemberChanged","displayName":"群成员发生了变动","description":"群成员发生了变动"},{"value":"128","name":"system","displayName":"系统通知","description":"系统通知"},{"value":"256","name":"redirectRequest","displayName":"转线请求","description":"转线请求"},{"value":"512","name":"redirectRequestAgreed","displayName":"转线请求已通过","description":"转线请求已通过"},{"value":"1024","name":"redirectRequestCancelled","displayName":"转线请求被取消","description":"转线请求被取消"}]},{"name":"EnumNotificationStatus","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumNotificationStatus","displayName":"通知的状态","description":"通知的处理状态","items": [{"value":"1","name":"waiting","displayName":"未处理","description":"消息尚未被处理，也即等待处理中"},{"value":"2","name":"approved","displayName":"已同意","description":"消息已被处理，处理结果为同意"},{"value":"4","name":"rejected","displayName":"已拒绝","description":"消息已被处理，处理结果为拒绝"},{"value":"8","name":"read","displayName":"已读","description":"消息已被处理，并且不需要返回处理结果"},{"value":"16","name":"expired","displayName":"已过期","description":"通知已超过处理时限，无法再被处理"},{"value":"32","name":"cancelled","displayName":"已取消","description":"通知被取消。如发起者取消转线请求"}]},{"name":"EnumUserType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumUserType","displayName":"用户的类型","description":"用户的类型","items": [{"value":"1","name":"normal","displayName":"普通用户","description":"普通用户"},{"value":"4","name":"merchant","displayName":"商家","description":"依靠我们平台做生意的商家，如经纪人"},{"value":"16","name":"service","displayName":"客服","description":"客服"},{"value":"64","name":"superuser","displayName":"超级用户","description":"超级用户"}]},{"name":"EnumMessageType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumMessageType","displayName":"消息类型","description":"消息的类型","items": [{"value":"1","name":"chat","displayName":"消息","description":"消息。如个人对个人的消息，群消息"},{"value":"2","name":"notification","displayName":"通知","description":"通知。如加好友的请求，加群的请求等"}]},{"name":"EnumQosType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumQosType","displayName":"MQTT消息质量","description":"MQTT消息质量业界标准定义","items": [{"value":"0","name":"atMostOnce","displayName":"最多一次","description":"最多一次，消息有可能重复或丢失"},{"value":"1","name":"atLeastOnce","displayName":"至少一次","description":"至少一次，消息有可能重复"},{"value":"2","name":"exactlyOnce","displayName":"只有一次","description":"只有一次，确保消息只到达一次"}]},{"name":"EnumContentType","fullName":"App\\Http\\Modules\\MessageComponent\\GeneratedCodes\\Enum\\EnumContentType","displayName":"消息内容的类型","description":"消息内容的类型","items": [{"value":"1","name":"text","displayName":"文本","description":"文本类型的消息"},{"value":"2","name":"image","displayName":"图片","description":"图片类型的消息"},{"value":"4","name":"voice","displayName":"声音","description":"声音类型的消息"},{"value":"8","name":"file","displayName":"文件","description":"文件类型的消息"},{"value":"16","name":"emoji","displayName":"表情","description":"表情"}]}]';
	}
}

