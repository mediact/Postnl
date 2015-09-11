<?php namespace DivideBV\Postnl\ComplexTypes;

class ReasonNoTimeframe extends BaseType
{
    /**
     * @var string $Code
     */
    protected $Code;

    /**
     * @var string $Date
     */
    protected $Date;

    /**
     * @var string $Description
     */
    protected $Description;

    /**
     * @var ArrayOfstring $Options
     */
    protected $Options;

    /**
     * @param string $Code
     * @param string $Date
     * @param string $Description
     * @param ArrayOfstring $Options
     */
    public function __construct($Code, $Date, $Description, ArrayOfstring $Options)
    {
        $this->setCode($Code);
        $this->setDate($Date);
        $this->setDescription($Description);
        $this->setOptions($Options);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return ReasonNoTimeframe
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return ReasonNoTimeframe
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ReasonNoTimeframe
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param ArrayOfstring $Options
     * @return ReasonNoTimeframe
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }
}
