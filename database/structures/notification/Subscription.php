<?php


class Subscription
{
    public User $user;
    public string $userClass;
    public Mailing $mailing;
    public string $mailingClass;
    public int $period;
    public \DateTime $created;

}