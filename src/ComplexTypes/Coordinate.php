<?php namespace DivideBV\Postnl\ComplexTypes;

class Coordinate extends BaseType
{
    /**
     * The latitude of the location.
     * Format (double)
     *
     * @var string $Latitude
     */
    protected $Latitude;

    /**
     * The longitude of the location.
     * Format (double)
     *
     * @var string $Longitude
     */
    protected $Longitude;

    /**
     * @param string $Latitude
     * @param string $Longitude
     */
    public function __construct($Latitude, $Longitude)
    {
        $this->setLatitude($Latitude);
        $this->setLongitude($Longitude);
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return Coordinate
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return Coordinate
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }
}
