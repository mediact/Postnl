<?php namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDateResponse extends BaseType
{
    /**
     * Format for the delivery date
     */
    const FORMAT_DELIVERY_DATE = 'd-m-Y';

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate;

    /**
     * @var string $Option
     */
    protected $Option;

    /**
     * @param \DateTime $DeliveryDate
     * @param string $Option
     */
    public function __construct(\DateTime $DeliveryDate, $Option)
    {
        $this->setDeliveryDate($DeliveryDate);
        $this->setOption($Option);
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_DELIVERY_DATE,
            $this->DeliveryDate
        );
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return GetDeliveryDateResponse
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate->format(
            self::FORMAT_DELIVERY_DATE
        );
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
