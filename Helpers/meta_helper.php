<?php
/**
 * @copyright Copyright (c) 2018-2020 Basic App Dev Team
 * @link https://basic-app.com
 * @license MIT License
 */
if (!function_exists('meta_charset'))
{
    function meta_charset($charset = 'utf-8')
    {
        return '<meta charset="' . esc($charset) . '">';
    }
}

if (!function_exists('meta_tag'))
{
    function meta_tag($name, $content, $attribute = 'name')
    {
        if (is_array($name))
        {
            $attribute = $name['attribute'] ?? $attribute;

            $content = $name['content'] ?? $content;

            $name = $name['name'] ?? '';
        }

        return '<meta name="' . esc($name) . '" content="' . esc($content) . '">';
    }
}

if (!function_exists('meta_http_equiv'))
{
    function meta_http_equiv($name, $content)
    {
        if (is_array($name))
        {
            $name['attribute'] = 'http-equiv';
        }

        return meta($name, $content, 'http-equiv');
    }
}