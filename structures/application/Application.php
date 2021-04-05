<?php


class Application
{
    public string $developer;
    public string $name;
    public string $description;
    public string $bundleId;
    public string $storeUrl;
    public string $appIcon;
    public array $targeting;
    public float $price;
    public string $store;
    public \DateTime $created;
    public \DateTime $updated;
    public string $sid;
    public array $categories;
    public ApplicationOptions $applicationOptions;
    public array $campaigns;
    public array $creatives;
    public string $localizedDescriptions;
    public string $votes;
    public int $rating;
    public string $iconSmall;
    public string $iconMedium;
    public string $iconLarge;
    public string $manufacturer;
    public ApplicationOptions $applicationOptions;
    public Categories $categories;
    public array $targetings; // I_A_B_Categories $targetings;
    public array $creatives;
    public string $localizedDescriptions;

}