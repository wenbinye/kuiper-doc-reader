<?php

namespace kuiper\docReader;

use kuiper\reflection\exception\ClassNotFoundException;
use kuiper\reflection\ReflectionTypeInterface;

interface DocReaderInterface
{
    /**
     * Parse the docblock of the property to get the class of the var annotation.
     *
     * @param \ReflectionProperty $property
     *
     * @return ReflectionTypeInterface
     *
     * @throws ClassNotFoundException
     */
    public function getPropertyType(\ReflectionProperty $property);

    /**
     * Parse the docblock of the property to get the class of the var annotation.
     *
     * @param \ReflectionProperty $property
     *
     * @return string|null
     *
     * @throws ClassNotFoundException
     */
    public function getPropertyClass(\ReflectionProperty $property);

    /**
     * Parses the docblock of the method to get all parameters type.
     *
     * @param \ReflectionMethod $method
     *
     * @return ReflectionTypeInterface[] the key of array is parameter name
     *
     * @throws ClassNotFoundException
     */
    public function getParameterTypes(\ReflectionMethod $method);

    /**
     * Parses the docblock of the method to get all class type of parameters.
     *
     * @param \ReflectionMethod $method
     *
     * @return string[] the key of array is parameter name
     *
     * @throws ClassNotFoundException
     */
    public function getParameterClasses(\ReflectionMethod $method);

    /**
     * Parses the docblock of the method to get return type.
     *
     * @param \ReflectionMethod $method
     *
     * @return ReflectionTypeInterface
     *
     * @throws ClassNotFoundException
     */
    public function getReturnType(\ReflectionMethod $method);

    /**
     * Parses the docblock of the method to get return class type.
     *
     * @param \ReflectionMethod $method
     *
     * @return string|null
     *
     * @throws ClassNotFoundException
     */
    public function getReturnClass(\ReflectionMethod $method);
}
