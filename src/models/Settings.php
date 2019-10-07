<?php
/**
 * Discourse plugin for Craft CMS 3.x
 *
 * Single Sign-On for Discourse
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2019 Superbig
 */

namespace superbig\discourse\models;

use Craft;

/**
 * @author    Superbig
 * @package   Discourse
 * @since     1.0.0
 */
class Settings extends \craft\base\Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $ssoEndpoint = '';

    /**
    * @var string
    */
    public $ssoSecret = '';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['ssoEndpoint', 'string'],
            ['ssoSecret', 'string'],
        ];
    }
}
