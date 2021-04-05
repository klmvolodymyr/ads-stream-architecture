<?php


class Referrals
{
    public int $id;
    public User $referrer;
    public string $referrerClass;
    public User $referral;
    public string $referralClass;
    public int $referralPercent;
}