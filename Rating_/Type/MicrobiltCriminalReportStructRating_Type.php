<?php
/**
 * File for class MicrobiltCriminalReportStructRating_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructRating_Type originally named Rating_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructRating_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Code;
    /**
     * The RatingType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RatingType;
    /**
     * The RatingAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCurrencyAmount
     */
    public $RatingAmt;
    /**
     * The RatingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RatingDt;
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * Constructor method for Rating_Type
     * @see parent::__construct()
     * @param string $_code
     * @param string $_ratingType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_ratingAmt
     * @param string $_ratingDt
     * @param string $_msgClass
     * @return MicrobiltCriminalReportStructRating_Type
     */
    public function __construct($_code = NULL,$_ratingType = NULL,$_ratingAmt = NULL,$_ratingDt = NULL,$_msgClass = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('Code'=>$_code,'RatingType'=>$_ratingType,'RatingAmt'=>$_ratingAmt,'RatingDt'=>$_ratingDt,'MsgClass'=>$_msgClass),false);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $_code the Code
     * @return string
     */
    public function setCode($_code)
    {
        return ($this->Code = $_code);
    }
    /**
     * Get RatingType value
     * @return string|null
     */
    public function getRatingType()
    {
        return $this->RatingType;
    }
    /**
     * Set RatingType value
     * @param string $_ratingType the RatingType
     * @return string
     */
    public function setRatingType($_ratingType)
    {
        return ($this->RatingType = $_ratingType);
    }
    /**
     * Get RatingAmt value
     * @return MicrobiltCriminalReportStructCurrencyAmount|null
     */
    public function getRatingAmt()
    {
        return $this->RatingAmt;
    }
    /**
     * Set RatingAmt value
     * @param MicrobiltCriminalReportStructCurrencyAmount $_ratingAmt the RatingAmt
     * @return MicrobiltCriminalReportStructCurrencyAmount
     */
    public function setRatingAmt($_ratingAmt)
    {
        return ($this->RatingAmt = $_ratingAmt);
    }
    /**
     * Get RatingDt value
     * @return string|null
     */
    public function getRatingDt()
    {
        return $this->RatingDt;
    }
    /**
     * Set RatingDt value
     * @param string $_ratingDt the RatingDt
     * @return string
     */
    public function setRatingDt($_ratingDt)
    {
        return ($this->RatingDt = $_ratingDt);
    }
    /**
     * Get MsgClass value
     * @return string|null
     */
    public function getMsgClass()
    {
        return $this->MsgClass;
    }
    /**
     * Set MsgClass value
     * @param string $_msgClass the MsgClass
     * @return string
     */
    public function setMsgClass($_msgClass)
    {
        return ($this->MsgClass = $_msgClass);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructRating_Type
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
