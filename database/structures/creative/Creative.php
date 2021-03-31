<?php


class Creative
{
    // THUMBNAIL_DIMENSION
    // NAME_SIZE
    // DELETED_STATUS
    // ACTIVE_STATUS
    // DUBLICATE_STATUS

    public File $file;
    public string $checkSum;
    public string $fileType;
    public int $status;
    public \DateTime $updatedAt;
    public \DateTime $createdAt;
    public Language $language;
    public int $height;
    public int $width;
    public int $size;
    public string $name;
    public string $fileName;
    public string $path;
    public Application $application;
    public int $id;
    public Ad $ad;
    public int $adId;
    public string $mediaType;
    public string $creativeType;
    public int $fileSize;
    public string $htmlCode;
    public string $cpn;
    public TargetingCriteria $targetingCriteria;
    public CreativeOptions $creativeOptions;

}