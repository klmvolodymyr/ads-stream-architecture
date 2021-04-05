<?php


class ActionEventsSH
{
    public int $id;
    public int $batchId;
    public int $userId;
    public string $name;
    public string $actionableType;
    public int $actionableId;
    public string $targetType;
    public int $targetId;
    public string $modelType;
    public int $modelId;
    public array $fields;
    public string $status;
    public string $exception;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public string $original;
    public string $changes;
}