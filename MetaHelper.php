<?php
/**
 * @copyright Copyright (c) 2018-2020 Basic App Dev Team
 * @link https://basic-app.com
 * @license MIT License
 */
namespace BasicApp\MetaHelper;

class MetaHelper
{

    function charset($charset = 'utf-8')
    {
        return '<meta charset="' . esc($charset) . '">';
    }

    function tag($name, $content, $attribute = 'name')
    {
        if (is_array($name))
        {
            $attribute = $name['attribute'] ?? $attribute;

            $content = $name['content'] ?? $content;

            $name = $name['name'] ?? '';
        }

        return '<meta name="' . esc($name) . '" content="' . esc($content) . '">';
    }

    function httpEquiv($name, $content)
    {
        if (is_array($name))
        {
            $name['attribute'] = 'http-equiv';
        }

        return meta($name, $content, 'http-equiv');
    }

}
