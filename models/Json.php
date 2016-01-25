<?php

/**
 * User: denisolvr
 * Date: 28/08/15
 */


class Json
{
    public $customer_id = null;
    public $date = null;
    /*public $line_items = array(
        "item_id"   => null,
        "project_id"   => null,
        "expense_id" => null,
        "name" => null,
        "description" =>
    );*/
    public $line_items = array();
    public $notes = null;

    public function __construct() {

    }


    /**
     * @return null
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param null $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param null $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return array
     */
    public function getLineItems()
    {
        return $this->line_items;
    }

    /**
     * @param array $line_items
     */
    public function setLineItems($line_items)
    {
        $this->line_items[] = $line_items;
    }

    /**
     * @return null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param null $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }



}
