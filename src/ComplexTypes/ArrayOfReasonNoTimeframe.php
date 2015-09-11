<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfReasonNoTimeframe extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ReasonNoTimeframe';

    /**
     * @var ReasonNoTimeframe $ReasonNoTimeframe
     */
    protected $ReasonNoTimeframe = null;

    /**
     * @param ReasonNoTimeframe $ReasonNoTimeframe
     */
    public function __construct(ReasonNoTimeframe $ReasonNoTimeframe)
    {
        $this->setReasonNoTimeframe($ReasonNoTimeframe);
    }

    /**
     * @return ReasonNoTimeframe
     */
    public function getReasonNoTimeframe()
    {
        return $this->ReasonNoTimeframe;
    }

    /**
     * @param ReasonNoTimeframe $ReasonNoTimeframe
     * @return ArrayOfReasonNoTimeframe
     */
    public function setReasonNoTimeframe($ReasonNoTimeframe)
    {
        $this->ReasonNoTimeframe = $ReasonNoTimeframe;
        return $this;
    }
}
