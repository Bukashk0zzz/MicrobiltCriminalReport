<?php
/**
 * File for class MicrobiltCriminalReportStructOfficersDirectors_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructOfficersDirectors_Type originally named OfficersDirectors_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructOfficersDirectors_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The AsOfDate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AsOfDate;
    /**
     * The DtFirstSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtFirstSeen;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtLastSeen;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The HistoricalInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $HistoricalInd;
    /**
     * Constructor method for OfficersDirectors_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param string $_asOfDate
     * @param string $_dtFirstSeen
     * @param string $_dtLastSeen
     * @param string $_recordID
     * @param MicrobiltCriminalReportEnumBoolean $_historicalInd
     * @return MicrobiltCriminalReportStructOfficersDirectors_Type
     */
    public function __construct($_personInfo = NULL,$_orgInfo = NULL,$_message = NULL,$_asOfDate = NULL,$_dtFirstSeen = NULL,$_dtLastSeen = NULL,$_recordID = NULL,$_historicalInd = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'OrgInfo'=>$_orgInfo,'Message'=>$_message,'AsOfDate'=>$_asOfDate,'DtFirstSeen'=>$_dtFirstSeen,'DtLastSeen'=>$_dtLastSeen,'RecordID'=>$_recordID,'HistoricalInd'=>$_historicalInd),false);
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
     * Get OrgInfo value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }
    /**
     * Set OrgInfo value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo the OrgInfo
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setOrgInfo($_orgInfo)
    {
        return ($this->OrgInfo = $_orgInfo);
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
     * Get AsOfDate value
     * @return string|null
     */
    public function getAsOfDate()
    {
        return $this->AsOfDate;
    }
    /**
     * Set AsOfDate value
     * @param string $_asOfDate the AsOfDate
     * @return string
     */
    public function setAsOfDate($_asOfDate)
    {
        return ($this->AsOfDate = $_asOfDate);
    }
    /**
     * Get DtFirstSeen value
     * @return string|null
     */
    public function getDtFirstSeen()
    {
        return $this->DtFirstSeen;
    }
    /**
     * Set DtFirstSeen value
     * @param string $_dtFirstSeen the DtFirstSeen
     * @return string
     */
    public function setDtFirstSeen($_dtFirstSeen)
    {
        return ($this->DtFirstSeen = $_dtFirstSeen);
    }
    /**
     * Get DtLastSeen value
     * @return string|null
     */
    public function getDtLastSeen()
    {
        return $this->DtLastSeen;
    }
    /**
     * Set DtLastSeen value
     * @param string $_dtLastSeen the DtLastSeen
     * @return string
     */
    public function setDtLastSeen($_dtLastSeen)
    {
        return ($this->DtLastSeen = $_dtLastSeen);
    }
    /**
     * Get RecordID value
     * @return string|null
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }
    /**
     * Set RecordID value
     * @param string $_recordID the RecordID
     * @return string
     */
    public function setRecordID($_recordID)
    {
        return ($this->RecordID = $_recordID);
    }
    /**
     * Get HistoricalInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getHistoricalInd()
    {
        return $this->HistoricalInd;
    }
    /**
     * Set HistoricalInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_historicalInd the HistoricalInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setHistoricalInd($_historicalInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_historicalInd))
        {
            return false;
        }
        return ($this->HistoricalInd = $_historicalInd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructOfficersDirectors_Type
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
