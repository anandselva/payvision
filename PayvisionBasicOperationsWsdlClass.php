<?php
/**
 * File for PayvisionBasicOperationsWsdlClass to communicate with SOAP service
 * @package PayvisionBasicOperations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
/**
 * PayvisionBasicOperationsWsdlClass to communicate with SOAP service
 * 
 * @package PayvisionBasicOperations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @date 2013-05-10
 */
class PayvisionBasicOperationsWsdlClass extends stdClass implements ArrayAccess,Iterator,Countable
{
	/**
	 * Option key to define WSDL url
	 * @var string
	 */
	const WSDL_URL = 'wsdl_url';
	/**
	 * Option key to define WSDL login
	 * @var string
	 */
	const WSDL_LOGIN = 'wsdl_login';
	/**
	 * Option key to define WSDL password
	 * @var string
	 */
	const WSDL_PASSWD = 'wsdl_password';
	/**
	 * Option key to define WSDL trace option
	 * @var string
	 */
	const WSDL_TRACE = 'wsdl_trace';
	/**
	 * Option key to define WSDL exceptions
	 * @var string
	 */
	const WSDL_EXCPTS = 'wsdl_exceptions';
	/**
	 * Option key to define WSDL cache_wsdl
	 * @var string
	 */
	const WSDL_CACHE_WSDL = 'wsdl_cache_wsdl';
	/**
	 * Option key to define WSDL stream_context
	 * @var string
	 */
	const WSDL_STREAM_CONTEXT = 'wsdl_stream_context';
	/**
	 * Option key to define WSDL soap_version
	 * @var string
	 */
	const WSDL_SOAP_VERSION = 'wsdl_soap_version';
	/**
	 * Option key to define WSDL compression
	 * @var string
	 */
	const WSDL_COMPRESSION = 'wsdl_compression';
	/**
	 * Option key to define WSDL encoding
	 * @var string
	 */
	const WSDL_ENCODING = 'wsdl_encoding';
	/**
	 * Option key to define WSDL connection_timeout
	 * @var string
	 */
	const WSDL_CONNECTION_TIMEOUT = 'wsdl_connection_timeout';
	/**
	 * Option key to define WSDL typemap
	 * @var string
	 */
	const WSDL_TYPEMAP = 'wsdl_typemap';
	/**
	 * Option key to define WSDL user_agent
	 * @var string
	 */
	const WSDL_USER_AGENT = 'wsdl_user_agent';
	/**
	 * Option key to define WSDL features
	 * @var string
	 */
	const WSDL_FEATURES = 'wsdl_features';
	/**
	 * Option key to define WSDL keep_alive
	 * @var string
	 */
	const WSDL_FKEEP_ALIVE = 'wsdl_keep_alive';
	/**
	 * Soapclient called to communicate with the actual SOAP Service
	 * @var SoapClient
	 */
	private static $soapClient;
	/**
	 * Contains Soap call result
	 * @var mixed
	 */
	private $result;
	/**
	 * Contains last errors
	 * @var array
	 */
	private $lastError;
	/**
	 * Array that contains values when only one parameter is set when calling __construct method
	 * @var array
	 */
	private $internArrayToIterate;
	/**
	 * Bool that tells if array is set or not
	 * @var bool
	 */
	private $internArrayToIterateIsArray;
	/**
	 * Items index browser
	 * @var int
	 */
	private $internArrayToIterateOffset;
	/**
	 * Constructor
	 * @uses PayvisionBasicOperationsWsdlClass::setLastError()
	 * @uses PayvisionBasicOperationsWsdlClass::initSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::initInternArrayToIterate()
	 * @uses PayvisionBasicOperationsWsdlClass::_set()
	 * @param array $_arrayOfValues SoapClient options or object attribute values
	 * @param bool $_resetSoapClient allows to disable the SoapClient redefinition
	 * @return PayvisionBasicOperationsWsdlClass
	 */
	public function __construct($_arrayOfValues = array(),$_resetSoapClient = true)
	{
		$this->setLastError(array());
		/**
		 * Init soap Client
		 * Set default values
		 */
		if($_resetSoapClient)
			$this->initSoapClient($_arrayOfValues);
		/**
		 * Init array of values if set
		 */
		$this->initInternArrayToIterate($_arrayOfValues);
		/**
		 * Generic set methods
		 */
		if(is_array($_arrayOfValues) && count($_arrayOfValues))
		{
			foreach($_arrayOfValues as $name=>$value)
				$this->_set($name,$value);
		}
	}
	/**
	 * Generic method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @uses PayvisionBasicOperationsWsdlClass::_set()
	 * @param array $_array the exported values
	 * @param string $_className optional (used by inherited classes in order to always call this method)
	 * @return PayvisionBasicOperationsWsdlClass|null
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		if(class_exists($_className))
		{
			$object = @new $_className($_array);
			if($object)
			{
				foreach($_array as $name=>$value)
					$object->_set($name,$value);
			}
			return $object;
		}
		else
			return null;
	}
	/**
	 * Static method getting current SoapClient
	 * @return SoapClient
	 */
	public static function getSoapClient()
	{
		return self::$soapClient;
	}
	/**
	 * Static method setting current SoapClient
	 * @param SoapClient $_soapClient
	 * @return SoapClient
	 */
	protected static function setSoapClient(SoapClient $_soapClient)
	{
		return (self::$soapClient = $_soapClient);
	}
	/**
	 * Method initiating SoapClient
	 * @uses PayvisionBasicOperationsClassMap::classMap()
	 * @uses PayvisionBasicOperationsWsdlClass::getDefaultWsdlOptions()
	 * @uses PayvisionBasicOperationsWsdlClass::setSoapClient()
	 * @param array $_wsdlOptions WSDL options
	 * @return void
	 */
	public function initSoapClient($_wsdlOptions)
	{
		if(class_exists('PayvisionBasicOperationsClassMap',true))
		{
			$wsdlOptions = array();
			$wsdlOptions['classmap'] = PayvisionBasicOperationsClassMap::classMap();
			$defaultWsdlOptions = self::getDefaultWsdlOptions();
			foreach($defaultWsdlOptions as $optioName=>$optionValue)
			{
				if(array_key_exists($optioName,$_wsdlOptions) && !empty($_wsdlOptions[$optioName]))
					$wsdlOptions[str_replace('wsdl_','',$optioName)] = $_wsdlOptions[$optioName];
				elseif(!empty($optionValue))
					$wsdlOptions[str_replace('wsdl_','',$optioName)] = $optionValue;
			}
			if(array_key_exists(str_replace('wsdl_','',self::WSDL_URL),$wsdlOptions))
			{
				$wsdlUrl = $wsdlOptions[str_replace('wsdl_','',self::WSDL_URL)];
				unset($wsdlOptions[str_replace('wsdl_','',self::WSDL_URL)]);
				self::setSoapClient(new SoapClient($wsdlUrl,$wsdlOptions));
			}
		}
	}
	/**
	 * Method returning all default options values
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_CACHE_WSDL
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_COMPRESSION
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_CONNECTION_TIMEOUT
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_ENCODING
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_EXCPTS
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_FEATURES
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_LOGIN
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_PASSWD
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_SOAP_VERSION
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_STREAM_CONTEXT
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_TRACE
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_TYPEMAP
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_URL
	 * @uses PayvisionBasicOperationsWsdlClass::WSDL_USER_AGENT
	 * @return array
	 */
	public static function getDefaultWsdlOptions()
	{
		return array(
					self::WSDL_CACHE_WSDL=>WSDL_CACHE_NONE,
					self::WSDL_COMPRESSION=>null,
					self::WSDL_CONNECTION_TIMEOUT=>null,
					self::WSDL_ENCODING=>null,
					self::WSDL_EXCPTS=>true,
					self::WSDL_FEATURES=>null,
					self::WSDL_LOGIN=>null,
					self::WSDL_PASSWD=>null,
					self::WSDL_SOAP_VERSION=>null,
					self::WSDL_STREAM_CONTEXT=>null,
					self::WSDL_TRACE=>true,
					self::WSDL_TYPEMAP=>null,
					self::WSDL_URL=>null,
					self::WSDL_USER_AGENT=>null);
	}
	/**
	 * Allows to set the SoapClient location to call
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses SoapClient::__setLocation()
	 * @param string $_location
	 */
	public function setLocation($_location)
	{
		return self::getSoapClient()?self::getSoapClient()->__setLocation($_location):false;
	}
	/**
	 * Returns the last request content as a DOMDocument or as a formated XML String
	 * @see SoapClient::__getLastRequest()
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::getFormatedXml()
	 * @uses SoapClient::__getLastRequest()
	 * @param bool $_asDomDocument
	 * @return DOMDocument|string
	 */
	public function getLastRequest($_asDomDocument = false)
	{
		if(self::getSoapClient())
			return self::getFormatedXml(self::getSoapClient()->__getLastRequest(),$_asDomDocument);
		return null;
	}
	/**
	 * Returns the last response content as a DOMDocument or as a formated XML String
	 * @see SoapClient::__getLastResponse()
	 * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
	 * @uses PayvisionBasicOperationsWsdlClass::getFormatedXml()
	 * @uses SoapClient::__getLastResponse()
	 * @param bool $_asDomDocument
	 * @return DOMDocument|string
	 */
	public function getLastResponse($_asDomDocument = false)
	{
		if(self::getSoapClient())
			return self::getFormatedXml(self::getSoapClient()->__getLastResponse(),$_asDomDocument);
		return null;
	}
	/**
	 * Returns a XML string content as a DOMDocument or as a formated XML string
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::saveXML()
	 * @param string $_string
	 * @param bool $_asDomDocument
	 * @return DOMDocument|string|null
	 */
	public function getFormatedXml($_string,$_asDomDocument = false)
	{
		if(class_exists('DOMDocument'))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->preserveWhiteSpace = false;
			$dom->resolveExternals = false;
			$dom->substituteEntities = false;
			$dom->validateOnParse = false;
			if($dom->loadXML($_string))
				return $_asDomDocument?$dom:$dom->saveXML();
		}
		return $_asDomDocument?null:$_string;
	}
	/**
	 * Method alias to count
	 * @uses PayvisionBasicOperationsWsdlClass::count()
	 * @return int
	 */
	public function length()
	{
		return $this->count();
	}
	/**
	 * Method returning item length, alias to length
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterate()
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterateIsArray()
	 * @return int
	 */
	public function count()
	{
		return $this->getInternArrayToIterateIsArray()?count($this->getInternArrayToIterate()):-1;
	}
	/**
	 * Method returning the current element
	 * @uses PayvisionBasicOperationsWsdlClass::offsetGet()
	 * @return mixed
	 */
	public function current()
	{
		return $this->offsetGet($this->internArrayToIterateOffset);
	}
	/**
	 * Method moving the current position to the next element
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterateOffset()
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterateOffset()
	 * @return int
	 */
	public function next()
	{
		return $this->setInternArrayToIterateOffset($this->getInternArrayToIterateOffset() + 1);
	}
	/**
	 * Method resetting itemOffset
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterateOffset()
	 * @return int
	 */
	public function rewind()
	{
		return $this->setInternArrayToIterateOffset(0);
	}
	/**
	 * Method checking if current itemOffset points to an existing item
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterateOffset()
	 * @uses PayvisionBasicOperationsWsdlClass::offsetExists()
	 * @return bool true|false
	 */
	public function valid()
	{
		return $this->offsetExists($this->getInternArrayToIterateOffset());
	}
	/**
	 * Method returning current itemOffset value, alias to getInternArrayToIterateOffset
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterateOffset()
	 * @return int
	 */
	public function key()
	{
		return $this->getInternArrayToIterateOffset();
	}
	/**
	 * Method alias to offsetGet
	 * @see PayvisionBasicOperationsWsdlClass::offsetGet()
	 * @uses PayvisionBasicOperationsWsdlClass::offsetGet()
	 * @param int $_index
	 * @return mixed
	 */
	public function item($_index)
	{
		return $this->offsetGet($_index);
	}
	/**
	 * Default method adding item to array
	 * @uses PayvisionBasicOperationsWsdlClass::getAttributeName()
	 * @uses PayvisionBasicOperationsWsdlClass::__toString()
	 * @uses PayvisionBasicOperationsWsdlClass::_set()
	 * @uses PayvisionBasicOperationsWsdlClass::_get()
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterate()
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterateIsArray()
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterateOffset()
	 * @param mixed $_item value
	 * @return bool true|false
	 */
	public function add($_item)
	{
		if($this->getAttributeName() != '' && stripos($this->__toString(),'array') !== false)
		{
			/**
			 * init array
			 */
			if(!is_array($this->_get($this->getAttributeName())))
				$this->_set($this->getAttributeName(),array());
			/**
			 * current array
			 */
			$currentArray = $this->_get($this->getAttributeName());
			array_push($currentArray,$_item);
			$this->_set($this->getAttributeName(),$currentArray);
			$this->setInternArrayToIterate($currentArray);
			$this->setInternArrayToIterateIsArray(true);
			$this->setInternArrayToIterateOffset(0);
			return true;
		}
		return false;
	}
	/**
	 * Method to call when sending data to request for *array* type class
	 * @uses PayvisionBasicOperationsWsdlClass::getAttributeName()
	 * @uses PayvisionBasicOperationsWsdlClass::__toString()
	 * @uses PayvisionBasicOperationsWsdlClass::_get()
	 * @return mixed
	 */
	public function toSend()
	{
		if($this->getAttributeName() != '' && stripos($this->__toString(),'array') !== false)
			return $this->_get($this->getAttributeName());
		else
			return null;
	}
	/**
	 * Method returning the first item
	 * @uses PayvisionBasicOperationsWsdlClass::item()
	 * @return mixed
	 */
	public function first()
	{
		return $this->item(0);
	}
	/**
	 * Method returning the last item
	 * @uses PayvisionBasicOperationsWsdlClass::item()
	 * @uses PayvisionBasicOperationsWsdlClass::length()
	 * @return mixed
	 */
	public function last()
	{
		return $this->item($this->length() - 1);
	}
	/**
	 * Method testing index in item
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterateIsArray()
	 * @uses PayvisionBasicOperationsWsdlClass::getInternArrayToIterate()
	 * @param int $_offset
	 * @return bool true|false
	 */
	public function offsetExists($_offset)
	{
		return ($this->getInternArrayToIterateIsArray() && array_key_exists($_offset,$this->getInternArrayToIterate()));
	}
	/**
	 * Method returning the item at "index" value
	 * @uses PayvisionBasicOperationsWsdlClass::offsetExists()
	 * @param int $_offset
	 * @return mixed
	 */
	public function offsetGet($_offset)
	{
		return $this->offsetExists($_offset)?$this->internArrayToIterate[$_offset]:null;
	}
	/**
	 * Method useless but necessarly overridden, can't set
	 * @param mixed $_offset
	 * @param mixed $_value
	 * @return null
	 */
	public function offsetSet($_offset,$_value)
	{
		return null;
	}
	/**
	 * Method useless but necessarly overridden, can't unset
	 * @param mixed $_offset
	 * @return null
	 */
	public function offsetUnset($_offset)
	{
		return null;
	}
	/**
	 * Method returning current result from Soap call
	 * @return mixed
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Method setting current result from Soap call
	 * @param mixed $_result
	 * @return mixed
	 */
	protected function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Method returning last errors occured during the calls
	 * @return array
	 */
	public function getLastError()
	{
		return $this->lastError;
	}
	/**
	 * Method setting last errors occured during the calls
	 * @param array $_lastError
	 * @return array
	 */
	private function setLastError($_lastError)
	{
		return ($this->lastError = $_lastError);
	}
	/**
	 * Method saving the last error returned by the SoapClient
	 * @param string $_methoName the method called when the error occurred
	 * @param SoapFault $_soapFault l'objet de l'erreur
	 * @return bool true|false
	 */
	protected function saveLastError($_methoName,SoapFault $_soapFault)
	{
		return ($this->lastError[$_methoName] = $_soapFault);
	}
	/**
	 * Method getting the last error for a certain method
	 * @param string $_methoName method name to get error from
	 * @return SoapFault|null
	 */
	public function getLastErrorForMethod($_methoName)
	{
		return (is_array($this->lastError) && array_key_exists($_methoName,$this->lastError))?$this->lastError[$_methoName]:null;
	}
	/**
	 * Method returning intern array to iterate trough
	 * @return array
	 */
	public function getInternArrayToIterate()
	{
		return $this->internArrayToIterate;
	}
	/**
	 * Method setting intern array to iterate trough
	 * @param array $_internArrayToIterate
	 * @return array
	 */
	public function setInternArrayToIterate($_internArrayToIterate)
	{
		return ($this->internArrayToIterate = $_internArrayToIterate);
	}
	/**
	 * Method returnint intern array index when iterating trough
	 * @return int
	 */
	public function getInternArrayToIterateOffset()
	{
		return $this->internArrayToIterateOffset;
	}
	/**
	 * Method initiating internArrayToIterate
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterate()
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterateOffset()
	 * @uses PayvisionBasicOperationsWsdlClass::setInternArrayToIterateIsArray()
	 * @uses PayvisionBasicOperationsWsdlClass::getAttributeName()
	 * @uses PayvisionBasicOperationsWsdlClass::initInternArrayToIterate()
	 * @uses PayvisionBasicOperationsWsdlClass::__toString()
	 * @param array $_array the array to iterate trough
	 * @param bool $_internCall indicates that methods is calling itself
	 * @return void
	 */
	public function initInternArrayToIterate($_array = array(),$_internCall = false)
	{
		if(stripos($this->__toString(),'array') !== false)
		{
			if(is_array($_array) && count($_array))
			{
				$this->setInternArrayToIterate($_array);
				$this->setInternArrayToIterateOffset(0);
				$this->setInternArrayToIterateIsArray(true);
			}
			elseif(!$_internCall && $this->getAttributeName() != '' && property_exists($this->__toString(),$this->getAttributeName()))
				$this->initInternArrayToIterate($this->_get($this->getAttributeName()),true);
		}
	}
	/**
	 * Method setting intern array offset when iterating trough
	 * @param int $_internArrayToIterateOffset
	 * @return int
	 */
	public function setInternArrayToIterateOffset($_internArrayToIterateOffset)
	{
		return ($this->internArrayToIterateOffset = $_internArrayToIterateOffset);
	}
	/**
	 * Method returning true if intern array is an actual array
	 * @return bool true|false
	 */
	public function getInternArrayToIterateIsArray()
	{
		return $this->internArrayToIterateIsArray;
	}
	/**
	 * Method setting if intern array is an actual array
	 * @param bool $_internArrayToIterateIsArray
	 * @return bool true|false
	 */
	public function setInternArrayToIterateIsArray($_internArrayToIterateIsArray = false)
	{
		return ($this->internArrayToIterateIsArray = $_internArrayToIterateIsArray);
	}
	/**
	 * Generic method setting value
	 * @param string $_name property name to set
	 * @param mixed $_value property value to use
	 * @return bool
	 */
	public function _set($_name,$_value)
	{
		$setMethod = 'set' . ucfirst($_name);
		if(method_exists($this,$setMethod))
		{
			$this->$setMethod($_value);
			return true;
		}
		else
			return false;
	}
	/**
	 * Generic method getting value
	 * @param string $_name property name to get
	 * @return mixed
	 */
	public function _get($_name)
	{
		$getMethod = 'get' . ucfirst($_name);
		if(method_exists($this,$getMethod))
			return $this->$getMethod();
		else
			return false;
	}
	/**
	 * Method returning alone attribute name when class is *array* type
	 * @return string
	 */
	public function getAttributeName()
	{
		return '';
	}
	/**
	 * Generic method telling if current value is valid according to the attribute setted with the current value
	 * @param mixed $_value the value to test
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return true;
	}
	/**
	 * Method returning actual class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>