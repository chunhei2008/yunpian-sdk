<?php
/**
 * User.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:38
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class User extends Base
{

    use HttpTrait;

    public function get()
    {

    }

    /**
     * URL：https://sms.yunpian.com/v2/user/set.json
     * 访问方式：POST
     * 参数：
     * 参数名    类型    是否必须    描述    示例
     * apikey    String    是    用户唯一标识    9b11127a9701975c734b8aee81ee3526
     * emergency_contact    String    否    紧急联系人    zhangshan
     * emergency_mobile    String    否    紧急联系人手机号    13012345678
     * alarm_balance    Long    否    短信余额提醒阈值。
     * 一天只提示一次    100
     * 修改时，可一次修改emergency_contact、emergency_mobile和alarm_balance中的一个或多个(必须传入一个),调用成功的返回值示例：
     * {
     * "nick": "zhangsan",
     * "gmt_created": "2012-09-11 15:14:00",
     * "mobile": "13812341234",
     * "email": "zhangsan@company.com",
     * "ip_whitelist": null,                 //IP白名单，推荐使用
     * "api_version": "v1",                  //api版本号
     * "balance": 1000,                      //账户剩余条数或者剩余金额（根据账户类型）
     * "alarm_balance": 100,                 //剩余条数或剩余金额低于该值时提醒
     * "emergency_contact": "张三",           //紧急联系人
     * "emergency_mobile": "13812341234"     //紧急联系人电话
     * }
     */

    /**
     * @param array $options
     */

    public function set($options = [])
    {

    }


}