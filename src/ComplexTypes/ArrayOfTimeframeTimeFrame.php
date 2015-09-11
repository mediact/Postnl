<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfTimeframeTimeFrame extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'TimeframeTimeFrame';

    /**
     * @var TimeframeTimeFrame[] $TimeframeTimeFrame
     */
    protected $TimeframeTimeFrame;

    /**
     * @param TimeframeTimeFrame[] $TimeframeTimeFrame
     */
    public function __construct(array $TimeframeTimeFrame)
    {
        $this->setTimeframeTimeFrame($TimeframeTimeFrame);
    }

    /**
     * @return TimeframeTimeFrame[]
     */
    public function getTimeframeTimeFrame()
    {
        return $this->TimeframeTimeFrame;
    }

    /**
     * @param TimeframeTimeFrame[] $TimeframeTimeFrame
     * @return ArrayOfTimeframeTimeFrame
     */
    public function setTimeframeTimeFrame($TimeframeTimeFrame)
    {
        $this->TimeframeTimeFrame = $TimeframeTimeFrame;
        return $this;
    }
}
