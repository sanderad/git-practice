<?php

declare(strict_types=1);

class Feature
{
    public function __construct(
        private string $username
    ) {
        return $username . 'ñ';
    }
}