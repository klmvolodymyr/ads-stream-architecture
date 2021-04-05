<?php


final class ManagerPlan
{
    public int $id;
    public Manager $manager;
    public \DateTime $date;
    public float $plannedRevenue;
    public \DateTimeImmutable $createdAt;
    public \DateTime $updatedAr;
}