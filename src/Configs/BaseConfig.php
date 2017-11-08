<?php
namespace Payment\Gateways\Configs;

abstract class BaseConfig
{
    protected $configs = [];

    public function toArray()
    {
        return is_array($this->configs) ? $this->configs : [];
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->configs[$key] = $value;

        return $this;
    }

    public function buildFromArray($configs)
    {
        $this->configs = $configs;
    }
}