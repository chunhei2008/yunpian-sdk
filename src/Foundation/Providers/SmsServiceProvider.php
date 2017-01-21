<?php
namespace Chunhei2008\YunPian\Foundation\Providers;

use Chunhei2008\YunPian\Core\Sms;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * SmsServiceProvider.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:41
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class SmsServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['sms'] = function ($pimple) {
            return new Sms($pimple['config']);
        };
    }
}