<?php
class Scompany_Sign2pay_Model_Sign2pay extends Mage_Payment_Model_Method_Abstract
{
	protected $_code = 'sign2pay';
	protected $_formBlockType = 'sign2pay/form_sign2pay';
	protected $_infoBlockType = 'sign2pay/info_sign2pay';

	public function assignData($data)
	{
		if (!($data instanceof Varien_Object)) {
			$data = new Varien_Object($data);
		}
		$info = $this->getInfoInstance();
		return $this;
	}


	public function validate()
	{
		parent::validate();

		$info = $this->getInfoInstance();

		return $this;
	}



    protected $_isInitializeNeeded      = true;
    protected $_canUseInternal          = true;
    protected $_canUseForMultishipping  = false;

    public function getOrderPlaceRedirectUrl() {
        return Mage::getUrl('sign2pay/payment/redirect', array('_secure' => true));
    }
}
?>