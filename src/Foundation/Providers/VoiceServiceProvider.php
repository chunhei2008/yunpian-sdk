<?php
namespace Chunhei2008\YunPian\Foundation\Providers;

use Chunhei2008\YunPian\Core\Voice;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * VoiceServiceProvider.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:41
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class VoiceServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['voice'] = function () {
            return new Voice();
        };
    }
}