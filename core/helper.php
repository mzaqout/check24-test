<?php

function sanitize_text_field($value): string
{
    return filter_var(trim($value), FILTER_SANITIZE_STRING);
}

function sanitize_html_field($value): string
{
    return filter_var(trim($value), FILTER_SANITIZE_SPECIAL_CHARS);
}

function sanitize_url_field($value): string
{
    return filter_var(trim($value), FILTER_SANITIZE_URL);
}