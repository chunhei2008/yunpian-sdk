<?php
/**
 * Flow.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:33
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class Flow extends Base
{
    use HttpTrait;

    /**
     * 查询流量包
     *
     * URL：https://flow.yunpian.com/v2/flow/get_package.json
     * 功能说明：向指定的手机号查询对应的流量包
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * carrier    String    否    运营商ID
     * 传入该参数则获取指定运营商的流量包，
     * 否则获取所有运营商的流量包    移动：10086
     * 联通：10010
     * 电信：10000
     */

    public function getPackage($carrier = null)
    {

    }

    /**
     * 充值流量
     *
     * URL：https://flow.yunpian.com/v2/flow/recharge.json
     * 功能说明：向指定的手机号充值对应的流量包
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * mobile    String    是    接收的手机号（仅支持大陆号码）    15205201314
     * sn    String    是    流量包的唯一ID 点击查看    1008601
     * callback_url    String    否    本条流量充值的状态报告推送地址    http://your_receive_url_address
     * 注：该接口加密时，仅需对手机号加密。
     * 调用成功的返回值示例：
     * {
     * "count": 1,//成功提交充值请求的数量
     * "fee": 2.85,//扣费金额
     * "sid": "a1cdcd5a6eac4a6da42e2d4394c76003"//记录id，32位的唯一字符串
     * }
     * 防刷过滤：默认开启。过滤规则：同1个手机充值相同内容，30秒内最多充值1次，5分钟内最多充值3次。
     */

    public function recharge($mobile, $sn, $callback = null)
    {

    }

    /**
     * 获取状态报告
     *
     * URL：https://flow.yunpian.com/v2/flow/pull_status.json
     * 功能说明：开通此接口功能后，我们将为您独立再保存一份新生产的状态报告数据，保存时间为72小时。
     * 您可以通过此接口获取新产生的状态报告。注意，已成功获取的数据将会删除，请妥善处理接口返回的数据。
     * 备注：该接口为高级接口，默认不开放，如有需要请向客服申请开通。
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * page_size    Integer    否    每页个数，最大100个，默认20个    20
     */
    public function pullStatus($pageSize)
    {

    }
}