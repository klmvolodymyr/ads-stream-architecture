<?php


class Tag
{
    public int $id;
    public string $name;
    public bool $unRemovable;
    public \DateTime $created;
    public array $ads; // Ad
    public array $advertisers; // Advertisers
    public array $publishers; // Publishers
    public array $sites; // Sites
}