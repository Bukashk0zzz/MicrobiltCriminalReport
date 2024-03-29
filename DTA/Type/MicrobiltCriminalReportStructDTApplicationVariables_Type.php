<?php
/**
 * File for class MicrobiltCriminalReportStructDTApplicationVariables_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructDTApplicationVariables_Type originally named DTApplicationVariables_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructDTApplicationVariables_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The AppVarID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AppVarID;
    /**
     * The AppVarValue
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AppVarValue;
    /**
     * Constructor method for DTApplicationVariables_Type
     * @see parent::__construct()
     * @param string $_appVarID
     * @param string $_appVarValue
     * @return MicrobiltCriminalReportStructDTApplicationVariables_Type
     */
    public function __construct($_appVarID = NULL,$_appVarValue = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('AppVarID'=>$_appVarID,'AppVarValue'=>$_appVarValue),false);
    }
    /**
     * Get AppVarID value
     * @return string|null
     */
    public function getAppVarID()
    {
        return $this->AppVarID;
    }
    /**
     * Set AppVarID value
     * @param string $_appVarID the AppVarID
     * @return string
     */
    public function setAppVarID($_appVarID)
    {
        return ($this->AppVarID = $_appVarID);
    }
    /**
     * Get AppVarValue value
     * @return string|null
     */
    public function getAppVarValue()
    {
        return $this->AppVarValue;
    }
    /**
     * Set AppVarValue value
     * @param string $_appVarValue the AppVarValue
     * @return string
     */
    public function setAppVarValue($_appVarValue)
    {
        return ($this->AppVarValue = $_appVarValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructDTApplicationVariables_Type
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
