<?php


class Form
{

    /**
     * @param $name Le nom de notre input
     * @param $placeholder Le placeholder de notre input
     * @return string L'input complétée
     */

    public function input($name, $placeholder)
    {
        return "<input type='text' name='{$name}' placeholder='{$placeholder}' />";
    }

    /**
     * @param $name Le nom du textarea
     * @param $rows Le nombre de rows du textarea
     * @param $cols Le nombre de cols du textarea
     * @return string Le textarea complété
     */

    public function textarea($name, $rows, $cols, $placeholder)
    {
        return "<textarea name='{$name}' rows='{$rows}' cols='{$cols}'>$placeholder</textarea>";
    }

    /**
     * @param $name Le nom de notre input
     * @return string L'input complétée
     */

    public function email($name)
    {
        return "<input type='email' name='{$name}' placeholder='Votre email' />";
    }

    /**
     * @param $value La valeur de notre bouton
     * @return string Le bouton complété
     */

    public function submit($value)
    {
        return "<button type='submit' value='{$value}'>$value</button>";
    }
}