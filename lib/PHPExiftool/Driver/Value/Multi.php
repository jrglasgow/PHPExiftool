<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Value;

class Multi implements Value
{

    protected $value = array();

    public function __construct($value = null)
    {
        if ($value)
        {
            $this->addValue($value);
        }
    }

    public function getType()
    {
        return self::TYPE_MULTI;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function addValue($value)
    {
        $this->value = array_merge($this->value, (array) $value);

        return $this;
    }

    public function reset()
    {
        $this->value = array();

        return $this;
    }

    public function serialize($separator = ' ; ')
    {
        return implode($separator, $this->value);
    }

    public function __toString()
    {
        return $this->serialize();
    }

}