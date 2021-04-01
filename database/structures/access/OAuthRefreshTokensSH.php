<?php


class OAuthRefreshTokensSH
{
    public int $id;
    public string $accessTokenId;
    public bool $revoked;
    public \DateTime $expiresAt;
}