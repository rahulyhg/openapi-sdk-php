<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getFuncFilter()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getFuncId()
 * @method string getPageNumber()
 * @method string getDomainStatus()
 * @method string getDomainSearchType()
 * @method string getCheckDomainShow()
 * @method string getResourceGroupId()
 * @method string getSecurityToken()
 * @method string getCdnType()
 * @method string getPageSize()
 */
class DescribeVodUserDomains extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'DescribeVodUserDomains';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $funcFilter
     *
     * @return $this
     */
    public function withFuncFilter($funcFilter)
    {
        $this->data['FuncFilter']             = $funcFilter;
        $this->options['query']['FuncFilter'] = $funcFilter;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName']             = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $funcId
     *
     * @return $this
     */
    public function withFuncId($funcId)
    {
        $this->data['FuncId']             = $funcId;
        $this->options['query']['FuncId'] = $funcId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber']             = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $domainStatus
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withDomainStatus() instead.
     *
     */
    public function setDomainStatus($domainStatus)
    {
        return $this->withDomainStatus($domainStatus);
    }

    /**
     * @param string $domainStatus
     *
     * @return $this
     */
    public function withDomainStatus($domainStatus)
    {
        $this->data['DomainStatus']             = $domainStatus;
        $this->options['query']['DomainStatus'] = $domainStatus;

        return $this;
    }

    /**
     * @param string $domainSearchType
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withDomainSearchType() instead.
     *
     */
    public function setDomainSearchType($domainSearchType)
    {
        return $this->withDomainSearchType($domainSearchType);
    }

    /**
     * @param string $domainSearchType
     *
     * @return $this
     */
    public function withDomainSearchType($domainSearchType)
    {
        $this->data['DomainSearchType']             = $domainSearchType;
        $this->options['query']['DomainSearchType'] = $domainSearchType;

        return $this;
    }

    /**
     * @param string $checkDomainShow
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withCheckDomainShow() instead.
     *
     */
    public function setCheckDomainShow($checkDomainShow)
    {
        return $this->withCheckDomainShow($checkDomainShow);
    }

    /**
     * @param string $checkDomainShow
     *
     * @return $this
     */
    public function withCheckDomainShow($checkDomainShow)
    {
        $this->data['CheckDomainShow']             = $checkDomainShow;
        $this->options['query']['CheckDomainShow'] = $checkDomainShow;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId']             = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken']             = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $cdnType
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withCdnType() instead.
     *
     */
    public function setCdnType($cdnType)
    {
        return $this->withCdnType($cdnType);
    }

    /**
     * @param string $cdnType
     *
     * @return $this
     */
    public function withCdnType($cdnType)
    {
        $this->data['CdnType']             = $cdnType;
        $this->options['query']['CdnType'] = $cdnType;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize']             = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }
}
