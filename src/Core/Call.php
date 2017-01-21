<?php
/**
 * Call.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:33
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class Call extends Base
{
    use HttpTrait;

    /**
     * 隐私通话接口
     * 通过隐私通话接口，您可以实现隐私通话功能 (A、B两个号码通过中间号通话，保护双方隐私。)
     * 号码绑定
     *
     * URL: https://call.yunpian.com/v2/call/bind.json
     * 功能说明：绑定号码
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * from    String    是    需要绑定的号码    +8615012341234
     * to    String    是    需要绑定的号码    +8615011112222
     * duration    Intger    是    有效时长，单位：秒    600
     * area_code    String    否    区号，期望anonymous_number所属的地区    +8621（021）
     * 注:
     */


    public function bind($from, $to, $duration, $areaCode = null)
    {

    }

    /**
     * 号码解绑
     *
     * URL: https://call.yunpian.com/v2/call/unbind.json
     * 功能说明：解绑号码
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * from    String    是    需要绑定的号码    +8615012341234
     * to    String    是    需要绑定的号码    +8615011112222
     * duration    Intger    否    延迟解绑的时间，单位：秒，默认为0，0表示立即解除绑定    0
     * 注:
     * 1.from、to不存在方向问题，可以任意顺序传入
     * 2.所有号码格式按照E.164格式规范，若传入格式不符合E.164规范则按照大陆号码格式处理成E.164
     * {
     * "code": 0,
     * "msg": "OK"
     * }
     */

    public function unbind($from, $to, $duration)
    {

    }

    /**
     * 话单获取
     *
     * URL: https://call.yunpian.com/v2/call/pull.json
     * 功能说明：话单获取
     * 访问方式：POST
     * 备注：需要联系客服开通
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * page_size    Integer    否    每页个数，最大100个，默认20个    20
     */

    public function pull($pageSize = 20)
    {

    }
}