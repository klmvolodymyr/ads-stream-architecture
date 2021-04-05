<?php


class BansSH
{
    public int $id;
    public string $bannableType;
    public string $bannableId;
    public string $createdByType;
    public string $createdById;
    public string $comment;
    public \DateTime $expiredAt;
    public \DateTime $deletedAt;
    public \DateTime $updatedAt;
}
