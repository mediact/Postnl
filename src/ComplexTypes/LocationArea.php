<?php namespace DivideBV\Postnl\ComplexTypes;

class LocationArea extends BaseLocation
{
    /**
     * The coordinates of the north west point of the area.
     *
     * @var Coordinate $CoordinatesNorthWest
     */
    protected $CoordinatesNorthWest;

    /**
     * The coordinates of the south east point of the area.
     *
     * @var Coordinate $CoordinatesSouthEast
     */
    protected $CoordinatesSouthEast;

    /**
     * @param bool $AllowSundaySorting
     * @param \DateTime $DeliveryDate
     * @param ArrayOfstring $DeliveryOptions
     * @param \DateTime $OpeningTime
     * @param ArrayOfstring $Options
     * @param Coordinate $CoordinatesNorthWest
     * @param Coordinate $CoordinatesSouthEast
     */
    public function __construct(
        $AllowSundaySorting,
        \DateTime $DeliveryDate,
        ArrayOfstring $DeliveryOptions,
        \DateTime $OpeningTime,
        ArrayOfstring $Options,
        Coordinate $CoordinatesNorthWest,
        Coordinate $CoordinatesSouthEast
    ) {
        parent::__construct(
            $AllowSundaySorting,
            $DeliveryDate,
            $DeliveryOptions,
            $OpeningTime,
            $Options
        );
        $this->setCoordinatesNorthWest($CoordinatesNorthWest);
        $this->setCoordinatesSouthEast($CoordinatesSouthEast);
    }

    /**
     * @return Coordinate
     */
    public function getCoordinatesNorthWest()
    {
        return $this->CoordinatesNorthWest;
    }

    /**
     * @param Coordinate $CoordinatesNorthWest
     * @return LocationArea
     */
    public function setCoordinatesNorthWest($CoordinatesNorthWest)
    {
        $this->CoordinatesNorthWest = $CoordinatesNorthWest;
        return $this;
    }

    /**
     * @return Coordinate
     */
    public function getCoordinatesSouthEast()
    {
        return $this->CoordinatesSouthEast;
    }

    /**
     * @param Coordinate $CoordinatesSouthEast
     * @return LocationArea
     */
    public function setCoordinatesSouthEast($CoordinatesSouthEast)
    {
        $this->CoordinatesSouthEast = $CoordinatesSouthEast;
        return $this;
    }
}
