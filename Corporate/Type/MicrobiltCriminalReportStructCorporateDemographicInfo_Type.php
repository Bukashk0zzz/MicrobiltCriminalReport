<?php
/**
 * File for class MicrobiltCriminalReportStructCorporateDemographicInfo_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructCorporateDemographicInfo_Type originally named CorporateDemographicInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructCorporateDemographicInfo_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The IndustId
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructIndustId_Type
     */
    public $IndustId;
    /**
     * The YearsInBusiness
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $YearsInBusiness;
    /**
     * The YearsInBusinessRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMinMaxRange_Type
     */
    public $YearsInBusinessRange;
    /**
     * The CommercialAmounts
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public $CommercialAmounts;
    /**
     * The NumEmployeesRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMinMaxRange_Type
     */
    public $NumEmployeesRange;
    /**
     * The InBuildingDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $InBuildingDt;
    /**
     * The BuildingSize
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BuildingSize;
    /**
     * The OwnershipCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipCode;
    /**
     * The OwnershipEntity
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipEntity;
    /**
     * The BusinessLocationType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BusinessLocationType;
    /**
     * The NumCustomers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumCustomers;
    /**
     * The FiscalYrStartMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FiscalYrStartMonth;
    /**
     * The DisputeInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportEnumBoolean
     */
    public $DisputeInd;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for CorporateDemographicInfo_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructIndustId_Type $_industId
     * @param long $_yearsInBusiness
     * @param MicrobiltCriminalReportStructMinMaxRange_Type $_yearsInBusinessRange
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts
     * @param MicrobiltCriminalReportStructMinMaxRange_Type $_numEmployeesRange
     * @param date $_inBuildingDt
     * @param string $_buildingSize
     * @param string $_ownershipCode
     * @param string $_ownershipEntity
     * @param string $_businessLocationType
     * @param long $_numCustomers
     * @param string $_fiscalYrStartMonth
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @return MicrobiltCriminalReportStructCorporateDemographicInfo_Type
     */
    public function __construct($_industId = NULL,$_yearsInBusiness = NULL,$_yearsInBusinessRange = NULL,$_commercialAmounts = NULL,$_numEmployeesRange = NULL,$_inBuildingDt = NULL,$_buildingSize = NULL,$_ownershipCode = NULL,$_ownershipEntity = NULL,$_businessLocationType = NULL,$_numCustomers = NULL,$_fiscalYrStartMonth = NULL,$_disputeInd = NULL,$_message = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('IndustId'=>$_industId,'YearsInBusiness'=>$_yearsInBusiness,'YearsInBusinessRange'=>$_yearsInBusinessRange,'CommercialAmounts'=>$_commercialAmounts,'NumEmployeesRange'=>$_numEmployeesRange,'InBuildingDt'=>$_inBuildingDt,'BuildingSize'=>$_buildingSize,'OwnershipCode'=>$_ownershipCode,'OwnershipEntity'=>$_ownershipEntity,'BusinessLocationType'=>$_businessLocationType,'NumCustomers'=>$_numCustomers,'FiscalYrStartMonth'=>$_fiscalYrStartMonth,'DisputeInd'=>$_disputeInd,'Message'=>$_message),false);
    }
    /**
     * Get IndustId value
     * @return MicrobiltCriminalReportStructIndustId_Type|null
     */
    public function getIndustId()
    {
        return $this->IndustId;
    }
    /**
     * Set IndustId value
     * @param MicrobiltCriminalReportStructIndustId_Type $_industId the IndustId
     * @return MicrobiltCriminalReportStructIndustId_Type
     */
    public function setIndustId($_industId)
    {
        return ($this->IndustId = $_industId);
    }
    /**
     * Get YearsInBusiness value
     * @return long|null
     */
    public function getYearsInBusiness()
    {
        return $this->YearsInBusiness;
    }
    /**
     * Set YearsInBusiness value
     * @param long $_yearsInBusiness the YearsInBusiness
     * @return long
     */
    public function setYearsInBusiness($_yearsInBusiness)
    {
        return ($this->YearsInBusiness = $_yearsInBusiness);
    }
    /**
     * Get YearsInBusinessRange value
     * @return MicrobiltCriminalReportStructMinMaxRange_Type|null
     */
    public function getYearsInBusinessRange()
    {
        return $this->YearsInBusinessRange;
    }
    /**
     * Set YearsInBusinessRange value
     * @param MicrobiltCriminalReportStructMinMaxRange_Type $_yearsInBusinessRange the YearsInBusinessRange
     * @return MicrobiltCriminalReportStructMinMaxRange_Type
     */
    public function setYearsInBusinessRange($_yearsInBusinessRange)
    {
        return ($this->YearsInBusinessRange = $_yearsInBusinessRange);
    }
    /**
     * Get CommercialAmounts value
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type|null
     */
    public function getCommercialAmounts()
    {
        return $this->CommercialAmounts;
    }
    /**
     * Set CommercialAmounts value
     * @param MicrobiltCriminalReportStructCommercialAmounts_Type $_commercialAmounts the CommercialAmounts
     * @return MicrobiltCriminalReportStructCommercialAmounts_Type
     */
    public function setCommercialAmounts($_commercialAmounts)
    {
        return ($this->CommercialAmounts = $_commercialAmounts);
    }
    /**
     * Get NumEmployeesRange value
     * @return MicrobiltCriminalReportStructMinMaxRange_Type|null
     */
    public function getNumEmployeesRange()
    {
        return $this->NumEmployeesRange;
    }
    /**
     * Set NumEmployeesRange value
     * @param MicrobiltCriminalReportStructMinMaxRange_Type $_numEmployeesRange the NumEmployeesRange
     * @return MicrobiltCriminalReportStructMinMaxRange_Type
     */
    public function setNumEmployeesRange($_numEmployeesRange)
    {
        return ($this->NumEmployeesRange = $_numEmployeesRange);
    }
    /**
     * Get InBuildingDt value
     * @return date|null
     */
    public function getInBuildingDt()
    {
        return $this->InBuildingDt;
    }
    /**
     * Set InBuildingDt value
     * @param date $_inBuildingDt the InBuildingDt
     * @return date
     */
    public function setInBuildingDt($_inBuildingDt)
    {
        return ($this->InBuildingDt = $_inBuildingDt);
    }
    /**
     * Get BuildingSize value
     * @return string|null
     */
    public function getBuildingSize()
    {
        return $this->BuildingSize;
    }
    /**
     * Set BuildingSize value
     * @param string $_buildingSize the BuildingSize
     * @return string
     */
    public function setBuildingSize($_buildingSize)
    {
        return ($this->BuildingSize = $_buildingSize);
    }
    /**
     * Get OwnershipCode value
     * @return string|null
     */
    public function getOwnershipCode()
    {
        return $this->OwnershipCode;
    }
    /**
     * Set OwnershipCode value
     * @param string $_ownershipCode the OwnershipCode
     * @return string
     */
    public function setOwnershipCode($_ownershipCode)
    {
        return ($this->OwnershipCode = $_ownershipCode);
    }
    /**
     * Get OwnershipEntity value
     * @return string|null
     */
    public function getOwnershipEntity()
    {
        return $this->OwnershipEntity;
    }
    /**
     * Set OwnershipEntity value
     * @param string $_ownershipEntity the OwnershipEntity
     * @return string
     */
    public function setOwnershipEntity($_ownershipEntity)
    {
        return ($this->OwnershipEntity = $_ownershipEntity);
    }
    /**
     * Get BusinessLocationType value
     * @return string|null
     */
    public function getBusinessLocationType()
    {
        return $this->BusinessLocationType;
    }
    /**
     * Set BusinessLocationType value
     * @param string $_businessLocationType the BusinessLocationType
     * @return string
     */
    public function setBusinessLocationType($_businessLocationType)
    {
        return ($this->BusinessLocationType = $_businessLocationType);
    }
    /**
     * Get NumCustomers value
     * @return long|null
     */
    public function getNumCustomers()
    {
        return $this->NumCustomers;
    }
    /**
     * Set NumCustomers value
     * @param long $_numCustomers the NumCustomers
     * @return long
     */
    public function setNumCustomers($_numCustomers)
    {
        return ($this->NumCustomers = $_numCustomers);
    }
    /**
     * Get FiscalYrStartMonth value
     * @return string|null
     */
    public function getFiscalYrStartMonth()
    {
        return $this->FiscalYrStartMonth;
    }
    /**
     * Set FiscalYrStartMonth value
     * @param string $_fiscalYrStartMonth the FiscalYrStartMonth
     * @return string
     */
    public function setFiscalYrStartMonth($_fiscalYrStartMonth)
    {
        return ($this->FiscalYrStartMonth = $_fiscalYrStartMonth);
    }
    /**
     * Get DisputeInd value
     * @return MicrobiltCriminalReportEnumBoolean|null
     */
    public function getDisputeInd()
    {
        return $this->DisputeInd;
    }
    /**
     * Set DisputeInd value
     * @uses MicrobiltCriminalReportEnumBoolean::valueIsValid()
     * @param MicrobiltCriminalReportEnumBoolean $_disputeInd the DisputeInd
     * @return MicrobiltCriminalReportEnumBoolean
     */
    public function setDisputeInd($_disputeInd)
    {
        if(!MicrobiltCriminalReportEnumBoolean::valueIsValid($_disputeInd))
        {
            return false;
        }
        return ($this->DisputeInd = $_disputeInd);
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
     * @return MicrobiltCriminalReportStructCorporateDemographicInfo_Type
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
