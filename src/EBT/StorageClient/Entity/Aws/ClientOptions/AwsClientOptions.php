<?php

/**
 * This file is a part of the Storage Client library.
 *
 * (c) 2015 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\StorageClient\Entity\Aws\ClientOptions;

use EBT\StorageClient\Entity\Aws\AwsObject;

abstract class AwsClientOptions extends AwsObject
{
    /**
     * Available client options.
     */
    const OPTION_API_PROVIDER       = 'api_provider';
    const OPTION_CREDENTIALS        = 'credentials';
    const OPTION_DEBUG              = 'debug';
    const OPTION_ENDPOINT           = 'endpoint';
    const OPTION_ENDPOINT_PROVIDER  = 'endpoint_provider';
    const OPTION_HANDLER            = 'handler';
    const OPTION_HTTP               = 'http';
    const OPTION_HTTP_HANDLER       = 'http_handler';
    const OPTION_PROFILE            = 'profile';
    const OPTION_REGION             = 'region';
    const OPTION_RETRIES            = 'retries';
    const OPTION_SCHEME             = 'scheme';
    const OPTION_SIGNATURE_PROVIDER = 'signature_provider';
    const OPTION_SIGNATURE_VERSION  = 'signature_version';
    const OPTION_VALIDATE           = 'validate';
    const OPTION_VERSION            = 'version';
    const OPTION_KEY                = 'key';
    const OPTION_SECRET             = 'secret';
    const OPTION_TOKEN              = 'token';

    /**
     * Constructor.
     *
     * @param array $values Initial values.
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);
    }

    /**
     * Retrieves the "api_provider" variable.
     *
     * @return static|mixed|null
     */
    public function getApiProvider()
    {
        return $this->get(self::OPTION_API_PROVIDER);
    }

    /**
     * Sets the "api_provider" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setApiProvider($value)
    {
        $this->set(self::OPTION_API_PROVIDER, $value);

        return $this;
    }

    /**
     * Retrieves the "credentials" variable.
     *
     * @return static|mixed|null
     */
    public function getCredentials()
    {
        return $this->get(self::OPTION_CREDENTIALS);
    }

    /**
     * Sets the "credentials" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setCredentials($value)
    {
        $this->set(self::OPTION_CREDENTIALS, $value);

        return $this;
    }

    /**
     * Retrieves the "debug" variable.
     *
     * @return static|mixed|null
     */
    public function getDebug()
    {
        return $this->get(self::OPTION_DEBUG);
    }

    /**
     * Sets the "debug" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setDebug($value)
    {
        $this->set(self::OPTION_DEBUG, $value);

        return $this;
    }

    /**
     * Retrieves the "endpoint" variable.
     *
     * @return static|mixed|null
     */
    public function getEndpoint()
    {
        return $this->get(self::OPTION_ENDPOINT);
    }

    /**
     * Sets the "endpoint" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setEndpoint($value)
    {
        $this->set(self::OPTION_ENDPOINT, $value);

        return $this;
    }

    /**
     * Retrieves the "endpoint_provider" variable.
     *
     * @return static|mixed|null
     */
    public function getEndpointProvider()
    {
        return $this->get(self::OPTION_ENDPOINT_PROVIDER);
    }

    /**
     * Sets the "endpoint_provider" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setEndpointProvider($value)
    {
        $this->set(self::OPTION_ENDPOINT_PROVIDER, $value);

        return $this;
    }

    /**
     * Retrieves the "handler" variable.
     *
     * @return static|mixed|null
     */
    public function getHandler()
    {
        return $this->get(self::OPTION_HANDLER);
    }

    /**
     * Sets the "handler" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setHandler($value)
    {
        $this->set(self::OPTION_HANDLER, $value);

        return $this;
    }

    /**
     * Retrieves the "http" variable.
     *
     * @return static|mixed|null
     */
    public function getHttp()
    {
        return $this->get(self::OPTION_HTTP);
    }

    /**
     * Sets the "http" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setHttp($value)
    {
        $this->set(self::OPTION_HTTP, $value);

        return $this;
    }

    /**
     * Retrieves the "http_handler" variable.
     *
     * @return static|mixed|null
     */
    public function getHttpHandler()
    {
        return $this->get(self::OPTION_HTTP_HANDLER);
    }

    /**
     * Sets the "http_handler" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setHttpHandler($value)
    {
        $this->set(self::OPTION_HTTP_HANDLER, $value);

        return $this;
    }

    /**
     * Retrieves the "profile" variable.
     *
     * @return static|mixed|null
     */
    public function getProfile()
    {
        return $this->get(self::OPTION_PROFILE);
    }

    /**
     * Sets the "profile" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setProfile($value)
    {
        $this->set(self::OPTION_PROFILE, $value);

        return $this;
    }

    /**
     * Retrieves the "region" variable.
     *
     * @return static|mixed|null
     */
    public function getRegion()
    {
        return $this->get(self::OPTION_REGION);
    }

    /**
     * Sets the "region" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setRegion($value)
    {
        $this->set(self::OPTION_REGION, $value);

        return $this;
    }

    /**
     * Retrieves the "retries" variable.
     *
     * @return static|mixed|null
     */
    public function getRetries()
    {
        return $this->get(self::OPTION_RETRIES);
    }

    /**
     * Sets the "retries" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setRetries($value)
    {
        $this->set(self::OPTION_RETRIES, $value);

        return $this;
    }

    /**
     * Retrieves the "scheme" variable.
     *
     * @return static|mixed|null
     */
    public function getScheme()
    {
        return $this->get(self::OPTION_SCHEME);
    }

    /**
     * Sets the "scheme" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setScheme($value)
    {
        $this->set(self::OPTION_SCHEME, $value);

        return $this;
    }

    /**
     * Retrieves the "signature_provider" variable.
     *
     * @return static|mixed|null
     */
    public function getSignatureProvider()
    {
        return $this->get(self::OPTION_SIGNATURE_PROVIDER);
    }

    /**
     * Sets the "signature_provider" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setSignatureProvider($value)
    {
        $this->set(self::OPTION_SIGNATURE_PROVIDER, $value);

        return $this;
    }

    /**
     * Retrieves the "signature_version" variable.
     *
     * @return static|mixed|null
     */
    public function getSignatureVersion()
    {
        return $this->get(self::OPTION_SIGNATURE_VERSION);
    }

    /**
     * Sets the "signature_version" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setSignatureVersion($value)
    {
        $this->set(self::OPTION_SIGNATURE_VERSION, $value);

        return $this;
    }

    /**
     * Retrieves the "validate" variable.
     *
     * @return static|mixed|null
     */
    public function getValidate()
    {
        return $this->get(self::OPTION_VALIDATE);
    }

    /**
     * Sets the "validate" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setValidate($value)
    {
        $this->set(self::OPTION_VALIDATE, $value);

        return $this;
    }

    /**
     * Retrieves the "version" variable.
     *
     * @return static|mixed|null
     */
    public function getVersion()
    {
        return $this->get(self::OPTION_VERSION);
    }

    /**
     * Sets the "version" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setVersion($value)
    {
        $this->set(self::OPTION_VERSION, $value);

        return $this;
    }

    /**
     * Retrieves the "key" variable.
     *
     * @return static|mixed|null
     */
    public function getKey()
    {
        return $this->get(self::OPTION_KEY);
    }

    /**
     * Sets the "key" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setKey($value)
    {
        $this->set(self::OPTION_KEY, $value);

        return $this;
    }

    /**
     * Retrieves the "secret" variable.
     *
     * @return static|mixed|null
     */
    public function getSecret()
    {
        return $this->get(self::OPTION_SECRET);
    }

    /**
     * Sets the "secret" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setSecret($value)
    {
        $this->set(self::OPTION_SECRET, $value);

        return $this;
    }

    /**
     * Retrieves the "token" variable.
     *
     * @return static|mixed|null
     */
    public function getToken()
    {
        return $this->get(self::OPTION_TOKEN);
    }

    /**
     * Sets the "token" variable value.
     *
     * @param mixed $value Value to set.
     *
     * @return static
     */
    public function setToken($value)
    {
        $this->set(self::OPTION_TOKEN, $value);

        return $this;
    }
}
