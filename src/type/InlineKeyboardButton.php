<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type InlineKeyboardButton
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 */
class InlineKeyboardButton extends Type {

    public string $text;
    public string $url;
    public string $callbackData;
    public WebAppInfo $webApp;
    public LoginUrl $loginUrl;
    public string $switchInlineQuery;
    public string $switchInlineQueryCurrentChat;
    public SwitchInlineQueryChosenChat $switchInlineQueryChosenChat;
    public CallbackGame $callbackGame;
    public bool $pay;


    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'webApp' => [WebAppInfo::class, 'webApp'],
            'loginUrl' => [LoginUrl::class, 'loginUrl'],
            'switchInlineQueryChosenChat' => [SwitchInlineQueryChosenChat::class, 'switchInlineQueryChosenChat'],
            'callbackGame' => [CallbackGame::class, 'callbackGame']
        ];
    }
}