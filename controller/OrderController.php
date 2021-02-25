<?php

class OrderController
{
    public function order()
    {
        $model = new OrderModel();
        $model->createOrder();
    }
    
    
}