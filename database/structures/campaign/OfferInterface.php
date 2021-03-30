<?php


interface OfferInterface
{
    public function getOfferId();
    public function getOfferName();
    public function getOfferDescription();
    public function isOfferFree();
    public function getOfferType();
    public function getOfferCategory();
    public function getOfferActionUrl();
    public function getOfferClickUrl();
    public function getOfferPayout($sid);
    public function getPlatform();
    public function getApplication();
    public function getOfferPayoutCurrency();
    public function getExchangedPayout($sid);
    public function getExchangingPayout();
    public function getCreatives();
}