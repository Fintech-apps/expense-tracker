<?php
namespace Tmakinde\ExpenseTracker\Enum;

abstract class CategoryStatus
{
    public const BALANCED = 'balanced';
    public const EXCEEDED = 'exceeded';
    public const NOT_EXCEEDED = 'not_exceeded';

    public static function getAllStatuses() : array
    {
        return [
            static::BALANCED, static::EXCEEDED, static::NOT_EXCEEDED
        ];
    }
}
