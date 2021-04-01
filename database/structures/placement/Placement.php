<?php


class Placement
{
    // TYPE_AD_NATIVE
    // WIDGET
    // APPWALL
    // EPOM
    // CAT_RANG
    // NEWEST
    // RANDOM
    // PAYOUT
    // OPTIMIZER

    public int $id;
    public string $type;
    public string $url;
    public string $bundleId;
    public Category $category;
    public AdType $adType;
    public int $offerCount;
    public string $appName;
}