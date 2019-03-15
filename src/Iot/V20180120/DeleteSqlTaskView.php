<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getId()
 * @method string getTaskId()
 */
class DeleteSqlTaskView extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'DeleteSqlTaskView';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $id
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     */
    public function setId($id)
    {
        return $this->withId($id);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id']             = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId']             = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }
}
