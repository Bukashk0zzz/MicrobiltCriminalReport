<?php
/**
 * File for class MicrobiltCriminalReportStructCurrencyAmount
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCurrencyAmount originally named CurrencyAmount
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCurrencyAmount extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var float
     */
    public $Amt;
    /**
     * The CurCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CurCode;
    /**
     * Constructor method for CurrencyAmount
     * @see parent::__construct()
     * @param float $_amt
     * @param string $_curCode
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function __construct($_amt,$_curCode = NULL)
    {
        parent::__construct(array('Amt'=>$_amt,'CurCode'=>$_curCode),false);
    }
    /**
     * Get Amt value
     * @return float
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $_amt the Amt
     * @return float
     */
    public function setAmt($_amt)
    {
        return ($this->Amt = $_amt);
    }
    /**
     * Get CurCode value
     * @return string|null
     */
    public function getCurCode()
    {
        return $this->CurCode;
    }
    /**
     * Set CurCode value
     * @param string $_curCode the CurCode
     * @return string
     */
    public function setCurCode($_curCode)
    {
        return ($this->CurCode = $_curCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCurrencyAmount
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
