<?php


class ChatStats
{
    public int $id;
    public $twitchId;
    public string $numMessages;
    public int $numUsers;
    public \DateTime $createdAt;
    public int $duration;
}