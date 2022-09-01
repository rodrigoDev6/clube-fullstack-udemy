<?php

function validate(array $fields)
{
    $request = request();

    foreach ($fields as $field => $type) {
        switch ($type) {
            case 's':
                $validate[$field] = filter_var(
                    $request[$field],
                    FILTER_SANITIZE_SPECIAL_CHARS
                );
                break;
            case 'e':
                $validate[$field] = filter_var(
                    $request[$field],
                    FILTER_SANITIZE_EMAIL
                );
                break;
            case 'i':
                $validate[$field] = filter_var(
                    $request[$field],
                    FILTER_SANITIZE_NUMBER_INT
                );
                break;
        }
    }

    return (object) $validate;
}

function isEmpty()
{
    $request = request();

    $empty = false;

    foreach ($request as $key => $value) {
        empty($request[$key]) ? ($empty = true) : $empty;
        ctype_space($request[$key]) ? ($empty = true) : $empty;
    }

    return $empty;
}

?>