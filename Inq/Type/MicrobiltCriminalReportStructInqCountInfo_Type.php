<?php
/**
 * File for class MicrobiltCriminalReportStructInqCountInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructInqCountInfo_Type originally named InqCountInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructInqCountInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The InqDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $InqDt;
    /**
     * The InqCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $InqCount;
    /**
     * Constructor method for InqCountInfo_Type
     * @see parent::__construct()
     * @param string $_inqDt
     * @param int $_inqCount
     * @return MicrobiltCriminalReportStructInqCountInfo_Type
     */
    public function __construct($_inqDt = NULL,$_inqCount = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('InqDt'=>$_inqDt,'InqCount'=>$_inqCount),false);
    }
    /**
     * Get InqDt value
     * @return string|null
     */
    public function getInqDt()
    {
        return $this->InqDt;
    }
    /**
     * Set InqDt value
     * @param string $_inqDt the InqDt
     * @return string
     */
    public function setInqDt($_inqDt)
    {
        return ($this->InqDt = $_inqDt);
    }
    /**
     * Get InqCount value
     * @return int|null
     */
    public function getInqCount()
    {
        return $this->InqCount;
    }
    /**
     * Set InqCount value
     * @param int $_inqCount the InqCount
     * @return int
     */
    public function setInqCount($_inqCount)
    {
        return ($this->InqCount = $_inqCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructInqCountInfo_Type
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
