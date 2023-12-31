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

$lang['Quotations.!error.quotation_add.failed'] = "Impossibile creare questa citazione. Per favore riprova.";
$lang['Quotations.!error.id.quotation_invoiced'] = "Questo preventivo è stato fatturato e non può essere modificato.";
$lang['Quotations.!error.id_format.empty'] = "Nessun formato ID impostato per i preventivi.";
$lang['Quotations.!error.id_format.length'] = "Il formato ID per le citazioni non può superare i 64 caratteri.";
$lang['Quotations.!error.id_value.valid'] = "Impossibile determinare il valore dell'ID del preventivo.";
$lang['Quotations.!error.client_id.exists'] = "ID cliente non valido.";
$lang['Quotations.!error.staff_id.exists'] = "ID del personale non valido.";
$lang['Quotations.!error.title.empty'] = "Inserisci un titolo.";
$lang['Quotations.!error.title.length'] = "Il titolo delle citazioni non può superare i 255 caratteri.";
$lang['Quotations.!error.date_created.format'] = "La data di creazione è in un formato data non valido.";
$lang['Quotations.!error.date_expires.format'] = "La data di scadenza è in un formato di data non valido.";
$lang['Quotations.!error.date_expires.after_created'] = "La scadenza deve essere fatturata in corrispondenza o successivamente alla creazione.";
$lang['Quotations.!error.status.format'] = "Stato non valido.";
$lang['Quotations.!error.currency.length'] = "Il codice valuta deve contenere 3 caratteri.";
$lang['Quotations.!error.status.valid'] = "Il preventivo deve essere approvato o in attesa di essere fatturato.";
$lang['Quotations.!error.first_due_date.format'] = "La prima data di scadenza è in un formato di data non valido.";
$lang['Quotations.!error.second_due_date.format'] = "La seconda data di scadenza ha un formato di data non valido.";
$lang['Quotations.!error.percentage_due.format'] = "La percentuale dovuta deve essere un numero.";
$lang['Quotations.!error.percentage_due.valid'] = "La percentuale dovuta deve essere un numero maggiore di zero e minore o uguale a 100.";
$lang['Quotations.!error.lines[][id].exists'] = "ID elemento pubblicitario non valido.";
$lang['Quotations.!error.lines[][description].empty'] = "Inserisci una descrizione dell'elemento pubblicitario.";
$lang['Quotations.!error.lines[][qty].minimum'] = "Inserisci una quantità pari o superiore a 1.";
$lang['Quotations.!error.lines[][amount].format'] = "Il costo unitario deve essere un numero.";
$lang['Quotations.!error.lines[][tax].format'] = "L'imposta sull'elemento pubblicitario deve essere \"vero\" o \"falso\"";
$lang['Quotations.getstatuses.draft'] = "Bozza";
$lang['Quotations.getstatuses.approved'] = "Approvato";
$lang['Quotations.getstatuses.pending'] = "In attesa di";
$lang['Quotations.getstatuses.expired'] = "Scaduto";
$lang['Quotations.getstatuses.invoiced'] = "Fatturato";
$lang['Quotations.getstatuses.dead'] = "Morto";
$lang['Quotations.getstatuses.lost'] = "Perduto";
?>