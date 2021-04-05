<?php


final class ManagersPlanAdvertiser
{
    public int $id;
    public array $plans;
    public string $name;
    public Manager $bizDevManager;
    public Manager $manager;
    public \DateTimeImmutable $createdAt;
    public Country $country;
    public float $revenue;
    // countries, cities, sex, age, hobbies etc.
    public Targeting $targeting;
    public \DateTime $dateMonthly;
    public float $payout;
    public float $profit;
    public float $advertiserFactRevenue;
    public int $margin;
    public AdvertiserPlan $advertiserPlan;
}