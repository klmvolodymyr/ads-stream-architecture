<?php


class Cabinet
{
    public int $id;
    public \DateTime $registeredDate;
    public string $name;
    public string $address;
    public int $balance;
    public array $payments;
    public $paymentTerm;
    public string $paymentCLass;
    public float $spent;
    public bool $active;
    public \DateTime $modifiedAt;
    public \DateTime $createdAt;
    public int $targetingId;
    public bool $allowSinUp;
    public bool $allowedAdvertCreation;
    public bool $allowTargetingLimits;
    public string $password;
    public string $targetingCacheCLass;
    public string $adFormatOld;
    public string $adFormats;
    public string $paymentModel;
    public bool $allowedPrerolls;
    public string $targetingFlags;
    public \DateTime $lastLoginDate;
    public string $managerClass;
}