<?php

namespace App\Services\Api\V1;

class Slug
{
    public function from(string $value): string
    {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $value);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean ?? '');
        $clean = strtolower((string) $clean);
        $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
        $clean = trim((string) $clean, '-');
        setlocale(LC_ALL, $oldLocale);

        return $clean !== '' ? $clean : 'annonce';
    }
}
