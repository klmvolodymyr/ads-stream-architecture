<?php


class OAuthAuthCodesSH
{
    public int $id;
    public int $userId;
    public int $clientId;
    public string $scopes;
    public bool $revoked;
    public \DateTime $expiresAt;
}