<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Messaging\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ServiceOptions
{
    /**
     * @param string  $inboundRequestUrl     The inbound_request_url
     * @param string  $inboundMethod         The inbound_method
     * @param string  $fallbackUrl           The fallback_url
     * @param string  $fallbackMethod        The fallback_method
     * @param string  $statusCallback        The status_callback
     * @param boolean $stickySender          The sticky_sender
     * @param boolean $mmsConverter          The mms_converter
     * @param boolean $smartEncoding         The smart_encoding
     * @param string  $scanMessageContent    The scan_message_content
     * @param boolean $fallbackToLongCode    The fallback_to_long_code
     * @param boolean $areaCodeGeomatch      The area_code_geomatch
     * @param integer $validityPeriod        The validity_period
     * @param boolean $synchronousValidation The synchronous_validation
     *
     * @return CreateServiceOptions Options builder
     */
    public static function create(
        $inboundRequestUrl = Values::NONE,
        $inboundMethod = Values::NONE,
        $fallbackUrl = Values::NONE,
        $fallbackMethod = Values::NONE,
        $statusCallback = Values::NONE,
        $stickySender = Values::NONE,
        $mmsConverter = Values::NONE,
        $smartEncoding = Values::NONE,
        $scanMessageContent = Values::NONE,
        $fallbackToLongCode = Values::NONE,
        $areaCodeGeomatch = Values::NONE,
        $validityPeriod = Values::NONE,
        $synchronousValidation = Values::NONE
    ) {
        return new CreateServiceOptions($inboundRequestUrl, $inboundMethod, $fallbackUrl, $fallbackMethod, $statusCallback, $stickySender, $mmsConverter, $smartEncoding, $scanMessageContent, $fallbackToLongCode, $areaCodeGeomatch, $validityPeriod, $synchronousValidation);
    }

    /**
     * @param string  $friendlyName          The friendly_name
     * @param string  $inboundRequestUrl     The inbound_request_url
     * @param string  $inboundMethod         The inbound_method
     * @param string  $fallbackUrl           The fallback_url
     * @param string  $fallbackMethod        The fallback_method
     * @param string  $statusCallback        The status_callback
     * @param boolean $stickySender          The sticky_sender
     * @param boolean $mmsConverter          The mms_converter
     * @param boolean $smartEncoding         The smart_encoding
     * @param string  $scanMessageContent    The scan_message_content
     * @param boolean $fallbackToLongCode    The fallback_to_long_code
     * @param boolean $areaCodeGeomatch      The area_code_geomatch
     * @param integer $validityPeriod        The validity_period
     * @param boolean $synchronousValidation The synchronous_validation
     *
     * @return UpdateServiceOptions Options builder
     */
    public static function update(
        $friendlyName = Values::NONE,
        $inboundRequestUrl = Values::NONE,
        $inboundMethod = Values::NONE,
        $fallbackUrl = Values::NONE,
        $fallbackMethod = Values::NONE,
        $statusCallback = Values::NONE,
        $stickySender = Values::NONE,
        $mmsConverter = Values::NONE,
        $smartEncoding = Values::NONE,
        $scanMessageContent = Values::NONE,
        $fallbackToLongCode = Values::NONE,
        $areaCodeGeomatch = Values::NONE,
        $validityPeriod = Values::NONE,
        $synchronousValidation = Values::NONE
    ) {
        return new UpdateServiceOptions($friendlyName, $inboundRequestUrl, $inboundMethod, $fallbackUrl, $fallbackMethod, $statusCallback, $stickySender, $mmsConverter, $smartEncoding, $scanMessageContent, $fallbackToLongCode, $areaCodeGeomatch, $validityPeriod,
            $synchronousValidation);
    }
}

class CreateServiceOptions extends Options
{
    /**
     * @param string  $inboundRequestUrl     The inbound_request_url
     * @param string  $inboundMethod         The inbound_method
     * @param string  $fallbackUrl           The fallback_url
     * @param string  $fallbackMethod        The fallback_method
     * @param string  $statusCallback        The status_callback
     * @param boolean $stickySender          The sticky_sender
     * @param boolean $mmsConverter          The mms_converter
     * @param boolean $smartEncoding         The smart_encoding
     * @param string  $scanMessageContent    The scan_message_content
     * @param boolean $fallbackToLongCode    The fallback_to_long_code
     * @param boolean $areaCodeGeomatch      The area_code_geomatch
     * @param integer $validityPeriod        The validity_period
     * @param boolean $synchronousValidation The synchronous_validation
     */
    public function __construct(
        $inboundRequestUrl = Values::NONE,
        $inboundMethod = Values::NONE,
        $fallbackUrl = Values::NONE,
        $fallbackMethod = Values::NONE,
        $statusCallback = Values::NONE,
        $stickySender = Values::NONE,
        $mmsConverter = Values::NONE,
        $smartEncoding = Values::NONE,
        $scanMessageContent = Values::NONE,
        $fallbackToLongCode = Values::NONE,
        $areaCodeGeomatch = Values::NONE,
        $validityPeriod = Values::NONE,
        $synchronousValidation = Values::NONE
    ) {
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        $this->options['inboundMethod'] = $inboundMethod;
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['fallbackMethod'] = $fallbackMethod;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['stickySender'] = $stickySender;
        $this->options['mmsConverter'] = $mmsConverter;
        $this->options['smartEncoding'] = $smartEncoding;
        $this->options['scanMessageContent'] = $scanMessageContent;
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        $this->options['validityPeriod'] = $validityPeriod;
        $this->options['synchronousValidation'] = $synchronousValidation;
    }

