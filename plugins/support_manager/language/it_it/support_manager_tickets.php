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

$lang['SupportManagerTickets.!error.code.format'] = "Il codice del biglietto deve contenere solo cifre.";
$lang['SupportManagerTickets.!error.department_id.exists'] = "Seleziona un dipartimento valido.";
$lang['SupportManagerTickets.!error.staff_id.exists'] = "ID del personale non valido.";
$lang['SupportManagerTickets.!error.service_id.exists'] = "Il servizio selezionato per questo biglietto non esiste.";
$lang['SupportManagerTickets.!error.service_id.belongs'] = "Il servizio selezionato non è valido.";
$lang['SupportManagerTickets.!error.client_id.exists'] = "ID cliente non valido.";
$lang['SupportManagerTickets.!error.client_id.set'] = "Il ticket appartiene a un altro client e il cliente assegnato non può essere cambiato.";
$lang['SupportManagerTickets.!error.email.format'] = "Si prega di inserire un indirizzo email valido.";
$lang['SupportManagerTickets.!error.summary.empty'] = "Inserisci un riepilogo.";
$lang['SupportManagerTickets.!error.summary.length'] = "Il riepilogo non può superare i 255 caratteri di lunghezza.";
$lang['SupportManagerTickets.!error.priority.format'] = "Si prega di selezionare una priorità valida.";
$lang['SupportManagerTickets.!error.status.format'] = "Seleziona uno stato valido.";
$lang['SupportManagerTickets.!error.date_closed.format'] = "La data di chiusura del ticket è in un formato di data non valido.";
$lang['SupportManagerTickets.!error.ticket_id.exists'] = "ID biglietto non valido.";
$lang['SupportManagerTickets.!error.type.format'] = "Seleziona un tipo di risposta valido.";
$lang['SupportManagerTickets.!error.type.new_valid'] = "I nuovi ticket devono avere un tipo di risposta \"risposta\".";
$lang['SupportManagerTickets.!error.details.empty'] = "Inserisci alcuni dettagli su questo biglietto.";
$lang['SupportManagerTickets.!error.client_id.attached_to'] = "La risposta al ticket potrebbe non provenire da un cliente diverso.";
$lang['SupportManagerTickets.priority.emergency'] = "Emergenza";
$lang['SupportManagerTickets.priority.critical'] = "Critico";
$lang['SupportManagerTickets.priority.high'] = "Alta";
$lang['SupportManagerTickets.priority.medium'] = "medio";
$lang['SupportManagerTickets.priority.low'] = "Basso";
$lang['SupportManagerTickets.status.open'] = "In attesa di risposta da parte del personale";
$lang['SupportManagerTickets.status.in_progress'] = "In corso";
$lang['SupportManagerTickets.status.closed'] = "Chiuso";
$lang['SupportManagerTickets.type.reply'] = "rispondere";
$lang['SupportManagerTickets.type.note'] = "Nota";
$lang['SupportManagerTickets.type.log'] = "Log";
$lang['SupportManagerTickets.log.department_id'] = "Il reparto è stato cambiato in %1\$s."; // %1$s is the department name
$lang['SupportManagerTickets.log.summary'] = "Il riepilogo è stato aggiornato.";
$lang['SupportManagerTickets.log.priority'] = "La priorità è stata modificata in %1\$s."; // %1$s is the priority
$lang['SupportManagerTickets.log.status'] = "Lo stato è stato modificato in %1\$s."; // %1$s is the status
$lang['SupportManagerTickets.log.ticket_staff_id'] = "Assegnato a %1\$s."; // %1$s is the name of the department staff member the ticket was assigned to
$lang['SupportManagerTickets.log.unassigned'] = "Non assegnato";
$lang['SupportManagerTickets.status.awaiting_reply'] = "In attesa della risposta del cliente";
$lang['SupportManagerTickets.!error.by_staff_id.exists'] = "Il membro dello staff impostato per eseguire la modifica non esiste.";
$lang['SupportManagerTickets.!error.replies.valid'] = "L'ID del ticket di risposta non è valido, o tutte le risposte sono state selezionate. È necessario lasciare almeno una risposta";
$lang['SupportManagerTickets.!error.tickets.valid'] = "Almeno un biglietto selezionato non è valido, è chiuso o non appartiene allo stesso cliente del biglietto scelto.";
$lang['SupportManagerTickets.!error.merge_into.itself'] = "Il biglietto non può essere unito a se stesso.";
$lang['SupportManagerTickets.!error.tickets.service_matches'] = "Almeno uno dei ticket non può essere assegnato a un determinato servizio perché non appartiene al client associato.";
$lang['SupportManagerTickets.!error.tickets.department_matches'] = "Non è stato possibile assegnare almeno uno dei biglietti al reparto indicato perché non appartiene alla stessa azienda.";
$lang['SupportManagerTickets.merge.reply'] = "Questo ticket è stato unito al ticket #%1\$s."; // %1$s is the ticket number
$lang['SupportManagerTickets.!error.contact_id.exists'] = "Il contatto selezionato per questa risposta al ticket non esiste.";
$lang['SupportManagerTickets.!error.contact_id.valid'] = "Il contatto potrebbe non rispondere al ticket senza un cliente valido.";
$lang['SupportManagerTickets.!error.replies.notes'] = "Le note di risposta al ticket non possono essere suddivise in un ticket separato senza includere anche una risposta al ticket.";
$lang['SupportManagerTickets.!error.status.trash'] = "Un biglietto eliminato non può essere modificato.";
$lang['SupportManagerTickets.!error.date_added.format'] = "La data aggiunta al biglietto è in un formato di data non valido.";
$lang['SupportManagerTickets.!error.date_updated.format'] = "La data dell'aggiornamento del ticket è in un formato non valido.";
$lang['SupportManagerTickets.status.on_hold'] = "In attesa";
$lang['SupportManagerTickets.status.trash'] = "Cestino";
$lang['SupportManagerTickets.!error.ticket_ids[].exists'] = "Almeno un ID biglietto non è valido.";
$lang['SupportManagerTickets.!error.client_id.company'] = "Almeno un biglietto non appartiene alla stessa compagnia del cliente in questione.";
$lang['SupportManagerTickets.reassign_note'] = "Questo ticket è stato riassegnato a %1\$s. Le risposte dei clienti precedenti sono state riassegnate a questo cliente e potrebbero essere state fornite da un'altra persona."; // %1$s is the client name
?>