<?php
/**
 * File for class MicrobiltCriminalReportStructGetRawReportResponse
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructGetRawReportResponse originally named GetRawReportResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructGetRawReportResponse extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The GetRawReportResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetRawReportResult;
    /**
     * Constructor method for GetRawReportResponse
     * @see parent::__construct()
     * @param string $_getRawReportResult
     * @return MicrobiltCriminalReportStructGetRawReportResponse
     */
    public function __construct($_getRawReportResult = NULL)
    {
        parent::__construct(array('GetRawReportResult'=>$_getRawReportResult),false);
    }
    /**
     * Get GetRawReportResult value
     * @return string|null
     */
    public function getGetRawReportResult()
    {
        return $this->GetRawReportResult;
    }
    /**
     * Set GetRawReportResult value
     * @param string $_getRawReportResult the GetRawReportResult
     * @return string
     */
    public function setGetRawReportResult($_getRawReportResult)
    {
        return ($this->GetRawReportResult = $_getRawReportResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructGetRawReportResponse
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
