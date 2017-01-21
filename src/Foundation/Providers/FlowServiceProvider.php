<?php
namespace Chunhei2008\YunPian\Foundation\Providers;

use Chunhei2008\YunPian\Core\Flow;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * FlowServiceProvider.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:41
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class FlowServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['flow'] = function ($pimple) {
            return new Flow($pimple['config']);
        };
    }
}