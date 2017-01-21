<?php
/**
 * Tpl.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:33
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class Tpl extends Base
{

    use HttpTrait;
    /**
     * 模板接口    添加模板    https://sms.yunpian.com/v2/tpl/add.json	通过接口添加模板
     * 取模板    https://sms.yunpian.com/v2/tpl/get.json	获取账户内的全部模板
     * 修改模板    https://sms.yunpian.com/v2/tpl/update.json	修改指定模板
     * 删除模板    https://sms.yunpian.com/v2/tpl/del.json	删除指定模板
     */


    /**
     * tpl_content    String    是    模板内容，必须以带符号【】的签名开头    【云片网】您的验证码是#code#
     * notify_type    Integer    否    审核结果短信通知的方式:
     * 0表示需要通知,默认;
     * 1表示仅审核不通过时通知;
     * 2表示仅审核通过时通知;
     * 3表示不需要通知    1
     * 调用成功的返回值示例(国内短信模板)：
     * {
     * "tpl_id": 1,                 //模板id
     * "tpl_content": "【云片网】您的验证码是#code#", //模板内容
     * "check_status": "CHECKING",     //审核状态：CHECKING/SUCCESS/FAIL
     * "reason": null                  //审核未通过的原因
     * }
     */

    /**
     * @param     $tplContent
     * @param int $notifyType
     */
    public function add($tplContent, $notifyType = 0)
    {


    }

    public function get($tplId = null)
    {

    }

    /**
     * 修改模版
     * 接口说明
     * URL：https://sms.yunpian.com/v2/tpl/update.json
     * 注意：模板成功修改之后需要重新审核才能使用！同时提醒您如果修改了变量，请重新务必测试，以免替换出错！
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * tpl_id    Long    是    模板id，64位长整形，指定id时返回id对应的模板。未指定时返回所有模板    9527
     * tpl_content    String    是    模板id，64位长整形。指定id时返回id对应的模板。未指定时返回所有模板模板内容，必须以带符号【】的签名开头
     */

    public function update($tplId, $tplContent)
    {

    }

    /**
     * 接口说明
     * URL：https://sms.yunpian.com/v2/tpl/del.json
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * tpl_id    Long    是    模板id，64位长整形。指定id时返回id对应的模板。未指定时返回所有模板    9527
     * 调用成功的返回值示例：
     * {
     * "tpl_id": 9527,                 //模板id
     * "tpl_content": "【云片网】您的验证码是#code#", //模板内容
     * "check_status": "CHECKING",     //审核状态：CHECKING/SUCCESS/FAIL
     * "reason": null                  //审核未通过的原因
     * }
     */

    public function del($tplId)
    {

    }

}