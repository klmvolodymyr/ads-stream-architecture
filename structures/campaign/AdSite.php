<?php


class AdSite
{
    public int $id;
    public string $adClass;
    public string $siteClass;
    public float $pubPrice;
    public string $skey;
    public string $bundle;
    public int $rorartinTimeout;
    public string $postBackUrl;
    public string $trafficBackUrl;
    public RevenueTier $revenueTier;
    public string $revenueTierClass;
    public int $priority;
    public bool $testMode;
    public string $siteNo;
    public int $reservedCapsDaily;
    public float $reservedUsdToday;
    public int $reservedCapsOverall;
}