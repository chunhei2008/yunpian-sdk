<?php
namespace Chunhei2008\YunPian\Core;
use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

/**
 * Sign.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 11:47
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class Sign extends Base
{
    use HttpTrait;

    /**
     * URL：https://sms.yunpian.com/v2/sign/add.json
    访问方式：POST
    参数：
    参数名	类型	是否必须	描述	示例
    apikey	String	是	用户唯一标识	9b11127a9701975c734b8aee81ee3526
    sign	String	是	签名内容	云片网
    notify	Boolean	否	是否短信通知结果，默认true	true
    applyVip	Boolean	否	是否申请专用通道，默认false	false
    isOnlyGlobal	Boolean	否	是否仅发国际短信，默认false	false
    industryType	String	否
     */

    public function add($sign,$options = []){

    }

    /**
     * 接口说明
    URL：https://sms.yunpian.com/v2/sign/get.json
    访问方式：POST
    参数：
    参数名	类型	是否必须	描述	示例
    apikey	String	是	用户唯一标识	9b11127a9701975c734b8aee81ee3526
    id	Long	否	签名id，暂未开放（API文档里先不写），如果传入此参数将会指定获取某个签名	1
    sign	String	否	返回所有包含该内容的签名（模糊匹配），若要获取指定签名可加上符号，如【云片网】	云片
    pageNo	Integer	否	页码，1开始，不带或者格式错误返回全部	1
    pageSize	Integer	否	返回条数，必须大于0，不带或者格式错误返回全部	20
     */

    public function get($options = []){

    }

    /**
     * 接口说明
    URL：https://sms.yunpian.com/v2/sign/update.json
    访问方式：POST
    参数：
    table> 参数名 类型 是否必须 描述 示例 apikey String 是 用户唯一标识 9b11127a9701975c734b8aee81ee3526 id Long 否 签名id，暂未开放（API文档里先不写），可指定某个签名，传入此参数后不用传oldSign，如果传了oldSign两者不匹配会返回错误 云片网 oldSign String 是 完整签名内容，用于指定修改哪个签名，可以加【】也可不加 云片网 sign String 否 修改后签名内容，不带【】，无此参数表示不修改 云片网络 notify Boolean 否 是否短信通知结果，无此参数默认true true applyVip Boolean 否 是否申请专用通道，无此参数默认false false isOnlyGlobal Boolean 否 是否仅发国际短信，无此参数默认false false industryType String 否 所属行业，无此参数不修改 生产/加工/制造
    参数说明:参考“添加签名”
    调用成功的返回值示例：
     */

    public function update(){

    }

}