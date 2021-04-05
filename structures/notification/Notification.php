<?php


class Notification
{
    public int $id;
    public int $triggerId;
    public string $name;
    public string $type; // email, sms,alert, bage, push
    public string $subType; // error, warning, info
    public string $userType; // Advertiser, Publisher, Manager
    public string $emailTemplate;
    public string $status;
    public string $title;
    public string $message;
}