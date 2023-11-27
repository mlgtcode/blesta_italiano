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

$lang['AdminDepartments.!success.department_created'] = "Il dipartimento %1\$s è stato creato con successo."; // %1$s is the name of the department
$lang['AdminDepartments.!success.department_updated'] = "Il dipartimento %1\$s è stato aggiornato con successo."; // %1$s is the name of the department
$lang['AdminDepartments.!success.department_deleted'] = "Il dipartimento %1\$s è stato eliminato con successo."; // %1$s is the name of the department
$lang['AdminDepartments.index.page_title'] = "Supporto > Dipartimenti";
$lang['AdminDepartments.add.page_title'] = "Gestione supporto > Dipartimenti > Aggiungi reparto";
$lang['AdminDepartments.edit.page_title'] = "Gestione supporto > Dipartimenti > Modifica reparto";
$lang['AdminDepartments.index.categorylink_adddepartment'] = "

e.g. module_field
";
$lang['AdminDepartments.index.boxtitle_departments'] = "Dipartimenti";
$lang['AdminDepartments.index.heading_name'] = "Nome";
$lang['AdminDepartments.index.heading_description'] = "Descrizione";
$lang['AdminDepartments.index.heading_email'] = "E-mail";
$lang['AdminDepartments.index.heading_assigned_staff'] = "Staff assegnato";
$lang['AdminDepartments.index.heading_default_priority'] = "Priorità predefinita";
$lang['AdminDepartments.index.heading_options'] = "Opzioni";
$lang['AdminDepartments.index.option_edit'] = "Modificare";
$lang['AdminDepartments.index.option_delete'] = "Eliminare";
$lang['AdminDepartments.index.confirm_delete'] = "Dipartimenti con i ticket assegnati non possono essere cancellati fino a quando tutti i ticket sono stati ri-assegnato ad un reparto alternativo. Sei sicuro di voler eliminare questo reparto?";
$lang['AdminDepartments.index.no_results'] = "Non ci sono dipartimenti.";
$lang['AdminDepartments.assigned_staff.heading_staff'] = "Personale";
$lang['AdminDepartments.assigned_staff.no_results'] = "Non c'è personale assegnato a questo dipartimento.";
$lang['AdminDepartments.!tooltip.piping_config'] = "Imposta il percorso della tubazione come mostrato, ma assicurati di utilizzare il percorso corretto per PHP sul tuo server. Assicurati che pipe.php sia eseguibile. Potrebbe anche essere necessario modificare pipe.php per includere un hashbang sulla riga 1 che sarebbe simile a: #!/usr/bin/php";
$lang['AdminDepartments.add.boxtitle_adddepartment'] = "Aggiungi Dipartimento";
$lang['AdminDepartments.add.field_name'] = "Nome";
$lang['AdminDepartments.add.field_description'] = "Descrizione";
$lang['AdminDepartments.add.field_clients_only'] = "Consenti solo ai clienti di aprire o rispondere ai ticket";
$lang['AdminDepartments.add.field_email'] = "E-mail";
$lang['AdminDepartments.add.field_method'] = "Gestione della posta elettronica";
$lang['AdminDepartments.add.field_piping_config'] = "Configurazione delle tubazioni";
$lang['AdminDepartments.add.field_default_priority'] = "Priorità predefinita";
$lang['AdminDepartments.add.field_security'] = "Sicurezza";
$lang['AdminDepartments.add.field_box_name'] = "Nome della casella";
$lang['AdminDepartments.add.field_mark_messages'] = "Segna i messi come";
$lang['AdminDepartments.add.field_host'] = "Ospite";
$lang['AdminDepartments.add.field_user'] = "Utente";
$lang['AdminDepartments.add.field_pass'] = "Passaggio";
$lang['AdminDepartments.add.field_port'] = "Porta";
$lang['AdminDepartments.add.field_status'] = "Stato";
$lang['AdminDepartments.add.field_addsubmit'] = "Aggiungi Dipartimento";
$lang['AdminDepartments.edit.boxtitle_adddepartment'] = "Dipartimento Modifica";
$lang['AdminDepartments.edit.field_name'] = "Nome";
$lang['AdminDepartments.edit.field_description'] = "Descrizione";
$lang['AdminDepartments.edit.field_clients_only'] = "Consenti solo ai client di aprire o rispondere ai ticket";
$lang['AdminDepartments.edit.field_email'] = "E-mail";
$lang['AdminDepartments.edit.field_method'] = "Gestione della posta elettronica";
$lang['AdminDepartments.edit.field_piping_config'] = "Configurazione Piping";
$lang['AdminDepartments.edit.field_default_priority'] = "Priorità predefinita";
$lang['AdminDepartments.edit.field_security'] = "Sicurezza";
$lang['AdminDepartments.edit.field_box_name'] = "Nome della casella";
$lang['AdminDepartments.edit.field_mark_messages'] = "Segna messaggi come";
$lang['AdminDepartments.edit.field_host'] = "Ospite";
$lang['AdminDepartments.edit.field_user'] = "Utente";
$lang['AdminDepartments.edit.field_pass'] = "Passaggio";
$lang['AdminDepartments.edit.field_port'] = "Porta";
$lang['AdminDepartments.edit.field_status'] = "Stato";
$lang['AdminDepartments.edit.field_addsubmit'] = "Modifica Dipartimento";
$lang['AdminDepartments.assigned_staff.heading_assigned_staff'] = "Personale assegnato";
$lang['AdminDepartments.add.field_override_from_email'] = "Sostituisci l'indirizzo del mittente impostato nei modelli di posta elettronica con l'indirizzo di posta elettronica impostato per questo reparto";
$lang['AdminDepartments.edit.field_override_from_email'] = "Sostituisci l'indirizzo del mittente impostato nei modelli di posta elettronica con l'indirizzo di posta elettronica impostato per questo reparto";
$lang['AdminDepartments.!tooltip.close_ticket_interval'] = "Tutti i ticket con uno stato diverso da %1\$s la cui ultima risposta proviene da un membro dello staff verranno chiusi automaticamente se non verranno fornite risposte entro il periodo di tempo selezionato."; // %1$s is the ticket status In Progress
$lang['AdminDepartments.!text.add_response'] = "Imposta una risposta predefinita per la chiusura automatica";
$lang['AdminDepartments.!text.no_selected_response'] = "Nessuna risposta di chiusura automatica selezionata.";
$lang['AdminDepartments.!text.remove_response'] = "Rimuovere";
$lang['AdminDepartments.add.field_close_ticket_interval'] = "Tickets a chiusura automatica";
$lang['AdminDepartments.add.field_response_id'] = "Chiudi automaticamente risposta ticket";
$lang['AdminDepartments.edit.field_response_id'] = "Actions";
$lang['AdminDepartments.!tooltip.send_ticket_received'] = "Deselezionando questa casella si indica che i nuovi ticket creati per questo dipartimento (tramite e-mail o cliente) non invieranno un avviso di risposta al cliente o allo staff rispettivamente tramite l'e-mail ticket ricevuto o l'e-mail aggiornata ticket personale.";
$lang['AdminDepartments.add.field_send_ticket_received'] = "Invia e-mail di risposta automatica per i nuovi ticket";
$lang['AdminDepartments.edit.field_send_ticket_received'] = "Invia e-mail di risposta automatica per i nuovi ticket";
$lang['AdminDepartments.!tooltip.delete_ticket_interval'] = "Tutti i ticket con stato %1\$s verranno automaticamente eliminati dopo essere rimasti in quello stato per il periodo di tempo selezionato."; // %1$s is the ticket status (e.g. Trash)
$lang['AdminDepartments.add.field_delete_ticket_interval'] = "Elimina automaticamente i biglietti";
$lang['AdminDepartments.edit.field_close_ticket_interval'] = "Chiudi automaticamente i ticket";
$lang['AdminDepartments.edit.field_delete_ticket_interval'] = "Elimina automaticamente i biglietti";
$lang['AdminDepartments.!tooltip.automatic_transition'] = "Cambia lo stato in %1\$s quando un membro dello staff risponde."; // %1$s is the 'Awaiting Client Reply' status
$lang['AdminDepartments.add.field_automatic_transition'] = "Transizione automatica dello stato del ticket alla risposta dell'amministratore";
$lang['AdminDepartments.edit.field_automatic_transition'] = "Transizione automatica dello stato del ticket alla risposta dell'amministratore";
$lang['AdminDepartments.add.field_require_captcha'] = "Richiedi la verifica umana per gli utenti non autenticati";
$lang['AdminDepartments.edit.field_require_captcha'] = "Richiedi la verifica umana per gli utenti non autenticati";
$lang['AdminDepartments.!tooltip.reminder_ticket_interval'] = "Per tutti i ticket con stato diverso da %1\$s, verrà inviato un promemoria all'altra parte se non sono state fornite risposte entro il periodo di tempo selezionato."; // %1$s is the ticket status Closed
$lang['AdminDepartments.!tooltip.include_attachments'] = "I server di posta hanno limitazioni sulle dimensioni degli allegati e sui tipi di file. Per mitigare il rischio che le email vengano rifiutate, includi i limiti relativi al tipo e alle dimensioni degli allegati. Per essere sicuro che il cliente sia a conoscenza degli allegati che non sono stati inclusi, utilizza il tag {ticket.reply_has_attachments} negli avvisi dei ticket.";
$lang['AdminDepartments.!tooltip.attachment_types'] = "Elenco delle estensioni supportate separate da virgola (ad esempio zip,jpg,png).";
$lang['AdminDepartments.!tooltip.max_attachment_size'] = "Dimensione massima dell'allegato da includere in MB.";
$lang['AdminDepartments.add.field_include_attachments'] = "Includi gli allegati supportati negli avvisi dei ticket";
$lang['AdminDepartments.add.field_attachment_types'] = "Tipi di allegati supportati";
$lang['AdminDepartments.add.field_max_attachment_size'] = "Dimensione massima dell'allegato";
$lang['AdminDepartments.add.field_reminder_ticket_interval'] = "Invia automaticamente promemoria sui biglietti";
$lang['AdminDepartments.add.field_reminder_ticket_status'] = "Invia promemoria ai ticket con stato";
$lang['AdminDepartments.add.field_reminder_ticket_priority'] = "Invia promemoria ai ticket con priorità";
$lang['AdminDepartments.edit.field_include_attachments'] = "Includi gli allegati supportati negli avvisi dei ticket";
$lang['AdminDepartments.edit.field_attachment_types'] = "Tipi di allegati supportati";
$lang['AdminDepartments.edit.field_max_attachment_size'] = "Dimensione massima dell'allegato";
$lang['AdminDepartments.edit.field_reminder_ticket_interval'] = "Invia automaticamente promemoria sui biglietti";
$lang['AdminDepartments.edit.field_reminder_ticket_status'] = "Invia promemoria ai ticket con stato";
$lang['AdminDepartments.edit.field_reminder_ticket_priority'] = "Invia promemoria ai ticket con priorità";
$lang['AdminDepartments.!tooltip.client_add'] = "Indipendentemente dal fatto che il client possa inviare o meno il campo, se false il client sarà solo in grado di leggere il campo.";
$lang['AdminDepartments.!tooltip.auto_delete'] = "Se il ticket viene chiuso i dati del campo verranno cancellati automaticamente. I dati non saranno più visibili al personale.";
$lang['AdminDepartments.add.tab_general'] = "Generale";
$lang['AdminDepartments.add.tab_custom_fields'] = "Campi personalizzati";
$lang['AdminDepartments.add.field_add_field'] = "Aggiungi campo";
$lang['AdminDepartments.add.heading_label'] = "Etichetta";
$lang['AdminDepartments.add.heading_description'] = "Descrizione";
$lang['AdminDepartments.add.heading_visibility'] = "Visibilità";
$lang['AdminDepartments.add.heading_type'] = "Tipo";
$lang['AdminDepartments.add.heading_min'] = "minimo";
$lang['AdminDepartments.add.heading_max'] = "Massimo";
$lang['AdminDepartments.add.heading_step'] = "Fare un passo";
$lang['AdminDepartments.add.heading_client_add'] = "Il cliente può aggiungere";
$lang['AdminDepartments.add.heading_encrypted'] = "Crittografato";
$lang['AdminDepartments.add.heading_auto_delete'] = "Eliminazione automatica";
$lang['AdminDepartments.add.heading_options'] = "Opzioni";
$lang['AdminDepartments.add.heading_name'] = "Nome";
$lang['AdminDepartments.add.heading_value'] = "Valore";
$lang['AdminDepartments.add.heading_default'] = "Predefinito";
$lang['AdminDepartments.add.text_delete'] = "Eliminare";
$lang['AdminDepartments.add.text_add'] = "Aggiungere";
$lang['AdminDepartments.edit.tab_general'] = "Generale";
$lang['AdminDepartments.edit.tab_custom_fields'] = "Campi personalizzati";
$lang['AdminDepartments.edit.field_add_field'] = "Aggiungi campo";
$lang['AdminDepartments.edit.confirm_field_remove'] = "Sei sicuro di voler eliminare questo campo personalizzato? Tutti i dati associati a questo campo verranno eliminati. Se desideri nascondere questo campo e preservare i dati, modifica la sua Visibilità su Solo personale.";
$lang['AdminDepartments.edit.no_results'] = "Non ci sono campi personalizzati in questo dipartimento.";
$lang['AdminDepartments.edit.heading_label'] = "Etichetta";
$lang['AdminDepartments.edit.heading_description'] = "Descrizione";
$lang['AdminDepartments.edit.heading_visibility'] = "Visibilità";
$lang['AdminDepartments.edit.heading_type'] = "Tipo";
$lang['AdminDepartments.edit.heading_min'] = "minimo";
$lang['AdminDepartments.edit.heading_max'] = "Massimo";
$lang['AdminDepartments.edit.heading_step'] = "Fare un passo";
$lang['AdminDepartments.edit.heading_client_add'] = "Il cliente può aggiungere";
$lang['AdminDepartments.edit.heading_encrypted'] = "Crittografato";
$lang['AdminDepartments.edit.heading_auto_delete'] = "Eliminazione automatica";
$lang['AdminDepartments.edit.heading_options'] = "Opzioni";
$lang['AdminDepartments.edit.heading_name'] = "Nome";
$lang['AdminDepartments.edit.heading_value'] = "Valore";
$lang['AdminDepartments.edit.heading_default'] = "Predefinito";
$lang['AdminDepartments.edit.text_delete'] = "Eliminare";
$lang['AdminDepartments.edit.text_add'] = "Aggiungere";
?>