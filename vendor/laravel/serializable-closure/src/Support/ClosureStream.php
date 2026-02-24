<?php

namespace Laravel\SerializableClosure\Support;

#[\AllowDynamicProperties]
class ClosureStream
{
    /**
     * The stream protocol.
     *
     * @var string
     */
    const STREAM_PROTO = 'laravel-serializable-closure';

    /**
     * Checks if this stream is registered.
     *
     * @var bool
     */
    protected static $isRegistered = false;

    /**
     * The stream content.
     *
     * @var string
     */
    protected $content;

    /**
     * The stream content.
     *
     * @var int
     */
    protected $length;

    /**
     * The stream pointer.
     *
     * @var int
     */
    protected $pointer = 0;

    /**
     * Opens file or URL.
     *
     * @param  string  $path
     * @param  string  $mode
     * @param  string  $options
     * @param  string|null  $opened_path
     * @return bool
     */
    public function stream_open($path, $mode, $options, &$opened_path)
    {
        $this->content = "
