<?php namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesResponse extends BaseType
{

    /**
     * @var ArrayOfTimeframe $Timeframes
     */
    protected $Timeframes = null;

    /**
     * @var ArrayOfReasonNoTimeframe $ReasonNoTimeframes
     */
    protected $ReasonNoTimeframes = null;

    /**
     * @param ArrayOfTimeframe $Timeframes
     * @param ArrayOfReasonNoTimeframe $ReasonNoTimeframes
     */
    public function __construct(ArrayOfTimeframe $Timeframes, ArrayOfReasonNoTimeframe $ReasonNoTimeframes)
    {
        $this->setTimeframes($Timeframes);
        $this->setReasonNoTimeframes($ReasonNoTimeframes);
    }

    /**
     * @return ArrayOfTimeframe
     */
    public function getTimeframes()
    {
        return $this->Timeframes;
    }

    /**
     * @param ArrayOfTimeframe $Timeframes
     * @return GetTimeframesResponse
     */
    public function setTimeframes($Timeframes)
    {
        $this->Timeframes = $Timeframes;
        return $this;
    }

    /**
     * @return ArrayOfReasonNoTimeframe
     */
    public function getReasonNoTimeframes()
    {
        return $this->ReasonNoTimeframes;
    }

    /**
     * @param ArrayOfReasonNoTimeframe $ReasonNoTimeframes
     * @return GetTimeframesResponse
     */
    public function setReasonNoTimeframes($ReasonNoTimeframes)
    {
        $this->ReasonNoTimeframes = $ReasonNoTimeframes;
        return $this;
    }
}
