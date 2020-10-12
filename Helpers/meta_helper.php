<?php
/**
 * @copyright Copyright (c) 2018-2020 Basic App Dev Team
 * @link https://basic-app.com
 * @license MIT License
 */
use BasicApp\MetaHelper\MetaHelper;

if (!function_exists('meta_charset'))
{
    function meta_charset($charset = 'utf-8')
    {
        return MetaHelper::charset($charset);
    }
}

if (!function_exists('meta_tag'))
{
    function meta_tag($name, $content, $attribute = 'name')
    {
        return MetaHelper::tag($name, $content, $attribute);
    }
}

if (!function_exists('meta_http_equiv'))
{
    function meta_http_equiv($name, $content)
    {
        return MetaHelper::httpEquiv($name, $content);
    }
}