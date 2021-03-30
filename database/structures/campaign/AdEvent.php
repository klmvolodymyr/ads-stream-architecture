<?php


class AdEvent
{
    public int $id;
    public string $name;
    public string $parameter;
    public int $priority;
    public int $mandatory;
    public Ad $ad;
}