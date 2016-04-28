<?php

class HTML
{

    protected static $css_relative = 'css';
    protected static $scripts_relative = 'javascript';

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function style($relativePath)
    {
        $format = '<link rel = "stylesheet" type = "text/css" href = "%s" >';

        return sprintf($format, self::urlFile(self::$css_relative . '/' . $relativePath));
    }

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function script($relativePath)
    {
        $format = '<script type = "text/javascript" src = "%s" ></script>';

        return sprintf($format, self::urlFile(self::$scripts_relative . '/' . $relativePath));
    }

    /**
     * @param $relativePath Relative path from styles directory
     * @return string
     */
    public static function urlFile($relativePath)
    {
        global $BASE_URL;

        return trim($BASE_URL, '/') . '/' . trim($relativePath, '/');
    }


}

/** FUNCTION HELPER
 * @param $file
 * @return string
 */
function resource($file)
{
    return HTML::urlFile('images/' . $file);
}
