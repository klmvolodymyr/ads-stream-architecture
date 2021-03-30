<?php


class Currency
{
    public int $id;
    public string $iso;
    public string $short;
    public string $valueEn;
    public string $valueRu;
    public array $rates; // Exchange[]
}