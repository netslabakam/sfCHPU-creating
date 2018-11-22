<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 21.11.2018
 * Time: 11:19
 */

class chpu
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}
?>