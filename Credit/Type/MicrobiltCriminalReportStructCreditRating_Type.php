<?php
/**
 * File for class MicrobiltCriminalReportStructCreditRating_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCreditRating_Type originally named CreditRating_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCreditRating_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The MsgClass
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $MsgClass;
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Period;
    /**
     * The TimeScale
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TimeScale;
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
     * @var date
     */
    public $RatingDt;
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructScore_Type
     */
    public $Score;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CreditRating_Type
     * @see parent::__construct()
     * @param string $_msgClass
     * @param string $_period
     * @param string $_timeScale
     * @param string $_ratingType
     * @param MicrobiltCriminalReportStructCurrencyAmount $_ratingAmt
     * @param date $_ratingDt
     * @param MicrobiltCriminalReportStructScore_Type $_score
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructCreditRating_Type
     */
    public function __construct($_msgClass = NULL,$_period = NULL,$_timeScale = NULL,$_ratingType = NULL,$_ratingAmt = NULL,$_ratingDt = NULL,$_score = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('MsgClass'=>$_msgClass,'Period'=>$_period,'TimeScale'=>$_timeScale,'RatingType'=>$_ratingType,'RatingAmt'=>$_ratingAmt,'RatingDt'=>$_ratingDt,'Score'=>$_score,'Message'=>$_message),false);
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
     * Get Period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param string $_period the Period
     * @return string
     */
    public function setPeriod($_period)
    {
        return ($this->Period = $_period);
    }
    /**
     * Get TimeScale value
     * @return string|null
     */
    public function getTimeScale()
    {
        return $this->TimeScale;
    }
    /**
     * Set TimeScale value
     * @param string $_timeScale the TimeScale
     * @return string
     */
    public function setTimeScale($_timeScale)
    {
        return ($this->TimeScale = $_timeScale);
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
     * @return date|null
     */
    public function getRatingDt()
    {
        return $this->RatingDt;
    }
    /**
     * Set RatingDt value
     * @param date $_ratingDt the RatingDt
     * @return date
     */
    public function setRatingDt($_ratingDt)
    {
        return ($this->RatingDt = $_ratingDt);
    }
    /**
     * Get Score value
     * @return MicrobiltCriminalReportStructScore_Type|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param MicrobiltCriminalReportStructScore_Type $_score the Score
     * @return MicrobiltCriminalReportStructScore_Type
     */
    public function setScore($_score)
    {
        return ($this->Score = $_score);
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
     * @see MicrobiltCriminalReportWsdlClass::__set_state()
     * @uses MicrobiltCriminalReportWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructCreditRating_Type
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
