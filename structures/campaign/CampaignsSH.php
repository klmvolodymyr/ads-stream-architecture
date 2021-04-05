<?php

class CampaignsSH
{
    public int $id;
    // TODO Change all user ids, first to uuid, second to guid using user identifier service
    public int $userId;
    public string $name;
    public int $status;
    public string $type;
    public int $priority;
    public array $languages;
    public array $games;
    public int $impressions;
    public int $visits;
    public float $delayBudget;
    public float $budgetSpent;
    public string $adUrl;
    public string $adTitle;
    public string $adImg;
    public \DateTime $createdAt;
    public \DateTime $deletedAt;
    public \DateTime $updatedAt;
    public float $cpm;
    public array $categories;
    public array $black_list;
    public string $banner_type;
    public string $network;
    public string $widgetOptionsName;
    public \DateTime $fligDateStartAt;
    public \DateTime $fligDateEndAt;
    public float $totalBudget;
    public float $totalSpent;
    public float $goals;
}