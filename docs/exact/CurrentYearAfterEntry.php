<?php

namespace Picqer\Financials\Exact;

/**
 * Class CurrentYearAfterEntry.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=OpeningBalanceCurrentYearAfterEntry
 *
 * @property int $Division Division code.
 * @property string $GLAccount The balance sheet account.
 * @property int $ReportingYear The reporting year of the opening balance.
 * @property float $Amount The opening balance amount of the G/L account.
 * @property string $BalanceSide Indicates whether the G/L account is a debit or credit account. D = Debit, C = Credit.
 * @property string $GLAccountCode The code of the G/L account.
 * @property string $GLAccountDescription The description of the G/L account.
 */
class CurrentYearAfterEntry extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ReportingYear';

    protected $fillable = [
        'Division',
        'GLAccount',
        'ReportingYear',
        'Amount',
        'BalanceSide',
        'GLAccountCode',
        'GLAccountDescription',
    ];

    protected $url = 'openingbalance/CurrentYear/AfterEntry';
}
