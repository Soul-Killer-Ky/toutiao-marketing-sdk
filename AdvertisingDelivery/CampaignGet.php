<?php
/**
 * 获取广告组
 * 获取广告组列表，可指定fields获取每个广告组的基本元素。
 * https://ad.toutiao.com/openapi/doc/index.html?id=153
 * User: zhangwenzong
 * Date: 2019/1/17
 * Time: 14:28
 */

namespace AdvertisingDelivery;

use core\Profile\RpcRequest;

class CampaignGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/campaign/get/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * 页数，默认值为1
     */
    protected $page;

    /**
     * 页面大小， 默认值为10
     */
    protected $page_size;

    /**
     * 过滤条件，若此字段不传，或传空则视为无限制条件(传json字符串)
     */
    protected $filtering;

    /**
     * 【过滤条件】广告组ID过滤，数组
     */
    protected $ids;

    /**
     * 【过滤条件】广告组名称过滤，支持模糊搜索
     */
    protected $campaign_name;

    /**
     * 【过滤条件】广告组推广目的过滤，详见【附录-推广目的类型】
     */
    protected $landing_type;

    /**
     * 【过滤条件】广告组状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告组状态】
     */
    protected $status;

    /**
     * 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典允许值:
     * "id", "name", "budget", "budget_mode", "landing_type","status","modify_time"
     */
    protected $fields;

    public function setAdvertiserId($value)
    {
        $this->params['advertiser_id'] = $value;
        $this->advertiser_id = $value;
        return $this;
    }

    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    public function setPage($value)
    {
        $this->params['page'] = $value;
        $this->page = $value;
        return $this;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($value)
    {
        $this->params['page_size'] = $value;
        $this->page_size = $value;
        return $this;
    }

    public function getPageSize()
    {
        return $this->page_size;
    }

    public function setFiltering($value)
    {
        $this->params['filtering'] = $value;
        $this->filtering = $value;
        return $this;
    }

    public function getFiltering()
    {
        return $this->filtering;
    }

    public function setIds(array $value)
    {
        $this->params['filtering']['ids'] = $value;
        $this->ids = $value;
        return $this;
    }

    public function getIds()
    {
        return $this->ids;
    }

    public function setCampaignName($value)
    {
        $this->params['filtering']['campaign_name'] = $value;
        $this->campaign_name = $value;
        return $this;
    }

    public function getCampainName()
    {
        return $this->campaign_name;
    }

    public function setLandingType($value)
    {
        $this->params['filtering']['landing_type'] = $value;
        $this->landing_type = $value;
        return $this;
    }

    public function getLandingType()
    {
        return $this->landing_type;
    }

    public function setStatus($value)
    {
        $this->params['filtering']['status'] = $value;
        $this->status = $value;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setFields($value)
    {
        $this->params['fields'] = $value;
        $this->fields = $value;
        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }
}
