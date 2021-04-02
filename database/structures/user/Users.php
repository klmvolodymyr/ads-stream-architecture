<?php

// Mix
class Users
{
    // OPT_AD_SITE_TOUR
    // APPANIE_KEY
    // AD_SITE_TOUR
    // SITE_STATS_TOUR
    // Campaign_list_tour
    // ALLOW_APPANIE
    public string $login;
    public string $status;
    public \DateTime $created;
    public \DateTime $changed;
    public int $id;
    public string $email;
    public string $name;
    public string $company;
    public string $profile;
    public bool $emailVerifiedAt;
    public string $password;
    public float $balance;
    public string $betaToken;
    public string $rememberToken;
    public \DateTime $deletedAt;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public string $stripeId;
    public string $cardBrand;
    public string $cardHolderTour;
    public \DateTime $bannedAt;
    public bool $allowedNegativeBalance;
    public string $country;
    public string $city;
    public string $zip;
    public string $address;
    public string $stackRegion;
    public string $firstName;
    public string $lastName;
    public string $vatNumber;
    public string $bankAccountNumber;
    public string $bikBankCode;
    public string $discord;
    public string $skype;
    public string $twitter;
    public string $vk;
    public string $facebook;
    public string $phone;
    public string $corparatEntity;
    public string $paypalEmail;
    public string $conTopCode;
    public string $payoneerEmail;
    public string $minimumRevenue;//??
    public string $networks;
    public bool $approved;

    // CLK
    public array $roles;
    public User $notificationUser;
    public Subscription $subscription;
    public Manager $manger;
    public string $oldPassword;
    public string $lastAccess;
    public Adveriser $advertiser;
    public Publisher $publisher;
    public UserOption $userOptions;
    public int $id;
    public string $lastName;
    public string $notificationName;
    public string $notificationEmail;
    public string $mobile;
    public string $timeZoneOffset;
    public bool $reset;
    public string $hash;
    public string $class;
    public string $locale;
    public string $email;
    public string $password;
    public \DateTime $lastLogin;
}