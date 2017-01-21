<?php
namespace Chunhei2008\YunPian\Core;

use Chunhei2008\YunPian\Foundation\Api;
use Chunhei2008\YunPian\Foundation\Support\YunPianException;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

/**
 * Sms.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:43
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class Sms
{
    const SMS_MOBILE_LIMIT = 1000;

    use HttpTrait;

    public function __construct()
    {
    }

    public function singleSend($mobile, $text, $options = [])
    {

        $http = $this->getHttp();

    }

    /*
    参数名	类型	是否必传	是否默认开放	描述	示例
    apikey	String	是	是	用户唯一标识，在管理控制台获取	9b11127a9701975c734b8aee81ee3526
    mobile	String	是	是	接收的手机号；发送多个手机号请以逗号分隔，一次不要超过1000个；	单号码：15205201314
    多号码：15205201314,15205201315
    text	String	是	是	短信内容	您的订单已经发货，请注意查收
    extend	String	否	否	下发号码扩展号，纯数字	001
    uid	String	否	否	该条短信在您业务系统内的ID，如订单号或者短信发送记录流水号	10001
    callback_url	String	否	是	短信发送后将向这个地址推送(运营商返回的)发送报告。
    如推送地址固定，建议在"数据推送与获取”做批量设置。
    如后台已设置地址，且请求内也包含此参数，将以请求内地址为准

    */
    public function batchSend($mobile, $text, $options = [])
    {
        $mobile = $this->mobile($mobile);

    }
    /*
    apikey	String	是	是	用户唯一标识，在管理控制台获取	9b11127a9701975c734b8aee81ee3526
    mobile	String	是	是	接收的手机号；发送多个手机号请以逗号分隔，一次不要超过1000个；	单号码：15205201314
    多号码：15205201314,15205201315
    text	String	是	是	短信内容，多个短信内容请使用UTF-8做urlencode；使用逗号分隔，一次不要超过1000条且短信内容条数必须与手机号个数相等	UrlEncode("【签名】#username#您好，您的订单已经发货，请注意查收", "UTF-8") + "," + UrlEncode("【签名】#username#您好，您的订单已经发货，请注意查收", "UTF-8")
    extend	String	否	否	下发号码扩展号	001
    uid	String	否	否	该条短信在您业务系统内的ID，如订单号或者短信发送记录流水号	10001
    callback_url	String	否	是	短信发送后将向这个地址推送(运营商返回的)发送报告。
    如推送地址固定，建议在"数据推送与获取”做批量设置。
    如后台已设置地址，且请求内也包含此参数，将以请求内地址为准	http://yourreceiveurl_address

    */

    /**
     * @param       $mobile
     * @param       $text
     * @param array $options
     */
    public function multiSend($mobile, $text, $options = [])
    {
        $mobile = $this->mobile($mobile);

    }
    /*
参数名    类型    是否必须    描述    示例
apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
page_size    Integer    否    每页个数，最大100个，默认20个    20
    */

    /**
     * @param int $pageSize
     */
    public function pullStatus($pageSize = 20)
    {

    }

    /**
     * @param int $pageSize
     */
    public function pullReply($pageSize = 20)
    {

    }

    /**
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * mobile    String    否    需要查询的手机号    15205201314
     * start_time    String    是    短信发送开始时间    2013-08-11 00:00:00
     * end_time    String    是    短信发送结束时间    2013-08-12 00:00:00
     * page_num    Integer    否    页码，默认值为1    1
     * page_size    Integer    否    每页个数，最大100个    20
     */


    /**
     * @param       $startTime
     * @param       $endTime
     * @param array $options
     */

    public function getRecord($startTime, $endTime, $options = [])
    {

    }

    /**
     * @param $text
     */

    public function getBlackWord($text)
    {

    }

    /**
     * @param $mobile
     *
     * @return string
     * @throws YunPianException
     */
    protected function mobile($mobile)
    {
        if (is_string($mobile)) {
            $mobile = trim($mobile, ',');
            $mobile = explode(',', $mobile);
        }

        if (count($mobile) > self::SMS_MOBILE_LIMIT) {
            throw new YunPianException('批量发送手机数量不能超过' . self::SMS_MOBILE_LIMIT);
        }
        return implode(',', $mobile);
    }
}