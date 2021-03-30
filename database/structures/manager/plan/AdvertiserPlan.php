<?php


final class AdvertiserPlan
{
    public int $id;
    public Advertiser $advertiser;
    public Manager $manager;
    public \DateTime $date;
    public float $plannedRevenue;
    public \DateTimeImmutable $createdAt;
    public \DateTime $updatedAt;
}