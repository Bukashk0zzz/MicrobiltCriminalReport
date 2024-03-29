<?php
/**
 * File for class MicrobiltCriminalReportStructCommercialAmounts_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCommercialAmounts_Type originally named CommercialAmounts_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCommercialAmounts_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AssetAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AssetAmt;
    /**
     * The CreditLimitAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CreditLimitAmt;
    /**
     * The Income
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $Income;
    /**
     * The AnswerLimitAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AnswerLimitAmt;
    /**
     * The AvgMonthlyCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AvgMonthlyCreditAmt;
    /**
     * The CapitalStockAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CapitalStockAmt;
    /**
     * The ClosingAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ClosingAmt;
    /**
     * The IssuedCapitalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $IssuedCapitalAmt;
    /**
     * The NetIncomeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $NetIncomeAmt;
    /**
     * The NominalCapitalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $NominalCapitalAmt;
    /**
     * The OpeningAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $OpeningAmt;
    /**
     * The SalesAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $SalesAmt;
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalAmt;
    /**
     * The ValueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ValueAmt;
    /**
     * The VATAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $VATAmt;
    /**
     * The WorkingCapitalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $WorkingCapitalAmt;
    /**
     * The NominalNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $NominalNum;
    /**
     * The CreditorsDaysDPO
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $CreditorsDaysDPO;
    /**
     * The DaysOfCredit
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $DaysOfCredit;
    /**
     * The IssuedNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $IssuedNum;
    /**
     * The NumOfShareholders
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfShareholders;
    /**
     * The NumOfShares
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfShares;
    /**
     * The NumOutstanding
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOutstanding;
    /**
     * The NumPartiallySatisfied
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumPartiallySatisfied;
    /**
     * The NumRegistered
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumRegistered;
    /**
     * The NumSatisfied
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumSatisfied;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Quantity;
    /**
     * The TotalCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $TotalCount;
    /**
     * The CurrencyRate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $CurrencyRate;
    /**
     * The GearingPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $GearingPercent;
    /**
     * The LeveragePercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $LeveragePercent;
    /**
     * The OddsFinancialStressNext12Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $OddsFinancialStressNext12Months;
    /**
     * The PaymentTrend
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $PaymentTrend;
    /**
     * The PercentAtAndAboveScore
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $PercentAtAndAboveScore;
    /**
     * The PercentFacedFinancialStress
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $PercentFacedFinancialStress;
    /**
     * The PercentOfShares
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $PercentOfShares;
    /**
     * The QuickRatioPercent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $QuickRatioPercent;
    /**
     * The BusinessDBT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusinessDBT;
    /**
     * The PredictedDBTAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $PredictedDBTAmt;
    /**
     * The AllIndustryDBT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AllIndustryDBT;
    /**
     * The LowTotalAcctBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $LowTotalAcctBalAmt;
    /**
     * The LowTotalAcctBalModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LowTotalAcctBalModifier;
    /**
     * The HighTotalAcctBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $HighTotalAcctBalAmt;
    /**
     * The HighTotalAcctBalModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $HighTotalAcctBalModifier;
    /**
     * The CurTotalAcctBalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CurTotalAcctBalAmt;
    /**
     * The CurTotalAcctBalModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CurTotalAcctBalModifier;
    /**
     * The HighCreditExtendedAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $HighCreditExtendedAmt;
    /**
     * The MedCreditExtendedAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $MedCreditExtendedAmt;
    /**
     * The AmtPlacedForCollection
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AmtPlacedForCollection;
    /**
     * The AmtPaid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $AmtPaid;
    /**
     * The RecentHighCreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $RecentHighCreditAmt;
    /**
     * The RecentHighCreditModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecentHighCreditModifier;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The BalanceAmtModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BalanceAmtModifier;
    /**
     * The Terms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Terms;
    /**
     * The CurrentPercentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $CurrentPercentage;
    /**
     * The DBT30Percentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $DBT30Percentage;
    /**
     * The DBT60Percentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $DBT60Percentage;
    /**
     * The DBT90Percentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $DBT90Percentage;
    /**
     * The DBT90PlusPercentage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var float
     */
    public $DBT90PlusPercentage;
    /**
     * The ContributorComments
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ContributorComments;
    /**
     * The ConsumerStatementPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $ConsumerStatementPresent;
    /**
     * The LiabilityAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $LiabilityAmt;
    /**
     * The NumPmtsPerYear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumPmtsPerYear;
    /**
     * The LateCount30
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount30;
    /**
     * The LateCount60
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount60;
    /**
     * The LateCount90
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount90;
    /**
     * The LateCount90Plus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount90Plus;
    /**
     * The LateCount120
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $LateCount120;
    /**
     * The ScheduledPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ScheduledPmtAmt;
    /**
     * The ScheduledPmtAmtModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ScheduledPmtAmtModifier;
    /**
     * The NumOfOverduePmts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfOverduePmts;
    /**
     * The PmtOverdueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $PmtOverdueAmt;
    /**
     * The PmtOverdueAmtModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtOverdueAmtModifier;
    /**
     * The CurrentPmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CurrentPmtAmt;
    /**
     * The CurrentPmtAmtModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CurrentPmtAmtModifier;
    /**
     * The TotalLatePmtAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalLatePmtAmt;
    /**
     * The TotalLatePmtAmtModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TotalLatePmtAmtModifier;
    /**
     * The Amt30DaysLate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $Amt30DaysLate;
    /**
     * The Amt30DaysLateModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Amt30DaysLateModifier;
    /**
     * The Amt60DaysLate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $Amt60DaysLate;
    /**
     * The Amt60DaysLateModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Amt60DaysLateModifier;
    /**
     * The Amt90DaysLate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $Amt90DaysLate;
    /**
     * The Amt90DaysLateModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Amt90DaysLateModifier;
    /**
     * The Amt90PlusDaysLate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $Amt90PlusDaysLate;
    /**
     * The Amt90PlusDaysLateModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Amt90PlusDaysLateModifier;
    /**
     * The FilingAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $FilingAmt;
    /**
     * The SalesAmtRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public $SalesAmtRange;
    /**
     * The ProfitLossAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ProfitLossAmt;
    /**
     * The ProfitLossCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $ProfitLossCode;
    /**
     * The ProfitLossAmtRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public $ProfitLossAmtRange;
    /**
     * The ActualNetWorthAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ActualNetWorthAmt;
    /**
     * The NetWorthAmtRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public $NetWorthAmtRange;
    /**
     * The IndustryDBT
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IndustryDBT;
    /**
     * The ExemptAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ExemptAmt;
    /**
     * The AccountRating
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $AccountRating;
    /**
     * The BalanceRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $BalanceRange;
    /**
     * The FiguresInBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $FiguresInBalance;
    /**
     * The OriginalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $OriginalAmt;
    /**
     * The NumOfCurrentPmts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $NumOfCurrentPmts;
    /**
     * The CollectionAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $CollectionAmt;
    /**
     * The LegalSuitsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $LegalSuitsAmt;
    /**
     * The JudgmentAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $JudgmentAmt;
    /**
     * The OtherLegalItemAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $OtherLegalItemAmt;
    /**
     * The ReturnedChecksAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ReturnedChecksAmt;
    /**
     * The PaidClaimsAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $PaidClaimsAmt;
    /**
     * The DividendAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $DividendAmt;
    /**
     * Constructor method for CommercialAmounts_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_assetAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_creditLimitAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_income
     * @param MicrobiltCriminalReportStructCurrencyAmount $_answerLimitAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_avgMonthlyCreditAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_capitalStockAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_closingAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_issuedCapitalAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_netIncomeAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_nominalCapitalAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_openingAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_salesAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_valueAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_vATAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_workingCapitalAmt
     * @param string $_nominalNum
     * @param int $_creditorsDaysDPO
     * @param int $_daysOfCredit
     * @param int $_issuedNum
     * @param int $_numOfShareholders
     * @param int $_numOfShares
     * @param int $_numOutstanding
     * @param int $_numPartiallySatisfied
     * @param int $_numRegistered
     * @param int $_numSatisfied
     * @param int $_quantity
     * @param int $_totalCount
     * @param float $_currencyRate
     * @param float $_gearingPercent
     * @param float $_leveragePercent
     * @param float $_oddsFinancialStressNext12Months
     * @param float $_paymentTrend
     * @param float $_percentAtAndAboveScore
     * @param float $_percentFacedFinancialStress
     * @param float $_percentOfShares
     * @param float $_quickRatioPercent
     * @param string $_businessDBT
     * @param MicrobiltCriminalReportStructCurrencyAmount $_predictedDBTAmt
     * @param string $_allIndustryDBT
     * @param MicrobiltCriminalReportStructCurrencyAmount $_lowTotalAcctBalAmt
     * @param string $_lowTotalAcctBalModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_highTotalAcctBalAmt
     * @param string $_highTotalAcctBalModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_curTotalAcctBalAmt
     * @param string $_curTotalAcctBalModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_highCreditExtendedAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_medCreditExtendedAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amtPlacedForCollection
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amtPaid
     * @param MicrobiltCriminalReportStructCurrencyAmount $_recentHighCreditAmt
     * @param string $_recentHighCreditModifier
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt
     * @param string $_balanceAmtModifier
     * @param string $_terms
     * @param float $_currentPercentage
     * @param float $_dBT30Percentage
     * @param float $_dBT60Percentage
     * @param float $_dBT90Percentage
     * @param float $_dBT90PlusPercentage
     * @param string $_contributorComments
     * @param MicrobiltCriminalReportEnumBoolean $_consumerStatementPresent
     * @param MicrobiltCriminalReportStructCurrencyAmount $_liabilityAmt
     * @param int $_numPmtsPerYear
     * @param int $_lateCount30
     * @param int $_lateCount60
     * @param int $_lateCount90
     * @param int $_lateCount90Plus
     * @param int $_lateCount120
     * @param MicrobiltCriminalReportStructCurrencyAmount $_scheduledPmtAmt
     * @param string $_scheduledPmtAmtModifier
     * @param int $_numOfOverduePmts
     * @param MicrobiltCriminalReportStructCurrencyAmount $_pmtOverdueAmt
     * @param string $_pmtOverdueAmtModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_currentPmtAmt
     * @param string $_currentPmtAmtModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalLatePmtAmt
     * @param string $_totalLatePmtAmtModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt30DaysLate
     * @param string $_amt30DaysLateModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt60DaysLate
     * @param string $_amt60DaysLateModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt90DaysLate
     * @param string $_amt90DaysLateModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt90PlusDaysLate
     * @param string $_amt90PlusDaysLateModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_filingAmt
     * @param MicrobiltCriminalReportStructHighLowAmtRange_Type $_salesAmtRange
     * @param MicrobiltCriminalReportStructCurrencyAmount $_profitLossAmt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_profitLossCode
     * @param MicrobiltCriminalReportStructHighLowAmtRange_Type $_profitLossAmtRange
     * @param MicrobiltCriminalReportStructCurrencyAmount $_actualNetWorthAmt
     * @param MicrobiltCriminalReportStructHighLowAmtRange_Type $_netWorthAmtRange
     * @param string $_industryDBT
     * @param MicrobiltCriminalReportStructCurrencyAmount $_exemptAmt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_accountRating
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_balanceRange
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_figuresInBalance
     * @param MicrobiltCriminalReportStructCurrencyAmount $_originalAmt
     * @param int $_numOfCurrentPmts
     * @param MicrobiltCriminalReportStructCurrencyAmount $_collectionAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_legalSuitsAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_judgmentAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_otherLegalItemAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_returnedChecksAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_paidClaimsAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_dividendAmt
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public function __construct($_assetAmt = NULL,$_creditLimitAmt = NULL,$_income = NULL,$_answerLimitAmt = NULL,$_avgMonthlyCreditAmt = NULL,$_capitalStockAmt = NULL,$_closingAmt = NULL,$_issuedCapitalAmt = NULL,$_netIncomeAmt = NULL,$_nominalCapitalAmt = NULL,$_openingAmt = NULL,$_salesAmt = NULL,$_totalAmt = NULL,$_valueAmt = NULL,$_vATAmt = NULL,$_workingCapitalAmt = NULL,$_nominalNum = NULL,$_creditorsDaysDPO = NULL,$_daysOfCredit = NULL,$_issuedNum = NULL,$_numOfShareholders = NULL,$_numOfShares = NULL,$_numOutstanding = NULL,$_numPartiallySatisfied = NULL,$_numRegistered = NULL,$_numSatisfied = NULL,$_quantity = NULL,$_totalCount = NULL,$_currencyRate = NULL,$_gearingPercent = NULL,$_leveragePercent = NULL,$_oddsFinancialStressNext12Months = NULL,$_paymentTrend = NULL,$_percentAtAndAboveScore = NULL,$_percentFacedFinancialStress = NULL,$_percentOfShares = NULL,$_quickRatioPercent = NULL,$_businessDBT = NULL,$_predictedDBTAmt = NULL,$_allIndustryDBT = NULL,$_lowTotalAcctBalAmt = NULL,$_lowTotalAcctBalModifier = NULL,$_highTotalAcctBalAmt = NULL,$_highTotalAcctBalModifier = NULL,$_curTotalAcctBalAmt = NULL,$_curTotalAcctBalModifier = NULL,$_highCreditExtendedAmt = NULL,$_medCreditExtendedAmt = NULL,$_amtPlacedForCollection = NULL,$_amtPaid = NULL,$_recentHighCreditAmt = NULL,$_recentHighCreditModifier = NULL,$_balanceAmt = NULL,$_balanceAmtModifier = NULL,$_terms = NULL,$_currentPercentage = NULL,$_dBT30Percentage = NULL,$_dBT60Percentage = NULL,$_dBT90Percentage = NULL,$_dBT90PlusPercentage = NULL,$_contributorComments = NULL,$_consumerStatementPresent = NULL,$_liabilityAmt = NULL,$_numPmtsPerYear = NULL,$_lateCount30 = NULL,$_lateCount60 = NULL,$_lateCount90 = NULL,$_lateCount90Plus = NULL,$_lateCount120 = NULL,$_scheduledPmtAmt = NULL,$_scheduledPmtAmtModifier = NULL,$_numOfOverduePmts = NULL,$_pmtOverdueAmt = NULL,$_pmtOverdueAmtModifier = NULL,$_currentPmtAmt = NULL,$_currentPmtAmtModifier = NULL,$_totalLatePmtAmt = NULL,$_totalLatePmtAmtModifier = NULL,$_amt30DaysLate = NULL,$_amt30DaysLateModifier = NULL,$_amt60DaysLate = NULL,$_amt60DaysLateModifier = NULL,$_amt90DaysLate = NULL,$_amt90DaysLateModifier = NULL,$_amt90PlusDaysLate = NULL,$_amt90PlusDaysLateModifier = NULL,$_filingAmt = NULL,$_salesAmtRange = NULL,$_profitLossAmt = NULL,$_profitLossCode = NULL,$_profitLossAmtRange = NULL,$_actualNetWorthAmt = NULL,$_netWorthAmtRange = NULL,$_industryDBT = NULL,$_exemptAmt = NULL,$_accountRating = NULL,$_balanceRange = NULL,$_figuresInBalance = NULL,$_originalAmt = NULL,$_numOfCurrentPmts = NULL,$_collectionAmt = NULL,$_legalSuitsAmt = NULL,$_judgmentAmt = NULL,$_otherLegalItemAmt = NULL,$_returnedChecksAmt = NULL,$_paidClaimsAmt = NULL,$_dividendAmt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AssetAmt'=>$_assetAmt,'CreditLimitAmt'=>$_creditLimitAmt,'Income'=>$_income,'AnswerLimitAmt'=>$_answerLimitAmt,'AvgMonthlyCreditAmt'=>$_avgMonthlyCreditAmt,'CapitalStockAmt'=>$_capitalStockAmt,'ClosingAmt'=>$_closingAmt,'IssuedCapitalAmt'=>$_issuedCapitalAmt,'NetIncomeAmt'=>$_netIncomeAmt,'NominalCapitalAmt'=>$_nominalCapitalAmt,'OpeningAmt'=>$_openingAmt,'SalesAmt'=>$_salesAmt,'TotalAmt'=>$_totalAmt,'ValueAmt'=>$_valueAmt,'VATAmt'=>$_vATAmt,'WorkingCapitalAmt'=>$_workingCapitalAmt,'NominalNum'=>$_nominalNum,'CreditorsDaysDPO'=>$_creditorsDaysDPO,'DaysOfCredit'=>$_daysOfCredit,'IssuedNum'=>$_issuedNum,'NumOfShareholders'=>$_numOfShareholders,'NumOfShares'=>$_numOfShares,'NumOutstanding'=>$_numOutstanding,'NumPartiallySatisfied'=>$_numPartiallySatisfied,'NumRegistered'=>$_numRegistered,'NumSatisfied'=>$_numSatisfied,'Quantity'=>$_quantity,'TotalCount'=>$_totalCount,'CurrencyRate'=>$_currencyRate,'GearingPercent'=>$_gearingPercent,'LeveragePercent'=>$_leveragePercent,'OddsFinancialStressNext12Months'=>$_oddsFinancialStressNext12Months,'PaymentTrend'=>$_paymentTrend,'PercentAtAndAboveScore'=>$_percentAtAndAboveScore,'PercentFacedFinancialStress'=>$_percentFacedFinancialStress,'PercentOfShares'=>$_percentOfShares,'QuickRatioPercent'=>$_quickRatioPercent,'BusinessDBT'=>$_businessDBT,'PredictedDBTAmt'=>$_predictedDBTAmt,'AllIndustryDBT'=>$_allIndustryDBT,'LowTotalAcctBalAmt'=>$_lowTotalAcctBalAmt,'LowTotalAcctBalModifier'=>$_lowTotalAcctBalModifier,'HighTotalAcctBalAmt'=>$_highTotalAcctBalAmt,'HighTotalAcctBalModifier'=>$_highTotalAcctBalModifier,'CurTotalAcctBalAmt'=>$_curTotalAcctBalAmt,'CurTotalAcctBalModifier'=>$_curTotalAcctBalModifier,'HighCreditExtendedAmt'=>$_highCreditExtendedAmt,'MedCreditExtendedAmt'=>$_medCreditExtendedAmt,'AmtPlacedForCollection'=>$_amtPlacedForCollection,'AmtPaid'=>$_amtPaid,'RecentHighCreditAmt'=>$_recentHighCreditAmt,'RecentHighCreditModifier'=>$_recentHighCreditModifier,'BalanceAmt'=>$_balanceAmt,'BalanceAmtModifier'=>$_balanceAmtModifier,'Terms'=>$_terms,'CurrentPercentage'=>$_currentPercentage,'DBT30Percentage'=>$_dBT30Percentage,'DBT60Percentage'=>$_dBT60Percentage,'DBT90Percentage'=>$_dBT90Percentage,'DBT90PlusPercentage'=>$_dBT90PlusPercentage,'ContributorComments'=>$_contributorComments,'ConsumerStatementPresent'=>$_consumerStatementPresent,'LiabilityAmt'=>$_liabilityAmt,'NumPmtsPerYear'=>$_numPmtsPerYear,'LateCount30'=>$_lateCount30,'LateCount60'=>$_lateCount60,'LateCount90'=>$_lateCount90,'LateCount90Plus'=>$_lateCount90Plus,'LateCount120'=>$_lateCount120,'ScheduledPmtAmt'=>$_scheduledPmtAmt,'ScheduledPmtAmtModifier'=>$_scheduledPmtAmtModifier,'NumOfOverduePmts'=>$_numOfOverduePmts,'PmtOverdueAmt'=>$_pmtOverdueAmt,'PmtOverdueAmtModifier'=>$_pmtOverdueAmtModifier,'CurrentPmtAmt'=>$_currentPmtAmt,'CurrentPmtAmtModifier'=>$_currentPmtAmtModifier,'TotalLatePmtAmt'=>$_totalLatePmtAmt,'TotalLatePmtAmtModifier'=>$_totalLatePmtAmtModifier,'Amt30DaysLate'=>$_amt30DaysLate,'Amt30DaysLateModifier'=>$_amt30DaysLateModifier,'Amt60DaysLate'=>$_amt60DaysLate,'Amt60DaysLateModifier'=>$_amt60DaysLateModifier,'Amt90DaysLate'=>$_amt90DaysLate,'Amt90DaysLateModifier'=>$_amt90DaysLateModifier,'Amt90PlusDaysLate'=>$_amt90PlusDaysLate,'Amt90PlusDaysLateModifier'=>$_amt90PlusDaysLateModifier,'FilingAmt'=>$_filingAmt,'SalesAmtRange'=>$_salesAmtRange,'ProfitLossAmt'=>$_profitLossAmt,'ProfitLossCode'=>$_profitLossCode,'ProfitLossAmtRange'=>$_profitLossAmtRange,'ActualNetWorthAmt'=>$_actualNetWorthAmt,'NetWorthAmtRange'=>$_netWorthAmtRange,'IndustryDBT'=>$_industryDBT,'ExemptAmt'=>$_exemptAmt,'AccountRating'=>$_accountRating,'BalanceRange'=>$_balanceRange,'FiguresInBalance'=>$_figuresInBalance,'OriginalAmt'=>$_originalAmt,'NumOfCurrentPmts'=>$_numOfCurrentPmts,'CollectionAmt'=>$_collectionAmt,'LegalSuitsAmt'=>$_legalSuitsAmt,'JudgmentAmt'=>$_judgmentAmt,'OtherLegalItemAmt'=>$_otherLegalItemAmt,'ReturnedChecksAmt'=>$_returnedChecksAmt,'PaidClaimsAmt'=>$_paidClaimsAmt,'DividendAmt'=>$_dividendAmt),false);
    }
    /**
     * Get AssetAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAssetAmt()
    {
        return $this->AssetAmt;
    }
    /**
     * Set AssetAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_assetAmt the AssetAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAssetAmt($_assetAmt)
    {
        return ($this->AssetAmt = $_assetAmt);
    }
    /**
     * Get CreditLimitAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCreditLimitAmt()
    {
        return $this->CreditLimitAmt;
    }
    /**
     * Set CreditLimitAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_creditLimitAmt the CreditLimitAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCreditLimitAmt($_creditLimitAmt)
    {
        return ($this->CreditLimitAmt = $_creditLimitAmt);
    }
    /**
     * Get Income value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getIncome()
    {
        return $this->Income;
    }
    /**
     * Set Income value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_income the Income
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setIncome($_income)
    {
        return ($this->Income = $_income);
    }
    /**
     * Get AnswerLimitAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAnswerLimitAmt()
    {
        return $this->AnswerLimitAmt;
    }
    /**
     * Set AnswerLimitAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_answerLimitAmt the AnswerLimitAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAnswerLimitAmt($_answerLimitAmt)
    {
        return ($this->AnswerLimitAmt = $_answerLimitAmt);
    }
    /**
     * Get AvgMonthlyCreditAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAvgMonthlyCreditAmt()
    {
        return $this->AvgMonthlyCreditAmt;
    }
    /**
     * Set AvgMonthlyCreditAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_avgMonthlyCreditAmt the AvgMonthlyCreditAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAvgMonthlyCreditAmt($_avgMonthlyCreditAmt)
    {
        return ($this->AvgMonthlyCreditAmt = $_avgMonthlyCreditAmt);
    }
    /**
     * Get CapitalStockAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCapitalStockAmt()
    {
        return $this->CapitalStockAmt;
    }
    /**
     * Set CapitalStockAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_capitalStockAmt the CapitalStockAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCapitalStockAmt($_capitalStockAmt)
    {
        return ($this->CapitalStockAmt = $_capitalStockAmt);
    }
    /**
     * Get ClosingAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getClosingAmt()
    {
        return $this->ClosingAmt;
    }
    /**
     * Set ClosingAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_closingAmt the ClosingAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setClosingAmt($_closingAmt)
    {
        return ($this->ClosingAmt = $_closingAmt);
    }
    /**
     * Get IssuedCapitalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getIssuedCapitalAmt()
    {
        return $this->IssuedCapitalAmt;
    }
    /**
     * Set IssuedCapitalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_issuedCapitalAmt the IssuedCapitalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setIssuedCapitalAmt($_issuedCapitalAmt)
    {
        return ($this->IssuedCapitalAmt = $_issuedCapitalAmt);
    }
    /**
     * Get NetIncomeAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getNetIncomeAmt()
    {
        return $this->NetIncomeAmt;
    }
    /**
     * Set NetIncomeAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_netIncomeAmt the NetIncomeAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setNetIncomeAmt($_netIncomeAmt)
    {
        return ($this->NetIncomeAmt = $_netIncomeAmt);
    }
    /**
     * Get NominalCapitalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getNominalCapitalAmt()
    {
        return $this->NominalCapitalAmt;
    }
    /**
     * Set NominalCapitalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_nominalCapitalAmt the NominalCapitalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setNominalCapitalAmt($_nominalCapitalAmt)
    {
        return ($this->NominalCapitalAmt = $_nominalCapitalAmt);
    }
    /**
     * Get OpeningAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getOpeningAmt()
    {
        return $this->OpeningAmt;
    }
    /**
     * Set OpeningAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_openingAmt the OpeningAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setOpeningAmt($_openingAmt)
    {
        return ($this->OpeningAmt = $_openingAmt);
    }
    /**
     * Get SalesAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getSalesAmt()
    {
        return $this->SalesAmt;
    }
    /**
     * Set SalesAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_salesAmt the SalesAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setSalesAmt($_salesAmt)
    {
        return ($this->SalesAmt = $_salesAmt);
    }
    /**
     * Get TotalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }
    /**
     * Set TotalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalAmt the TotalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalAmt($_totalAmt)
    {
        return ($this->TotalAmt = $_totalAmt);
    }
    /**
     * Get ValueAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getValueAmt()
    {
        return $this->ValueAmt;
    }
    /**
     * Set ValueAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_valueAmt the ValueAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setValueAmt($_valueAmt)
    {
        return ($this->ValueAmt = $_valueAmt);
    }
    /**
     * Get VATAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getVATAmt()
    {
        return $this->VATAmt;
    }
    /**
     * Set VATAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_vATAmt the VATAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setVATAmt($_vATAmt)
    {
        return ($this->VATAmt = $_vATAmt);
    }
    /**
     * Get WorkingCapitalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getWorkingCapitalAmt()
    {
        return $this->WorkingCapitalAmt;
    }
    /**
     * Set WorkingCapitalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_workingCapitalAmt the WorkingCapitalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setWorkingCapitalAmt($_workingCapitalAmt)
    {
        return ($this->WorkingCapitalAmt = $_workingCapitalAmt);
    }
    /**
     * Get NominalNum value
     * @return string|null
     */
    public function getNominalNum()
    {
        return $this->NominalNum;
    }
    /**
     * Set NominalNum value
     * @param string $_nominalNum the NominalNum
     * @return string
     */
    public function setNominalNum($_nominalNum)
    {
        return ($this->NominalNum = $_nominalNum);
    }
    /**
     * Get CreditorsDaysDPO value
     * @return int|null
     */
    public function getCreditorsDaysDPO()
    {
        return $this->CreditorsDaysDPO;
    }
    /**
     * Set CreditorsDaysDPO value
     * @param int $_creditorsDaysDPO the CreditorsDaysDPO
     * @return int
     */
    public function setCreditorsDaysDPO($_creditorsDaysDPO)
    {
        return ($this->CreditorsDaysDPO = $_creditorsDaysDPO);
    }
    /**
     * Get DaysOfCredit value
     * @return int|null
     */
    public function getDaysOfCredit()
    {
        return $this->DaysOfCredit;
    }
    /**
     * Set DaysOfCredit value
     * @param int $_daysOfCredit the DaysOfCredit
     * @return int
     */
    public function setDaysOfCredit($_daysOfCredit)
    {
        return ($this->DaysOfCredit = $_daysOfCredit);
    }
    /**
     * Get IssuedNum value
     * @return int|null
     */
    public function getIssuedNum()
    {
        return $this->IssuedNum;
    }
    /**
     * Set IssuedNum value
     * @param int $_issuedNum the IssuedNum
     * @return int
     */
    public function setIssuedNum($_issuedNum)
    {
        return ($this->IssuedNum = $_issuedNum);
    }
    /**
     * Get NumOfShareholders value
     * @return int|null
     */
    public function getNumOfShareholders()
    {
        return $this->NumOfShareholders;
    }
    /**
     * Set NumOfShareholders value
     * @param int $_numOfShareholders the NumOfShareholders
     * @return int
     */
    public function setNumOfShareholders($_numOfShareholders)
    {
        return ($this->NumOfShareholders = $_numOfShareholders);
    }
    /**
     * Get NumOfShares value
     * @return int|null
     */
    public function getNumOfShares()
    {
        return $this->NumOfShares;
    }
    /**
     * Set NumOfShares value
     * @param int $_numOfShares the NumOfShares
     * @return int
     */
    public function setNumOfShares($_numOfShares)
    {
        return ($this->NumOfShares = $_numOfShares);
    }
    /**
     * Get NumOutstanding value
     * @return int|null
     */
    public function getNumOutstanding()
    {
        return $this->NumOutstanding;
    }
    /**
     * Set NumOutstanding value
     * @param int $_numOutstanding the NumOutstanding
     * @return int
     */
    public function setNumOutstanding($_numOutstanding)
    {
        return ($this->NumOutstanding = $_numOutstanding);
    }
    /**
     * Get NumPartiallySatisfied value
     * @return int|null
     */
    public function getNumPartiallySatisfied()
    {
        return $this->NumPartiallySatisfied;
    }
    /**
     * Set NumPartiallySatisfied value
     * @param int $_numPartiallySatisfied the NumPartiallySatisfied
     * @return int
     */
    public function setNumPartiallySatisfied($_numPartiallySatisfied)
    {
        return ($this->NumPartiallySatisfied = $_numPartiallySatisfied);
    }
    /**
     * Get NumRegistered value
     * @return int|null
     */
    public function getNumRegistered()
    {
        return $this->NumRegistered;
    }
    /**
     * Set NumRegistered value
     * @param int $_numRegistered the NumRegistered
     * @return int
     */
    public function setNumRegistered($_numRegistered)
    {
        return ($this->NumRegistered = $_numRegistered);
    }
    /**
     * Get NumSatisfied value
     * @return int|null
     */
    public function getNumSatisfied()
    {
        return $this->NumSatisfied;
    }
    /**
     * Set NumSatisfied value
     * @param int $_numSatisfied the NumSatisfied
     * @return int
     */
    public function setNumSatisfied($_numSatisfied)
    {
        return ($this->NumSatisfied = $_numSatisfied);
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $_quantity the Quantity
     * @return int
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $_totalCount the TotalCount
     * @return int
     */
    public function setTotalCount($_totalCount)
    {
        return ($this->TotalCount = $_totalCount);
    }
    /**
     * Get CurrencyRate value
     * @return float|null
     */
    public function getCurrencyRate()
    {
        return $this->CurrencyRate;
    }
    /**
     * Set CurrencyRate value
     * @param float $_currencyRate the CurrencyRate
     * @return float
     */
    public function setCurrencyRate($_currencyRate)
    {
        return ($this->CurrencyRate = $_currencyRate);
    }
    /**
     * Get GearingPercent value
     * @return float|null
     */
    public function getGearingPercent()
    {
        return $this->GearingPercent;
    }
    /**
     * Set GearingPercent value
     * @param float $_gearingPercent the GearingPercent
     * @return float
     */
    public function setGearingPercent($_gearingPercent)
    {
        return ($this->GearingPercent = $_gearingPercent);
    }
    /**
     * Get LeveragePercent value
     * @return float|null
     */
    public function getLeveragePercent()
    {
        return $this->LeveragePercent;
    }
    /**
     * Set LeveragePercent value
     * @param float $_leveragePercent the LeveragePercent
     * @return float
     */
    public function setLeveragePercent($_leveragePercent)
    {
        return ($this->LeveragePercent = $_leveragePercent);
    }
    /**
     * Get OddsFinancialStressNext12Months value
     * @return float|null
     */
    public function getOddsFinancialStressNext12Months()
    {
        return $this->OddsFinancialStressNext12Months;
    }
    /**
     * Set OddsFinancialStressNext12Months value
     * @param float $_oddsFinancialStressNext12Months the OddsFinancialStressNext12Months
     * @return float
     */
    public function setOddsFinancialStressNext12Months($_oddsFinancialStressNext12Months)
    {
        return ($this->OddsFinancialStressNext12Months = $_oddsFinancialStressNext12Months);
    }
    /**
     * Get PaymentTrend value
     * @return float|null
     */
    public function getPaymentTrend()
    {
        return $this->PaymentTrend;
    }
    /**
     * Set PaymentTrend value
     * @param float $_paymentTrend the PaymentTrend
     * @return float
     */
    public function setPaymentTrend($_paymentTrend)
    {
        return ($this->PaymentTrend = $_paymentTrend);
    }
    /**
     * Get PercentAtAndAboveScore value
     * @return float|null
     */
    public function getPercentAtAndAboveScore()
    {
        return $this->PercentAtAndAboveScore;
    }
    /**
     * Set PercentAtAndAboveScore value
     * @param float $_percentAtAndAboveScore the PercentAtAndAboveScore
     * @return float
     */
    public function setPercentAtAndAboveScore($_percentAtAndAboveScore)
    {
        return ($this->PercentAtAndAboveScore = $_percentAtAndAboveScore);
    }
    /**
     * Get PercentFacedFinancialStress value
     * @return float|null
     */
    public function getPercentFacedFinancialStress()
    {
        return $this->PercentFacedFinancialStress;
    }
    /**
     * Set PercentFacedFinancialStress value
     * @param float $_percentFacedFinancialStress the PercentFacedFinancialStress
     * @return float
     */
    public function setPercentFacedFinancialStress($_percentFacedFinancialStress)
    {
        return ($this->PercentFacedFinancialStress = $_percentFacedFinancialStress);
    }
    /**
     * Get PercentOfShares value
     * @return float|null
     */
    public function getPercentOfShares()
    {
        return $this->PercentOfShares;
    }
    /**
     * Set PercentOfShares value
     * @param float $_percentOfShares the PercentOfShares
     * @return float
     */
    public function setPercentOfShares($_percentOfShares)
    {
        return ($this->PercentOfShares = $_percentOfShares);
    }
    /**
     * Get QuickRatioPercent value
     * @return float|null
     */
    public function getQuickRatioPercent()
    {
        return $this->QuickRatioPercent;
    }
    /**
     * Set QuickRatioPercent value
     * @param float $_quickRatioPercent the QuickRatioPercent
     * @return float
     */
    public function setQuickRatioPercent($_quickRatioPercent)
    {
        return ($this->QuickRatioPercent = $_quickRatioPercent);
    }
    /**
     * Get BusinessDBT value
     * @return string|null
     */
    public function getBusinessDBT()
    {
        return $this->BusinessDBT;
    }
    /**
     * Set BusinessDBT value
     * @param string $_businessDBT the BusinessDBT
     * @return string
     */
    public function setBusinessDBT($_businessDBT)
    {
        return ($this->BusinessDBT = $_businessDBT);
    }
    /**
     * Get PredictedDBTAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getPredictedDBTAmt()
    {
        return $this->PredictedDBTAmt;
    }
    /**
     * Set PredictedDBTAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_predictedDBTAmt the PredictedDBTAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setPredictedDBTAmt($_predictedDBTAmt)
    {
        return ($this->PredictedDBTAmt = $_predictedDBTAmt);
    }
    /**
     * Get AllIndustryDBT value
     * @return string|null
     */
    public function getAllIndustryDBT()
    {
        return $this->AllIndustryDBT;
    }
    /**
     * Set AllIndustryDBT value
     * @param string $_allIndustryDBT the AllIndustryDBT
     * @return string
     */
    public function setAllIndustryDBT($_allIndustryDBT)
    {
        return ($this->AllIndustryDBT = $_allIndustryDBT);
    }
    /**
     * Get LowTotalAcctBalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getLowTotalAcctBalAmt()
    {
        return $this->LowTotalAcctBalAmt;
    }
    /**
     * Set LowTotalAcctBalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_lowTotalAcctBalAmt the LowTotalAcctBalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setLowTotalAcctBalAmt($_lowTotalAcctBalAmt)
    {
        return ($this->LowTotalAcctBalAmt = $_lowTotalAcctBalAmt);
    }
    /**
     * Get LowTotalAcctBalModifier value
     * @return string|null
     */
    public function getLowTotalAcctBalModifier()
    {
        return $this->LowTotalAcctBalModifier;
    }
    /**
     * Set LowTotalAcctBalModifier value
     * @param string $_lowTotalAcctBalModifier the LowTotalAcctBalModifier
     * @return string
     */
    public function setLowTotalAcctBalModifier($_lowTotalAcctBalModifier)
    {
        return ($this->LowTotalAcctBalModifier = $_lowTotalAcctBalModifier);
    }
    /**
     * Get HighTotalAcctBalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getHighTotalAcctBalAmt()
    {
        return $this->HighTotalAcctBalAmt;
    }
    /**
     * Set HighTotalAcctBalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_highTotalAcctBalAmt the HighTotalAcctBalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setHighTotalAcctBalAmt($_highTotalAcctBalAmt)
    {
        return ($this->HighTotalAcctBalAmt = $_highTotalAcctBalAmt);
    }
    /**
     * Get HighTotalAcctBalModifier value
     * @return string|null
     */
    public function getHighTotalAcctBalModifier()
    {
        return $this->HighTotalAcctBalModifier;
    }
    /**
     * Set HighTotalAcctBalModifier value
     * @param string $_highTotalAcctBalModifier the HighTotalAcctBalModifier
     * @return string
     */
    public function setHighTotalAcctBalModifier($_highTotalAcctBalModifier)
    {
        return ($this->HighTotalAcctBalModifier = $_highTotalAcctBalModifier);
    }
    /**
     * Get CurTotalAcctBalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCurTotalAcctBalAmt()
    {
        return $this->CurTotalAcctBalAmt;
    }
    /**
     * Set CurTotalAcctBalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_curTotalAcctBalAmt the CurTotalAcctBalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCurTotalAcctBalAmt($_curTotalAcctBalAmt)
    {
        return ($this->CurTotalAcctBalAmt = $_curTotalAcctBalAmt);
    }
    /**
     * Get CurTotalAcctBalModifier value
     * @return string|null
     */
    public function getCurTotalAcctBalModifier()
    {
        return $this->CurTotalAcctBalModifier;
    }
    /**
     * Set CurTotalAcctBalModifier value
     * @param string $_curTotalAcctBalModifier the CurTotalAcctBalModifier
     * @return string
     */
    public function setCurTotalAcctBalModifier($_curTotalAcctBalModifier)
    {
        return ($this->CurTotalAcctBalModifier = $_curTotalAcctBalModifier);
    }
    /**
     * Get HighCreditExtendedAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getHighCreditExtendedAmt()
    {
        return $this->HighCreditExtendedAmt;
    }
    /**
     * Set HighCreditExtendedAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_highCreditExtendedAmt the HighCreditExtendedAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setHighCreditExtendedAmt($_highCreditExtendedAmt)
    {
        return ($this->HighCreditExtendedAmt = $_highCreditExtendedAmt);
    }
    /**
     * Get MedCreditExtendedAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getMedCreditExtendedAmt()
    {
        return $this->MedCreditExtendedAmt;
    }
    /**
     * Set MedCreditExtendedAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_medCreditExtendedAmt the MedCreditExtendedAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setMedCreditExtendedAmt($_medCreditExtendedAmt)
    {
        return ($this->MedCreditExtendedAmt = $_medCreditExtendedAmt);
    }
    /**
     * Get AmtPlacedForCollection value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAmtPlacedForCollection()
    {
        return $this->AmtPlacedForCollection;
    }
    /**
     * Set AmtPlacedForCollection value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amtPlacedForCollection the AmtPlacedForCollection
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAmtPlacedForCollection($_amtPlacedForCollection)
    {
        return ($this->AmtPlacedForCollection = $_amtPlacedForCollection);
    }
    /**
     * Get AmtPaid value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAmtPaid()
    {
        return $this->AmtPaid;
    }
    /**
     * Set AmtPaid value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amtPaid the AmtPaid
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAmtPaid($_amtPaid)
    {
        return ($this->AmtPaid = $_amtPaid);
    }
    /**
     * Get RecentHighCreditAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getRecentHighCreditAmt()
    {
        return $this->RecentHighCreditAmt;
    }
    /**
     * Set RecentHighCreditAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_recentHighCreditAmt the RecentHighCreditAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setRecentHighCreditAmt($_recentHighCreditAmt)
    {
        return ($this->RecentHighCreditAmt = $_recentHighCreditAmt);
    }
    /**
     * Get RecentHighCreditModifier value
     * @return string|null
     */
    public function getRecentHighCreditModifier()
    {
        return $this->RecentHighCreditModifier;
    }
    /**
     * Set RecentHighCreditModifier value
     * @param string $_recentHighCreditModifier the RecentHighCreditModifier
     * @return string
     */
    public function setRecentHighCreditModifier($_recentHighCreditModifier)
    {
        return ($this->RecentHighCreditModifier = $_recentHighCreditModifier);
    }
    /**
     * Get BalanceAmt value
     * @return MicrobiltCriminalReportStructCompAmt_Type|null
     */
    public function getBalanceAmt()
    {
        return $this->BalanceAmt;
    }
    /**
     * Set BalanceAmt value
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt the BalanceAmt
     * @return MicrobiltCriminalReportStructCompAmt_Type
     */
    public function setBalanceAmt($_balanceAmt)
    {
        return ($this->BalanceAmt = $_balanceAmt);
    }
    /**
     * Get BalanceAmtModifier value
     * @return string|null
     */
    public function getBalanceAmtModifier()
    {
        return $this->BalanceAmtModifier;
    }
    /**
     * Set BalanceAmtModifier value
     * @param string $_balanceAmtModifier the BalanceAmtModifier
     * @return string
     */
    public function setBalanceAmtModifier($_balanceAmtModifier)
    {
        return ($this->BalanceAmtModifier = $_balanceAmtModifier);
    }
    /**
     * Get Terms value
     * @return string|null
     */
    public function getTerms()
    {
        return $this->Terms;
    }
    /**
     * Set Terms value
     * @param string $_terms the Terms
     * @return string
     */
    public function setTerms($_terms)
    {
        return ($this->Terms = $_terms);
    }
    /**
     * Get CurrentPercentage value
     * @return float|null
     */
    public function getCurrentPercentage()
    {
        return $this->CurrentPercentage;
    }
    /**
     * Set CurrentPercentage value
     * @param float $_currentPercentage the CurrentPercentage
     * @return float
     */
    public function setCurrentPercentage($_currentPercentage)
    {
        return ($this->CurrentPercentage = $_currentPercentage);
    }
    /**
     * Get DBT30Percentage value
     * @return float|null
     */
    public function getDBT30Percentage()
    {
        return $this->DBT30Percentage;
    }
    /**
     * Set DBT30Percentage value
     * @param float $_dBT30Percentage the DBT30Percentage
     * @return float
     */
    public function setDBT30Percentage($_dBT30Percentage)
    {
        return ($this->DBT30Percentage = $_dBT30Percentage);
    }
    /**
     * Get DBT60Percentage value
     * @return float|null
     */
    public function getDBT60Percentage()
    {
        return $this->DBT60Percentage;
    }
    /**
     * Set DBT60Percentage value
     * @param float $_dBT60Percentage the DBT60Percentage
     * @return float
     */
    public function setDBT60Percentage($_dBT60Percentage)
    {
        return ($this->DBT60Percentage = $_dBT60Percentage);
    }
    /**
     * Get DBT90Percentage value
     * @return float|null
     */
    public function getDBT90Percentage()
    {
        return $this->DBT90Percentage;
    }
    /**
     * Set DBT90Percentage value
     * @param float $_dBT90Percentage the DBT90Percentage
     * @return float
     */
    public function setDBT90Percentage($_dBT90Percentage)
    {
        return ($this->DBT90Percentage = $_dBT90Percentage);
    }
    /**
     * Get DBT90PlusPercentage value
     * @return float|null
     */
    public function getDBT90PlusPercentage()
    {
        return $this->DBT90PlusPercentage;
    }
    /**
     * Set DBT90PlusPercentage value
     * @param float $_dBT90PlusPercentage the DBT90PlusPercentage
     * @return float
     */
    public function setDBT90PlusPercentage($_dBT90PlusPercentage)
    {
        return ($this->DBT90PlusPercentage = $_dBT90PlusPercentage);
    }
    /**
     * Get ContributorComments value
     * @return string|null
     */
    public function getContributorComments()
    {
        return $this->ContributorComments;
    }
    /**
     * Set ContributorComments value
     * @param string $_contributorComments the ContributorComments
     * @return string
     */
    public function setContributorComments($_contributorComments)
    {
        return ($this->ContributorComments = $_contributorComments);
    }
    /**
     * Get ConsumerStatementPresent value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getConsumerStatementPresent()
    {
        return $this->ConsumerStatementPresent;
    }
    /**
     * Set ConsumerStatementPresent value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_consumerStatementPresent the ConsumerStatementPresent
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setConsumerStatementPresent($_consumerStatementPresent)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_consumerStatementPresent))
        {
            return false;
        }
        return ($this->ConsumerStatementPresent = $_consumerStatementPresent);
    }
    /**
     * Get LiabilityAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getLiabilityAmt()
    {
        return $this->LiabilityAmt;
    }
    /**
     * Set LiabilityAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_liabilityAmt the LiabilityAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setLiabilityAmt($_liabilityAmt)
    {
        return ($this->LiabilityAmt = $_liabilityAmt);
    }
    /**
     * Get NumPmtsPerYear value
     * @return int|null
     */
    public function getNumPmtsPerYear()
    {
        return $this->NumPmtsPerYear;
    }
    /**
     * Set NumPmtsPerYear value
     * @param int $_numPmtsPerYear the NumPmtsPerYear
     * @return int
     */
    public function setNumPmtsPerYear($_numPmtsPerYear)
    {
        return ($this->NumPmtsPerYear = $_numPmtsPerYear);
    }
    /**
     * Get LateCount30 value
     * @return int|null
     */
    public function getLateCount30()
    {
        return $this->LateCount30;
    }
    /**
     * Set LateCount30 value
     * @param int $_lateCount30 the LateCount30
     * @return int
     */
    public function setLateCount30($_lateCount30)
    {
        return ($this->LateCount30 = $_lateCount30);
    }
    /**
     * Get LateCount60 value
     * @return int|null
     */
    public function getLateCount60()
    {
        return $this->LateCount60;
    }
    /**
     * Set LateCount60 value
     * @param int $_lateCount60 the LateCount60
     * @return int
     */
    public function setLateCount60($_lateCount60)
    {
        return ($this->LateCount60 = $_lateCount60);
    }
    /**
     * Get LateCount90 value
     * @return int|null
     */
    public function getLateCount90()
    {
        return $this->LateCount90;
    }
    /**
     * Set LateCount90 value
     * @param int $_lateCount90 the LateCount90
     * @return int
     */
    public function setLateCount90($_lateCount90)
    {
        return ($this->LateCount90 = $_lateCount90);
    }
    /**
     * Get LateCount90Plus value
     * @return int|null
     */
    public function getLateCount90Plus()
    {
        return $this->LateCount90Plus;
    }
    /**
     * Set LateCount90Plus value
     * @param int $_lateCount90Plus the LateCount90Plus
     * @return int
     */
    public function setLateCount90Plus($_lateCount90Plus)
    {
        return ($this->LateCount90Plus = $_lateCount90Plus);
    }
    /**
     * Get LateCount120 value
     * @return int|null
     */
    public function getLateCount120()
    {
        return $this->LateCount120;
    }
    /**
     * Set LateCount120 value
     * @param int $_lateCount120 the LateCount120
     * @return int
     */
    public function setLateCount120($_lateCount120)
    {
        return ($this->LateCount120 = $_lateCount120);
    }
    /**
     * Get ScheduledPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getScheduledPmtAmt()
    {
        return $this->ScheduledPmtAmt;
    }
    /**
     * Set ScheduledPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_scheduledPmtAmt the ScheduledPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setScheduledPmtAmt($_scheduledPmtAmt)
    {
        return ($this->ScheduledPmtAmt = $_scheduledPmtAmt);
    }
    /**
     * Get ScheduledPmtAmtModifier value
     * @return string|null
     */
    public function getScheduledPmtAmtModifier()
    {
        return $this->ScheduledPmtAmtModifier;
    }
    /**
     * Set ScheduledPmtAmtModifier value
     * @param string $_scheduledPmtAmtModifier the ScheduledPmtAmtModifier
     * @return string
     */
    public function setScheduledPmtAmtModifier($_scheduledPmtAmtModifier)
    {
        return ($this->ScheduledPmtAmtModifier = $_scheduledPmtAmtModifier);
    }
    /**
     * Get NumOfOverduePmts value
     * @return int|null
     */
    public function getNumOfOverduePmts()
    {
        return $this->NumOfOverduePmts;
    }
    /**
     * Set NumOfOverduePmts value
     * @param int $_numOfOverduePmts the NumOfOverduePmts
     * @return int
     */
    public function setNumOfOverduePmts($_numOfOverduePmts)
    {
        return ($this->NumOfOverduePmts = $_numOfOverduePmts);
    }
    /**
     * Get PmtOverdueAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getPmtOverdueAmt()
    {
        return $this->PmtOverdueAmt;
    }
    /**
     * Set PmtOverdueAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_pmtOverdueAmt the PmtOverdueAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setPmtOverdueAmt($_pmtOverdueAmt)
    {
        return ($this->PmtOverdueAmt = $_pmtOverdueAmt);
    }
    /**
     * Get PmtOverdueAmtModifier value
     * @return string|null
     */
    public function getPmtOverdueAmtModifier()
    {
        return $this->PmtOverdueAmtModifier;
    }
    /**
     * Set PmtOverdueAmtModifier value
     * @param string $_pmtOverdueAmtModifier the PmtOverdueAmtModifier
     * @return string
     */
    public function setPmtOverdueAmtModifier($_pmtOverdueAmtModifier)
    {
        return ($this->PmtOverdueAmtModifier = $_pmtOverdueAmtModifier);
    }
    /**
     * Get CurrentPmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCurrentPmtAmt()
    {
        return $this->CurrentPmtAmt;
    }
    /**
     * Set CurrentPmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_currentPmtAmt the CurrentPmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCurrentPmtAmt($_currentPmtAmt)
    {
        return ($this->CurrentPmtAmt = $_currentPmtAmt);
    }
    /**
     * Get CurrentPmtAmtModifier value
     * @return string|null
     */
    public function getCurrentPmtAmtModifier()
    {
        return $this->CurrentPmtAmtModifier;
    }
    /**
     * Set CurrentPmtAmtModifier value
     * @param string $_currentPmtAmtModifier the CurrentPmtAmtModifier
     * @return string
     */
    public function setCurrentPmtAmtModifier($_currentPmtAmtModifier)
    {
        return ($this->CurrentPmtAmtModifier = $_currentPmtAmtModifier);
    }
    /**
     * Get TotalLatePmtAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getTotalLatePmtAmt()
    {
        return $this->TotalLatePmtAmt;
    }
    /**
     * Set TotalLatePmtAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalLatePmtAmt the TotalLatePmtAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setTotalLatePmtAmt($_totalLatePmtAmt)
    {
        return ($this->TotalLatePmtAmt = $_totalLatePmtAmt);
    }
    /**
     * Get TotalLatePmtAmtModifier value
     * @return string|null
     */
    public function getTotalLatePmtAmtModifier()
    {
        return $this->TotalLatePmtAmtModifier;
    }
    /**
     * Set TotalLatePmtAmtModifier value
     * @param string $_totalLatePmtAmtModifier the TotalLatePmtAmtModifier
     * @return string
     */
    public function setTotalLatePmtAmtModifier($_totalLatePmtAmtModifier)
    {
        return ($this->TotalLatePmtAmtModifier = $_totalLatePmtAmtModifier);
    }
    /**
     * Get Amt30DaysLate value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAmt30DaysLate()
    {
        return $this->Amt30DaysLate;
    }
    /**
     * Set Amt30DaysLate value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt30DaysLate the Amt30DaysLate
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAmt30DaysLate($_amt30DaysLate)
    {
        return ($this->Amt30DaysLate = $_amt30DaysLate);
    }
    /**
     * Get Amt30DaysLateModifier value
     * @return string|null
     */
    public function getAmt30DaysLateModifier()
    {
        return $this->Amt30DaysLateModifier;
    }
    /**
     * Set Amt30DaysLateModifier value
     * @param string $_amt30DaysLateModifier the Amt30DaysLateModifier
     * @return string
     */
    public function setAmt30DaysLateModifier($_amt30DaysLateModifier)
    {
        return ($this->Amt30DaysLateModifier = $_amt30DaysLateModifier);
    }
    /**
     * Get Amt60DaysLate value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAmt60DaysLate()
    {
        return $this->Amt60DaysLate;
    }
    /**
     * Set Amt60DaysLate value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt60DaysLate the Amt60DaysLate
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAmt60DaysLate($_amt60DaysLate)
    {
        return ($this->Amt60DaysLate = $_amt60DaysLate);
    }
    /**
     * Get Amt60DaysLateModifier value
     * @return string|null
     */
    public function getAmt60DaysLateModifier()
    {
        return $this->Amt60DaysLateModifier;
    }
    /**
     * Set Amt60DaysLateModifier value
     * @param string $_amt60DaysLateModifier the Amt60DaysLateModifier
     * @return string
     */
    public function setAmt60DaysLateModifier($_amt60DaysLateModifier)
    {
        return ($this->Amt60DaysLateModifier = $_amt60DaysLateModifier);
    }
    /**
     * Get Amt90DaysLate value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAmt90DaysLate()
    {
        return $this->Amt90DaysLate;
    }
    /**
     * Set Amt90DaysLate value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt90DaysLate the Amt90DaysLate
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAmt90DaysLate($_amt90DaysLate)
    {
        return ($this->Amt90DaysLate = $_amt90DaysLate);
    }
    /**
     * Get Amt90DaysLateModifier value
     * @return string|null
     */
    public function getAmt90DaysLateModifier()
    {
        return $this->Amt90DaysLateModifier;
    }
    /**
     * Set Amt90DaysLateModifier value
     * @param string $_amt90DaysLateModifier the Amt90DaysLateModifier
     * @return string
     */
    public function setAmt90DaysLateModifier($_amt90DaysLateModifier)
    {
        return ($this->Amt90DaysLateModifier = $_amt90DaysLateModifier);
    }
    /**
     * Get Amt90PlusDaysLate value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getAmt90PlusDaysLate()
    {
        return $this->Amt90PlusDaysLate;
    }
    /**
     * Set Amt90PlusDaysLate value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_amt90PlusDaysLate the Amt90PlusDaysLate
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setAmt90PlusDaysLate($_amt90PlusDaysLate)
    {
        return ($this->Amt90PlusDaysLate = $_amt90PlusDaysLate);
    }
    /**
     * Get Amt90PlusDaysLateModifier value
     * @return string|null
     */
    public function getAmt90PlusDaysLateModifier()
    {
        return $this->Amt90PlusDaysLateModifier;
    }
    /**
     * Set Amt90PlusDaysLateModifier value
     * @param string $_amt90PlusDaysLateModifier the Amt90PlusDaysLateModifier
     * @return string
     */
    public function setAmt90PlusDaysLateModifier($_amt90PlusDaysLateModifier)
    {
        return ($this->Amt90PlusDaysLateModifier = $_amt90PlusDaysLateModifier);
    }
    /**
     * Get FilingAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getFilingAmt()
    {
        return $this->FilingAmt;
    }
    /**
     * Set FilingAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_filingAmt the FilingAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setFilingAmt($_filingAmt)
    {
        return ($this->FilingAmt = $_filingAmt);
    }
    /**
     * Get SalesAmtRange value
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type|null
     */
    public function getSalesAmtRange()
    {
        return $this->SalesAmtRange;
    }
    /**
     * Set SalesAmtRange value
     * @param MicrobiltCriminalReportStructHighLowAmtRange_Type $_salesAmtRange the SalesAmtRange
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public function setSalesAmtRange($_salesAmtRange)
    {
        return ($this->SalesAmtRange = $_salesAmtRange);
    }
    /**
     * Get ProfitLossAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getProfitLossAmt()
    {
        return $this->ProfitLossAmt;
    }
    /**
     * Set ProfitLossAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_profitLossAmt the ProfitLossAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setProfitLossAmt($_profitLossAmt)
    {
        return ($this->ProfitLossAmt = $_profitLossAmt);
    }
    /**
     * Get ProfitLossCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getProfitLossCode()
    {
        return $this->ProfitLossCode;
    }
    /**
     * Set ProfitLossCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_profitLossCode the ProfitLossCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setProfitLossCode($_profitLossCode)
    {
        return ($this->ProfitLossCode = $_profitLossCode);
    }
    /**
     * Get ProfitLossAmtRange value
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type|null
     */
    public function getProfitLossAmtRange()
    {
        return $this->ProfitLossAmtRange;
    }
    /**
     * Set ProfitLossAmtRange value
     * @param MicrobiltCriminalReportStructHighLowAmtRange_Type $_profitLossAmtRange the ProfitLossAmtRange
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public function setProfitLossAmtRange($_profitLossAmtRange)
    {
        return ($this->ProfitLossAmtRange = $_profitLossAmtRange);
    }
    /**
     * Get ActualNetWorthAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getActualNetWorthAmt()
    {
        return $this->ActualNetWorthAmt;
    }
    /**
     * Set ActualNetWorthAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_actualNetWorthAmt the ActualNetWorthAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setActualNetWorthAmt($_actualNetWorthAmt)
    {
        return ($this->ActualNetWorthAmt = $_actualNetWorthAmt);
    }
    /**
     * Get NetWorthAmtRange value
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type|null
     */
    public function getNetWorthAmtRange()
    {
        return $this->NetWorthAmtRange;
    }
    /**
     * Set NetWorthAmtRange value
     * @param MicrobiltCriminalReportStructHighLowAmtRange_Type $_netWorthAmtRange the NetWorthAmtRange
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public function setNetWorthAmtRange($_netWorthAmtRange)
    {
        return ($this->NetWorthAmtRange = $_netWorthAmtRange);
    }
    /**
     * Get IndustryDBT value
     * @return string|null
     */
    public function getIndustryDBT()
    {
        return $this->IndustryDBT;
    }
    /**
     * Set IndustryDBT value
     * @param string $_industryDBT the IndustryDBT
     * @return string
     */
    public function setIndustryDBT($_industryDBT)
    {
        return ($this->IndustryDBT = $_industryDBT);
    }
    /**
     * Get ExemptAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getExemptAmt()
    {
        return $this->ExemptAmt;
    }
    /**
     * Set ExemptAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_exemptAmt the ExemptAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setExemptAmt($_exemptAmt)
    {
        return ($this->ExemptAmt = $_exemptAmt);
    }
    /**
     * Get AccountRating value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getAccountRating()
    {
        return $this->AccountRating;
    }
    /**
     * Set AccountRating value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_accountRating the AccountRating
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setAccountRating($_accountRating)
    {
        return ($this->AccountRating = $_accountRating);
    }
    /**
     * Get BalanceRange value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getBalanceRange()
    {
        return $this->BalanceRange;
    }
    /**
     * Set BalanceRange value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_balanceRange the BalanceRange
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setBalanceRange($_balanceRange)
    {
        return ($this->BalanceRange = $_balanceRange);
    }
    /**
     * Get FiguresInBalance value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getFiguresInBalance()
    {
        return $this->FiguresInBalance;
    }
    /**
     * Set FiguresInBalance value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_figuresInBalance the FiguresInBalance
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setFiguresInBalance($_figuresInBalance)
    {
        return ($this->FiguresInBalance = $_figuresInBalance);
    }
    /**
     * Get OriginalAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getOriginalAmt()
    {
        return $this->OriginalAmt;
    }
    /**
     * Set OriginalAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_originalAmt the OriginalAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setOriginalAmt($_originalAmt)
    {
        return ($this->OriginalAmt = $_originalAmt);
    }
    /**
     * Get NumOfCurrentPmts value
     * @return int|null
     */
    public function getNumOfCurrentPmts()
    {
        return $this->NumOfCurrentPmts;
    }
    /**
     * Set NumOfCurrentPmts value
     * @param int $_numOfCurrentPmts the NumOfCurrentPmts
     * @return int
     */
    public function setNumOfCurrentPmts($_numOfCurrentPmts)
    {
        return ($this->NumOfCurrentPmts = $_numOfCurrentPmts);
    }
    /**
     * Get CollectionAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getCollectionAmt()
    {
        return $this->CollectionAmt;
    }
    /**
     * Set CollectionAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_collectionAmt the CollectionAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setCollectionAmt($_collectionAmt)
    {
        return ($this->CollectionAmt = $_collectionAmt);
    }
    /**
     * Get LegalSuitsAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getLegalSuitsAmt()
    {
        return $this->LegalSuitsAmt;
    }
    /**
     * Set LegalSuitsAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_legalSuitsAmt the LegalSuitsAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setLegalSuitsAmt($_legalSuitsAmt)
    {
        return ($this->LegalSuitsAmt = $_legalSuitsAmt);
    }
    /**
     * Get JudgmentAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getJudgmentAmt()
    {
        return $this->JudgmentAmt;
    }
    /**
     * Set JudgmentAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_judgmentAmt the JudgmentAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setJudgmentAmt($_judgmentAmt)
    {
        return ($this->JudgmentAmt = $_judgmentAmt);
    }
    /**
     * Get OtherLegalItemAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getOtherLegalItemAmt()
    {
        return $this->OtherLegalItemAmt;
    }
    /**
     * Set OtherLegalItemAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_otherLegalItemAmt the OtherLegalItemAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setOtherLegalItemAmt($_otherLegalItemAmt)
    {
        return ($this->OtherLegalItemAmt = $_otherLegalItemAmt);
    }
    /**
     * Get ReturnedChecksAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getReturnedChecksAmt()
    {
        return $this->ReturnedChecksAmt;
    }
    /**
     * Set ReturnedChecksAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_returnedChecksAmt the ReturnedChecksAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setReturnedChecksAmt($_returnedChecksAmt)
    {
        return ($this->ReturnedChecksAmt = $_returnedChecksAmt);
    }
    /**
     * Get PaidClaimsAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getPaidClaimsAmt()
    {
        return $this->PaidClaimsAmt;
    }
    /**
     * Set PaidClaimsAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_paidClaimsAmt the PaidClaimsAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setPaidClaimsAmt($_paidClaimsAmt)
    {
        return ($this->PaidClaimsAmt = $_paidClaimsAmt);
    }
    /**
     * Get DividendAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getDividendAmt()
    {
        return $this->DividendAmt;
    }
    /**
     * Set DividendAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_dividendAmt the DividendAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setDividendAmt($_dividendAmt)
    {
        return ($this->DividendAmt = $_dividendAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public static function magick_set_state(array $_array,$_className = __CLASS__)
    {
        return parent::magick_set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