    /**
     * The inbound_request_url
     *
     * @param string $inboundRequestUrl The inbound_request_url
     *
     * @return $this Fluent Builder
     */
    public function setInboundRequestUrl($inboundRequestUrl)
    {
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        return $this;
    }

    /**
     * The inbound_method
     *
     * @param string $inboundMethod The inbound_method
     *
     * @return $this Fluent Builder
     */
    public function setInboundMethod($inboundMethod)
    {
        $this->options['inboundMethod'] = $inboundMethod;
        return $this;
    }

    /**
     * The fallback_url
     *
     * @param string $fallbackUrl The fallback_url
     *
     * @return $this Fluent Builder
     */
    public function setFallbackUrl($fallbackUrl)
    {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }

    /**
     * The fallback_method
     *
     * @param string $fallbackMethod The fallback_method
     *
     * @return $this Fluent Builder
     */
    public function setFallbackMethod($fallbackMethod)
    {
        $this->options['fallbackMethod'] = $fallbackMethod;
        return $this;
    }

    /**
     * The status_callback
     *
     * @param string $statusCallback The status_callback
     *
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback)
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The sticky_sender
     *
     * @param boolean $stickySender The sticky_sender
     *
     * @return $this Fluent Builder
     */
    public function setStickySender($stickySender)
    {
        $this->options['stickySender'] = $stickySender;
        return $this;
    }

    /**
     * The mms_converter
     *
     * @param boolean $mmsConverter The mms_converter
     *
     * @return $this Fluent Builder
     */
    public function setMmsConverter($mmsConverter)
    {
        $this->options['mmsConverter'] = $mmsConverter;
        return $this;
    }

    /**
     * The smart_encoding
     *
     * @param boolean $smartEncoding The smart_encoding
     *
     * @return $this Fluent Builder
     */
    public function setSmartEncoding($smartEncoding)
    {
        $this->options['smartEncoding'] = $smartEncoding;
        return $this;
    }

    /**
     * The scan_message_content
     *
     * @param string $scanMessageContent The scan_message_content
     *
     * @return $this Fluent Builder
     */
    public function setScanMessageContent($scanMessageContent)
    {
        $this->options['scanMessageContent'] = $scanMessageContent;
        return $this;
    }

    /**
     * The fallback_to_long_code
     *
     * @param boolean $fallbackToLongCode The fallback_to_long_code
     *
     * @return $this Fluent Builder
     */
    public function setFallbackToLongCode($fallbackToLongCode)
    {
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        return $this;
    }

    /**
     * The area_code_geomatch
     *
     * @param boolean $areaCodeGeomatch The area_code_geomatch
     *
     * @return $this Fluent Builder
     */
    public function setAreaCodeGeomatch($areaCodeGeomatch)
    {
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        return $this;
    }

    /**
     * The validity_period
     *
     * @param integer $validityPeriod The validity_period
     *
     * @return $this Fluent Builder
     */
    public function setValidityPeriod($validityPeriod)
    {
        $this->options['validityPeriod'] = $validityPeriod;
        return $this;
    }

    /**
     * The synchronous_validation
     *
     * @param boolean $synchronousValidation The synchronous_validation
     *
     * @return $this Fluent Builder
     */
    public function setSynchronousValidation($synchronousValidation)
    {
        $this->options['synchronousValidation'] = $synchronousValidation;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Messaging.V1.CreateServiceOptions '.implode(' ', $options).']';
    }
}

