<?php

declare(strict_types=1);


class FeatureConflict
{
    public function __construct(
        private string $username
    ) {
        return $username . 'ñ3';
    }
}