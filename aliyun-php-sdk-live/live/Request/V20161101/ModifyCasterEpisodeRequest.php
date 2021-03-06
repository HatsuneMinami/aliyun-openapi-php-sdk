<?php

namespace live\Request\V20161101;

/**
 * Request of ModifyCasterEpisode
 *
 * @method string getResourceId()
 * @method array getComponentIds()
 * @method string getSwitchType()
 * @method string getCasterId()
 * @method string getEpisodeName()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getEpisodeId()
 */
class ModifyCasterEpisodeRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'live',
            '2016-11-01',
            'ModifyCasterEpisode',
            'live'
        );
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param array $componentIds
     *
     * @return $this
     */
    public function setComponentIds(array $componentIds)
    {
        $this->requestParameters['ComponentIds'] = $componentIds;
        foreach ($componentIds as $i => $iValue) {
            $this->queryParameters['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $switchType
     *
     * @return $this
     */
    public function setSwitchType($switchType)
    {
        $this->requestParameters['SwitchType'] = $switchType;
        $this->queryParameters['SwitchType'] = $switchType;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        $this->requestParameters['CasterId'] = $casterId;
        $this->queryParameters['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $episodeName
     *
     * @return $this
     */
    public function setEpisodeName($episodeName)
    {
        $this->requestParameters['EpisodeName'] = $episodeName;
        $this->queryParameters['EpisodeName'] = $episodeName;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $episodeId
     *
     * @return $this
     */
    public function setEpisodeId($episodeId)
    {
        $this->requestParameters['EpisodeId'] = $episodeId;
        $this->queryParameters['EpisodeId'] = $episodeId;

        return $this;
    }
}
