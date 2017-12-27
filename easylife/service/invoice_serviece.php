<?php 
 	if(empty($admin))
 	{
 		require_once "../data/invoice_data_access.php";
 	}
 	else
 	{
 		require_once "../../data/invoice_data_access.php";
 	}
?>
<?php
    function addInvoice($invoice){
        return addInvoiceToDB($invoice);
    }
    
    function editInvoice($invoice){
		return editInvoiceToDB($invoice);
	}
	
    function deleteInvoice($invoice){
        return deleteInvoiceFromDB($invoice);
    }
    
    function getAllInvoices(){
        return getAllInvoicesFromDB();
    }
    
	
	function getInvoiceByOrderCode($Invoice_Code){
        return getInvoiceByCodeFromDB($Invoice_Code);
    }
    
    function getInvoiceByMember($Member_ID){
        return getInvoiceByMemberFromDB($Member_ID);
    }
    
    function getInvoicesByDate($Date){
        return getInvoicesByDateFromDB($Date);
    }
    
    function getInvoicesByStatus($Status){
        return getInvoicesByStatusFromDB($Status);
    }
	function getInvoicesByPayment($Payment_Status){
        return getInvoicesByPaymentFromDB($Payment_Status);
    }
    

?>