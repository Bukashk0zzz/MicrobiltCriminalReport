<?php
/**
 * File for class MicrobiltCriminalReportStructPmtAgreement_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructPmtAgreement_Type originally named PmtAgreement_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructPmtAgreement_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AcctId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctId;
    /**
     * The AgreementDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AgreementDt;
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $TotalAmt;
    /**
     * The InstAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $InstAmt;
    /**
     * The PmtTerms
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $PmtTerms;
    /**
     * The PmtPattern
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtPattern;
    /**
     * The PmtFreq
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PmtFreq;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * The ChargeOffAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ChargeOffAmt;
    /**
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCompAmt_Type
     */
    public $BalanceAmt;
    /**
     * The ValueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $ValueAmt;
    /**
     * The OpenedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OpenedDt;
    /**
     * The ReportedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReportedDt;
    /**
     * The PaidDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PaidDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for PmtAgreement_Type
     * @see parent::__construct()
     * @param string $_acctId
     * @param string $_agreementDt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_totalAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_instAmt
     * @param int $_pmtTerms
     * @param string $_pmtPattern
     * @param string $_pmtFreq
     * @param string $_description
     * @param MicrobiltCriminalReportStructCurrencyAmount $_chargeOffAmt
     * @param MicrobiltCriminalReportStructCompAmt_Type $_balanceAmt
     * @param MicrobiltCriminalReportStructCurrencyAmount $_valueAmt
     * @param string $_openedDt
     * @param string $_reportedDt
     * @param string $_paidDt
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructPmtAgreement_Type
     */
    public function __construct($_acctId = NULL,$_agreementDt = NULL,$_totalAmt = NULL,$_instAmt = NULL,$_pmtTerms = NULL,$_pmtPattern = NULL,$_pmtFreq = NULL,$_description = NULL,$_chargeOffAmt = NULL,$_balanceAmt = NULL,$_valueAmt = NULL,$_openedDt = NULL,$_reportedDt = NULL,$_paidDt = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AcctId'=>$_acctId,'AgreementDt'=>$_agreementDt,'TotalAmt'=>$_totalAmt,'InstAmt'=>$_instAmt,'PmtTerms'=>$_pmtTerms,'PmtPattern'=>$_pmtPattern,'PmtFreq'=>$_pmtFreq,'Description'=>$_description,'ChargeOffAmt'=>$_chargeOffAmt,'BalanceAmt'=>$_balanceAmt,'ValueAmt'=>$_valueAmt,'OpenedDt'=>$_openedDt,'ReportedDt'=>$_reportedDt,'PaidDt'=>$_paidDt,'Message'=>$_message),false);
    }
    /**
     * Get AcctId value
     * @return string|null
     */
    public function getAcctId()
    {
        return $this->AcctId;
    }
    /**
     * Set AcctId value
     * @param string $_acctId the AcctId
     * @return string
     */
    public function setAcctId($_acctId)
    {
        return ($this->AcctId = $_acctId);
    }
    /**
     * Get AgreementDt value
     * @return string|null
     */
    public function getAgreementDt()
    {
        return $this->AgreementDt;
    }
    /**
     * Set AgreementDt value
     * @param string $_agreementDt the AgreementDt
     * @return string
     */
    public function setAgreementDt($_agreementDt)
    {
        return ($this->AgreementDt = $_agreementDt);
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
     * Get InstAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getInstAmt()
    {
        return $this->InstAmt;
    }
    /**
     * Set InstAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_instAmt the InstAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setInstAmt($_instAmt)
    {
        return ($this->InstAmt = $_instAmt);
    }
    /**
     * Get PmtTerms value
     * @return int|null
     */
    public function getPmtTerms()
    {
        return $this->PmtTerms;
    }
    /**
     * Set PmtTerms value
     * @param int $_pmtTerms the PmtTerms
     * @return int
     */
    public function setPmtTerms($_pmtTerms)
    {
        return ($this->PmtTerms = $_pmtTerms);
    }
    /**
     * Get PmtPattern value
     * @return string|null
     */
    public function getPmtPattern()
    {
        return $this->PmtPattern;
    }
    /**
     * Set PmtPattern value
     * @param string $_pmtPattern the PmtPattern
     * @return string
     */
    public function setPmtPattern($_pmtPattern)
    {
        return ($this->PmtPattern = $_pmtPattern);
    }
    /**
     * Get PmtFreq value
     * @return string|null
     */
    public function getPmtFreq()
    {
        return $this->PmtFreq;
    }
    /**
     * Set PmtFreq value
     * @param string $_pmtFreq the PmtFreq
     * @return string
     */
    public function setPmtFreq($_pmtFreq)
    {
        return ($this->PmtFreq = $_pmtFreq);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Get ChargeOffAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getChargeOffAmt()
    {
        return $this->ChargeOffAmt;
    }
    /**
     * Set ChargeOffAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_chargeOffAmt the ChargeOffAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setChargeOffAmt($_chargeOffAmt)
    {
        return ($this->ChargeOffAmt = $_chargeOffAmt);
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
     * Get OpenedDt value
     * @return string|null
     */
    public function getOpenedDt()
    {
        return $this->OpenedDt;
    }
    /**
     * Set OpenedDt value
     * @param string $_openedDt the OpenedDt
     * @return string
     */
    public function setOpenedDt($_openedDt)
    {
        return ($this->OpenedDt = $_openedDt);
    }
    /**
     * Get ReportedDt value
     * @return string|null
     */
    public function getReportedDt()
    {
        return $this->ReportedDt;
    }
    /**
     * Set ReportedDt value
     * @param string $_reportedDt the ReportedDt
     * @return string
     */
    public function setReportedDt($_reportedDt)
    {
        return ($this->ReportedDt = $_reportedDt);
    }
    /**
     * Get PaidDt value
     * @return string|null
     */
    public function getPaidDt()
    {
        return $this->PaidDt;
    }
    /**
     * Set PaidDt value
     * @param string $_paidDt the PaidDt
     * @return string
     */
    public function setPaidDt($_paidDt)
    {
        return ($this->PaidDt = $_paidDt);
    }
    /**
     * Get Message value
     * @return MicrobiltCriminalReportStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltCriminalReportStructMessage_Type $_message the Message
     * @return MicrobiltCriminalReportStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructPmtAgreement_Type
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
