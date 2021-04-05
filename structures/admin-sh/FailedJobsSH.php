<?php


class FailedJobsSH
{
    public int $id;
    public string $connection;
    public string $queue;
    public string $payload;
    public string $exception;
    public \DateTime $failedAt;
}