<?php
/**
 * File for class MicrobiltCriminalReportStructFilingsInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructFilingsInfo_Type originally named FilingsInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructFilingsInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The FilingNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingNum;
    /**
     * The FilingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingType;
    /**
     * The FilingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingDt;
    /**
     * The Book
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Book;
    /**
     * The Page
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Page;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $Agency;
    /**
     * The OrigCase
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigCase;
    /**
     * The OrigBook
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigBook;
    /**
     * The OrigPage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigPage;
    /**
     * The ReleaseDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ReleaseDt;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCodeDescription_Type
     */
    public $ActionCode;
    /**
     * Constructor method for FilingsInfo_Type
     * @see parent::__construct()
     * @param string $_filingNum
     * @param string $_filingType
     * @param string $_filingDt
     * @param string $_book
     * @param string $_page
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency
     * @param string $_origCase
     * @param string $_origBook
     * @param string $_origPage
     * @param string $_releaseDt
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_actionCode
     * @return MicrobiltCriminalReportStructFilingsInfo_Type
     */
    public function __construct($_filingNum = NULL,$_filingType = NULL,$_filingDt = NULL,$_book = NULL,$_page = NULL,$_agency = NULL,$_origCase = NULL,$_origBook = NULL,$_origPage = NULL,$_releaseDt = NULL,$_actionCode = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('FilingNum'=>$_filingNum,'FilingType'=>$_filingType,'FilingDt'=>$_filingDt,'Book'=>$_book,'Page'=>$_page,'Agency'=>$_agency,'OrigCase'=>$_origCase,'OrigBook'=>$_origBook,'OrigPage'=>$_origPage,'ReleaseDt'=>$_releaseDt,'ActionCode'=>$_actionCode),false);
    }
    /**
     * Get FilingNum value
     * @return string|null
     */
    public function getFilingNum()
    {
        return $this->FilingNum;
    }
    /**
     * Set FilingNum value
     * @param string $_filingNum the FilingNum
     * @return string
     */
    public function setFilingNum($_filingNum)
    {
        return ($this->FilingNum = $_filingNum);
    }
    /**
     * Get FilingType value
     * @return string|null
     */
    public function getFilingType()
    {
        return $this->FilingType;
    }
    /**
     * Set FilingType value
     * @param string $_filingType the FilingType
     * @return string
     */
    public function setFilingType($_filingType)
    {
        return ($this->FilingType = $_filingType);
    }
    /**
     * Get FilingDt value
     * @return string|null
     */
    public function getFilingDt()
    {
        return $this->FilingDt;
    }
    /**
     * Set FilingDt value
     * @param string $_filingDt the FilingDt
     * @return string
     */
    public function setFilingDt($_filingDt)
    {
        return ($this->FilingDt = $_filingDt);
    }
    /**
     * Get Book value
     * @return string|null
     */
    public function getBook()
    {
        return $this->Book;
    }
    /**
     * Set Book value
     * @param string $_book the Book
     * @return string
     */
    public function setBook($_book)
    {
        return ($this->Book = $_book);
    }
    /**
     * Get Page value
     * @return string|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param string $_page the Page
     * @return string
     */
    public function setPage($_page)
    {
        return ($this->Page = $_page);
    }
    /**
     * Get Agency value
     * @return MicrobiltCriminalReportStructOrgInfo_Type|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency the Agency
     * @return MicrobiltCriminalReportStructOrgInfo_Type
     */
    public function setAgency($_agency)
    {
        return ($this->Agency = $_agency);
    }
    /**
     * Get OrigCase value
     * @return string|null
     */
    public function getOrigCase()
    {
        return $this->OrigCase;
    }
    /**
     * Set OrigCase value
     * @param string $_origCase the OrigCase
     * @return string
     */
    public function setOrigCase($_origCase)
    {
        return ($this->OrigCase = $_origCase);
    }
    /**
     * Get OrigBook value
     * @return string|null
     */
    public function getOrigBook()
    {
        return $this->OrigBook;
    }
    /**
     * Set OrigBook value
     * @param string $_origBook the OrigBook
     * @return string
     */
    public function setOrigBook($_origBook)
    {
        return ($this->OrigBook = $_origBook);
    }
    /**
     * Get OrigPage value
     * @return string|null
     */
    public function getOrigPage()
    {
        return $this->OrigPage;
    }
    /**
     * Set OrigPage value
     * @param string $_origPage the OrigPage
     * @return string
     */
    public function setOrigPage($_origPage)
    {
        return ($this->OrigPage = $_origPage);
    }
    /**
     * Get ReleaseDt value
     * @return string|null
     */
    public function getReleaseDt()
    {
        return $this->ReleaseDt;
    }
    /**
     * Set ReleaseDt value
     * @param string $_releaseDt the ReleaseDt
     * @return string
     */
    public function setReleaseDt($_releaseDt)
    {
        return ($this->ReleaseDt = $_releaseDt);
    }
    /**
     * Get ActionCode value
     * @return MicrobiltCriminalReportStructCodeDescription_Type|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param MicrobiltCriminalReportStructCodeDescription_Type $_actionCode the ActionCode
     * @return MicrobiltCriminalReportStructCodeDescription_Type
     */
    public function setActionCode($_actionCode)
    {
        return ($this->ActionCode = $_actionCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructFilingsInfo_Type
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
