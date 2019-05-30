<?php

namespace LBHurtado\Common\Contracts;

interface AirtimeTransferRecord
{
    public function getMobile(): string;

    public function getAmount(): int;
}
