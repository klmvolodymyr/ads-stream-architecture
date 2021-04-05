<?php


class Features
{
    public int $id;
    public string $key;
    public bool $enabled;
    public string $whitelist;
    public string $blacklist;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public bool $public;
    public string $column1;

}