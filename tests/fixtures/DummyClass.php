<?php

namespace kuiper\docReader\fixtures;

/**
 * A description of this class.
 *
 * Let's see if the parser recognizes that this @ is not really referring to an
 * annotation. Also make sure that @var \ is not concated to "@var\is".
 *
 * @author robo
 *
 * @since 2.0
 */
class DummyClass
{
    /**
     * A nice property.
     *
     * @var mixed
     */
    private $field1;

    private $field2;

    /**
     * Gets the value of field1.
     *
     * @return mixed
     */
    public function getField1()
    {
    }
}
