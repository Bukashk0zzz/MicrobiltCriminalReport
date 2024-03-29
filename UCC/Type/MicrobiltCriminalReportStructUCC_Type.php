<?php
/**
 * File for class MicrobiltCriminalReportStructUCC_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructUCC_Type originally named UCC_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructUCC_Type extends MicrobiltCriminalReportStructAggregate
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
     * The FileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileDt;
    /**
     * The FilingState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingState;
    /**
     * The FilingNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingNum;
    /**
     * The OrigDtFiled
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigDtFiled;
    /**
     * The OrigNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrigNum;
    /**
     * The CollateralDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var string
     */
    public $CollateralDesc;
    /**
     * The FilingCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FilingCount;
    /**
     * The DocumentCount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $DocumentCount;
    /**
     * Constructor method for UCC_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructPersonInfo_Type $_personInfo
     * @param string $_fileDt
     * @param string $_filingState
     * @param string $_filingNum
     * @param string $_origDtFiled
     * @param string $_origNum
     * @param string $_collateralDesc
     * @param string $_filingCount
     * @param string $_documentCount
     * @return MicrobiltCriminalReportStructUCC_Type
     */
    public function __construct($_personInfo = NULL,$_fileDt = NULL,$_filingState = NULL,$_filingNum = NULL,$_origDtFiled = NULL,$_origNum = NULL,$_collateralDesc = NULL,$_filingCount = NULL,$_documentCount = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'FileDt'=>$_fileDt,'FilingState'=>$_filingState,'FilingNum'=>$_filingNum,'OrigDtFiled'=>$_origDtFiled,'OrigNum'=>$_origNum,'CollateralDesc'=>$_collateralDesc,'FilingCount'=>$_filingCount,'DocumentCount'=>$_documentCount),false);
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
     * Get FileDt value
     * @return string|null
     */
    public function getFileDt()
    {
        return $this->FileDt;
    }
    /**
     * Set FileDt value
     * @param string $_fileDt the FileDt
     * @return string
     */
    public function setFileDt($_fileDt)
    {
        return ($this->FileDt = $_fileDt);
    }
    /**
     * Get FilingState value
     * @return string|null
     */
    public function getFilingState()
    {
        return $this->FilingState;
    }
    /**
     * Set FilingState value
     * @param string $_filingState the FilingState
     * @return string
     */
    public function setFilingState($_filingState)
    {
        return ($this->FilingState = $_filingState);
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
     * Get OrigDtFiled value
     * @return string|null
     */
    public function getOrigDtFiled()
    {
        return $this->OrigDtFiled;
    }
    /**
     * Set OrigDtFiled value
     * @param string $_origDtFiled the OrigDtFiled
     * @return string
     */
    public function setOrigDtFiled($_origDtFiled)
    {
        return ($this->OrigDtFiled = $_origDtFiled);
    }
    /**
     * Get OrigNum value
     * @return string|null
     */
    public function getOrigNum()
    {
        return $this->OrigNum;
    }
    /**
     * Set OrigNum value
     * @param string $_origNum the OrigNum
     * @return string
     */
    public function setOrigNum($_origNum)
    {
        return ($this->OrigNum = $_origNum);
    }
    /**
     * Get CollateralDesc value
     * @return string|null
     */
    public function getCollateralDesc()
    {
        return $this->CollateralDesc;
    }
    /**
     * Set CollateralDesc value
     * @param string $_collateralDesc the CollateralDesc
     * @return string
     */
    public function setCollateralDesc($_collateralDesc)
    {
        return ($this->CollateralDesc = $_collateralDesc);
    }
    /**
     * Get FilingCount value
     * @return string|null
     */
    public function getFilingCount()
    {
        return $this->FilingCount;
    }
    /**
     * Set FilingCount value
     * @param string $_filingCount the FilingCount
     * @return string
     */
    public function setFilingCount($_filingCount)
    {
        return ($this->FilingCount = $_filingCount);
    }
    /**
     * Get DocumentCount value
     * @return string|null
     */
    public function getDocumentCount()
    {
        return $this->DocumentCount;
    }
    /**
     * Set DocumentCount value
     * @param string $_documentCount the DocumentCount
     * @return string
     */
    public function setDocumentCount($_documentCount)
    {
        return ($this->DocumentCount = $_documentCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructUCC_Type
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
