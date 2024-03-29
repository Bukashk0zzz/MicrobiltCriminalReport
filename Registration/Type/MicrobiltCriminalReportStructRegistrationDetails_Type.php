<?php
/**
 * File for class MicrobiltCriminalReportStructRegistrationDetails_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructRegistrationDetails_Type originally named RegistrationDetails_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructRegistrationDetails_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The RegType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RegType;
    /**
     * The RegDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RegDt;
    /**
     * The DtType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtType;
    /**
     * The PostAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPostAddr_Type
     */
    public $PostAddr;
    /**
     * The RegStatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $RegStatusCode;
    /**
     * The RegistrationNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RegistrationNum;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for RegistrationDetails_Type
     * @see parent::__construct()
     * @param string $_regType
     * @param string $_regDt
     * @param string $_dtType
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_regStatusCode
     * @param string $_registrationNum
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructRegistrationDetails_Type
     */
    public function __construct($_regType = NULL,$_regDt = NULL,$_dtType = NULL,$_postAddr = NULL,$_regStatusCode = NULL,$_registrationNum = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('RegType'=>$_regType,'RegDt'=>$_regDt,'DtType'=>$_dtType,'PostAddr'=>$_postAddr,'RegStatusCode'=>$_regStatusCode,'RegistrationNum'=>$_registrationNum,'Message'=>$_message),false);
    }
    /**
     * Get RegType value
     * @return string|null
     */
    public function getRegType()
    {
        return $this->RegType;
    }
    /**
     * Set RegType value
     * @param string $_regType the RegType
     * @return string
     */
    public function setRegType($_regType)
    {
        return ($this->RegType = $_regType);
    }
    /**
     * Get RegDt value
     * @return string|null
     */
    public function getRegDt()
    {
        return $this->RegDt;
    }
    /**
     * Set RegDt value
     * @param string $_regDt the RegDt
     * @return string
     */
    public function setRegDt($_regDt)
    {
        return ($this->RegDt = $_regDt);
    }
    /**
     * Get DtType value
     * @return string|null
     */
    public function getDtType()
    {
        return $this->DtType;
    }
    /**
     * Set DtType value
     * @param string $_dtType the DtType
     * @return string
     */
    public function setDtType($_dtType)
    {
        return ($this->DtType = $_dtType);
    }
    /**
     * Get PostAddr value
     * @return MicrobiltCriminalReportStructPostAddr_Type|null
     */
    public function getPostAddr()
    {
        return $this->PostAddr;
    }
    /**
     * Set PostAddr value
     * @param MicrobiltCriminalReportStructPostAddr_Type $_postAddr the PostAddr
     * @return MicrobiltCriminalReportStructPostAddr_Type
     */
    public function setPostAddr($_postAddr)
    {
        return ($this->PostAddr = $_postAddr);
    }
    /**
     * Get RegStatusCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getRegStatusCode()
    {
        return $this->RegStatusCode;
    }
    /**
     * Set RegStatusCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_regStatusCode the RegStatusCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setRegStatusCode($_regStatusCode)
    {
        return ($this->RegStatusCode = $_regStatusCode);
    }
    /**
     * Get RegistrationNum value
     * @return string|null
     */
    public function getRegistrationNum()
    {
        return $this->RegistrationNum;
    }
    /**
     * Set RegistrationNum value
     * @param string $_registrationNum the RegistrationNum
     * @return string
     */
    public function setRegistrationNum($_registrationNum)
    {
        return ($this->RegistrationNum = $_registrationNum);
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
     * @return MicrobiltCriminalReportStructRegistrationDetails_Type
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
