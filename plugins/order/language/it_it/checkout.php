<?php
/**
 * Language definitions. Generated by the Blesta Translator
 * 
 * @package blesta
 * @version 5.7.1
 * @copyright Copyright (c) 2023, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Checkout.!error.invalid_agree_tos'] = "È necessario riconoscere il proprio consenso ai termini e alle condizioni.";
$lang['Checkout.!error.no_payment_info'] = "È necessario selezionare un metodo di pagamento per continuare.";
$lang['Checkout.index.description_invoice'] = "Fattura nr. %1\$s"; // %1$s is the invoice number
$lang['Checkout.setcontactview.text_none'] = "Nessuna";
$lang['Checkout.getpaymentaccounts.paymentaccount_cc'] = "Account Carta di Credito";
$lang['Checkout.getpaymentaccounts.paymentaccount_ach'] = "Conti ACH";
$lang['Checkout.getpaymentaccounts.account_name'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['Checkout.index.field_agree_tos'] = "Ho letto e accetto i <a href=\"%1\$s\" target=\"_blank\">Termini e condizioni</a>"; // %1$s is the URI to the terms and conditions
$lang['Checkout.index.totals.setup_fee'] = "Costo di installazione:";
$lang['Checkout.index.totals.discount'] = "Sconto:";
$lang['Checkout.index.totals.subtotal'] = "Totale parziale:";
$lang['Checkout.index.totals.tax'] = "%1\$s (%2\$s%%):"; // %1$s is the tax name, %2$s is the tax percentage
$lang['Checkout.index.totals.total'] = "Totale dovuto:";
$lang['Checkout.contact_info.field_first_name'] = "Nome di battesimo";
$lang['Checkout.contact_info.field_last_name'] = "Cognome";
$lang['Checkout.contact_info.field_address1'] = "Indirizzo 1";
$lang['Checkout.contact_info.field_address2'] = "Secondo indirizzo";
$lang['Checkout.contact_info.field_city'] = "Città";
$lang['Checkout.contact_info.field_country'] = "Paese";
$lang['Checkout.contact_info.field_state'] = "Stato";
$lang['Checkout.contact_info.field_zip'] = "Zip / Codice postale";
$lang['Checkout.contact_info.field_email'] = "Email";
$lang['Checkout.cc_info.field_number'] = "Numero";
$lang['Checkout.cc_info.field_security'] = "Codice di sicurezza";
$lang['Checkout.cc_info.field_expiration'] = "Data di scadenza";
$lang['Checkout.cc_info.field_savedetails'] = "Salva i dettagli del pagamento";
$lang['Checkout.cc_info.tooltip_savedetails'] = "I dettagli di pagamento salvati possono essere utilizzati per effettuare pagamenti in futuro senza dover inserire i dettagli ogni volta.";
$lang['Checkout.cc_info.tooltip_code'] = "Il codice di sicurezza a 3 o 4 cifre, di solito si trova sul retro della carta.";
$lang['Checkout.ach_info.field_type'] = "Tipo";
$lang['Checkout.ach_info.field_accountnum'] = "Numero di conto";
$lang['Checkout.ach_info.field_routingnum'] = "Numero di routing";
$lang['Checkout.ach_info.field_savedetails'] = "Salva i dettagli del pagamento";
$lang['Checkout.ach_info.tooltip_savedetails'] = "I dettagli di pagamento salvati possono essere utilizzati per effettuare pagamenti in futuro senza dover inserire i dettagli ogni volta.";
$lang['Checkout.complete.order_number'] = "Ordine n.%1\$s"; // %1$s is the order number
$lang['Checkout.complete.complete_description'] = "Grazie per il vostro ordine! Il tuo ordine è ora completo.";
$lang['Checkout.complete.almost_complete_description'] = "Il tuo ordine è stato ricevuto, in attesa del pagamento riportato di seguito.";
$lang['Checkout.complete.table_description'] = "Descrizione";
$lang['Checkout.complete.table_qty'] = "Quantità";
$lang['Checkout.complete.table_price'] = "Prezzo unitario";
$lang['Checkout.complete.quantity'] = "%1\$s @"; // %1\$s is the quantity value being ordered
$lang['Checkout.complete.totals.subtotal'] = "Totale parziale:";
$lang['Checkout.complete.totals.tax'] = "%1\$s (%2\$s%%):"; // %1$s is the tax name, %2$s is the tax percentage
$lang['Checkout.complete.totals.total'] = "Totale dovuto:";
$lang['Checkout.complete.totals.total_paid'] = "Totale pagato:";
$lang['Checkout.index.totals.credit'] = "Credito:";
$lang['Checkout.index.totals.paid'] = "Pagato:";
$lang['Checkout.!error.not_client_owner'] = "È necessario effettuare l'accesso come proprietario del cliente per continuare.";
$lang['Checkout.!info.unverified_email'] = "È stato inviato un collegamento all'indirizzo email fornito. Fai clic sul collegamento nell'e-mail per verificare il tuo indirizzo e-mail prima di procedere con il pagamento.";
$lang['Checkout.!info.unverified_email_button'] = "Invia nuovamente email di verifica";
$lang['Checkout.!error.payment_authorize'] = "Non è stato possibile autorizzare il pagamento per il conto di pagamento selezionato. Seleziona un account diverso o riprova.";
$lang['Checkout.!info.ach_verification'] = "Devi verificare questo account prima di poterlo utilizzare per effettuare un pagamento. Questo processo ti reindirizzerà dalla pagina corrente.";
?>