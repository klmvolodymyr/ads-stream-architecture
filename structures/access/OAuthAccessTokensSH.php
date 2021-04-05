<?php


class OAuthAccessTokensSH
{
    public int $id;
    public int $userId;
    public int $clientId;
    public string $name;
    public int $scopes;
    public bool $revoked;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
    public \DateTime $expiresAt;

}