<?php

namespace uzdevid\telegram\bot;

use GuzzleHttp\Client;
use yii\base\Component;

/**
 * Class BaseBot
 *
 * @package uzdevid\telegram\bot
 *
 * @property string $token
 * @property int $chatId
 * @property string $username
 * @property Client $httpClient
 */
class BaseBot extends Component {

}