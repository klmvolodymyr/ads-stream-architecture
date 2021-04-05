<?php


class AdPublisher
{
    public int $id;
    public Ad $ad;
    public string $adClass;
    public Publisher $publisher;
    public string $publisherClass;
    public float $price;
    public Currency $currency;
    public string $currencyClass;
    public RevenueTier $revenueTier;
    public string $revenueTierClass;
}