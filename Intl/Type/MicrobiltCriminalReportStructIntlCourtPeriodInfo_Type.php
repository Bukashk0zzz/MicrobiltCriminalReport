<?php
/**
 * File for class MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type originally named IntlCourtPeriodInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The Months
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $Months;
    /**
     * The IntlCourtDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $IntlCourtDt;
    /**
     * Constructor method for IntlCourtPeriodInfo_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param long $_months
     * @param date $_intlCourtDt
     * @return MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type
     */
    public function __construct($_msgClass = NULL,$_months = NULL,$_intlCourtDt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'Months'=>$_months,'IntlCourtDt'=>$_intlCourtDt),false);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Get Months value
     * @return long|null
     */
    public function getMonths()
    {
        return $this->Months;
    }
    /**
     * Set Months value
     * @param long $_months the Months
     * @return long
     */
    public function setMonths($_months)
    {
        return ($this->Months = $_months);
    }
    /**
     * Get IntlCourtDt value
     * @return date|null
     */
    public function getIntlCourtDt()
    {
        return $this->IntlCourtDt;
    }
    /**
     * Set IntlCourtDt value
     * @param date $_intlCourtDt the IntlCourtDt
     * @return date
     */
    public function setIntlCourtDt($_intlCourtDt)
    {
        return ($this->IntlCourtDt = $_intlCourtDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructIntlCourtPeriodInfo_Type
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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