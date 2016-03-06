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

        return sprintf($format, self::urlFile('styles/' . $relativePath));
    }

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function script($relativePath)
    {
        $format = '<script type = "text/javascript" src = "%s" ></script>';

        return sprintf($format, self::urlFile('scripts/' . $relativePath));
    }

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function urlFile($relativePath)
    {
        return trim(BASE_URL, '/') . '/' . trim($relativePath, '/');
    }


}

/** FUNCTION HELPER
 * @param $file
 * @return string
 */
function resource($file)
{
    return HTML::urlFile('resources/' . $file);
}