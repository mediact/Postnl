<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's delivery date service.
 */
class DeliveryDateClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/DeliveryDateWebService/2_0/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/DeliveryDateWebService/2_0/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'GetDeliveryDate',
        'GetDeliveryDateRequest',
        'ArrayOfCutOffTime',
        'ArrayOfstring',
        'CutOffTime',
        'Message',
        'GetDeliveryDateResponse',
        'GetSentDate',
        'GetSentDate',
        'GetSentDate',
    ];

    /**
     * @param ComplexTypes\GetDeliveryDateRequest $GetDeliveryDateRequest
     * @return ComplexTypes\GetDeliveryDateResponse
     */
    public function getDeliveryDate(ComplexTypes\GetDeliveryDateRequest $GetDeliveryDateRequest)
    {
        return $this->__soapCall('GetDeliveryDate', [$GetDeliveryDateRequest]);
    }
}
