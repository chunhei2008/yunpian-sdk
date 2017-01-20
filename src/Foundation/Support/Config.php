<?php
/**
 * Config.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:27
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Foundation\Support;

use ArrayAccess;

class Config implements ArrayAccess
{
    /**
     * config
     * @var array
     */
    protected $config = [];

    /**
     * Config constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->config[$offset]) ? true : false;
    }

    /**
     * @param mixed $offset
     *
     * @return null
     */
    public function offsetGet($offset)
    {
        return $this->config[$offset] ?: null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->config[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->config[$offset]);
    }

    /**
     * @param $offset
     * @param $default
     *
     * @return mixed
     */
    public function get($offset, $default = null)
    {
        $offset  = trim($offset, '.');
        $offsets = implode('.', $offset);
        $config  = $this->config;
        foreach ($offsets as $offset) {
            if (!isset($config[$offset])) {
                return $default;
            }
            $config = $config[$offset];
        }

        return $config;
    }

}