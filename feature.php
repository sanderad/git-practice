<?php

declare(strict_types=1);

class Feature3
{
    public function __construct(
        private string $username
    ) {
        return $username . 'ñ3';
    }
}