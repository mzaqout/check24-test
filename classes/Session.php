<?php

class Session
{
    public static function init()
    {
        session_start();
    }

    public static function get(string $key)
    {
        return $_SESSION[$key] ?? null;
    }

    public static function set(string $key, $value = null)
    {
        $_SESSION[$key] = $value;
    }

    public static function unset(string $key)
    {
        unset($_SESSION[$key]);
    }

    public static function destroy()
    {
        session_destroy();
    }

    public static function regenerateId()
    {
        session_regenerate_id();
    }
}