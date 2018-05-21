<?
class GoodFriable extends GoodExtended implements GoodImplemented{
	public function __construct($basePrice){
		parent::__construct($basePrice);
	}

	public function countProfit(){
		$oldProfit = $this->getProfit();
		$this->setProfit(($this->getBasePrice() * .9 - 2.5) * $this->getSold());
		$this->addRevenue($this->getProfit() - $oldProfit);
		$this->reportMe();
	}

	public function sell($howMany){
		// Возможна реализация функций доставки или пересчета погрешностей
		$this->addSell($howMany);
		$this->countProfit();
	}
}