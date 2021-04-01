<?php


class PlacementCategory
{
    public int $id;
    public string $categoryId;
    public string $name;
    public bool $hasBundled;
    public int $parent;
    public bool $isSsp;
    public Site $site;
    public string $status;
    public bool $payoutIs;
    public bool $isVoters;
    public string $resource;
    public string $applicationName;
    public array $categories;
    public bool $includeDublicatedCampaign;
    public array $categoryRange;
    public int $iconSize;
    public int $creativeHeight;
    public int $creativeWidth;
    public int $creativeCount;
    public int $rating;
    public int $maxSymbols;
    public int $maxWords;
    public string $appDescription;
}