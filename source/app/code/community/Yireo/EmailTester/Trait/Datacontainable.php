<?php
/**
 * Yireo EmailTester for Magento
 *
 * @package     Yireo_EmailTester
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

/**
 * EmailTester data trait
 */
trait Yireo_EmailTester_Trait_Datacontainable
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @return mixed
     */
    public function getData($name = null)
    {
        if (empty($name)) {
            return $this->data;
        }
        
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function setData($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function isDataEmpty($name)
    {
        if (empty($this->data[$name])) {
            return true;
        }

        return false;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function isDataLowerThanOne($name)
    {
        if (!isset($this->data[$name])) {
            return true;
        }

        if ($this->data[$name] < 1) {
            return true;
        }

        return false;
    }
}