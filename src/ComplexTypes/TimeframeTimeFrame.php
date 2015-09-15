<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeTimeFrame extends BaseType
{
    /**
     * Format for from property
     */
    const FORMAT_FROM = 'H:i:s';

    /**
     * Format for to property
     */
    const FORMAT_TO = 'H:i:s';

    /**
     * @var string $From
     */
    protected $From;

    /**
     * @var string $To
     */
    protected $To;

    /**
     * @var ArrayOfstring
     */
    protected $Options;

    /**
     * @param \DateTime $From
     * @param \DateTime $To
     * @param ArrayOfstring $Options
     */
    public function __construct(
        \DateTime $From,
        \DateTime $To,
        ArrayOfstring $Options
    ) {
        $this->setFrom($From);
        $this->setTo($To);
        $this->setOptions($Options);
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_FROM,
            $this->From
        );
    }

    /**
     * @param \DateTime $From
     * @return TimeframeTimeFrame
     */
    public function setFrom(\DateTime $From)
    {
        $this->From = $From->format(self::FORMAT_FROM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_TO,
            $this->To
        );
    }

    /**
     * @param \DateTime $To
     * @return TimeframeTimeFrame
     */
    public function setTo(\DateTime $To)
    {
        $this->To = $To->format(self::FORMAT_TO);
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
     * @return TimeframeTimeFrame
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }
}
