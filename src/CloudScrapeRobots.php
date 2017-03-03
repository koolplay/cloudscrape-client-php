<?php

class CloudScrapeRobots {

    /**
     * @var CloudScrapeClient
     */
    private $client;

    function __construct(CloudScrapeClient $client) {
        $this->client = $client;
    }

    /**
     * @param CloudScrapeRobotDTO  $robot
     * @return CloudScrapeRobotDTO
     */
    public function create($robot) {
        return $this->client->requestJson("robots", 'POST', $robot );
    }

    /**
     * @param string               $robotId
     * @param CloudScrapeRobotDTO  $robot
     * @return CloudScrapeRobotDTO
     */
    private function _update($robotId, $robot) {
    	if( $robotId && is_object($robot) ){
			$robot->robotId = $robotId;
		}
    	if( $robotId && is_array($robot) ){
			$robot['robotId'] = $robotId;
		}
        return $this->client->requestJson("robots", 'PUT', $robot );
    }

    /**
     * @param string  $robotId
     * @param array   $updates
     * @return CloudScrapeRobotDTO
     */
    public function update($robotId, $updates) {
    	$robot = $this->get($robotId);
    	foreach( $updates as $key => $value ){
			$robot->$key = $value;
		}
        return $this->_update( $robotId, $robot );
    }

    /**
     * @param string $robotId
     * @return CloudScrapeRobotDTO
     */
    public function get($robotId) {
        return $this->client->requestJson("robots/$robotId");
    }

    /**
     * Permanently delete robot
     * @param string $robotId
     * @return bool
     */
    public function remove($robotId) {
        return $this->client->requestBoolean("robots/$robotId", 'DELETE');
    }
}

