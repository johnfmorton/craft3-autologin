<?php
/**
 * Autologin plugin for Craft CMS 3.x
 *
 * Automatically login based on whitelisted IP, basic auth username or URL keys
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\autologin\models;

use superbig\autologin\Autologin;

use Craft;
use craft\base\Model;

/**
 * @author    Superbig
 * @package   Autologin
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Enable the Autologin plugin
     *
     * @var boolean
     */
    public $enabled = true;

    /**
     * A list of Craft usernames mapped to IPs
     *
     * @var array
     */
    public $ipWhitelist = [];

    /**
     * A list of Craft usernames mapped to basic auth usernames
     *
     * @var array
     */
    public $basicAuth = [];

    /**
     * A list of Craft usernames mapped to url keys
     *
     * @var array
     */
    public $urlKeys = [];

    /**
     * Redirect after logging in automatically
     *
     * @var string
     */
    public $redirectUrl = '';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules ()
    {
        return [
            [ 'enabled', 'boolean' ],
            [ 'redirectUrl', 'string' ],

            [ 'enabled', 'default', 'value' => true ],
            [ 'ipWhitelist', 'default', 'value' => [] ],
            [ 'basicAuth', 'default', 'value' => [] ],
            [ 'urlKeys', 'default', 'value' => [] ],
        ];
    }
}