class UpdateServiceOptions extends Options
{
    /**
     * @param string  $friendlyName          The friendly_name
     * @param string  $inboundRequestUrl     The inbound_request_url
     * @param string  $inboundMethod         The inbound_method
     * @param string  $fallbackUrl           The fallback_url
     * @param string  $fallbackMethod        The fallback_method
     * @param string  $statusCallback        The status_callback
     * @param boolean $stickySender          The sticky_sender
     * @param boolean $mmsConverter          The mms_converter
     * @param boolean $smartEncoding         The smart_encoding
     * @param string  $scanMessageContent    The scan_message_content
     * @param boolean $fallbackToLongCode    The fallback_to_long_code
     * @param boolean $areaCodeGeomatch      The area_code_geomatch
     * @param integer $validityPeriod        The validity_period
     * @param boolean $synchronousValidation The synchronous_validation
     */
    public function __construct(
        $friendlyName = Values::NONE,
        $inboundRequestUrl = Values::NONE,
        $inboundMethod = Values::NONE,
        $fallbackUrl = Values::NONE,
        $fallbackMethod = Values::NONE,
        $statusCallback = Values::NONE,
        $stickySender = Values::NONE,
        $mmsConverter = Values::NONE,
        $smartEncoding = Values::NONE,
        $scanMessageContent = Values::NONE,
        $fallbackToLongCode = Values::NONE,
        $areaCodeGeomatch = Values::NONE,
        $validityPeriod = Values::NONE,
        $synchronousValidation = Values::NONE
    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        $this->options['inboundMethod'] = $inboundMethod;
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['fallbackMethod'] = $fallbackMethod;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['stickySender'] = $stickySender;
        $this->options['mmsConverter'] = $mmsConverter;
        $this->options['smartEncoding'] = $smartEncoding;
        $this->options['scanMessageContent'] = $scanMessageContent;
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        $this->options['validityPeriod'] = $validityPeriod;
        $this->options['synchronousValidation'] = $synchronousValidation;
    }

    /**
     * The friendly_name
     *
     * @param string $friendlyName The friendly_name
     *
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName)
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The inbound_request_url
     *
     * @param string $inboundRequestUrl The inbound_request_url
     *
     * @return $this Fluent Builder
     */
    public function setInboundRequestUrl($inboundRequestUrl)
    {
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        return $this;
    }

    /**
     * The inbound_method
     *
     * @param string $inboundMethod The inbound_method
     *
     * @return $this Fluent Builder
     */
    public function setInboundMethod($inboundMethod)
    {
        $this->options['inboundMethod'] = $inboundMethod;
        return $this;
    }

    /**
     * The fallback_url
     *
     * @param string $fallbackUrl The fallback_url
     *
     * @return $this Fluent Builder
     */
    public function setFallbackUrl($fallbackUrl)
    {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }

    /**
     * The fallback_method
     *
     * @param string $fallbackMethod The fallback_method
     *
     * @return $this Fluent Builder
     */
    public function setFallbackMethod($fallbackMethod)
    {
        $this->options['fallbackMethod'] = $fallbackMethod;
        return $this;
    }

    /**
     * The status_callback
     *
     * @param string $statusCallback The status_callback
     *
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback)
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The sticky_sender
     *
     * @param boolean $stickySender The sticky_sender
     *
     * @return $this Fluent Builder
     */
    public function setStickySender($stickySender)
    {
        $this->options['stickySender'] = $stickySender;
        return $this;
    }

    /**
     * The mms_converter
     *
     * @param boolean $mmsConverter The mms_converter
     *
     * @return $this Fluent Builder
     */
    public function setMmsConverter($mmsConverter)
    {
        $this->options['mmsConverter'] = $mmsConverter;
        return $this;
    }

    /**
     * The smart_encoding
     *
     * @param boolean $smartEncoding The smart_encoding
     *
     * @return $this Fluent Builder
     */
    public function setSmartEncoding($smartEncoding)
    {
        $this->options['smartEncoding'] = $smartEncoding;
        return $this;
    }

    /**
     * The scan_message_content
     *
     * @param string $scanMessageContent The scan_message_content
     *
     * @return $this Fluent Builder
     */
    public function setScanMessageContent($scanMessageContent)
    {
        $this->options['scanMessageContent'] = $scanMessageContent;
        return $this;
    }

    /**
     * The fallback_to_long_code
     *
     * @param boolean $fallbackToLongCode The fallback_to_long_code
     *
     * @return $this Fluent Builder
     */
    public function setFallbackToLongCode($fallbackToLongCode)
    {
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        return $this;
    }

    /**
     * The area_code_geomatch
     *
     * @param boolean $areaCodeGeomatch The area_code_geomatch
     *
     * @return $this Fluent Builder
     */
    public function setAreaCodeGeomatch($areaCodeGeomatch)
    {
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        return $this;
    }

    /**
     * The validity_period
     *
     * @param integer $validityPeriod The validity_period
     *
     * @return $this Fluent Builder
     */
    public function setValidityPeriod($validityPeriod)
    {
        $this->options['validityPeriod'] = $validityPeriod;
        return $this;
    }

    /**
     * The synchronous_validation
     *
     * @param boolean $synchronousValidation The synchronous_validation
     *
     * @return $this Fluent Builder
     */
    public function setSynchronousValidation($synchronousValidation)
    {
        $this->options['synchronousValidation'] = $synchronousValidation;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Messaging.V1.UpdateServiceOptions '.implode(' ', $options).']';
    }
}