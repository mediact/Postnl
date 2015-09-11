<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateResponse extends BaseType
{

    /**
     * @var string $Option
     */
    protected $Option;

    /**
     * @var string $SentDate
     */
    protected $SentDate;

    /**
     * @param string $Option
     * @param string $SentDate
     */
    public function __construct($Option, $SentDate)
    {
        $this->setOption($Option);
        $this->setSentDate($SentDate);
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
     * @return GetSentDateResponse
     */
    public function setOption($Option)
    {
        $this->Option = $Option;
        return $this;
    }

    /**
     * @return string
     */
    public function getSentDate()
    {
        return $this->SentDate;
    }

    /**
     * @param string $SentDate
     * @return GetSentDateResponse
     */
    public function setSentDate($SentDate)
    {
        $this->SentDate = $SentDate;
        return $this;
    }
}
