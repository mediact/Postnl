<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseLocation extends BaseType
{
    /**
     * @var string $Name
     */
    protected $Name;

    /**
     * @var Address $Address
     */
    protected $Address;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber;

    /**
     * @var string $RetailNetworkID
     */
    protected $RetailNetworkID;

    /**
     * @var string $LocationCode
     */
    protected $LocationCode;

    /**
     * @var string $Latitude
     */
    protected $Latitude;

    /**
     * @var string $Longitude
     */
    protected $Longitude;

    /**
     * @var string $TerminalType
     */
    protected $TerminalType;

    /**
     * @var string $Saleschannel
     */
    protected $Saleschannel;

    /**
     * @var OpeningHours $OpeningHours
     */
    protected $OpeningHours;

    /**
     * @var ArrayOfstring $DeliveryOptions
     */
    protected $DeliveryOptions;

    /**
     * @var string $Distance
     */
    protected $Distance;

    /**
     * @var string $PartnerName
     */
    protected $PartnerName;

    /**
     * @var string $RetailFormulaName
     */
    protected $RetailFormulaName;

    /**
     * @param string $Name
     * @param Address $Address
     * @param string $PhoneNumber
     * @param string $RetailNetworkID
     * @param string $LocationCode
     * @param string $Latitude
     * @param string $Longitude
     * @param string $TerminalType
     * @param string $Saleschannel
     * @param OpeningHours $OpeningHours
     * @param ArrayOfstring $DeliveryOptions
     * @param string $Distance
     * @param string $PartnerName
     * @param string $RetailFormulaName
     */
    public function __construct(
        $Name,
        Address $Address,
        $PhoneNumber,
        $RetailNetworkID,
        $LocationCode,
        $Latitude,
        $Longitude,
        $TerminalType,
        $Saleschannel,
        OpeningHours $OpeningHours,
        ArrayOfstring $DeliveryOptions,
        $Distance, 
        $PartnerName, 
        $RetailFormulaName
    ) {
        $this->Name($Name);
        $this->Address($Address);
        $this->PhoneNumber($PhoneNumber);
        $this->RetailNetworkID($RetailNetworkID);
        $this->LocationCode($LocationCode);
        $this->Latitude($Latitude);
        $this->Longitude($Longitude);
        $this->TerminalType($TerminalType);
        $this->Saleschannel($Saleschannel);
        $this->OpeningHours($OpeningHours);
        $this->DeliveryOptions($DeliveryOptions);
        $this->Distance($Distance);
        $this->PartnerName($PartnerName);
        $this->RetailFormulaName($RetailFormulaName);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ResponseLocation
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address $Address
     * @return ResponseLocation
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return ResponseLocation
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
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
     * @return ResponseLocation
     */
    public function setRetailNetworkID($RetailNetworkID)
    {
        $this->RetailNetworkID = $RetailNetworkID;
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
     * @return ResponseLocation
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return ResponseLocation
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return ResponseLocation
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalType()
    {
        return $this->TerminalType;
    }

    /**
     * @param string $TerminalType
     * @return ResponseLocation
     */
    public function setTerminalType($TerminalType)
    {
        $this->TerminalType = $TerminalType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaleschannel()
    {
        return $this->Saleschannel;
    }

    /**
     * @param string $Saleschannel
     * @return ResponseLocation
     */
    public function setSaleschannel($Saleschannel)
    {
        $this->Saleschannel = $Saleschannel;
        return $this;
    }

    /**
     * @return OpeningHours
     */
    public function getOpeningHours()
    {
        return $this->OpeningHours;
    }

    /**
     * @param OpeningHours $OpeningHours
     * @return ResponseLocation
     */
    public function setOpeningHours($OpeningHours)
    {
        $this->OpeningHours = $OpeningHours;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param ArrayOfstring $DeliveryOptions
     * @return ResponseLocation
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = $DeliveryOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * @param string $Distance
     * @return ResponseLocation
     */
    public function setDistance($Distance)
    {
        $this->Distance = $Distance;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerName()
    {
        return $this->PartnerName;
    }

    /**
     * @param string $PartnerName
     * @return ResponseLocation
     */
    public function setPartnerName($PartnerName)
    {
        $this->PartnerName = $PartnerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailFormulaName()
    {
        return $this->RetailFormulaName;
    }

    /**
     * @param string $RetailFormulaName
     * @return ResponseLocation
     */
    public function setRetailFormulaName($RetailFormulaName)
    {
        $this->RetailFormulaName = $RetailFormulaName;
        return $this;
    }
}
