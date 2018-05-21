<?
/*Добро пожаловать в царство танцев с бубном
    каждый товар имеет базовую цену
    



*/
class GoodExtended {

	private $basePrice; //Базовая цена
	private $profit;    //Доход с продажи всех товаров одного типа
    protected $allSold = 0; //Всего продано товаров одного типа 
    protected static $allRevenue; //Общий доход

    public function __construct($basePrice){
        $this->basePrice = $basePrice;
    }
    
    public function addSell($howMany){
        // Создаем статическую переменую для сохранения состояния всех наследников, а именно количества проданного
        static $sold = 0;
        // Добавляем к ней количество вновь проданного
        $sold += $howMany;
        // Записываем результат в переменную класса
        $this->allSold = $sold; 
        // Имеем техническую возможность записать результат во временную переменную... Не помню, чтоб я это использовал
        return $sold;
    }
    protected function addRevenue($revenue){
        // Способ сохранять общую сумму
        GoodExtended::$allRevenue += $revenue;
    }
    
    // Тут блок геттеров и сеттеров
    protected function getSold(){
        return $this->allSold;
    }
    
    protected function getProfit(){  
        return $this->profit;
    }
    protected function setProfit($profit){
        $this->profit = $profit;
    }
    
    protected function getBasePrice(){
        return $this->basePrice;
    }
    protected function setBasePrice($basePrice){
        $this->basePrice = $basePrice;
    }
    
    // Тестовые функции для удобства тестирования
    public static function writeAllRevenue(){
        echo '<br><br>Выручка составила: ' . GoodExtended::$allRevenue;
    }
    public function reportMe(){
        $class = get_class($this);
        $revenue = $this->getProfit();
        $tempSold = $this->getSold();
        // Это для легкого чтения кода
        echo '<br><br>Среди товаров ' . $class;
        echo '<br>продано: ' . $tempSold;
        echo '<br>выручка составила: ' . ($revenue / $tempSold) . ' * ' . $tempSold . ' = ' . $revenue;
    } 
}