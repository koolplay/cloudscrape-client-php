<?php

class CloudScrapeRobotDTO {
    /**
     * The ID of the robot
     * @var string
     */
    public $_id;

    /**
     * Name of the robot
     * @var string
     */
    public $name;

    /**
     * Tags of the robot
     * @var array
     */
    public $tags;

    /**
     * Inputs of the robot
     * @var array
     */
    public $input;

    /**
     * Outputs of the robot
     * @var array
     */
    public $output;

    /**
     * Is the Robot with enabled Javascript
     * @var bool
     */
    public $javascriptEnabled;

    /**
     * Does the Robot auto load the images
     * @var bool
     */
    public $autoLoadImages;
	
	/**
	 * Steps of the robot
	 * @var array
	 */
	public $steps;
	
	/**
	 * First step of the robot
	 * @var string
	 */
	public $firstStep;
}
