<?php

namespace Printed\Bundle\Queue\EntityInterface;

/**
 * A queue task.
 */
interface QueueTaskInterface
{

    /**
     * The task is pending execution and should be sitting in the queue already.
     */
    const STATUS_PENDING = 1;

    /**
     * The task being run on a worker.
     */
    const STATUS_RUNNING = 2;

    /**
     * The task returned a successful response.
     */
    const STATUS_COMPLETE = 3;

    /**
     * The task returned a failed response or an exception was caught.
     * There may be data within the response error field.
     */
    const STATUS_FAILED = 4;

    /**
     * The task failed more than the allowed amount of times.
     * There may be data within the response error field but it will be historical.
     */
    const STATUS_FAILED_LIMIT_EXCEEDED = 5;

    /**
     * Get the identifier.
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Get the public identifier.
     *
     * @return string
     */
    public function getPublicId(): string;

    /**
     * @param string $id
     * @return $this
     */
    public function setPublicId(string $id);

    /**
     * @return string
     */
    public function getQueueName(): string;

    /**
     * @param string $queueName
     *
     * @return $this
     */
    public function setQueueName(string $queueName);

    /**
     * @return int
     */
    public function getStatus(): int;

    /**
     * @param int $status
     *
     * @return $this
     */
    public function setStatus(int $status);

    /**
     * @param int $status One of ::STATUS_*
     *
     * @return bool
     */
    public function isStatus(int $status): bool;

    /**
     * @return bool
     */
    public function isAnyFailedStatus(): bool;

    /**
     * @return int
     */
    public function getAttempts(): int;

    /**
     * @param int $attempts
     *
     * @return $this
     */
    public function setAttempts(int $attempts);

    /**
     * @return int|null
     */
    public function getProcessId();

    /**
     * @param int|null $pid
     *
     * @return $this
     */
    public function setProcessId(int $pid = null);

    /**
     * @return string
     */
    public function getPayloadClass(): string;

    /**
     * @param string $class
     *
     * @return $this
     */
    public function setPayloadClass(string $class);

    /**
     * @return array
     */
    public function getPayload(): array;

    /**
     * @param string $key
     * @return mixed|null
     */
    public function getPayloadDataItem(string $key);

    /**
     * @param string $key
     * @return mixed
     */
    public function getPayloadDataItemOrThrow(string $key);

    /**
     * @param array $payload
     *
     * @return $this
     */
    public function setPayload(array $payload);

    /**
     * @return array
     */
    public function getResponse(): array;

    /**
     * @param string $key
     * @return mixed|null
     */
    public function getResponseDataItem(string $key);

    /**
     * @param string $key
     * @return mixed
     */
    public function getResponseDataItemOrThrow(string $key);

    /**
     * @param array $response
     *
     * @return $this
     */
    public function setResponse(array $response);

    /**
     * @return array
     */
    public function getResponseError(): array;

    /**
     * @param string $class
     * @param string $message
     * @param array $stack
     *
     * @return $this
     */
    public function setResponseError(string $class, string $message, array $stack);

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDate(): \DateTimeInterface;

    /**
     * @param \DateTimeInterface $date
     *
     * @return $this
     */
    public function setCreatedDate(\DateTimeInterface $date);

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartedDate();

    /**
     * @param \DateTimeInterface $date
     *
     * @return $this
     */
    public function setStartedDate(\DateTimeInterface $date);

    /**
     * @return \DateTimeInterface|null
     */
    public function getCompletedDate();

    /**
     * @param \DateTimeInterface $date
     *
     * @return $this
     */
    public function setCompletedDate(\DateTimeInterface $date);

}
