<?php namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message;

    /**
     * @var GetSentDate $GetSentDate
     */
    protected $GetSentDate;

    /**
     * @param GetSentDate $GetSentDate
     * @param Message $Message
     */
    public function __construct(Message $Message, GetSentDate $GetSentDate)
    {
        $this->setMessage($Message);
        $this->setGetSentDate($GetSentDate);
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
     * @return GetSentDateRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return GetSentDate
     */
    public function getGetSentDate()
    {
        return $this->setGetSentDate;
    }

    /**
     * @param GetSentDate $GetSentDate
     * @return GetSentDateRequest
     */
    public function setGetSentDate($GetSentDate)
    {
        $this->GetSentDate = $GetSentDate;
        return $this;
    }
}
