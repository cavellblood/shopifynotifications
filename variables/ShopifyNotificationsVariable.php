<?php
/**
 * Shopify Notifications plugin for Craft CMS
 *
 * Shopify Notifications Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Cavell L. Blood
 * @copyright Copyright (c) 2018 Cavell L. Blood
 * @link      https://cavellblood.com
 * @package   ShopifyNotifications
 * @since     0.0.1
 */

namespace Craft;

class ShopifyNotificationsVariable
{
    public function getPlugin()
    {
        return craft()->plugins->getPlugin('shopifyNotifications');
    }

    public function getPluginUrl()
    {
        return $this->getPlugin()->getPluginUrl();
    }

    public function getPluginName()
    {
        return $this->getPlugin()->getName();
    }

    public function getPluginVersion()
    {
        return $this->getPlugin()->getVersion();
    }
}