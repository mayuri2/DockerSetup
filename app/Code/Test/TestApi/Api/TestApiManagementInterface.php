<?php

namespace Test\TestApi\Api;

interface TestApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Test\TestApi\Api\Data\TestApiInterface
     */
    public function getApiData($id);
}