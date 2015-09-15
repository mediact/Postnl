<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's timeframe service.
 */
class TimeframeClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/TimeframeWebService/2_0/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/TimeframeWebService/2_0/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GetTimeframesRequest',
        'ArrayOfstring',
        'Message',
        'GetTimeframesResponse',
        'TimeframeRequest',
        'Timeframe',
        'TimeframeTimeFrame',
        'ReasonNoTimeframe',
        'ArrayOfTimeframe',
        'ArrayOfTimeframeTimeFrame',
        'ArrayOfReasonNoTimeframe',
    ];

    /**
     * @param ComplexTypes\GetTimeframeRequest $GetTimeframeRequest
     * @return ComplexTypes\GetTimeframesResponse
     */
    public function getTimeframes(ComplexTypes\GetTimeframeRequest $GetTimeframeRequest)
    {
        return $this->__soapCall('GetTimeframes', [$GetTimeframeRequest]);
    }
}
