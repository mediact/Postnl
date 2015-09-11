<?php namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDateResponse extends BaseType
{

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate;

    /**
     * @var string $Option
     */
    protected $Option;

    /**
     * @param string $DeliveryDate
     * @param string $Option
     */
    public function __construct($DeliveryDate, $Option)
    {
        $this->setDeliveryDate($DeliveryDate);
        $this->setOption($Option);
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return GetDeliveryDateResponse
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * @param string $Option
     * @return GetDeliveryDateResponse
     */
    public function setOption($Option)
    {
        $this->Option = $Option;
        return $this;
    }
}
