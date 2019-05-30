<?php

namespace LBHurtado\Common;

interface AirtimeTransferRecord
{
    public function getMobile(): string;

    public function getAmount(): int;
}
