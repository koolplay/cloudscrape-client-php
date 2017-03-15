<?php

class CloudScrapeRunDTO {
    /**
     * The ID of the run
     * @var string
     */
    public $_id;
    
    /**
     * The robotID of the run
     * @var string
     */
    public $robotId;

    /**
     * Name of the run
     * @var string
     */
    public $name;

    /**
     * Tags of the run
     * @var array
     */
    public $tags;

    /**
     * Proxies of the run
     * @var array
     */
    public $proxies;

    /**
     * Screenshot mode of the run
     * @var string
     */
    public $screenshotMode;

    /**
     * Amount of allowed concurrent theads of the run
     * @var string
     */
    public $threads;
}
