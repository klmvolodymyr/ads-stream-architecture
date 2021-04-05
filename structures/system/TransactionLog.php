<?php


class TransactionLog
{
    public string $transactionId;
    public string $field;
    public string $originValue;
    public string $newValue;
    public \DateTime $date;
    public int $id;
}