<?php namespace DivideBV\Postnl\ComplexTypes;

class OpeningHours extends BaseType
{
    /**
     * @var ArrayOfstring $Monday
     */
    protected $Monday;

    /**
     * @var ArrayOfstring $Tuesday
     */
    protected $Tuesday;

    /**
     * @var ArrayOfstring $Wednesday
     */
    protected $Wednesday;

    /**
     * @var ArrayOfstring $Thursday
     */
    protected $Thursday;

    /**
     * @var ArrayOfstring $Friday
     */
    protected $Friday;

    /**
     * @var ArrayOfstring $Saturday
     */
    protected $Saturday;

    /**
     * @var ArrayOfstring $Sunday
     */
    protected $Sunday;

    /**
     * @param ArrayOfstring $Monday
     * @param ArrayOfstring $Tuesday
     * @param ArrayOfstring $Wednesday
     * @param ArrayOfstring $Thursday
     * @param ArrayOfstring $Friday
     * @param ArrayOfstring $Saturday
     * @param ArrayOfstring $Sunday
     */
    public function __construct(
        ArrayOfstring $Monday,
        ArrayOfstring $Tuesday,
        ArrayOfstring $Wednesday,
        ArrayOfstring $Thursday,
        ArrayOfstring $Friday,
        ArrayOfstring $Saturday,
        ArrayOfstring $Sunday
    ) {
        $this->setMonday($Monday);
        $this->setTuesday($Tuesday);
        $this->setWednesday($Wednesday);
        $this->setThursday($Thursday);
        $this->setFriday($Friday);
        $this->setSaturday($Saturday);
        $this->setSunday($Sunday);
    }

    /**
     * @return ArrayOfstring
     */
    public function getMonday()
    {
        return $this->Monday;
    }

    /**
     * @param ArrayOfstring $Monday
     * @return OpeningHours
     */
    public function setMonday($Monday)
    {
        $this->Monday = $Monday;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTuesday()
    {
        return $this->Tuesday;
    }

    /**
     * @param ArrayOfstring $Tuesday
     * @return OpeningHours
     */
    public function setTuesday($Tuesday)
    {
        $this->Tuesday = $Tuesday;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getWednesday()
    {
        return $this->Wednesday;
    }

    /**
     * @param ArrayOfstring $Wednesday
     * @return OpeningHours
     */
    public function setWednesday($Wednesday)
    {
        $this->Wednesday = $Wednesday;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getThursday()
    {
        return $this->Thursday;
    }

    /**
     * @param ArrayOfstring $Thursday
     * @return OpeningHours
     */
    public function setThursday($Thursday)
    {
        $this->Thursday = $Thursday;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFriday()
    {
        return $this->Friday;
    }

    /**
     * @param ArrayOfstring $Friday
     * @return OpeningHours
     */
    public function setFriday($Friday)
    {
        $this->Friday = $Friday;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSaturday()
    {
        return $this->Saturday;
    }

    /**
     * @param ArrayOfstring $Saturday
     * @return OpeningHours
     */
    public function setSaturday($Saturday)
    {
        $this->Saturday = $Saturday;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSunday()
    {
        return $this->Sunday;
    }

    /**
     * @param ArrayOfstring $Sunday
     * @return OpeningHours
     */
    public function setSunday($Sunday)
    {
        $this->Sunday = $Sunday;
        return $this;
    }
}
