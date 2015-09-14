<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class LocationClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/LocationWebService/2_0/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/LocationWebService/2_0/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GetNearestLocationsRequest',
        'Location',
        'BaseLocation',
        'Coordinate',
        'Message',
        'GetLocationsResponse',
        'ArrayOfResponseLocation',
        'ResponseLocation',
        'Address',
        'OpeningHours',
        'ArrayOfWarning',
        'Warning',
        'GetLocationsInAreaRequest',
        'LocationArea',
        'GetLocationRequest',
        'ArrayOfstring'
    ];

    /**
     * @param ComplexTypes\GetNearestLocationsRequest $GetNearestLocationsRequest
     * @return ComplexTypes\GetLocationsResponse
     */
    public function getNearestLocations(ComplexTypes\GetNearestLocationsRequest $GetNearestLocationsRequest)
    {
        return $this->__soapCall('GetNearestLocations', [$GetNearestLocationsRequest]);
    }

    /**
     * @param ComplexTypes\GetLocationsInAreaRequest $GetLocationsInAreaRequest
     * @return ComplexTypes\GetLocationsResponse
     */
    public function getLocationsInArea(ComplexTypes\GetLocationsInAreaRequest $GetLocationsInAreaRequest)
    {
        return $this->__soapCall('GetLocationsInArea', [$GetLocationsInAreaRequest]);
    }

    /**
     * @param ComplexTypes\GetLocationRequest $GetLocationRequest
     * @return ComplexTypes\GetLocationsResponse
     */
    public function getLocation(ComplexTypes\GetLocationRequest $GetLocationRequest)
    {
        return $this->__soapCall('GetLocation', [$GetLocationRequest]);
    }
}
