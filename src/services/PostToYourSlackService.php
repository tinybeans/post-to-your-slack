<?php
/**
 * Post to your Slack plugin for Craft CMS 3.x
 *
 * 特定のセクションを保存したら Slack に通知を飛ばします。
 *
 * @link      https://tinybeans.net
 * @copyright Copyright (c) 2020 Roy Okuwaki
 */

namespace tinybeans\posttoyourslack\services;

use tinybeans\posttoyourslack\PostToYourSlack;

use Craft;
use craft\base\Component;

/**
 * PostToYourSlackService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Roy Okuwaki
 * @package   PostToYourSlack
 * @since     1.0.0
 */
class PostToYourSlackService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     PostToYourSlack::$plugin->postToYourSlackService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
