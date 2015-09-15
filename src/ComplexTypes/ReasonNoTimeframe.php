<?php namespace DivideBV\Postnl\ComplexTypes;

class ReasonNoTimeframe extends BaseType
{
    /**
     * Format for date
     */
    const FORMAT_DATE = 'd-m-Y';

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
     * @param \DateTime $Date
     * @param string $Description
     * @param ArrayOfstring $Options
     */
    public function __construct($Code, \DateTime $Date, $Description, ArrayOfstring $Options)
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
     * @return \DateTime
     */
    public function getDate()
    {
        return \DateTime::createFromFormat(
            self::FORMAT_DATE,
            $this->Date
        );
    }

    /**
     * @param \DateTime $Date
     * @return ReasonNoTimeframe
     */
    public function setDate($Date)
    {
        $this->Date = $Date->format(self::FORMAT_DATE);
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
