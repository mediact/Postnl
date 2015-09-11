<?php namespace DivideBV\Postnl\ComplexTypes;

class TimeframeTimeFrame extends BaseType
{
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
     * @param string $From
     * @param string $To
     * @param ArrayOfstring $Options
     */
    public function __construct($From, $To, ArrayOfstring $Options)
    {
        $this->setFrom($From);
        $this->setTo($To);
        $this->setOptions($Options);
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param string $From
     * @return TimeframeTimeFrame
     */
    public function setFrom($From)
    {
        $this->From = $From;
        return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param string $To
     * @return TimeframeTimeFrame
     */
    public function setTo($To)
    {
        $this->To = $To;
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
