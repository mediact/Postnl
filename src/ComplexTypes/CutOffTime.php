<?php namespace DivideBV\Postnl\ComplexTypes;

class CutOffTime extends BaseType
{
    /**
     * Format used for the time
     */
    const FORMAT_TIME = 'H:i:s';

    /**
     * Number of the day of week.
     * 01 = Monday, 02 = Tuesday, ..., 07 = Sunday.
     *
     * It is also possible to use value 00 to specify a generic cut off time
     * for all days which do not have a specific cut off time.
     *
     * @var string $Day
     */
    protected $Day;

    /**
     * The cut off time for this day of week.
     * Format: hh:mm:ss
     *
     * @var string $Time
     */
    protected $Time;

    /**
     * @param string $Day
     * @param \DateTime $Time
     */
    public function __construct($Day, $Time)
    {
        $this->setDay($Day);
        $this->setTime($Time);
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param string $Day
     * @return CutOffTime
     */
    public function setDay($Day)
    {
        $this->Day = $Day;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_TIME,
            $this->Time
        );
    }

    /**
     * @param \DateTime $Time
     * @return CutOffTime
     */
    public function setTime(\DateTime $Time)
    {
        $this->Time = $Time->format(self::FORMAT_TIME);
        return $this;
    }
}
