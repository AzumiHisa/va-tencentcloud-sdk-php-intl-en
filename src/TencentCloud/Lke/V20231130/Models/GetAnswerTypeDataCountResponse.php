<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAnswerTypeDataCount response structure.
 *
 * @method integer getTotal() Obtain Total number of messages.
 * @method void setTotal(integer $Total) Set Total number of messages.
 * @method integer getModelReplyCount() Obtain Total number of direct responses by the large model.
 * @method void setModelReplyCount(integer $ModelReplyCount) Set Total number of direct responses by the large model.
 * @method integer getKnowledgeCount() Obtain Total number of knowledge-based responses.
 * @method void setKnowledgeCount(integer $KnowledgeCount) Set Total number of knowledge-based responses.
 * @method integer getTaskFlowCount() Obtain Total number of task flow responses.
 * @method void setTaskFlowCount(integer $TaskFlowCount) Set Total number of task flow responses.
 * @method integer getSearchEngineCount() Obtain Total number of search engine responses.
 * @method void setSearchEngineCount(integer $SearchEngineCount) Set Total number of search engine responses.
 * @method integer getImageUnderstandingCount() Obtain Total number of image understanding responses.
 * @method void setImageUnderstandingCount(integer $ImageUnderstandingCount) Set Total number of image understanding responses.
 * @method integer getRejectCount() Obtain Total number of responses to rejected questions.
 * @method void setRejectCount(integer $RejectCount) Set Total number of responses to rejected questions.
 * @method integer getSensitiveCount() Obtain Total number of sensitive responses.
 * @method void setSensitiveCount(integer $SensitiveCount) Set Total number of sensitive responses.
 * @method integer getConcurrentLimitCount() Obtain Total number of responses for concurrency exceeded.
 * @method void setConcurrentLimitCount(integer $ConcurrentLimitCount) Set Total number of responses for concurrency exceeded.
 * @method integer getUnknownIssuesCount() Obtain Total number of unknown question responses.
 * @method void setUnknownIssuesCount(integer $UnknownIssuesCount) Set Total number of unknown question responses.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetAnswerTypeDataCountResponse extends AbstractModel
{
    /**
     * @var integer Total number of messages.
     */
    public $Total;

    /**
     * @var integer Total number of direct responses by the large model.
     */
    public $ModelReplyCount;

    /**
     * @var integer Total number of knowledge-based responses.
     */
    public $KnowledgeCount;

    /**
     * @var integer Total number of task flow responses.
     */
    public $TaskFlowCount;

    /**
     * @var integer Total number of search engine responses.
     */
    public $SearchEngineCount;

    /**
     * @var integer Total number of image understanding responses.
     */
    public $ImageUnderstandingCount;

    /**
     * @var integer Total number of responses to rejected questions.
     */
    public $RejectCount;

    /**
     * @var integer Total number of sensitive responses.
     */
    public $SensitiveCount;

    /**
     * @var integer Total number of responses for concurrency exceeded.
     */
    public $ConcurrentLimitCount;

    /**
     * @var integer Total number of unknown question responses.
     */
    public $UnknownIssuesCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of messages.
     * @param integer $ModelReplyCount Total number of direct responses by the large model.
     * @param integer $KnowledgeCount Total number of knowledge-based responses.
     * @param integer $TaskFlowCount Total number of task flow responses.
     * @param integer $SearchEngineCount Total number of search engine responses.
     * @param integer $ImageUnderstandingCount Total number of image understanding responses.
     * @param integer $RejectCount Total number of responses to rejected questions.
     * @param integer $SensitiveCount Total number of sensitive responses.
     * @param integer $ConcurrentLimitCount Total number of responses for concurrency exceeded.
     * @param integer $UnknownIssuesCount Total number of unknown question responses.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ModelReplyCount",$param) and $param["ModelReplyCount"] !== null) {
            $this->ModelReplyCount = $param["ModelReplyCount"];
        }

        if (array_key_exists("KnowledgeCount",$param) and $param["KnowledgeCount"] !== null) {
            $this->KnowledgeCount = $param["KnowledgeCount"];
        }

        if (array_key_exists("TaskFlowCount",$param) and $param["TaskFlowCount"] !== null) {
            $this->TaskFlowCount = $param["TaskFlowCount"];
        }

        if (array_key_exists("SearchEngineCount",$param) and $param["SearchEngineCount"] !== null) {
            $this->SearchEngineCount = $param["SearchEngineCount"];
        }

        if (array_key_exists("ImageUnderstandingCount",$param) and $param["ImageUnderstandingCount"] !== null) {
            $this->ImageUnderstandingCount = $param["ImageUnderstandingCount"];
        }

        if (array_key_exists("RejectCount",$param) and $param["RejectCount"] !== null) {
            $this->RejectCount = $param["RejectCount"];
        }

        if (array_key_exists("SensitiveCount",$param) and $param["SensitiveCount"] !== null) {
            $this->SensitiveCount = $param["SensitiveCount"];
        }

        if (array_key_exists("ConcurrentLimitCount",$param) and $param["ConcurrentLimitCount"] !== null) {
            $this->ConcurrentLimitCount = $param["ConcurrentLimitCount"];
        }

        if (array_key_exists("UnknownIssuesCount",$param) and $param["UnknownIssuesCount"] !== null) {
            $this->UnknownIssuesCount = $param["UnknownIssuesCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
