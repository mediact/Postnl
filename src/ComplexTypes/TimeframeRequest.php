<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeRequest extends BaseType
{
    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
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
     * @var string $SundaySorting
     */
    protected $SundaySorting = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $HouseNr
     */
    protected $HouseNr = null;

    /**
     * @var string $HouseNrExt
     */
    protected $HouseNrExt = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @param string $PostalCode
     * @param string $CountryCode
     * @param string $StartDate
     * @param string $EndDate
     * @param ArrayOfstring $Options
     * @param string $SundaySorting
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
        $StartDate,
        $EndDate,
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
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return TimeframeRequest
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return TimeframeRequest
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
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
     * @return string
     */
    public function getSundaySorting()
    {
        return $this->SundaySorting;
    }

    /**
     * @param string $SundaySorting
     * @return TimeframeRequest
     */
    public function setSundaySorting($SundaySorting)
    {
        $this->SundaySorting = $SundaySorting;
        return $this;
    }
}
