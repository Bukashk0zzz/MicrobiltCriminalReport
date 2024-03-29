<?php
/**
 * File for class MicrobiltCriminalReportStructInformationSummary_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructInformationSummary_Type originally named InformationSummary_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructInformationSummary_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The InformationDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructInformationDetail_Type
     */
    public $InformationDetail;
    /**
     * Constructor method for InformationSummary_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructInformationDetail_Type $_informationDetail
     * @return MicrobiltCriminalReportStructInformationSummary_Type
     */
    public function __construct($_informationDetail = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('InformationDetail'=>$_informationDetail),false);
    }
    /**
     * Get InformationDetail value
     * @return MicrobiltCriminalReportStructInformationDetail_Type|null
     */
    public function getInformationDetail()
    {
        return $this->InformationDetail;
    }
    /**
     * Set InformationDetail value
     * @param MicrobiltCriminalReportStructInformationDetail_Type $_informationDetail the InformationDetail
     * @return MicrobiltCriminalReportStructInformationDetail_Type
     */
    public function setInformationDetail($_informationDetail)
    {
        return ($this->InformationDetail = $_informationDetail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructInformationSummary_Type
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
