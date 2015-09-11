<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfstring extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'string';

    /**
     * @var string[] $string
     */
    protected $string = null;

    /**
     * @param string[] $string
     */
    public function __construct(array $string)
    {
        $this->setString($string);
    }

    /**
     * @return string[]
     */
    public function getString()
    {
        return (array) $this->string;
    }

    /**
     * @param string[] $string
     * @return ArrayOfstring
     */
    public function setString(array $string)
    {
        $this->string = $string;
        return $this;
    }
}
