<?php


class AuthRequestsSH
{
    public int $id;
    public string $secret;
    public int $userId;
    public string $adminUserId;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public \DateTime $deletedAt;
}