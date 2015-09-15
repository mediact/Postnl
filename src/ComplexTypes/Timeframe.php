<?php namespace DivideBV\Postnl\ComplexTypes;

class Timeframe extends BaseType
{

    /**
     * Format for the date
     */
    const FORMAT_DATE = 'd-m-Y';

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfTimeframeTimeFrame $Timeframes
     */
    protected $Timeframes = null;

    /**
     * @param \DateTime $Date
     * @param ArrayOfTimeframeTimeFrame $Timeframes
     */
    public function __construct(
        \DateTime $Date,
        ArrayOfTimeframeTimeFrame $Timeframes
    ) {
        $this->setDate($Date);
        $this->setTimeframes($Timeframes);
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_DATE,
            $this->Date
        );
    }

    /**
     * @param \DateTime $Date
     * @return Timeframe
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(
            self::FORMAT_DATE
        );
        return $this;
    }

    /**
     * @return ArrayOfTimeframeTimeFrame
     */
    public function getTimeframes()
    {
        return $this->Timeframes;
    }

    /**
     * @param ArrayOfTimeframeTimeFrame $Timeframes
     * @return $this;
     */
    public function setTimeframes($Timeframes)
    {
        $this->Timeframes = $Timeframes;
        return $this;
    }
}
