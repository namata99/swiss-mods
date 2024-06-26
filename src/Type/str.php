<?php

namespace Vonama\SwissMods\Type;

class str
{
    function __construct(
        private string $string,
    ){}

    function __toString(): string
    {
        return $this->string;
    }

    public function length(): int { return strlen($this->string); }
    
    public function substr(int $offset, ?int $length): string { return substr($this->string, $offset, $length); }
    
    /** @return string[] */
    public function split(string $separator, $limit = PHP_INT_MAX) { return explode($separator, $this->string, $limit); }

    public function contains(string $needle): bool { return str_contains($this->string, $needle); }

    public function endsWith(string $needle): bool { return str_ends_with($this->string, $needle); }

    public function startsWith(string $needle): bool { return str_starts_with($this->string, $needle); }
    
    public function toUpperCase(): string
    {
        return strtoupper($this->string);
    }

    public function toLowerCase(): string
    {
        return strtolower($this->string);
    }

    public function replace(string $search, string $replace): string
    {
        return str_replace($search, $replace, $this->string);
    }

    public function trim(string $characters = " \t\n\r\0\x0B"): string
    {
        return trim($this->string, $characters);
    }

    public function ltrim(string $characters = " \t\n\r\0\x0B"): string
    {
        return ltrim($this->string, $characters);
    }

    public function rtrim(string $characters = " \t\n\r\0\x0B"): string
    {
        return rtrim($this->string, $characters);
    }

    public function indexOf(string $needle, int $offset = 0): int | false
    {
        return strpos($this->string, $needle, $offset);
    }

    public function repeat(int $times): string
    {
        return str_repeat($this->string, $times);
    }

    public function reverse(): string
    {
        return strrev($this->string);
    }

    public function wordCount(int $format = 0, ?string $characters): int
    {
        return str_word_count($this->string, $format, $characters);
    }

    public function charAt(int $index): string
    {
        return $this->string[$index] ?? '';
    }

    public function shuffle(): string
    {
        return str_shuffle($this->string);
    }
}
