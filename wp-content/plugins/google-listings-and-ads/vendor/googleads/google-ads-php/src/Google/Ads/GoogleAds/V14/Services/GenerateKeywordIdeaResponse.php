<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [KeywordPlanIdeaService.GenerateKeywordIdeas][google.ads.googleads.v14.services.KeywordPlanIdeaService.GenerateKeywordIdeas].
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.GenerateKeywordIdeaResponse</code>
 */
class GenerateKeywordIdeaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of generating keyword ideas.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.GenerateKeywordIdeaResult results = 1;</code>
     */
    private $results;
    /**
     * The aggregate metrics for all keyword ideas.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.KeywordPlanAggregateMetricResults aggregate_metric_results = 4;</code>
     */
    protected $aggregate_metric_results = null;
    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request.
     * `next_page_token` is not returned for the last page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Total number of results available.
     *
     * Generated from protobuf field <code>int64 total_size = 3;</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V14\Services\GenerateKeywordIdeaResult>|\Google\Protobuf\Internal\RepeatedField $results
     *           Results of generating keyword ideas.
     *     @type \Google\Ads\GoogleAds\V14\Common\KeywordPlanAggregateMetricResults $aggregate_metric_results
     *           The aggregate metrics for all keyword ideas.
     *     @type string $next_page_token
     *           Pagination token used to retrieve the next page of results.
     *           Pass the content of this string as the `page_token` attribute of
     *           the next request.
     *           `next_page_token` is not returned for the last page.
     *     @type int|string $total_size
     *           Total number of results available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of generating keyword ideas.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.GenerateKeywordIdeaResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Results of generating keyword ideas.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.GenerateKeywordIdeaResult results = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Services\GenerateKeywordIdeaResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Services\GenerateKeywordIdeaResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * The aggregate metrics for all keyword ideas.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.KeywordPlanAggregateMetricResults aggregate_metric_results = 4;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\KeywordPlanAggregateMetricResults|null
     */
    public function getAggregateMetricResults()
    {
        return $this->aggregate_metric_results;
    }

    public function hasAggregateMetricResults()
    {
        return isset($this->aggregate_metric_results);
    }

    public function clearAggregateMetricResults()
    {
        unset($this->aggregate_metric_results);
    }

    /**
     * The aggregate metrics for all keyword ideas.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.KeywordPlanAggregateMetricResults aggregate_metric_results = 4;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\KeywordPlanAggregateMetricResults $var
     * @return $this
     */
    public function setAggregateMetricResults($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\KeywordPlanAggregateMetricResults::class);
        $this->aggregate_metric_results = $var;

        return $this;
    }

    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request.
     * `next_page_token` is not returned for the last page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request.
     * `next_page_token` is not returned for the last page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Total number of results available.
     *
     * Generated from protobuf field <code>int64 total_size = 3;</code>
     * @return int|string
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * Total number of results available.
     *
     * Generated from protobuf field <code>int64 total_size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_size = $var;

        return $this;
    }

}

