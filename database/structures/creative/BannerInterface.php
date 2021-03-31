<?php


interface BannerInterface
{
    public function getBannerId();
    public function getBannerCreativeId();
    public function getBannerWidth();
    public function getBannerHeight();
    public function getBannerPayout();
    public function getBannerImageUrl();
    public function getBannerTrackUrl();
    public function getBannerImpressionUrl($sid);
    public function getBannerHtmlCode();
    public function getBannerMediaType();
    public function getBannerParsedHtm($sid);
}