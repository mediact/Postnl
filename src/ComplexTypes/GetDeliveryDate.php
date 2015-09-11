<?php namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDate extends BaseType
{

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
     * Date/time of preparing the shipment for sending.
     * Format: dd-mm-yyyy hh:mm:ss
     *
     * @var string $ShippingDate
     */
    protected $ShippingDate;

    /**
     * The duration it takes for the shipment to be delivered to PostNL in
     * days. A value of 1 means that the parcel will be delivered to PostNL
     * on the same day as the date specified in ShippingDate. A value of 2
     * means the parcel will arrive at PostNL a day later etc.
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
     * Cut off times per day. At least one cut off time must be specified.
     *
     * @var ArrayOfCutOffTime $CutOffTimes
     */
    protected $CutOffTimes;

    /**
     * The delivery options for which a delivery date should be returned.
     * At least one delivery option must be specified.
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
     * @param string $ShippingDate
     * @param string $ShippingDuration
     * @param string $AllowSundaySorting
     * @param ArrayOfCutOffTime $CutOffTimes,
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
        $ShippingDate,
        $ShippingDuration,
        $AllowSundaySorting,
        ArrayOfCutOffTime $CutOffTimes,
        ArrayOfstring $Options,
        $Street = null,
        $HouseNr = null,
        $HouseNrExt = null,
        $City = null
    ) {
        $this->setPostalCode($PostalCode);
        $this->setCountryCode($CountryCode);
        $this->setShippingDate($ShippingDate);
        $this->setShippingDuration($ShippingDuration);
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setCutOffTimes($CutOffTimes);
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
     * @return string
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }

    /**
     * @param string $ShippingDate
     * @return GetSentDate
     */
    public function setShippingDate($ShippingDate)
    {
        $this->ShippingDate = $ShippingDate;
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
     * @return string
     */
    public function getAllowSundaySorting()
    {
        return $this->AllowSundaySorting;
    }

    /**
     * @param string $AllowSundaySorting
     * @return GetSentDate
     */
    public function setAllowSundaySorting($AllowSundaySorting)
    {
        $this->AllowSundaySorting = $AllowSundaySorting;
        return $this;
    }

    /**
     * @return ArrayOfCutOffTime
     */
    public function getCutOffTimes()
    {
        return $this->CutOffTimes;
    }

    /**
     * @param ArrayOfCutOffTime $CutOffTimes
     * @return GetDeliveryDate
     */
    public function setCutOffTimes($CutOffTimes)
    {
        $this->CutOffTimes = $CutOffTimes;
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
