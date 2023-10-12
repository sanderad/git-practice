<?php

declare(strict_types=1);

class Feature1

{
    public function __construct(
        private string $username
    ) {
        return $username . 'f2';
    }
}