<?php


class Firewall
{
    public int $id;
    public string $ipAddress;
    public string $whitelisted;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
}