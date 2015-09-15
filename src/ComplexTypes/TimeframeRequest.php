<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeRequest extends BaseType
{

    /**
     * The format for the start date
     */
    const FORMAT_START_DATE = 'd-m-Y';

    /**
     * The format for the end date
     */
    const FORMAT_END_DATE = 'd-m-Y';

    /**
     * The postal code of the delivery address.
     *
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * The 2 letter ISO country code of the delivery address.
     * NL (Netherlands) or BE (Belgium).
     *
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * Date of the beginning of the timeframe.
     * Format: dd-mm-yyyy.
     *
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * Date of the end of the timeframe.
     * Format: dd-mm-yyyy.
     *
     * Enddate may not be before StartDate.
     * Number of days between StartDate and Endate may not exceed 15 days.
     * When it exceeds the number of days, the EndDate will be adjusted.
     *
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * The delivery options for which timeframes should be returned.
     * At least one delivery option must be specified.
     *
     * Valid options are:
     * Daytime:   Daytime delivery
     * Evening:   Evening delivery
     * Morning:   Morning delivery before 10:00
     * Noon:      Morning delivery before 12:00
     * Sunday:    Sunday delivery
     * Afternoon: Afternoon delivery before 17:00
     *
     * @var ArrayOfstring $Options
     */
    protected $Options = null;

    /**
     * Possible values are true/false (no capitals allowed)
     *
     * @var string $SundaySorting
     */
    protected $SundaySorting = null;

    /**
     * The street name of the delivery address.
     *
     * @var string $Street
     */
    protected $Street = null;

    /**
     * The house number of the delivery address.
     *
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * The house number extension of the delivery address.
     *
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * The city of the delivery address.
     *
     * @var string $City
     */
    protected $City = null;

    /**
     * @param string $PostalCode
     * @param string $CountryCode
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param ArrayOfstring $Options
     * @param bool $SundaySorting
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
        \DateTime $StartDate,
        \DateTime $EndDate,
        ArrayOfstring $Options,
        $SundaySorting,
        $Street = null,
        $HouseNr = null,
        $HouseNrExt = null,
        $City = null
    ) {
        $this->setPostalCode($PostalCode);
        $this->setCountryCode($CountryCode);
        $this->setStartDate($StartDate);
        $this->setEndDate($EndDate);
        $this->setOptions($Options);
        $this->setSundaySorting($SundaySorting);

        // Optional parameters.
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setCity($City);
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
     * @return TimeframeRequest
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
     * @return TimeframeRequest
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
     * @return TimeframeRequest
     */
    public function setHouseNrExt($HouseNrExt)
    {
        $this->HouseNrExt = $HouseNrExt;
        return $this;
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
     * @return TimeframeRequest
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
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
     * @return TimeframeRequest
     */
    public function setCity($City)
    {
        $this->City = $City;
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
     * @return TimeframeRequest
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_START_DATE,
            $this->StartDate
        );
    }

    /**
     * @param \DateTime $StartDate
     * @return TimeframeRequest
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(
            self::FORMAT_START_DATE
        );
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_END_DATE,
            $this->EndDate
        );
    }

    /**
     * @param \DateTime $EndDate
     * @return TimeframeRequest
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(
            self::FORMAT_END_DATE
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
     * @return TimeframeRequest
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSundaySorting()
    {
        return $this->SundaySorting == 'true';
    }

    /**
     * @param string $SundaySorting
     * @return TimeframeRequest
     */
    public function setSundaySorting($SundaySorting)
    {
        $this->SundaySorting = $SundaySorting ? 'true' : 'false';
        return $this;
    }
}
