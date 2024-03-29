<?php
/**
 * File for class MicrobiltCriminalReportStructHighLowAmtRange_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructHighLowAmtRange_Type originally named HighLowAmtRange_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructHighLowAmtRange_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The LowRangeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $LowRangeAmt;
    /**
     * The LowRangeModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $LowRangeModifier;
    /**
     * The HighRangeAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $HighRangeAmt;
    /**
     * The HighRangeModifier
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $HighRangeModifier;
    /**
     * Constructor method for HighLowAmtRange_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructCurrencyAmount $_lowRangeAmt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_lowRangeModifier
     * @param MicrobiltCriminalReportStructCurrencyAmount $_highRangeAmt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_highRangeModifier
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type
     */
    public function __construct($_lowRangeAmt = NULL,$_lowRangeModifier = NULL,$_highRangeAmt = NULL,$_highRangeModifier = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('LowRangeAmt'=>$_lowRangeAmt,'LowRangeModifier'=>$_lowRangeModifier,'HighRangeAmt'=>$_highRangeAmt,'HighRangeModifier'=>$_highRangeModifier),false);
    }
    /**
     * Get LowRangeAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getLowRangeAmt()
    {
        return $this->LowRangeAmt;
    }
    /**
     * Set LowRangeAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_lowRangeAmt the LowRangeAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setLowRangeAmt($_lowRangeAmt)
    {
        return ($this->LowRangeAmt = $_lowRangeAmt);
    }
    /**
     * Get LowRangeModifier value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getLowRangeModifier()
    {
        return $this->LowRangeModifier;
    }
    /**
     * Set LowRangeModifier value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_lowRangeModifier the LowRangeModifier
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setLowRangeModifier($_lowRangeModifier)
    {
        return ($this->LowRangeModifier = $_lowRangeModifier);
    }
    /**
     * Get HighRangeAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getHighRangeAmt()
    {
        return $this->HighRangeAmt;
    }
    /**
     * Set HighRangeAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_highRangeAmt the HighRangeAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setHighRangeAmt($_highRangeAmt)
    {
        return ($this->HighRangeAmt = $_highRangeAmt);
    }
    /**
     * Get HighRangeModifier value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getHighRangeModifier()
    {
        return $this->HighRangeModifier;
    }
    /**
     * Set HighRangeModifier value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_highRangeModifier the HighRangeModifier
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setHighRangeModifier($_highRangeModifier)
    {
        return ($this->HighRangeModifier = $_highRangeModifier);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructHighLowAmtRange_Type
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
