<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDate extends BaseType
{
    /**
     * Format for the delivery date
     */
    const FORMAT_DELIVERY_DATE = 'd-m-Y';

    /**
     * The postal code of the delivery address.
     *
     * @var string $PostalCode
     */
    protected $PostalCode;

    /**
     * The 2 letter ISO country code of the delivery address.
     * NL (Netherlands) or BE (Belgium).
     *
     * @var string $CountryCode
     */
    protected $CountryCode;

    /**
     * Date of the expected delivery (to the final destination) of the shipment.
     * Format: dd-mm-yyyy
     *
     * @var string $DeliveryDate
     */
    protected $DeliveryDate;

    /**
     * The duration it takes for the shipment to be delivered in days.
     * A value of 1 means that when the parcel is prepared for shipment,
     * it is delivered to a PostNL location on that same day. A value of
     * 2 means that there is a day in-between preparing the shipment and
     * the shipment arriving at a PostNL location etc.
     *
     * @var string $ShippingDuration
     */
    protected $ShippingDuration;

    /**
     * Possible values are true/false (no capitals allowed)
     *
     * @var string $AllowSundaySorting
     */
    protected $AllowSundaySorting;

    /**
     * The delivery options for which a sent date should be returned. At least
     * one delivery option must be specified.
     *
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
     * The street name of the delivery address.
     *
     * @var string $Street
     */
    protected $Street;

    /**
     * The house number of the delivery address.
     *
     * @var string $HouseNr
     */
    protected $HouseNr;

    /**
     * The house number extension of the delivery address.
     *
     * @var string $HouseNrExt
     */
    protected $HouseNrExt;

    /**
     * The city of the delivery address.
     *
     * @var string $City
     */
    protected $City;

    /**
     * @param string $PostalCode
     * @param string $CountryCode
     * @param \DateTime $DeliveryDate
     * @param string $ShippingDuration
     * @param bool $AllowSundaySorting
     * @param ArrayOfstring $Options
     * @param string $Street
     *     Optional
     * @param string $HouseNr
     *     Optional
     * @param string $HouseNrExt
     *     Optional
     * @param string $City
     *     Optional
     */
    public function __construct(
        $PostalCode,
        $CountryCode,
        \DateTime $DeliveryDate,
        $ShippingDuration,
        $AllowSundaySorting,
        ArrayOfstring $Options,
        $Street = null,
        $HouseNr = null,
        $HouseNrExt = null,
        $City = null
    ) {
        $this->setPostalCode($PostalCode);
        $this->setCountryCode($CountryCode);
        $this->setDeliveryDate($DeliveryDate);
        $this->setShippingDuration($ShippingDuration);
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setOptions($Options);

        // Optional
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setCity($City);
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return GetSentDate
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return GetSentDate
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
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
     * @return GetSentDate
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate->format(
            self::FORMAT_DELIVERY_DATE
        );
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDuration()
    {
        return $this->ShippingDuration;
    }

    /**
     * @param string $ShippingDuration
     * @return GetSentDate
     */
    public function setShippingDuration($ShippingDuration)
    {
        $this->ShippingDuration = $ShippingDuration;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowSundaySorting()
    {
        return $this->AllowSundaySorting;
    }

    /**
     * @param bool $AllowSundaySorting
     * @return GetSentDate
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting ? 'true' : 'false';
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
     * @return GetSentDate
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
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
     * @return GetSentDate
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
     * @return GetSentDate
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
     * @return GetSentDate
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
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
     * @return GetSentDate
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }
}
