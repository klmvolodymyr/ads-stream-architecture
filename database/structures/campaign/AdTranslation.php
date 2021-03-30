<?php


class AdTranslation
{
    public int $id;
    public string $title;
    public string $instruction; //description
    public Language $language; //language
    public Ad $ad; // (inversed by translate)
}