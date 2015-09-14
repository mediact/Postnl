<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationRequest extends BaseType
{
    /**
     * @var Message $Message
     */
    protected $Message;

    /**
     * @var string $LocationCode
     */
    protected $LocationCode;

    /**
     * @var string $RetailNetworkID
     */
    protected $RetailNetworkID;

    /**
     * @param Message $Message
     * @param string $LocationCode
     * @param string $RetailNetworkID
     */
    public function __construct(Message $Message, $LocationCode, $RetailNetworkID)
    {
        $this->setMessage($Message);
        $this->setLocationCode($LocationCode);
        $this->setRetailNetworkID($RetailNetworkID);
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
     * @return GetLocationRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return GetLocationRequest
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailNetworkID()
    {
        return $this->RetailNetworkID;
    }

    /**
     * @param string $RetailNetworkID
     * @return GetLocationRequest
     */
    public function setRetailNetworkID($RetailNetworkID)
    {
        $this->RetailNetworkID = $RetailNetworkID;
        return $this;
    }
}
