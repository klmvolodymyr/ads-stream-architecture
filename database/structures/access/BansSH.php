<?php


class BansSH
{
    public int $id;
    public string $bannableType;
    public int $bannableId;
    public string $createdByType;
    public string $createdById;
    public string $comment;
    public \DateTime $expiredAt;
    public \DateTime $deletedAt;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
}