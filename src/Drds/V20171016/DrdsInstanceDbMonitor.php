<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getDbName()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDrdsInstanceId()
 * @method string getKey()
 */
class DrdsInstanceDbMonitor extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Drds';

    /**
     * @var string
     */
    public $version = '2017-10-16';

    /**
     * @var string
     */
    public $action = 'DrdsInstanceDbMonitor';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $dbName
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withDbName() instead.
     *
     */
    public function setDbName($dbName)
    {
        return $this->withDbName($dbName);
    }

    /**
     * @param string $dbName
     *
     * @return $this
     */
    public function withDbName($dbName)
    {
        $this->data['DbName']             = $dbName;
        $this->options['query']['DbName'] = $dbName;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime']             = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime']             = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withDrdsInstanceId() instead.
     *
     */
    public function setDrdsInstanceId($drdsInstanceId)
    {
        return $this->withDrdsInstanceId($drdsInstanceId);
    }

    /**
     * @param string $drdsInstanceId
     *
     * @return $this
     */
    public function withDrdsInstanceId($drdsInstanceId)
    {
        $this->data['DrdsInstanceId']             = $drdsInstanceId;
        $this->options['query']['DrdsInstanceId'] = $drdsInstanceId;

        return $this;
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function withKey($key)
    {
        $this->data['Key']             = $key;
        $this->options['query']['Key'] = $key;

        return $this;
    }
}
