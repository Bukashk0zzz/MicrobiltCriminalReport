<?php
/**
 * File for class MicrobiltCriminalReportStructMap
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructMap originally named Map
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd0}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructMap extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The bureauResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $bureauResponse;
    /**
     * Constructor method for Map
     * @see parent::__construct()
     * @param string $_bureauResponse
     * @return MicrobiltCriminalReportStructMap
     */
    public function __construct($_bureauResponse = NULL)
    {
        parent::__construct(array('bureauResponse'=>$_bureauResponse),false);
    }
    /**
     * Get bureauResponse value
     * @return string|null
     */
    public function getBureauResponse()
    {
        return $this->bureauResponse;
    }
    /**
     * Set bureauResponse value
     * @param string $_bureauResponse the bureauResponse
     * @return string
     */
    public function setBureauResponse($_bureauResponse)
    {
        return ($this->bureauResponse = $_bureauResponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructMap
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
