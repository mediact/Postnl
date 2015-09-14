<?php namespace DivideBV\Postnl\ComplexTypes;

class Location extends BaseLocation
{
    /**
     * The postal code of the location.
     * Mandatory when Coordinates is empty.
     *
     * @var string $Postalcode
     */
    protected $Postalcode;

    /**
     * The coordinates of the location.
     * Mandatory when Postalcode is empty.
     *
     * @var Coordinate $Coordinates
     */
    protected $Coordinates;

    /**
     * The street of the locations.
     * Optional but increases accuracy of found results.
     *
     * @var string $Street
     */
    protected $Street;

    /**
     * The house number of the locations.
     * Optional but increases accuracy of found results.
     *
     * @var string $HouseNr
     */
    protected $HouseNr;

    /**
     * The house number extension of the locations.
     * Optional but increases accuracy of found results.
     *
     * @var string $HouseNrExt
     */
    protected $HouseNrExt;

    /**
     * The city of the locations.
     * Optional but increases accuracy of found results.
     * 
     * @var string $City
     */
    protected $City;

    /**
     * @param bool $AllowSundaySorting
     * @param \DateTime $DeliveryDate
     * @param ArrayOfstring $DeliveryOptions
     * @param \DateTime $OpeningTime
     * @param ArrayOfstring $Options
     * @param string $Postalcode
     * @param Coordinate $Coordinates
     * @param string $Street
     * @param string $HouseNr
     * @param string $HouseNrExt
     * @param string $City
     */
    public function __construct(
        $AllowSundaySorting,
        \DateTime $DeliveryDate,
        ArrayOfstring $DeliveryOptions,
        \DateTime $OpeningTime,
        ArrayOfstring $Options,
        $Postalcode,
        Coordinate $Coordinates = null,
        $Street = null,
        $HouseNr = null,
        $HouseNrExt = null,
        $City = null
    ) {
        parent::__construct(
            $AllowSundaySorting,
            $DeliveryDate,
            $DeliveryOptions,
            $OpeningTime,
            $Options
        );
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setPostalcode($Postalcode);
        $this->setCity($City);
        $this->setCoordinates($Coordinates);
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Location
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr()
    {
        return $this->HouseNr;
    }

    /**
     * @param string $HouseNr
     * @return Location
     */
    public function setHouseNr($HouseNr)
    {
        $this->HouseNr = $HouseNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNrExt()
    {
        return $this->HouseNrExt;
    }

    /**
     * @param string $HouseNrExt
     * @return Location
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalcode()
    {
        return $this->Postalcode;
    }

    /**
     * @param string $Postalcode
     * @return Location
     */
    public function setPostalcode($Postalcode)
    {
        $this->Postalcode = $Postalcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return Location
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return Coordinate
     */
    public function getCoordinates()
    {
        return $this->Coordinates;
    }

    /**
     * @param Coordinate $Coordinates
     * @return Location
     */
    public function setCoordinates($Coordinates)
    {
        $this->Coordinates = $Coordinates;
        return $this;
    }
}
