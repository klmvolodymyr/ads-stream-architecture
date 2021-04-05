<?php


class BetaApplicationsSH
{
    public int $id;
    public string $profile;
    public string $token;
    public string $email;
    public string $name;
    public string $company;
    public string $site;
    public string $twitchId;
    public string $twitchLogin;
    public string $twitchProfileImageUrl;
    public string $twitchLanguage;
    public string $twitchGame;
    public string $mailSeed;
    public bool $used;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public \DateTime $deletedAt;
    public int $sendedTimes;
    public \DateTime $lastSendEmailAt;
    public string $countryCode;
    public bool $isTiny;
    public string $country;
    public string $networks;
    public bool $inactive;
}