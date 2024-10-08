<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to start manual transfer runs.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest</code>
 */
class StartManualTransferRunsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Transfer configuration name in the form:
     * `projects/{project_id}/transferConfigs/{config_id}` or
     * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    protected $time;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Transfer configuration name in the form:
     *           `projects/{project_id}/transferConfigs/{config_id}` or
     *           `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange $requested_time_range
     *           A time_range start and end timestamp for historical data files or reports
     *           that are scheduled to be transferred by the scheduled transfer run.
     *           requested_time_range must be a past time and cannot include future time
     *           values.
     *     @type \Google\Protobuf\Timestamp $requested_run_time
     *           A run_time timestamp for historical data files or reports
     *           that are scheduled to be transferred by the scheduled transfer run.
     *           requested_run_time must be a past time and cannot include future time
     *           values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Transfer configuration name in the form:
     * `projects/{project_id}/transferConfigs/{config_id}` or
     * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Transfer configuration name in the form:
     * `projects/{project_id}/transferConfigs/{config_id}` or
     * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A time_range start and end timestamp for historical data files or reports
     * that are scheduled to be transferred by the scheduled transfer run.
     * requested_time_range must be a past time and cannot include future time
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest.TimeRange requested_time_range = 3;</code>
     * @return \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange|null
     */
    public function getRequestedTimeRange()
    {
        return $this->readOneof(3);
    }

    public function hasRequestedTimeRange()
    {
        return $this->hasOneof(3);
    }

    /**
     * A time_range start and end timestamp for historical data files or reports
     * that are scheduled to be transferred by the scheduled transfer run.
     * requested_time_range must be a past time and cannot include future time
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest.TimeRange requested_time_range = 3;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange $var
     * @return $this
     */
    public function setRequestedTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest\TimeRange::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A run_time timestamp for historical data files or reports
     * that are scheduled to be transferred by the scheduled transfer run.
     * requested_run_time must be a past time and cannot include future time
     * values.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_run_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRequestedRunTime()
    {
        return $this->readOneof(4);
    }

    public function hasRequestedRunTime()
    {
        return $this->hasOneof(4);
    }

    /**
     * A run_time timestamp for historical data files or reports
     * that are scheduled to be transferred by the scheduled transfer run.
     * requested_run_time must be a past time and cannot include future time
     * values.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_run_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRequestedRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->whichOneof("time");
    }

}

