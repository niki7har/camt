<?php

namespace Genkgo\Camt\Camt053\DTO;

use Genkgo\Camt\DTO\Record;
use Genkgo\Camt\DTO\Balance;

/**
 * Class Statement
 * @package Genkgo\Camt\Camt053
 */
class Statement extends Record
{
    /**
     * @var array
     */
    private $balances = [];

    /**
     * @param Balance $balance
     */
    public function addBalance(Balance $balance)
    {
        $this->balances[] = $balance;
    }

    /**
     * @return Balance[]
     */
    public function getBalances()
    {
        return $this->balances;
    }
}
