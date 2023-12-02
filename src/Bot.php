<?php

namespace uzdevid\telegram\bot;

use Psr\Http\Client\ClientInterface;
use uzdevid\telegram\bot\core\Credentials;
use uzdevid\telegram\bot\handler\Handler;
use uzdevid\telegram\bot\message\ManagerInterface;
use uzdevid\telegram\bot\message\managers\Editor;
use uzdevid\telegram\bot\message\managers\Sender;
use Yii;
use yii\base\Component;
use yii\base\InvalidArgumentException;
use yii\base\InvalidConfigException;

/**
 * Class Bot
 *
 * @package uzdevid\telegram\bot
 */
class Bot extends Component {
    use Credentials;

    public ClientInterface $httpClient;

    public string|array $handler = Handler::class;
    public string|array $sender = Sender::class;
    public string|array $editor = Editor::class;

    /**
     * @param array $data
     *
     * @return Handler
     * @throws InvalidConfigException
     */
    public function handler(array $data): Handler {
        return Yii::createObject($this->handler, [$this, $data]);
    }

    /**
     * @param ManagerInterface|string|null $sender
     *
     * @return Sender|ManagerInterface
     * @throws InvalidConfigException
     */
    public function sender(ManagerInterface|string|null $sender = null): Sender|ManagerInterface {
        $senderClass = $sender ?? $this->sender;

        if ($senderClass instanceof ManagerInterface) {
            return $sender;
        }

        return $this->manager($sender);
    }

    /**
     * @param ManagerInterface|string|null $editor
     *
     * @return Editor|ManagerInterface
     * @throws InvalidConfigException
     */
    public function editor(ManagerInterface|string|null $editor = null): Editor|ManagerInterface {
        $editorClass = $editor ?? $this->editor;

        if ($editorClass instanceof ManagerInterface) {
            return $editor;
        }

        return $this->manager($editorClass);
    }

    /**
     * @param ManagerInterface|array|string $manager
     *
     * @return ManagerInterface
     * @throws InvalidConfigException
     */
    public function manager(ManagerInterface|array|string $manager): ManagerInterface {
        if ($manager instanceof ManagerInterface) {
            return $manager;
        }

        /** @var ManagerInterface $managerObject */
        $managerObject = Yii::createObject($manager, [$this]);

        if (!is_subclass_of($managerObject, ManagerInterface::class)) {
            throw new InvalidArgumentException("Manager class must be implement " . ManagerInterface::class . " interface");
        }

        return new $managerObject;
    }
}