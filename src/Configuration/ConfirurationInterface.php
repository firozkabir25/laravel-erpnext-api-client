<?php

namespace Firoz\LaravelErpnextApiClient\Configuration;

/**
 * Interface ConfigurationInterface
 *
 * @package Firoz\LaravelErpnextApiClient\Configuration
 */
interface ConfigurationInterface
{
    /**
     * @return string
     */
    public function getDomain(): string;

    /**
     * @return string
     */
    public function getUser(): string;

    /**
     * @return string
     */
    public function getPassword(): string;
}