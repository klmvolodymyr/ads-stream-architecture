<?php


class ConversionGoalsSH
{
    public int $id;
    public string $userId;
    public string $trackingType;
    public string $createdType;
    public \DateTime $updatedAt;
    public string $eventName;
    public int $conversionCategoryId;
    public int $funnelStepId;
    public float $expectedCpa;
}