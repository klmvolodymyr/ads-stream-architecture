<?php


class Exchange
{
    public int $id;
    public \DateTime $date;
    public string $currencyCode;
    public int $size;
    public int $rate;
    public float $change;
    public float $rateForce;
}