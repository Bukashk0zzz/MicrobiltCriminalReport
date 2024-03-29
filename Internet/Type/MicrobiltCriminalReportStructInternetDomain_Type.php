<?php
/**
 * File for class MicrobiltCriminalReportStructInternetDomain_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructInternetDomain_Type originally named InternetDomain_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructInternetDomain_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The DomainName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DomainName;
    /**
     * The DtLastSeen
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtLastSeen;
    /**
     * The DtLastUpdated
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtLastUpdated;
    /**
     * The DtExpires
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtExpires;
    /**
     * The DtCreated
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtCreated;
    /**
     * The DtDatabase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DtDatabase;
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * Constructor method for InternetDomain_Type
     * @see parent::__construct()
     * @param string $_domainName
     * @param string $_dtLastSeen
     * @param string $_dtLastUpdated
     * @param string $_dtExpires
     * @param string $_dtCreated
     * @param string $_dtDatabase
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @return MicrobiltCriminalReportStructInternetDomain_Type
     */
    public function __construct($_domainName = NULL,$_dtLastSeen = NULL,$_dtLastUpdated = NULL,$_dtExpires = NULL,$_dtCreated = NULL,$_dtDatabase = NULL,$_personInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('DomainName'=>$_domainName,'DtLastSeen'=>$_dtLastSeen,'DtLastUpdated'=>$_dtLastUpdated,'DtExpires'=>$_dtExpires,'DtCreated'=>$_dtCreated,'DtDatabase'=>$_dtDatabase,'PersonInfo'=>$_personInfo),false);
    }
    /**
     * Get DomainName value
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }
    /**
     * Set DomainName value
     * @param string $_domainName the DomainName
     * @return string
     */
    public function setDomainName($_domainName)
    {
        return ($this->DomainName = $_domainName);
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
     * Get DtLastUpdated value
     * @return string|null
     */
    public function getDtLastUpdated()
    {
        return $this->DtLastUpdated;
    }
    /**
     * Set DtLastUpdated value
     * @param string $_dtLastUpdated the DtLastUpdated
     * @return string
     */
    public function setDtLastUpdated($_dtLastUpdated)
    {
        return ($this->DtLastUpdated = $_dtLastUpdated);
    }
    /**
     * Get DtExpires value
     * @return string|null
     */
    public function getDtExpires()
    {
        return $this->DtExpires;
    }
    /**
     * Set DtExpires value
     * @param string $_dtExpires the DtExpires
     * @return string
     */
    public function setDtExpires($_dtExpires)
    {
        return ($this->DtExpires = $_dtExpires);
    }
    /**
     * Get DtCreated value
     * @return string|null
     */
    public function getDtCreated()
    {
        return $this->DtCreated;
    }
    /**
     * Set DtCreated value
     * @param string $_dtCreated the DtCreated
     * @return string
     */
    public function setDtCreated($_dtCreated)
    {
        return ($this->DtCreated = $_dtCreated);
    }
    /**
     * Get DtDatabase value
     * @return string|null
     */
    public function getDtDatabase()
    {
        return $this->DtDatabase;
    }
    /**
     * Set DtDatabase value
     * @param string $_dtDatabase the DtDatabase
     * @return string
     */
    public function setDtDatabase($_dtDatabase)
    {
        return ($this->DtDatabase = $_dtDatabase);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructInternetDomain_Type
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
