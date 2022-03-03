<!-- 
    Creare uno shop online con le seguenti caratteristiche:

        - L'e-commerce vende prodotti per gli animali.

        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

        - L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
        ricevere il 20% di sconto su tutti i prodotti.

        - Il pagamento avviene con la carta di credito, che non deve essere scaduta. 
-->


<?php 

class Generic_product 
{
    public string $name;
    public string $overview;
    public string $format;
    public string $price;
    public string $description;

    public function __construct(string $name, string $overview, string $format, string $price, string $description)
    {
        $this->setName($name);
        $this->setOverview($overview);
        $this->setFormat($format);
        $this->setPrice($price);
        $this->setDescription($description);
    }


}

$O =  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt dolore porro nemo quam corporis quisquam quod voluptate temporibus eligendi,';
$d = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, enim nam aliquam ipsum autem, quas, esse ipsa ab ut iure porro quam. Dolor possimus magnam quidem saepe accusantium iusto quod!';


$generic_product = new Generic_product('Pallina per Cani', $O, 10, 5, $d);




?>




