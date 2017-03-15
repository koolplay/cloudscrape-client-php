<?php

class CloudScrapeExecutionDTO {
    const QUEUED = 'QUEUED';
    const PENDING = 'PENDING';
    const RUNNING = 'RUNNING';
    const FAILED = 'FAILED';
    const STOPPED = 'STOPPED';
    const OK = 'OK';

    /**
     * The ID of the execution
     * @var string
     */
    public $_id;

    /**
     * The ID of robot that did the execution
     * @var string
     */
    public $robotId;

    /**
     * The ID of run that did the execution
     * @var string
     */
    public $runId;

    /**
     * State of the executions. See const definitions on class to see options
     * @var string
     */
    public $state;

    /**
     * Time the executions was started - in milliseconds since unix epoch
     * @var int
     */
    public $starts;

    /**
     * Time the executions finished - in milliseconds since unix epoch.
     * Null if execution has not yet finished.
     * @var int
     */
    public $finished;

}

