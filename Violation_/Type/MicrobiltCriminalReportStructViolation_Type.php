<?php
/**
 * File for class MicrobiltCriminalReportStructViolation_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructViolation_Type originally named Violation_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructViolation_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The ViolationDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ViolationDt;
    /**
     * The ViolationType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ViolationType;
    /**
     * The ViolationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ViolationCode;
    /**
     * The ViolationACDCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ViolationACDCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Description;
    /**
     * The ConvictedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ConvictedDt;
    /**
     * The Points
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Points;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructPostAddr_Type
     */
    public $Location;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $Agency;
    /**
     * The CourtName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CourtName;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VehicleType;
    /**
     * The HazMat
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $HazMat;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for Violation_Type
     * @see parent::__construct()
     * @param string $_violationDt
     * @param string $_violationType
     * @param string $_violationCode
     * @param string $_violationACDCode
     * @param string $_description
     * @param string $_convictedDt
     * @param string $_points
     * @param MicrobiltCriminalReportStructPostAddr_Type $_location
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_agency
     * @param string $_courtName
     * @param string $_vehicleType
     * @param MicrobiltCriminalReportEnumBoolean $_hazMat
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructViolation_Type
     */
    public function __construct($_violationDt = NULL,$_violationType = NULL,$_violationCode = NULL,$_violationACDCode = NULL,$_description = NULL,$_convictedDt = NULL,$_points = NULL,$_location = NULL,$_agency = NULL,$_courtName = NULL,$_vehicleType = NULL,$_hazMat = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('ViolationDt'=>$_violationDt,'ViolationType'=>$_violationType,'ViolationCode'=>$_violationCode,'ViolationACDCode'=>$_violationACDCode,'Description'=>$_description,'ConvictedDt'=>$_convictedDt,'Points'=>$_points,'Location'=>$_location,'Agency'=>$_agency,'CourtName'=>$_courtName,'VehicleType'=>$_vehicleType,'HazMat'=>$_hazMat,'Message'=>$_message),false);
    }
    /**
     * Get ViolationDt value
     * @return string|null
     */
    public function getViolationDt()
    {
        return $this->ViolationDt;
    }
    /**
     * Set ViolationDt value
     * @param string $_violationDt the ViolationDt
     * @return string
     */
    public function setViolationDt($_violationDt)
    {
        return ($this->ViolationDt = $_violationDt);
    }
    /**
     * Get ViolationType value
     * @return string|null
     */
    public function getViolationType()
    {
        return $this->ViolationType;
    }
    /**
     * Set ViolationType value
     * @param string $_violationType the ViolationType
     * @return string
     */
    public function setViolationType($_violationType)
    {
        return ($this->ViolationType = $_violationType);
    }
    /**
     * Get ViolationCode value
     * @return string|null
     */
    public function getViolationCode()
    {
        return $this->ViolationCode;
    }
    /**
     * Set ViolationCode value
     * @param string $_violationCode the ViolationCode
     * @return string
     */
    public function setViolationCode($_violationCode)
    {
        return ($this->ViolationCode = $_violationCode);
    }
    /**
     * Get ViolationACDCode value
     * @return string|null
     */
    public function getViolationACDCode()
    {
        return $this->ViolationACDCode;
    }
    /**
     * Set ViolationACDCode value
     * @param string $_violationACDCode the ViolationACDCode
     * @return string
     */
    public function setViolationACDCode($_violationACDCode)
    {
        return ($this->ViolationACDCode = $_violationACDCode);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Get ConvictedDt value
     * @return string|null
     */
    public function getConvictedDt()
    {
        return $this->ConvictedDt;
    }
    /**
     * Set ConvictedDt value
     * @param string $_convictedDt the ConvictedDt
     * @return string
     */
    public function setConvictedDt($_convictedDt)
    {
        return ($this->ConvictedDt = $_convictedDt);
    }
    /**
     * Get Points value
     * @return string|null
     */
    public function getPoints()
    {
        return $this->Points;
    }
    /**
     * Set Points value
     * @param string $_points the Points
     * @return string
     */
    public function setPoints($_points)
    {
        return ($this->Points = $_points);
    }
    /**
     * Get Location value
     * @return MicrobiltCriminalReportStructPostAddr_Type|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param MicrobiltCriminalReportStructPostAddr_Type $_location the Location
     * @return MicrobiltCriminalReportStructPostAddr_Type
     */
    public function setLocation($_location)
    {
        return ($this->Location = $_location);
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
     * Get CourtName value
     * @return string|null
     */
    public function getCourtName()
    {
        return $this->CourtName;
    }
    /**
     * Set CourtName value
     * @param string $_courtName the CourtName
     * @return string
     */
    public function setCourtName($_courtName)
    {
        return ($this->CourtName = $_courtName);
    }
    /**
     * Get VehicleType value
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @param string $_vehicleType the VehicleType
     * @return string
     */
    public function setVehicleType($_vehicleType)
    {
        return ($this->VehicleType = $_vehicleType);
    }
    /**
     * Get HazMat value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getHazMat()
    {
        return $this->HazMat;
    }
    /**
     * Set HazMat value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_hazMat the HazMat
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setHazMat($_hazMat)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_hazMat))
        {
            return false;
        }
        return ($this->HazMat = $_hazMat);
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
     * @return MicrobiltCriminalReportStructViolation_Type
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
