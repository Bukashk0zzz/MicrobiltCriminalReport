<?php
/**
 * File for class MicrobiltCriminalReportStructBankAccount_Type
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
/**
 * This class stands for MicrobiltCriminalReportStructBankAccount_Type originally named BankAccount_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/Seisint/LNNationalComprehensiveCriminalReport.svc?xsd=xsd2}
 * @package MicrobiltCriminalReport
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-06-30
 */
class MicrobiltCriminalReportStructBankAccount_Type extends MicrobiltCriminalReportStructAggregate
{
    /**
     * The OrgInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructOrgInfo_Type
     */
    public $OrgInfo;
    /**
     * The RoutingNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RoutingNumber;
    /**
     * The AccountNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AccountNum;
    /**
     * The TypeOfBankAcct
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TypeOfBankAcct;
    /**
     * The OpenedDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OpenedDt;
    /**
     * The AcctStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AcctStatus;
    /**
     * The OwnershipType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnershipType;
    /**
     * The BankStatement
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructBankStatement_Type
     */
    public $BankStatement;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructMessage_Type
     */
    public $Message;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AccountName;
    /**
     * The CreditCardInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltCriminalReportStructCreditCardInfo_Type
     */
    public $CreditCardInfo;
    /**
     * Constructor method for BankAccount_Type
     * @see parent::__construct()
     * @param MicrobiltCriminalReportStructOrgInfo_Type $_orgInfo
     * @param string $_routingNumber
     * @param string $_accountNum
     * @param string $_typeOfBankAcct
     * @param string $_openedDt
     * @param string $_acctStatus
     * @param string $_ownershipType
     * @param MicrobiltCriminalReportStructBankStatement_Type $_bankStatement
     * @param MicrobiltCriminalReportStructMessage_Type $_message
     * @param string $_accountName
     * @param MicrobiltCriminalReportStructCreditCardInfo_Type $_creditCardInfo
     * @return MicrobiltCriminalReportStructBankAccount_Type
     */
    public function __construct($_orgInfo = NULL,$_routingNumber = NULL,$_accountNum = NULL,$_typeOfBankAcct = NULL,$_openedDt = NULL,$_acctStatus = NULL,$_ownershipType = NULL,$_bankStatement = NULL,$_message = NULL,$_accountName = NULL,$_creditCardInfo = NULL)
    {
        MicrobiltCriminalReportWsdlClass::__construct(array('OrgInfo'=>$_orgInfo,'RoutingNumber'=>$_routingNumber,'AccountNum'=>$_accountNum,'TypeOfBankAcct'=>$_typeOfBankAcct,'OpenedDt'=>$_openedDt,'AcctStatus'=>$_acctStatus,'OwnershipType'=>$_ownershipType,'BankStatement'=>$_bankStatement,'Message'=>$_message,'AccountName'=>$_accountName,'CreditCardInfo'=>$_creditCardInfo),false);
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
     * Get RoutingNumber value
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }
    /**
     * Set RoutingNumber value
     * @param string $_routingNumber the RoutingNumber
     * @return string
     */
    public function setRoutingNumber($_routingNumber)
    {
        return ($this->RoutingNumber = $_routingNumber);
    }
    /**
     * Get AccountNum value
     * @return string|null
     */
    public function getAccountNum()
    {
        return $this->AccountNum;
    }
    /**
     * Set AccountNum value
     * @param string $_accountNum the AccountNum
     * @return string
     */
    public function setAccountNum($_accountNum)
    {
        return ($this->AccountNum = $_accountNum);
    }
    /**
     * Get TypeOfBankAcct value
     * @return string|null
     */
    public function getTypeOfBankAcct()
    {
        return $this->TypeOfBankAcct;
    }
    /**
     * Set TypeOfBankAcct value
     * @param string $_typeOfBankAcct the TypeOfBankAcct
     * @return string
     */
    public function setTypeOfBankAcct($_typeOfBankAcct)
    {
        return ($this->TypeOfBankAcct = $_typeOfBankAcct);
    }
    /**
     * Get OpenedDt value
     * @return string|null
     */
    public function getOpenedDt()
    {
        return $this->OpenedDt;
    }
    /**
     * Set OpenedDt value
     * @param string $_openedDt the OpenedDt
     * @return string
     */
    public function setOpenedDt($_openedDt)
    {
        return ($this->OpenedDt = $_openedDt);
    }
    /**
     * Get AcctStatus value
     * @return string|null
     */
    public function getAcctStatus()
    {
        return $this->AcctStatus;
    }
    /**
     * Set AcctStatus value
     * @param string $_acctStatus the AcctStatus
     * @return string
     */
    public function setAcctStatus($_acctStatus)
    {
        return ($this->AcctStatus = $_acctStatus);
    }
    /**
     * Get OwnershipType value
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->OwnershipType;
    }
    /**
     * Set OwnershipType value
     * @param string $_ownershipType the OwnershipType
     * @return string
     */
    public function setOwnershipType($_ownershipType)
    {
        return ($this->OwnershipType = $_ownershipType);
    }
    /**
     * Get BankStatement value
     * @return MicrobiltCriminalReportStructBankStatement_Type|null
     */
    public function getBankStatement()
    {
        return $this->BankStatement;
    }
    /**
     * Set BankStatement value
     * @param MicrobiltCriminalReportStructBankStatement_Type $_bankStatement the BankStatement
     * @return MicrobiltCriminalReportStructBankStatement_Type
     */
    public function setBankStatement($_bankStatement)
    {
        return ($this->BankStatement = $_bankStatement);
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
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $_accountName the AccountName
     * @return string
     */
    public function setAccountName($_accountName)
    {
        return ($this->AccountName = $_accountName);
    }
    /**
     * Get CreditCardInfo value
     * @return MicrobiltCriminalReportStructCreditCardInfo_Type|null
     */
    public function getCreditCardInfo()
    {
        return $this->CreditCardInfo;
    }
    /**
     * Set CreditCardInfo value
     * @param MicrobiltCriminalReportStructCreditCardInfo_Type $_creditCardInfo the CreditCardInfo
     * @return MicrobiltCriminalReportStructCreditCardInfo_Type
     */
    public function setCreditCardInfo($_creditCardInfo)
    {
        return ($this->CreditCardInfo = $_creditCardInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @uses MicrobiltCriminalReportWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltCriminalReportStructBankAccount_Type
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
