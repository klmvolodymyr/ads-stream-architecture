<?php


class EsportsChartsHistoriesSH
{
    public int $id;
    public int $userId;
    public int $streamerId;
    public string $partner;
    public string $mature;
    public string $stermLanguage;
    public string $lastGame;
    public \DateTime $lastScannedAt;
    public string $top5GameNames;
    public int $last3aPeakViewers;
    public \DateTime $last30PeakViewersAt;
    public string $last30HoursWatched;
    public string $last30StreamersCount;
    public int $last30GamesCount;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
}