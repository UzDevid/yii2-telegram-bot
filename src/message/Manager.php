<?php

namespace uzdevid\telegram\bot\message;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Client\ClientInterface;
use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\core\Credentials;
use uzdevid\telegram\bot\message\messages\MethodInterface;
use yii\base\BaseObject;
use yii\helpers\Json;

/**
 * Class Message
 *
 * @package uzdevid\telegram\bot
 *
 * @property int $chatId
 * @property-read string $url
 * @property ClientInterface $httpClient
 * @property-read array $params
 * @property MethodInterface $method
 */
class Manager extends BaseObject implements ManagerInterface {
    use Credentials;

    protected static string $endpoint = 'https://api.telegram.org/bot';

    protected MethodInterface|null $method = null;

    private Bot $botInstance;

    /**
     * @param Bot $botInstance
     * @param array $config
     */
    public function __construct(Bot $botInstance, array $config = []) {
        $this->botInstance = $botInstance;
        parent::__construct($config);
    }

    /**
     * @param MethodInterface $method
     *
     * @return Manager
     */
    public function method(MethodInterface $method): static {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    protected function getUrl(): string {
        return self::$endpoint . $this->botInstance->token . '/' . $this->method->methodName();
    }

    /**
     * @return array
     */
    protected function getParams(): array {
        $params = [];

        if (!is_null($this->botInstance->username)) {
            $params['chat_id'] = $this->botInstance->username;
        } elseif (!is_null($this->chatId)) {
            $params['chat_id'] = $this->botInstance->chatId;
        }

        return $params;
    }

    /**
     * @return ClientInterface
     */
    protected function getHttpClient(): ClientInterface {
        if (!isset($this->botInstance->httpClient)) {
            $this->botInstance->httpClient = new Client();
        }

        return $this->botInstance->httpClient;
    }

    /**
     * @return array|null
     * @throws GuzzleException
     */
    public function sendRequest(): array|null {
        $query = array_merge($this->getParams(), $this->method->getPayload());

        $response = $this->httpClient->get($this->getUrl(), ['query' => $query]);

        return Json::decode($response->getBody()->getContents());
    }
}