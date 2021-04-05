<?php


class ApplicationTargeting
{
    public int $id;
    public int $appId;
    public int $targetingId;
    public Application $application;
    public array $targeting;
}