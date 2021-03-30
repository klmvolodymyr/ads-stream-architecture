<?php


class Site
{
    // Mobile
    // Desktop
    // SelfService
    // TrafficSource
    // TrafficScore Premium

    public bool $isClickRedirect;
    public TrafficSource $trafficSource;
    // forDynamicAdPrice
    public array $tags;
    public bool $isNewFeed;
    public int $shaveLimit;
    public Placement $placement;
    public int $shaveCounter;
    public int $score;
    public AdSite $adSite;
    public array $ads;
    public int $currencyId;
    public Currency $currency;
    public int $size;
    public int $siteId;
    public string $type;
    public string $userId;
    public Publisher $publisher;
    public int $id;
    // offerCurrencyPlan
    public bool $autopilot;
    public string $skey;
    // public $offerExchange;
    public Currency $offerCurrency;
    public string $requestUrl;
    public int $paymentModel;
    public \DateTime $createDate;
}