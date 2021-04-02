<?php


class Streamer
{
    public int $id;
    public int $userId;
    public string $status;
    public string $twitchId;
    public string $twitchLogin;
    public string $twitchProfileImageUrl;
    public string $twitchLanguage;
    public string $twitchGame;
    public string $type;
    public int $viewersCount;
    public string $nightBotAccessToken;
    public string $nightBotRefreshToken;
    public \DateTime $nightBotExpiresIn;
    public string $nightBotJoined;
    public string $nightBotModerationStatus;
    public \DateTime $deletedAt;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public string $chatPostingFriquerce;
    public string $twitchStreamDelay;
    public \DateTime $chatPostedAt;
    public int $margin;
    public \DateTime $last30DaysStatsUpdatedAt;
    public string $networks;
    public string $brakeFactor;
    public string $advertisingUntil;
}