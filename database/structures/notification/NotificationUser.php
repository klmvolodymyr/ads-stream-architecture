<?php


class NotificationUser
{
    public int $id;
    public Notification $notification;
    public User $user;
    public \DateTime $created;
    public string $hash;
}