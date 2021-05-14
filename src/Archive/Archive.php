<?php
declare(strict_types=1);

namespace Vonage\Video\Archive;

class Archive
{
    /**
     * Application the archive is associated with
     * @var string
     */
    protected $applicationId;

    /**
     * Unix Timestamp the archive was created
     * @var int
     */
    protected $createdAt;

    /**
     * Length in seconds of the archive
     * @var int
     */
    protected $duration;

    /**
     * Event type of this message
     * @var string
     */
    protected $event;

    /**
     * Whether the archive has an audio stream
     * @var bool
     */
    protected $hasAudio;

    /**
     * Whether the archive has a video stream
     * @var bool
     */
    protected $hasVideo;

    /**
     * ID of the archive
     * @var string
     */
    protected $id;

    /**
     * Name of the archive
     * @var string
     */
    protected $name;

    /**
     * Output mode of the video
     * @var string
     */
    protected $outputMode;

    /**
     * Password of the archive file
     * @var string
     */
    protected $password;

    /**
     * Reason archive was stopped
     * @var string
     */
    protected $reason;

    /**
     * Resolution of the archived video
     * @var string
     */
    protected $resolution;

    /**
     * Session the archive is associated with
     * @var string
     */
    protected $sessionId;
    
    /**
     * SHA256 Hash of the video file
     * @var string
     */
    protected $sha256sum;

    /**
     * Size of the archive file
     * @var int
     */
    protected $size;

    /**
     * Current status of the archive
     * @var string
     */
    protected $status;

    /**
     * Unix timestamp of the last time this archive was updated
     * @var int
     */
    protected $updatedAt;

    /**
     * Download URL of the archive, if available
     * @var string
     */
    protected $url;

    public function __construct(array $data = [])
    {
        $this->id = $data['id'];
        $this->status = $data['status'];
        $this->name = $data['name'];
        $this->reason = $data['reason'];
        $this->sessionId = $data['sessionId'];
        $this->applicationId = $data['applicationId'];
        $this->createdAt = $data['createdAt'];
        $this->size = $data['size'];
        $this->duration = $data['duration'];
        $this->outputMode = $data['outputMode'];
        $this->hasAudio = $data['hasAudio'];
        $this->hasVideo = $data['hasVideo'];
        $this->sha256sum = $data['sha256sum'];
        $this->password = $data['password'];
        $this->updatedAt = $data['updatedAt'];
        $this->resolution = $data['resolution'];
        $this->event = $data['event'];
        $this->url = $data['url'];
    }

    public function getApplicationId()
    {
        return $this->applicationId;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getHasAudio(): bool
    {
        return $this->hasAudio;
    }

    public function getHasVideo(): bool
    {
        return $this->hasVideo;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOutputMode(): string
    {
        return $this->outputMode;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function getResolution(): string
    {
        return $this->resolution;
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function getSha256Sum(): ?string
    {
        return $this->sha256sum;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }
}
