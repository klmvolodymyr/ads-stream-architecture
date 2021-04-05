<?php


class SlotsSH
{
    public int $id;
    public int $advertId;
    public int $streamerId;
    public int $campaignId;
    public string $adUrl;
    public string $adTitle;
    public string $adImg;
    public int $viewers;
    public bool $clientConfirm;
    public bool $cvConfirm;
    public float $paidOut;
    public float $cpm;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public int $overlayId;
    public int $linkId;
    public int $cvIndicator;
}