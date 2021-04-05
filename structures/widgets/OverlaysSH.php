<?php


class OverlaysSH
{
    public int $id;
    public int $userId;
    public int $streamerId;
    public string $type;
    public int $urlId;
    public bool $verified;
    public \DateTime $createdAt;
    public \DateTime $updateAt;
    public int $slotNumber;
    public bool $disabled;
    public array $excludedCategories;
    public \DateTime $slotDisplayedAt;
    public string $lastCampaignIdDisplayed;
    public int $width;
    public int $height;
    public int $widgetX;
    public int $widgetY;
    public bool $testMode;
    public int $sizeMode;
}