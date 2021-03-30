<?php


final class ManagersPlanManager
{
    public array $plans;
    public int $id;
    public User $user;
    public array $advertisers;
    public string $name;
    public string $photo;
    public float $allPlanedRevenue
    public float $managerFactRevenue;
    public float $managerPayout;
    public float $advertiserPayout;
    public float $profit;
    public float $margin;
    public ManagerPlan $plannedEntity;
    public float $advertiserProfit;
    public float $managerProfit;
    public int $managerMargin;
    public int $advertiserMargin;
    public float $advertiserPlannedRevenue;
    public \DateTime $dateMonthly;
    public float $revenue;
    public float $payout;
    public float $managerRevenue;
}