<?php


class ImpressionCupsSH
{
    public int $id;
    public int $impressions;
    public int $slots;
    public Streamer $streamers;
    public \DateTime $cratedAt;
    public \DateTime $updatedAt;
}