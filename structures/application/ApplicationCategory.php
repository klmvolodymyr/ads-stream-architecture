<?php


class ApplicationCategory
{
    public int $id;
    public string $name;
    public int $parentId;
    public string $store;
    public string $children;
    public array $applications;
}