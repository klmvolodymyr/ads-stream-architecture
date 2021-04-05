<?php


class Publisher
{
    // Mobile
    // Desktop
    // SSP_PLATFORM
    // AD_EXCHANGE
    // MEDIA_BUYING
    // ACTIVE
    // MOBILE_PLATFORM
    // DESKTOP_PLATFORM
    // AD_EXCHANGE_PLATFORM
    // MEDIA_BUYING_PLATFORM
    // ACTIVE_STATUS

    public Bill $bill;
    public array $tags;
    public array $sites;
    public Manager $manager;
    public RevenueTier $revenueTier;
    public Cabinet $cabinet;
    public string $paymentTerm;
    public int $referer;
    public bool $hasPlacement;
    public int $margin;
    public GaSource $source;
    public int $sourceId;
    public string $gaSource;
    public string $country;
    public User $user;
    public int $id;
    public string $Options;
    public float $specialPayout;
    public string $company;
    public string $bizDevManager;
    public int $type;
    public string $paypalId;
//    public string $revenueTier;
    public string $revenueTierObj; // Targeting
    public string $vmType;
    public string $wmNumber;
    public Publisher $publisher;
    public int $refererId;
    public string $refResource;
    public int $referrerPercent;
    public string $paymentAnnotation;
    public string $hash;
    public int $viewsOverAll;
    public int $clicksOverAll;
    public string $website;
    public string $wmr;
    public string $wmz;
    public bool $preloaderEnabled;
    public string $preloaderRqSent;
    public string $eventKey;
    public string $eventLink;
    public string $moneyOffers;
    public string $password;
    public \DateTime $lastLoginDate;
    public \DateTime $registerDate;
    public bool $active;
    public Cabinet $cabinet;
    public string $otherInfo;
    public Platform $platform;
    public string $paymentSystems;
    public string $paymentTerm;
    public string $paytype;
    public string $access;
    public string $email;
    public string $name;
}