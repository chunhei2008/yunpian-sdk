<?php
/**
 * Voice.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:33
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class Voice extends Base
{

    use HttpTrait;

    /**
     * 发送接口
     *
     * URL：https://voice.yunpian.com/v2/voice/send.json
     * 功能说明：通过电话直呼到用户手机并语音播放验证码，默认最多播放2次。如：您的验证码是1234。 系统已提供的默认模板添加签名后可以直接使用。
     * 特别说明：验证码短信，请在手机验证环节，加入 图片验证码， 以免被 恶意攻击。 了解详情
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * mobile    String    是    接收的手机号、固话（需加区号）    15205201314
     * 01088880000
     * code    String    是    验证码，支持4~6位阿拉伯数字    1234
     * callback_url    String    否    本条语音验证码状态报告推送地址    http://your_receive_url_address
     * display_num    String    否    透传号码，为保证全国范围的呼通率，云片会自动选择最佳的线路，透传的主叫号码也会相应变化。
     * 如需透传固定号码则需要单独注册报备，为了确保号码真实有效，客服将要求您使用报备的号码拨打一次客服电话
     * 注：该接口加密时，需对手机号和验证码同时加密。
     * 部分返回参数说明：
     * 返回参数名    类型    描述
     * count    Integer    成功发送的语音呼叫次数
     * fee    Integer    扣费金额，一次语音验证码呼叫扣一条短信
     * sid    String    记录id，32位的唯一字符串
     * 调用成功的返回值示例：
     * {
     * "count": 1,   //成功发送的语音呼叫次数
     * "fee": 1,     //扣费金额，一次语音验证码呼叫扣一条短信
     * "sid": "931ee0bac7494aab8a422fff5c6be3ea"   //记录id，32位的唯一字符串
     * }
     * 防骚扰过滤：默认开启。过滤规则：同1个手机发相同内容，30秒内最多发送1次，5分钟内最多发送3次。
     */


    public function send($mobile, $code, $options = [])
    {

    }

    /**
     * URL：https://voice.yunpian.com/v2/voice/pull_status.json
     * 功能说明：开通此接口功能后，我们将为您独立再保存一份新生产的状态报告数据，保存时间为72小时。
     * 您可以通过此接口获取新产生的状态报告。注意，已成功获取的数据将会删除，请妥善处理接口返回的数据。
     * 备注：该接口为高级接口，默认不开放，如有需要请在后台 数据推送与获取页面 设置开启。
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * page_size    Integer    否    每页个数，最大100个，默认20个    20
     * 调用成功的返回值示例：
     * [{
     * "sid": "931ee0bac7494aab8a422fff5c6be3ea", //语音记录id，32位的唯一字符串
     * "uid": null, //用户自定义id
     * "user_receive_time": "2015-07-01 14:29:12", //用户接收时间
     * "duration": 10, //通话时长
     * "error_msg": null, //接收失败的原因，如："用户未应答"
     * "mobile": "15205201314", //接收手机号
     * "report_status": "SUCCESS" //接收状态有:SUCCESS/FAIL
     * },
     * {
     * "sid": "821ee0bac7494aab8a422fff5c6be3ea",//语音记录id，32位的唯一字符串
     * "uid": null,//用户自定义id
     * "user_receive_time": "2015-07-01 14:30:09",//用户接收时间
     * "duration": 0,//通话时长
     * "error_msg": "用户未应答",//接收失败的原因，如："用户未应答"
     * "mobile": "15205201315",//接收手机号
     * "report_status": "FAIL"//接收状态有:SUCCESS/FAIL
     * }]
     */

    public function pullStatus($pageSize = 20)
    {

    }

}