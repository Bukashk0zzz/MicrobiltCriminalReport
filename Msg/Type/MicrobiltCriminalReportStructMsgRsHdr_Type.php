<?php
/**
 * File for class MicrobiltCriminalReportStructMsgRsHdr_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructMsgRsHdr_Type originally named MsgRsHdr_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructMsgRsHdr_Type extends MicrobiltCriminalReportWsdlClass
{
    /**
     * The RqUID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RqUID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructStatus_Type
     */
    public $Status;
    /**
     * Constructor method for MsgRsHdr_Type
     * @see parent::__construct()
     * @param string $_rqUID
     * @param MicrobiltCriminalReportStructStatus_Type $_status
     * @return MicrobiltCriminalReportStructMsgRsHdr_Type
     */
    public function __construct($_rqUID = NULL,$_status = NULL)
    {
        parent::__construct(array('RqUID'=>$_rqUID,'Status'=>$_status),false);
    }
    /**
     * Get RqUID value
     * @return string|null
     */
    public function getRqUID()
    {
        return $this->RqUID;
    }
    /**
     * Set RqUID value
     * @param string $_rqUID the RqUID
     * @return string
     */
    public function setRqUID($_rqUID)
    {
        return ($this->RqUID = $_rqUID);
    }
    /**
     * Get Status value
     * @return MicrobiltCriminalReportStructStatus_Type|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param MicrobiltCriminalReportStructStatus_Type $_status the Status
     * @return MicrobiltCriminalReportStructStatus_Type
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructMsgRsHdr_Type
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
