<?php

/**
 * User: denisolvr
 * Date: 28/08/15
 */
include 'Item.php';
include 'Json.php';

class Bill //implements JsonSerializable
{
    protected $db;
    protected $output_invoice = null;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllInvoice() {
        return $this->db->query('SELECT li.* FROM lines_to_invoice as li INNER JOIN customer_to_invoice as ci ON ci.zoho_books_contact_id = li.zoho_books_contact_id');
    }

    public function getUserID(){
        return $this->db->query('SELECT * FROM customer_to_invoice as ci');
    }

    public function getUserInvoice($customerID){
        return $this->db->query('SELECT li.* FROM lines_to_invoice as li INNER JOIN customer_to_invoice as ci ON ci.zoho_books_contact_id = li.zoho_books_contact_id WHERE li.zoho_books_contact_id="'.$customerID.'"');
    }

    public function gerateBilling(){
        $order = null;
        $customers = $this->getUserID();
        $structJsonArray = array();

        foreach ($customers as $customer){
            $structJson = new Json();
            $structJson->setCustomerId($customer['zoho_books_contact_id']);
            $structJson->setDate(date('d-m-Y'));

            $invoices_per_costumer = $this->getUserInvoice($customer['zoho_books_contact_id']);
            //var_dump($invoices_per_costumer);
            foreach ($invoices_per_costumer as $invoice_each){
                $item = new Item();
                $order++;
                $item->setItemId("460000000027017");
                $item->setProjectId("");
                $item->setExpenseId("");
                $item->setName("Print Services");
                $item->setDescription($invoice_each['description']);
                $item->setItemOrder($order);
                $item->setRate($invoice_each['rate']);
                $item->setUnit("Nos");
                $item->setQuantity(1.00);
                $item->setDiscount(0.00);
                $item->setTaxId("460000000027005");

                $structJson->setLineItems($item);
                $item = null;
            }
            $structJson->setNotes("Thanks for your business.");
            $order = null;

            $structJsonArray[]=$structJson;
            $structJson = null;
        }

        return $structJsonArray;
    }
}