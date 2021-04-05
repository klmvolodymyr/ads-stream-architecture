<?php


class GaSource
{
    public int $id;
    public string $value;
    public bool $active;
    public int $channelId;
    public Channel $channel;
}