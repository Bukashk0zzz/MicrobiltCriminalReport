<?php
/**
 * File for class MicrobiltCriminalReportStructAdditionalStatus_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructAdditionalStatus_Type originally named AdditionalStatus_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructAdditionalStatus_Type extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var MicrobiltCriminalReportEnumSeverity_Type
     */
    public $Severity;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $StatusCode;
    /**
     * The ServerStatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ServerStatusCode;
    /**
     * The StatusDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $StatusDesc;
    /**
     * Constructor method for AdditionalStatus_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportEnumSeverity_Type $_severity
     * @param int $_statusCode
     * @param string $_serverStatusCode
     * @param string $_statusDesc
     * @return MicrobiltCriminalReportStructAdditionalStatus_Type
     */
    public function __construct($_severity,$_statusCode = NULL,$_serverStatusCode = NULL,$_statusDesc = NULL)
    {
        parent::__construct(array('Severity'=>$_severity,'StatusCode'=>$_statusCode,'ServerStatusCode'=>$_serverStatusCode,'StatusDesc'=>$_statusDesc),false);
    }
    /**
     * Get Severity value
     * @return MicrobiltCriminalReportEnumSeverity_Type
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses MicrobiltCriminalReportEnumSeverity_Type::valueIsValid()
     * @param MicrobiltCriminalReportEnumSeverity_Type $_severity the Severity
     * @return MicrobiltCriminalReportEnumSeverity_Type
     */
    public function setSeverity($_severity)
    {
        if(!MicrobiltCriminalReportEnumSeverity_Type::valueIsValid($_severity))
        {
            return false;
        }
        return ($this->Severity = $_severity);
    }
    /**
     * Get StatusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param int $_statusCode the StatusCode
     * @return int
     */
    public function setStatusCode($_statusCode)
    {
        return ($this->StatusCode = $_statusCode);
    }
    /**
     * Get ServerStatusCode value
     * @return string|null
     */
    public function getServerStatusCode()
    {
        return $this->ServerStatusCode;
    }
    /**
     * Set ServerStatusCode value
     * @param string $_serverStatusCode the ServerStatusCode
     * @return string
     */
    public function setServerStatusCode($_serverStatusCode)
    {
        return ($this->ServerStatusCode = $_serverStatusCode);
    }
    /**
     * Get StatusDesc value
     * @return string|null
     */
    public function getStatusDesc()
    {
        return $this->StatusDesc;
    }
    /**
     * Set StatusDesc value
     * @param string $_statusDesc the StatusDesc
     * @return string
     */
    public function setStatusDesc($_statusDesc)
    {
        return ($this->StatusDesc = $_statusDesc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructAdditionalStatus_Type
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
