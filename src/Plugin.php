<?php
/**
 * Discourse plugin for Craft CMS 3.x
 *
 * Single Sign-On for Discourse
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2019 Superbig
 */

namespace superbig\discourse;

use superbig\discourse\models\Settings;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;

use yii\base\Event;

/**
 * Class Discourse
 *
 * @author    Superbig
 * @package   Discourse
 * @since     1.0.0
 *
 */
class Plugin extends \craft\base\Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Discourse
     */
    // public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    // public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    // /**
    //  * @inheritdoc
    //  */
    // public function init()
    // {
    //     // parent::init();
    //     // self::$plugin = $this;

    //     // Event::on(
    //     //     UrlManager::class,
    //     //     UrlManager::EVENT_REGISTER_SITE_URL_RULES,
    //     //     function (RegisterUrlRulesEvent $event) {
    //     //         $event->rules['siteActionTrigger1'] = 'discourse/default';
    //     //     }
    //     // );

    //     // Event::on(
    //     //     UrlManager::class,
    //     //     UrlManager::EVENT_REGISTER_CP_URL_RULES,
    //     //     function (RegisterUrlRulesEvent $event) {
    //     //         $event->rules['cpActionTrigger1'] = 'discourse/default/do-something';
    //     //     }
    //     // );

    //     // Event::on(
    //     //     Plugins::class,
    //     //     Plugins::EVENT_AFTER_INSTALL_PLUGIN,
    //     //     function (PluginEvent $event) {
    //     //         if ($event->plugin === $this) {
    //     //         }
    //     //     }
    //     // );

    // }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'discourse/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
