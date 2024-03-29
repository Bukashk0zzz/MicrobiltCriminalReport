<?php
/**
 * File for class MicrobiltCriminalReportStructVoterRegistration_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructVoterRegistration_Type originally named VoterRegistration_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructVoterRegistration_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The RegDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RegDt;
    /**
     * The PoliticalParty
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PoliticalParty;
    /**
     * The VoterStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VoterStatus;
    /**
     * The LastVoteDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $LastVoteDt;
    /**
     * Constructor method for VoterRegistration_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param string $_regDt
     * @param string $_politicalParty
     * @param string $_voterStatus
     * @param string $_lastVoteDt
     * @return MicrobiltCriminalReportStructVoterRegistration_Type
     */
    public function __construct($_personInfo = NULL,$_regDt = NULL,$_politicalParty = NULL,$_voterStatus = NULL,$_lastVoteDt = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'RegDt'=>$_regDt,'PoliticalParty'=>$_politicalParty,'VoterStatus'=>$_voterStatus,'LastVoteDt'=>$_lastVoteDt),false);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltCriminalReportStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltCriminalReportStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
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
     * Get PoliticalParty value
     * @return string|null
     */
    public function getPoliticalParty()
    {
        return $this->PoliticalParty;
    }
    /**
     * Set PoliticalParty value
     * @param string $_politicalParty the PoliticalParty
     * @return string
     */
    public function setPoliticalParty($_politicalParty)
    {
        return ($this->PoliticalParty = $_politicalParty);
    }
    /**
     * Get VoterStatus value
     * @return string|null
     */
    public function getVoterStatus()
    {
        return $this->VoterStatus;
    }
    /**
     * Set VoterStatus value
     * @param string $_voterStatus the VoterStatus
     * @return string
     */
    public function setVoterStatus($_voterStatus)
    {
        return ($this->VoterStatus = $_voterStatus);
    }
    /**
     * Get LastVoteDt value
     * @return string|null
     */
    public function getLastVoteDt()
    {
        return $this->LastVoteDt;
    }
    /**
     * Set LastVoteDt value
     * @param string $_lastVoteDt the LastVoteDt
     * @return string
     */
    public function setLastVoteDt($_lastVoteDt)
    {
        return ($this->LastVoteDt = $_lastVoteDt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructVoterRegistration_Type
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
