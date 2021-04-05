<?php


class UserMessagesSH
{
    public int $id;
    public int $userId;
    public string $type;
    public string $html;
    public bool $isRead;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
}