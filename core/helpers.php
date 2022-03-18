<?php

if (!function_exists('view')) {
    /**
     * Require a view.
     *
     * @param  string $name
     * @param  array  $data
     */
    function view($name, $data = [])
    {
        extract($data);

        return require "app/views/{$name}.view.php";
    }
}

if (!function_exists('redirect')) {
    /**
     * Redirect to a new page.
     *
     * @param  string $path
     */
    function redirect($path)
    {
        header("Location: /{$path}");
    }
}


if (!function_exists('asset')) {
    /**
     * Get a assets in public.
     *
     * @param  string $name
     */
    function asset($name)
    {
        return "/public/{$name}";
    }
}

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixin  $default
     */
    function env($key, $default = null)
    {
        return $_SERVER[$key];
        return isset($_ENV[$key]) ? $_SERVER[$key] ?? $default : $default ?? 'no';
    }
}
