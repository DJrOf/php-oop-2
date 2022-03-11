<!-- 
    Creare uno shop online con le seguenti caratteristiche:

        - L'e-commerce vende prodotti per gli animali.

        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

        - L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
        ricevere il 20% di sconto su tutti i prodotti.

        - Il pagamento avviene con la carta di credito, che non deve essere scaduta. 
-->


<?php 


$accepted_currencies = [
    'eur', 'usd', 'BTC'
];
class CasualUser 
{
    public string $default_currency = $this->accepted_currencies[$item];
    public string $language;
    public string $location;
    public string $sessionId;
    // private array $payments_data = $this->creditCardData;

    public function __construct(string $default_currency, string $language, string $location, string $sessionId) // private $payments_data)
    {
        $this->default_currency = $default_currency;
        $this->language = $language;
        $this->location = $location;
        $this->sessionId = $sessionId;
    }
}

$casual_user = new CasualUser('BTC', $language, 'Italia', 509384); // $payments_data)

class SubscribedUser extends CasualUser
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $user_name;
    

    public function __construct(string $first_name, string $last_name, string $email, string $language, string $location, string $sessionId)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->language = $language;
        $this->Description = $location;
        $this->Description = $sessionId;
    }
}

$subscribed_user = new SubscribedUser('Daniel', 'Ofosu', 'abracadaniel@fictionalmail.com', 'BTC', $language, 'Italia', 509384);

$p = [
    'asd', 'asd, asd', 'asd', 'asd'
];


// Overview
$o =  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt dolore porro nemo quam corporis quisquam quod voluptate temporibus eligendi,';

// Description
$d = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, enim nam aliquam ipsum autem, quas, esse ipsa ab ut iure porro quam. Dolor possimus magnam quidem saepe accusantium iusto quod!';
class GenericProduct 
{
    public string $name;
    public string $overview = $this->$o;
    public string $format;
    public string $price = getPrice();
    public string $description = $this->$d;

    public function __construct(string $name, string $overview, string $format, string $price, string $description)
    {
        $this->name = $name;
        $this->overview = $overview;
        $this->format = $format;
        $this->price = $price;
        $this->Description = $description;
    }

    public function getPrice($price)
    {
        // L'idea è che, poiché la condizione email=true non è compatibile con un'istanza CasualUser, non essendo la email un informazione richiesta ad un utente non iscritto, 
        // per applicare correttamente lo sconto iscritti basta verificare la presenza del parametro email, che si troverà sicuramente in un'istanza SubscribedUser, e che sicuramente non si troverà in un'istanza CasualUser.
        if ($this->email) 
        return $price - ( $this->price * (20/100) );
        $this->price = $price;
        return $price;
    }
    
    public function getConfirmation($expire_date)
    {
        $today = date("Y-m-d");
        $expire = $this->expireDate; 
        $today_time = strtotime($today);
        $expire_time = strtotime($expire);

        if (!$expire_time < $today_time) { 
            return;
         } else {
             return $confirmation = true;
         }
    }

}

$generic_product = new GenericProduct('Pallina per Cani', $overview, 10, 5, $description);

// Ingredients 
$i = [
    $ip1 = ['asd', 'asd, asd', 'asd', 'asd'],
    $ip2 = ['asd', 'asd, asd', 'asd', 'asd'],
    $ip3 = ['asd', 'asd, asd', 'asd', 'asd'],
    $ip4 = ['asd', 'asd, asd', 'asd', 'asd'],
    $ip5 = ['asd', 'asd, asd', 'asd', 'asd'],
    
];

// Analitic Components
$ac = [

    $acp1 = ['asd', 'asd, asd', 'asd', 'asd'],
    $acp2 = ['asd', 'asd, asd', 'asd', 'asd'],
    $acp3 = ['asd', 'asd, asd', 'asd', 'asd'],
    $acp4 = ['asd', 'asd, asd', 'asd', 'asd'],
    $acp5 = ['asd', 'asd, asd', 'asd', 'asd'],
];
class FoodProduct extends GenericProduct
{
        public string $ingredients = $i;
        public string $analitic_components = $ac;

        public function __construct(string $name, string $overview, string $format, string $price, string $description, $ingredients, $analitic_components)
    {
        parent::__construct($name, $overview, $format, $price, $description);
        $this->$ingredients;
        $this->$analitic_components;

    }

}

$food_product = new FoodProduct('Pallina per Cani', $O, 10, $price, $d, $i[3], $ac[1]);


$creditCardData = [
    $holder = '',
    $expire_date = '',
    $billing_address = '',
    $card_number ='',
    $cvc = '',    
];

trait Address
{
  private $country;
  private $street;
  private $city;
  private $zip;

  public function getAddress()
  {
    return "$this->country $this->city $this->street $this->zip";
  }

  public function setAddress($country, $city, $street, $zip = '-')
  {
    $this->setCity($country);
    $this->setCountry($city);
    $this->setAvenue($street);
    $this->setZip_code($zip);
  }

}

trait CreditCard
{
  private $holder;
  private $expire_date;
  private $billing_address;
  private $card_number;
  private $cvc;



  