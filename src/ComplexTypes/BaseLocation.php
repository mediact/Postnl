<?php namespace DivideBV\Postnl\ComplexTypes;

use Mage\Adminhtml\Test\Block\Catalog\Product\Edit\Tab\CustomOptions\DateTime;

class BaseLocation extends BaseType
{
    /**
     * Format used for the delivery date
     */
    const FORMAT_DELIVERY_DATE = 'd-m-Y';

    /**
     * Format used for the opening time
     */
    const FORMAT_OPENING_TIME = 'H:i:s';

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
     * @param bool $AllowSundaySorting
     * @param \DateTime $DeliveryDate
     * @param ArrayOfstring $DeliveryOptions
     * @param \DateTime $OpeningTime
     * @param ArrayOfstring $Options
     */
    public function __construct(
        $AllowSundaySorting,
        \DateTime $DeliveryDate,
        ArrayOfstring $DeliveryOptions,
        \DateTime $OpeningTime,
        ArrayOfstring $Options
    ) {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDeliveryOptions($DeliveryOptions);
        $this->setOpeningTime($OpeningTime);
        $this->setOptions($Options);
    }

    /**
     * @return bool
     */
    public function getAllowSundaySorting()
    {
        return $this->AllowSundaySorting == 'true';
    }

    /**
     * @param bool $AllowSundaySorting
     * @return BaseLocation
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting ? 'true' : 'false';
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_DELIVERY_DATE,
            $this->DeliveryDate
        );
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return BaseLocation
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate->format(
            self::FORMAT_DELIVERY_DATE
        );
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
     * @return \DateTime
     */
    public function getOpeningTime()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_OPENING_TIME,
            $this->OpeningTime
        );
    }

    /**
     * @param \DateTime $OpeningTime
     * @return BaseLocation
     */
    public function setOpeningTime(\DateTime $OpeningTime)
    {
        $this->OpeningTime = $OpeningTime->format(
            self::FORMAT_OPENING_TIME
        );
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
