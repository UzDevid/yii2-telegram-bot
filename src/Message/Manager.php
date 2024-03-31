<?php

namespace UzDevid\Telegram\Bot\Message;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Client\ClientInterface;
use UzDevid\Telegram\Bot\Bot;
use UzDevid\Telegram\Bot\Core\Credentials;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use yii\base\BaseObject;
use yii\helpers\Json;

/**
 * Class Message
 *
 * @package UzDevid\Telegram\Bot
 *
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

        if (!is_null($this->username)) {
            $params['chat_id'] = $this->username;
        } elseif (!is_null($this->chatId)) {
            $params['chat_id'] = $this->chatId;
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