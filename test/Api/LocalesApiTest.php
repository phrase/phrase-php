<?php
/**
 * LocalesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Phrase Strings API Reference
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@phrase.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Phrase;

use \Phrase\Configuration as Configuration;
use \Phrase\ApiException;
use \Phrase\ObjectSerializer;

use \Phrase\Api\LocalesApi as Api;

use PHPUnit\Framework\TestCase;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;

/**
 * LocalesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LocalesApiTest extends TestCase
{
    private $apiInstance;
    private $mock;
    private $history = [];

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->mock = new MockHandler();
        $history = Middleware::history($this->history);
        $handlerStack = HandlerStack::create($this->mock);
        $handlerStack->push($history);
        $client = new Client(['handler' => $handlerStack]);

        $config = Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
        $config = Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

        $this->apiInstance = new Api($client, $config);
    }

    /**
     * Test case for accountLocales
     *
     * List locales used in account.
     *
     */
    public function testAccountLocales()
    {
    }

    /**
     * Test case for localeCreate
     *
     * Create a locale.
     *
     */
    public function testLocaleCreate()
    {
    }

    /**
     * Test case for localeDelete
     *
     * Delete a locale.
     *
     */
    public function testLocaleDelete()
    {
    }

    /**
     * Test case for localeDownload
     *
     * Download a locale.
     *
     */
    public function testLocaleDownload()
    {
        $this->mock->append(new Response(200, [], 'foo'));

        $projectId = "project_id_example";
        $id = "locale_id";
        $file_format = "csv";
        $format_options = array(
            "key" => "value",
            "nested" => array(
                "nested_key" => "nested_value"
            )
        );
        $custom_metadata_filters = array('key' => 'value');

        $result = $this->apiInstance-> localeDownload(
            $projectId,
            $id,
            null,
            null,
            null,
            null,
            $file_format,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            $format_options,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            $custom_metadata_filters
        );


        $this->assertNotNull($result);
        $this->assertEquals('foo', $result);

        $lastRequest = $this->history[count($this->history)-1]['request'];
        $this->assertEquals('GET', $lastRequest->getMethod());
        $this->assertEquals('/v2/projects/'.$projectId.'/locales/'.$id.'/download', $lastRequest->getUri()->getPath());
        $this->assertEquals('file_format=csv&format_options%5Bkey%5D=value&format_options%5Bnested%5D%5Bnested_key%5D=nested_value&custom_metadata_filters%5Bkey%5D=value', $lastRequest->getUri()->getQuery());
    }

    /**
     * Test case for localeShow
     *
     * Get a single locale.
     *
     */
    public function testLocaleShow()
    {
    }

    /**
     * Test case for localeUpdate
     *
     * Update a locale.
     *
     */
    public function testLocaleUpdate()
    {
    }

    /**
     * Test case for localesList
     *
     * List locales.
     *
     */
    public function testLocalesList()
    {
        $this->mock->append(new Response(200, [], '[{"id":"locale_id","name":"locale_name","code":"locale_code","default":true,"main":true,"rtl":true,"plural_forms":["plural_forms"]}]'));

        $projectId = "project_id_example";

        $result = $this->apiInstance->localesList($projectId);

        $lastRequest = $this->history[count($this->history)-1]['request'];
        $this->assertNotNull($result);
        $this->assertEquals(1, count($result));
        $this->assertEquals('locale_id', $result[0]['id']);
        $this->assertEquals('locale_name', $result[0]['name']);

        $this->assertEquals('GET', $lastRequest->getMethod());
        $this->assertEquals('/v2/projects/'.$projectId.'/locales', $lastRequest->getUri()->getPath());

    }
}
