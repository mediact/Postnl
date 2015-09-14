<?php namespace DivideBV\Postnl\ComplexTypes;

class GetNearestLocationsRequest extends BaseType
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
     * @var Location $Location
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
     * @param Location $Location
     * @param string $Countrycode
     */
    public function __construct(Message $Message, Location $Location, $Countrycode)
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
     * @return GetNearestLocationsRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param Location $Location
     * @return GetNearestLocationsRequest
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
     * @return GetNearestLocationsRequest
     */
    public function setCountrycode($Countrycode)
    {
        $this->Countrycode = $Countrycode;
        return $this;
    }
}
