<!-- 
    Creare uno shop online con le seguenti caratteristiche:

        - L'e-commerce vende prodotti per gli animali.

        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

        - L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
        ricevere il 20% di sconto su tutti i prodotti.

        - Il pagamento avviene con la carta di credito, che non deve essere scaduta. 
-->


<?php 

$p = [
    'asd', 'asd, asd', 'asd', 'asd'
];


// Overview
$o =  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt dolore porro nemo quam corporis quisquam quod voluptate temporibus eligendi,';

// Description
$d = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, enim nam aliquam ipsum autem, quas, esse ipsa ab ut iure porro quam. Dolor possimus magnam quidem saepe accusantium iusto quod!';
class Generic_product 
{
    public string $name;
    public string $overview = $this->$o;
    public string $format;
    public string $price;
    public string $description = $this->$d;

    public function __construct(string $name, string $overview, string $format, string $price, string $description)
    {
        $this->name = $name;
        $this->overview = $overview;
        $this->format = $format;
        $this->price = $price;
        $this->Description = $description;
    }


}

$generic_product = new Generic_product('Pallina per Cani', $O, 10, 5, $d);

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
class Food_product extends Generic_product
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

$food_product = new Food_product('Pallina per Cani', $O, 10, 5, $d, $i[3], $ac[1]);

?>




