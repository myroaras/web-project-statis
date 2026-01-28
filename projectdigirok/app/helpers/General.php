<?php

function redirect(string $url): void {
    header("Location: $url");
    exit;
}

function dd($data): void {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit;
}

function sanitize(string $value): string {
    return htmlspecialchars(trim($value));
}
