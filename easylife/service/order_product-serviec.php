<?php 
 	if(empty($admin))
 	{
 		require_once "../data/order_product_data_access.php";
 	}
 	else
 	{
 		require_once "../../data/order_product_data_access.php";
 	}
?>
<?php
    function addOrder($order){
        return addOrderToDb($order);
    }
    
    function deleteOrder($order){
        return deleteOrderFromDb($order);
    }
    
    function getAllOrders(){
        return getAllOrdersFromDb();
    }
    
    function getOrderByCode($Order_Code){
        return getOrderByCodeFromDB($Order_Code);
    }
    
    function getOrderByProduct($Product_Code){
        return getOrderByProductFromDB($Product_Code);
    }
    
    function getOrdersByInvoice($Invoice_Code){
        return getOrdersByInvoiceFromDB($Invoice_Code);
    }
  

?>