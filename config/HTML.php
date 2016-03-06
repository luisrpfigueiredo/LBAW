<?php

class HTML
{

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function style($relativePath)
    {
        $format = '<link rel = "stylesheet" type = "text/css" href = "%s" >';

        return sprintf($format, self::asset('styles/' . $relativePath));
    }

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function script($relativePath)
    {
        $format = '<script type = "text/javascript" src = "%s" ></script>';

        return sprintf($format, self::asset('scripts/' . $relativePath));
    }

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function asset($relativePath)
    {
        return trim(BASE_URL, '/') . '/' . trim($relativePath, '/');
    }


}

/** FUNCTION HELPER
 * @param $file
 * @return string
 */
function asset($file)
{
    return HTML::asset('images/' . $file);
}