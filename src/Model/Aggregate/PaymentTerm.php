<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class PaymentTerm
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class PaymentTerm
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $days;

    /**
     * PaymentTerm constructor.
     *
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param string $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }


}
