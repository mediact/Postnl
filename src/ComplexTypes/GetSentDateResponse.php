<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateResponse extends BaseType
{
    /**
     * Format for the sent date
     */
    const FORMAT_SENT_DATE = 'd-m-Y';

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
     * @param \DateTime $SentDate
     */
    public function __construct($Option, \DateTime $SentDate)
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
     * @return \DateTime
     */
    public function getSentDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_SENT_DATE,
            $this->SentDate
        );
    }

    /**
     * @param \DateTime $SentDate
     * @return GetSentDateResponse
     */
    public function setSentDate(\DateTime $SentDate)
    {
        $this->SentDate = $SentDate->format(
            self::FORMAT_SENT_DATE
        );
        return $this;
    }
}
