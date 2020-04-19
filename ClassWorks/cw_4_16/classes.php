<?php


class form
{

    public function input($type, $value, $id)
    {
        return sprintf('<input type="%s" value="%s" id="%s">', $type, $value,
            $id);
    }

    public function password()
    {
        return '<input type="password" value="' . $this->value . '">';
    }

    public function submit($value)
    {
        return '<input type="submit" value="' . $value . '">';
    }

    public function textarea($row, $col)
    {
        return '<textarea rows="' . $row . '" cols="' . $col . '">'
            . $this->value . '</textarea>';
    }

    public function open($method, $address)
    {
        return '<form method="' . $method . '" action="' . $address . '">';
    }

    public function close()
    {
        return '</form>';
    }
    public function nl()
    {
        return "\n<br>\n";
    }


}

?>

