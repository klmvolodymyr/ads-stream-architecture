<?php


class Ad
{
    public int $id;
    public int $idUser;
    public Platform $plarform;
    public string $adtype;
    public string $name;
    public \DateTime $campBegin; // startDate
    public \DateTime $campEnd;
    public float $exchangedPayout;
    public Apllication $application;
    public Advertiser $advertiser;
    public int $advertiserId;
    public array $events;
    public array $logs;
    public bool $hasAdvancedTargeting;
    public bool $isDynamicPrice;
    public array $adPrices;
    public string $dynamicPriceValue;
    public string $rawTargeting;
    public array $deadCountries;
    public string $crawlerStatus;
    public \DateTime $lastLeadTime;
    public array $deviceTypes;
    public AdPublisher $adPublisher;
    public array $creatives;
    public Targenting $targeting;
    public array $targetingEntities;
    public array $adTargeting;
    public AdCategory $adCategory;
    public array $sites;
    public int $apllicationId;
    public float $revShare;
    public array $options;
    public string $trafficSource;
    public int $trafficType;
    public int $currencyId;
    public Currency $currencyObj;
    public bool $mobile;
    public bool $needsApproval;
    public bool $autoApprove;
    public string $trafficBackUrl;
    public bool $hidden;
    public bool $isFree;
    public int $clicksToCnv;
    public \DateTime $updated;
    public float $totalBudget;
    public int $leadsOverAll;
    public int $viewsOverAll;
    public int $clicksOverAll;

    public \DateTime $created;
    public string $tsalt;
    public string $tevent; //(AdType)
    public int $eventId;
    public bool $active;
    public int $looserCapsUsedAll;
    public int $looserCapsUsedToday;
    public int $overallCaps;
    public int $leedsToday;
    public int $dayilyCaps;
    public float $price;
    public int $modelTypePrice;
    public float $dayilyBudgetNow;
    public float $dailyBudget;
    public string $skey;
    public string $filename;
    public string $filepath;
    public string $linkTest;
    public string $trackingUrl;
    public string $landingUrl;

    public string $info;
    public string $description;
    public string $titleShot;
    public string $linkText;//(landingUrl);
    public string $link;//(trackingLink);
//    public string $linkTest;
    public array $adSites;
    public AdTemprorary $feedTemprorary;
    public float $sitePayouts;
    public array $sourceAllowedSites;
    public bool $storeApple;
    public string $storeName;
    public string $translate;
    public string $externalId;
    public bool $userChanged;
    public float $publisherPayout;
    public string $offerPayoutCurrency;

}