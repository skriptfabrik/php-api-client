<?php
/**
 * OrganizationApi
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
 * The version of the OpenAPI document: 1.0.0+65bfafc
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
 * OrganizationApi Class Doc Comment
 *
 * @category Class
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrganizationApi
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
     * Operation getOrganization
     *
     * Retrieve Organization
     *
     * @param  string $organization_id organization_id (required)
     *
     * @throws \Skriptfabrik\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Skriptfabrik\ApiClient\Model\GetOrganization200Response|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError
     */
    public function getOrganization($organization_id)
    {
        list($response) = $this->getOrganizationWithHttpInfo($organization_id);
        return $response;
    }

    /**
     * Operation getOrganizationWithHttpInfo
     *
     * Retrieve Organization
     *
     * @param  string $organization_id (required)
     *
     * @throws \Skriptfabrik\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Skriptfabrik\ApiClient\Model\GetOrganization200Response|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationWithHttpInfo($organization_id)
    {
        $request = $this->getOrganizationRequest($organization_id);

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
                    if ('\Skriptfabrik\ApiClient\Model\GetOrganization200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\GetOrganization200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\GetOrganization200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 401:
                    if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JSONAPIError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 403:
                    if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JSONAPIError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 404:
                    if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JSONAPIError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            }

            $returnType = '\Skriptfabrik\ApiClient\Model\GetOrganization200Response';
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
                        '\Skriptfabrik\ApiClient\Model\GetOrganization200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JSONAPIError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JSONAPIError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JSONAPIError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            }
            throw $e;
        }
    }

    /**
     * Operation getOrganizationAsync
     *
     * Retrieve Organization
     *
     * @param  string $organization_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationAsync($organization_id)
    {
        return $this->getOrganizationAsyncWithHttpInfo($organization_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationAsyncWithHttpInfo
     *
     * Retrieve Organization
     *
     * @param  string $organization_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationAsyncWithHttpInfo($organization_id)
    {
        $returnType = '\Skriptfabrik\ApiClient\Model\GetOrganization200Response';
        $request = $this->getOrganizationRequest($organization_id);

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
     * Create request for operation 'getOrganization'
     *
     * @param  string $organization_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrganizationRequest($organization_id)
    {

        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling getOrganization'
            );
        }
        if (strlen($organization_id) > 26) {
            throw new \InvalidArgumentException('invalid length for "$organization_id" when calling OrganizationApi.getOrganization, must be smaller than or equal to 26.');
        }
        if (strlen($organization_id) < 26) {
            throw new \InvalidArgumentException('invalid length for "$organization_id" when calling OrganizationApi.getOrganization, must be bigger than or equal to 26.');
        }
        if (!preg_match("/^[0-9A-HJ-KM-NP-TV-Z]{26}$/", $organization_id)) {
            throw new \InvalidArgumentException("invalid value for \"organization_id\" when calling OrganizationApi.getOrganization, must conform to the pattern /^[0-9A-HJ-KM-NP-TV-Z]{26}$/.");
        }


        $resourcePath = '/api/admin/organizations/{organizationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOrganizationCollection
     *
     * Retrieve Organization Collection
     *
     * @param  float $limit The Limit Query Parameter. (optional, default to 10)
     * @param  float $page The Page Query Parameter. (optional, default to 1)
     *
     * @throws \Skriptfabrik\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError
     */
    public function getOrganizationCollection($limit = 10, $page = 1)
    {
        list($response) = $this->getOrganizationCollectionWithHttpInfo($limit, $page);
        return $response;
    }

    /**
     * Operation getOrganizationCollectionWithHttpInfo
     *
     * Retrieve Organization Collection
     *
     * @param  float $limit The Limit Query Parameter. (optional, default to 10)
     * @param  float $page The Page Query Parameter. (optional, default to 1)
     *
     * @throws \Skriptfabrik\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError|\Skriptfabrik\ApiClient\Model\JSONAPIError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationCollectionWithHttpInfo($limit = 10, $page = 1)
    {
        $request = $this->getOrganizationCollectionRequest($limit, $page);

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
                    if ('\Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 401:
                    if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JSONAPIError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 403:
                    if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JSONAPIError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            
                case 404:
                    if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Skriptfabrik\ApiClient\Model\JSONAPIError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Skriptfabrik\ApiClient\Model\JSONAPIError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            
            }

            $returnType = '\Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response';
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
                        '\Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JSONAPIError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JSONAPIError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Skriptfabrik\ApiClient\Model\JSONAPIError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            
            }
            throw $e;
        }
    }

    /**
     * Operation getOrganizationCollectionAsync
     *
     * Retrieve Organization Collection
     *
     * @param  float $limit The Limit Query Parameter. (optional, default to 10)
     * @param  float $page The Page Query Parameter. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationCollectionAsync($limit = 10, $page = 1)
    {
        return $this->getOrganizationCollectionAsyncWithHttpInfo($limit, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganizationCollectionAsyncWithHttpInfo
     *
     * Retrieve Organization Collection
     *
     * @param  float $limit The Limit Query Parameter. (optional, default to 10)
     * @param  float $page The Page Query Parameter. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganizationCollectionAsyncWithHttpInfo($limit = 10, $page = 1)
    {
        $returnType = '\Skriptfabrik\ApiClient\Model\GetOrganizationCollection200Response';
        $request = $this->getOrganizationCollectionRequest($limit, $page);

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
     * Create request for operation 'getOrganizationCollection'
     *
     * @param  float $limit The Limit Query Parameter. (optional, default to 10)
     * @param  float $page The Page Query Parameter. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrganizationCollectionRequest($limit = 10, $page = 1)
    {

        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling OrganizationApi.getOrganizationCollection, must be bigger than or equal to 1.');
        }


        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling OrganizationApi.getOrganizationCollection, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api/admin/organizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
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

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'GET',
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
