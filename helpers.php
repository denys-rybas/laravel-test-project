<?php

/**
 * I won't use function_exists('string_func_name')
 */

/**
 * @return string http://laravel-test
 */
function app_front_url(): string
{
    return config('app.scheme') . config('app.front_domain');
}

/**
 * @return string http://a.laravel-test
 */
function app_admin_url(): string
{
    return config('app.scheme') . config('app.admin_domain');
}
