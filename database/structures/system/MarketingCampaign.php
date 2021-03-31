<?php


class MarketingCampaign
{
    public int $id;
    public string $name;
    public bool $active;
    public \DateTime $dateStart;
    public \DateTime $dateEnd;
    public float $promoteSpent;
    public string $sourceId;
    public Source $source;
    public string $type;
}