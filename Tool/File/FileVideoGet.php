<?php
/**
 * 获取视频素材库
 * https://ad.toutiao.com/openapi/doc/index.html?id=257
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 11:42
 */

namespace Tool\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileVideoGet extends RpcRequest
{
    protected $url = '/2/file/video/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 图片过滤条件
     * 允许值: "width", "height", "ratio", "video_ids"
     * @var array $filtering
     */
    protected $filtering;

    /**
     * 页码，默认值1
     * @var int $page
     */
    protected $page;

    /**
     * 页面大小，默认值20
     * @var int $page_size
     */
    protected $page_size;

    /**
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiser_id;
    }

    /**
     * @param string $advertiser_id
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->params["advertiser_id"] = $advertiser_id;
        $this->advertiser_id = $advertiser_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getFiltering()
    {
        return $this->filtering;
    }

    /**
     * @param array $filtering
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->params["filtering"] = $filtering;
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->params["page"] = $page;
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param int $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->params["page_size"] = $page_size;
        $this->page_size = $page_size;
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}