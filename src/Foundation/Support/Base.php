<?php
/**
 * Base.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:51
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Foundation\Support;


abstract class Base
{
    /**
     * apikey
     * @var
     */
    protected $apiKey;

    /**
     * get apikey
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey ?: $this->getDefaultApiKey();
    }

    /**
     * set apikey
     *
     * @param $apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * get default apikey
     * @return string
     */
    protected function getDefaultApiKey()
    {
        return '';
    }
}