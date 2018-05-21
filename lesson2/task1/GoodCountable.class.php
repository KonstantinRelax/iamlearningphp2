<?
class GoodCountable extends GoodExtended implements GoodImplemented{
	public function __construct($basePrice){
		parent::__construct($basePrice);
	}

	public function countProfit(){
		// Имплементированная функция, единственная достойная комментирования
		// Сохраняем состояние дохода
		$oldProfit = $this->getProfit();
		// тут секретная функция расчетов
		$this->setProfit(($this->getBasePrice() - 2) * $this->getSold());
		// Добавляем доход в общую копилку
		$this->addRevenue($this->getProfit() - $oldProfit);
		// отчет о продаже
		$this->reportMe();	
	}

	public function sell($howMany){
		// Возможна реализация функций доставки или пересчета погрешностей
		$this->addSell($howMany);
		$this->countProfit();
	}
}
