<?php
/**
 * AuthorizationApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * skriptfabrik API
 *
 * This is the specification for the skriptfabrik API.
 *
 * The version of the OpenAPI document: 1.1.1+134fc7b
 * Contact: info@skriptfabrik.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Skriptfabrik\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Skriptfabrik\ApiClient\ApiException;
use Skriptfabrik\ApiClient\Configuration;
use Skriptfabrik\ApiClient\HeaderSelector;
use Skriptfabrik\ApiClient\ObjectSerializer;

/**
 * AuthorizationApi Class Doc Comment
 *
 * @category Class
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthorizationApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createAccessToken
     *
     * Create Access Token
     *
     * @param  \Skriptfabrik\ApiClient\Model\CreateAccessTokenRequest $create_access_token_request Create Access Token Request (optional)
     *
     * @throws \Skriptfabrik\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse|\Skriptfabrik\ApiClient\Model\CreateAccessTokenErrorResponse|\Skriptfabrik\ApiClient\Model\JsonApiError
     */
    public function createAccessToken($create_access_token_request = null)
    {
        list($response) = $this->createAccessTokenWithHttpInfo($create_access_token_request);
        return $response;
    }

    /**
     * Operation createAccessTokenWithHttpInfo
     *
     * Create Access Token
     *
     * @param  \Skriptfabrik\ApiClient\Model\CreateAccessTokenRequest $create_access_token_request Create Access Token Request (optional)
     *
     * @throws \Skriptfabrik\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse|\Skriptfabrik\ApiClient\Model\CreateAccessTokenErrorResponse|\Skriptfabrik\ApiClient\Model\JsonApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAccessTokenWithHttpInfo($create_access_token_request = null)
    {
        $request = $this->createAccessTokenRequest($create_access_token_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
            
                case 200:
                    if ('\Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 400:
                    if ('\Skriptfabrik\ApiClient\Model\CreateAccessTokenErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\CreateAccessTokenErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\CreateAccessTokenErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 401:
                    if ('\Skriptfabrik\ApiClient\Model\JsonApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JsonApiError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JsonApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            }

            $returnType = '\Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\CreateAccessTokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JsonApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            }
            throw $e;
        }
    }

    /**
     * Operation createAccessTokenAsync
     *
     * Create Access Token
     *
     * @param  \Skriptfabrik\ApiClient\Model\CreateAccessTokenRequest $create_access_token_request Create Access Token Request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAccessTokenAsync($create_access_token_request = null)
    {
        return $this->createAccessTokenAsyncWithHttpInfo($create_access_token_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAccessTokenAsyncWithHttpInfo
     *
     * Create Access Token
     *
     * @param  \Skriptfabrik\ApiClient\Model\CreateAccessTokenRequest $create_access_token_request Create Access Token Request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAccessTokenAsyncWithHttpInfo($create_access_token_request = null)
    {
        $returnType = '\Skriptfabrik\ApiClient\Model\CreateAccessTokenResponse';
        $request = $this->createAccessTokenRequest($create_access_token_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createAccessToken'
     *
     * @param  \Skriptfabrik\ApiClient\Model\CreateAccessTokenRequest $create_access_token_request Create Access Token Request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createAccessTokenRequest($create_access_token_request = null)
    {


        $resourcePath = '/api/access_token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($create_access_token_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_access_token_request));
            } else {
                $httpBody = $create_access_token_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
