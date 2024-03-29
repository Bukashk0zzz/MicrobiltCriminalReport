<?php
/**
 * File for class MicrobiltCriminalReportStructFriendsConnectionsInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructFriendsConnectionsInfo_Type originally named FriendsConnectionsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructFriendsConnectionsInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The FriendConnectionType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FriendConnectionType;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The ProfileURL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ProfileURL;
    /**
     * The PublicURL
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PublicURL;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserID;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for FriendsConnectionsInfo_Type
     * @see parent::__construct()
     * @param string $_friendConnectionType
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param string $_profileURL
     * @param string $_publicURL
     * @param string $_userID
     * @param string $_userName
     * @return MicrobiltCriminalReportStructFriendsConnectionsInfo_Type
     */
    public function __construct($_friendConnectionType = NULL,$_personInfo = NULL,$_profileURL = NULL,$_publicURL = NULL,$_userID = NULL,$_userName = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('FriendConnectionType'=>$_friendConnectionType,'PersonInfo'=>$_personInfo,'ProfileURL'=>$_profileURL,'PublicURL'=>$_publicURL,'UserID'=>$_userID,'UserName'=>$_userName),false);
    }
    /**
     * Get FriendConnectionType value
     * @return string|null
     */
    public function getFriendConnectionType()
    {
        return $this->FriendConnectionType;
    }
    /**
     * Set FriendConnectionType value
     * @param string $_friendConnectionType the FriendConnectionType
     * @return string
     */
    public function setFriendConnectionType($_friendConnectionType)
    {
        return ($this->FriendConnectionType = $_friendConnectionType);
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
     * Get ProfileURL value
     * @return string|null
     */
    public function getProfileURL()
    {
        return $this->ProfileURL;
    }
    /**
     * Set ProfileURL value
     * @param string $_profileURL the ProfileURL
     * @return string
     */
    public function setProfileURL($_profileURL)
    {
        return ($this->ProfileURL = $_profileURL);
    }
    /**
     * Get PublicURL value
     * @return string|null
     */
    public function getPublicURL()
    {
        return $this->PublicURL;
    }
    /**
     * Set PublicURL value
     * @param string $_publicURL the PublicURL
     * @return string
     */
    public function setPublicURL($_publicURL)
    {
        return ($this->PublicURL = $_publicURL);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $_userID the UserID
     * @return string
     */
    public function setUserID($_userID)
    {
        return ($this->UserID = $_userID);
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $_userName the UserName
     * @return string
     */
    public function setUserName($_userName)
    {
        return ($this->UserName = $_userName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructFriendsConnectionsInfo_Type
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
