<?php namespace DivideBV\Postnl\ComplexTypes;

class BaseLocation extends BaseType
{
    /**
     * Possible values are true/false (no capitals allowed)
     *
     * @var string $AllowSundaySorting
     */
    protected $AllowSundaySorting;

    /**
     * Date when the shipment will be delivered by PostNL.
     * Format: dd-mm-yyyy.
     *
     * This field will be used to exclude the inactive locations
     * (for example closed due to renovation).
     *
     * @var string $DeliveryDate
     */
    protected $DeliveryDate;

    /**
     * One or more delivery options.
     *
     * PG:  PakjeGemak
     * PGE: PakjeGemak Express
     * PA:  Pakket automaat
     * KEL: Customer own location
     *
     * @var ArrayOfstring $DeliveryOptions
     */
    protected $DeliveryOptions;

    /**
     * Time of opening.
     * Format: hh:mm:ss.
     *
     * This field will be used to filter the locations on opening hours.
     *
     * @var string $OpeningTime
     */
    protected $OpeningTime;

    /**
     * Daytime:   Daytime delivery
     * Evening:   Evening delivery
     * Morning:   Morning delivery before 10:00
     * Noon:      Morning delivery before 12:00
     * Sunday:    Sunday delivery
     * Afternoon: Afternoon delivery before 17:00
     *
     * @var ArrayOfstring $Options
     */
    protected $Options;

    /**
     * @param string $AllowSundaySorting
     * @param string $DeliveryDate
     * @param ArrayOfstring $DeliveryOptions
     * @param string $OpeningTime
     * @param ArrayOfstring $Options
     */
    public function __construct(
        $AllowSundaySorting,
        $DeliveryDate,
        ArrayOfstring $DeliveryOptions,
        $OpeningTime,
        ArrayOfstring $Options
    ) {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDeliveryOptions($DeliveryOptions);
        $this->setOpeningTime($OpeningTime);
        $this->setOptions($Options);
    }

    /**
     * @return string
     */
    public function getAllowSundaySorting()
    {
        return $this->AllowSundaySorting;
    }

    /**
     * @param string $AllowSundaySorting
     * @return BaseLocation
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return BaseLocation
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param ArrayOfstring $DeliveryOptions
     * @return BaseLocation
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = $DeliveryOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpeningTime()
    {
        return $this->OpeningTime;
    }

    /**
     * @param string $OpeningTime
     * @return BaseLocation
     */
    public function setOpeningTime($OpeningTime)
    {
        $this->OpeningTime = $OpeningTime;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param ArrayOfstring $Options
     * @return BaseLocation
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }
}
