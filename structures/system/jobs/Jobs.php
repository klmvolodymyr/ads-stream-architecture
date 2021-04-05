<?php


class Jobs
{
    public int $id;
    public string $queue;
    public string $payload;
    public int $attempts;
    public \DateTime $reservedAt;
    public \DateTime $availableAt;
    public \DateTime $createdAt;
}