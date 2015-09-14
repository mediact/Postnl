<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsInAreaRequest extends BaseType
{
    /**
     * Identification of the message
     *
     * @var Message $Message
     */
    protected $Message;

    /**
     * Location information
     *
     * @var LocationArea $Location
     */
    protected $Location;

    /**
     * Country to search locations for (ISO2)
     *
     * @var string $Countrycode
     */
    protected $Countrycode;

    /**
     * @param Message $Message
     * @param LocationArea $Location
     * @param string $Countrycode
     */
    public function __construct(Message $Message, LocationArea $Location, $Countrycode)
    {
        $this->setMessage($Message);
        $this->setLocation($Location);
        $this->setCountrycode($Countrycode);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return GetLocationsInAreaRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return LocationArea
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param LocationArea $Location
     * @return GetLocationsInAreaRequest
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountrycode()
    {
        return $this->Countrycode;
    }

    /**
     * @param string $Countrycode
     * @return GetLocationsInAreaRequest
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
        return $this;
    }
}
