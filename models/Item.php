<?php

/**
 * User: denisolvr
 * Date: 28/08/15
 */
class Item
{
    public $item_id = null;
    public $project_id = null;
    public $expense_id = null;
    public $name = null;
    public $description = null;
    public $item_order = null;
    public $rate = null;
    public $unit = null;
    public $quantity = null;
    public $discount = null;
    public $tax_id = null;


    /**
     * @return null
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param null $item_id
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
    }

    /**
     * @return null
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param null $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @return null
     */
    public function getExpenseId()
    {
        return $this->expense_id;
    }

    /**
     * @param null $expense_id
     */
    public function setExpenseId($expense_id)
    {
        $this->expense_id = $expense_id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return null
     */
    public function getItemOrder()
    {
        return $this->item_order;
    }

    /**
     * @param null $item_order
     */
    public function setItemOrder($item_order)
    {
        $this->item_order = $item_order;
    }

    /**
     * @return null
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param null $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return null
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param null $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param null $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param null $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return null
     */
    public function getTaxId()
    {
        return $this->tax_id;
    }

    /**
     * @param null $tax_id
     */
    public function setTaxId($tax_id)
    {
        $this->tax_id = $tax_id;
    }



}