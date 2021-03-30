<?php


final class Manager
{
    public string $id;
    public string $uuid;
    // AD
    public string $storagePath;
    public string $storageUrlPath;
    public bool   $active;
    public string $name;
    public string $skype;
    public string $photo;
    public string $email;
    // TODO: Move relation to links
    public string $userId;
    public User $user;

    // TODO: move to manager settins;
    public array  $countries;
}