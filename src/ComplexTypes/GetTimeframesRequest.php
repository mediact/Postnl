<?php namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var TimeframeRequest $Timeframe
     */
    protected $Timeframe = null;

    /**
     * GetTimeframesRequest constructor.
     *
     * @param Message $Message
     * @param TimeframeRequest $Timeframe
     */
    public function __construct(Message $Message, TimeframeRequest $Timeframe)
    {
        $this->setMessage($Message);
        $this->setTimeframe($Timeframe);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return GetTimeframesRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return TimeframeRequest
     */
    public function getTimeframe()
    {
        return $this->Timeframe;
    }

    /**
     * @param TimeframeRequest $Timeframe
     * @return GetTimeframesRequest
     */
    public function setTimeframe($Timeframe)
    {
        $this->Timeframe = $Timeframe;
        return $this;
    }
}
