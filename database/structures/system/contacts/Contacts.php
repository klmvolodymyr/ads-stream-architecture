<?php


class Contacts
{
    public int $id;
    public string $status;
    public string $email;
    public string $name;
    public string $topic;
    public string $message;
    public \DateTime $createdAt;
    public \DateTime $updatedAt;
}