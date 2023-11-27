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

$lang['CronTasks.!error.key.unique'] = "La chiave dell'attività cron fornita è già utilizzata.";
$lang['CronTasks.!error.key.length'] = "La lunghezza della chiave dell'attività cron non può superare i 64 caratteri.";
$lang['CronTasks.!error.run_id.exists'] = "ID di esecuzione dell'attività cron non valido.";
$lang['CronTasks.!error.id.exists'] = "ID attività cron non valido.";
$lang['CronTasks.!error.name.empty'] = "Inserisci un nome.";
$lang['CronTasks.!error.is_lang.format'] = "is_lang deve essere un numero.";
$lang['CronTasks.!error.is_lang.length'] = "La lunghezza di is_lang non può superare 1 carattere.";
$lang['CronTasks.!error.enabled.format'] = "abilitato deve essere un numero.";
$lang['CronTasks.!error.enabled.length'] = "la lunghezza abilitata non può superare 1 carattere.";
$lang['CronTasks.!error.interval.format'] = "L'intervallo deve essere un numero che rappresenta i minuti.";
$lang['CronTasks.!error.time.format'] = "Il tempo è in un formato non valido.";
$lang['CronTasks.!error.type.format'] = "Tipo di attività cron non valido. Deve essere l'ora o l'intervallo.";
$lang['CronTasks.crontask.name.create_invoice'] = "Crea fattura";
$lang['CronTasks.crontask.name.autodebit'] = "Addebito automatico";
$lang['CronTasks.crontask.description.autodebit'] = "I conti di pagamento selezionati per l'addebito automatico verranno eseguiti per saldare le fatture aperte quotidianamente all'ora specificata.";
$lang['CronTasks.crontask.name.payment_reminders'] = "Promemoria di pagamento";
$lang['CronTasks.crontask.description.payment_reminders'] = "I solleciti di pagamento e gli avvisi di ritardo vengono inviati quotidianamente all'orario specificato.";
$lang['CronTasks.crontask.name.apply_payments'] = "Applicare i pagamenti alle fatture aperte";
$lang['CronTasks.crontask.description.apply_payments'] = "I crediti sciolti vengono applicati automaticamente alle fatture aperte all'intervallo selezionato.";
$lang['CronTasks.crontask.name.provision_pending_services'] = "Fornitura di servizi in sospeso a pagamento";
$lang['CronTasks.crontask.description.provision_pending_services'] = "I servizi in sospeso a pagamento vengono attivati all'intervallo selezionato.";
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = "Annulla servizi programmati";
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = "I servizi con date di cancellazione future impostate vengono rimossi all'intervallo selezionato.";
$lang['CronTasks.crontask.name.card_expiration_reminders'] = "Promemoria scadenza carta 15 del mese";
$lang['CronTasks.crontask.description.card_expiration_reminders'] = "Per le carte di credito in scadenza nello stesso mese all'ora specificata verrà inviato un promemoria il 15 del mese.";
$lang['CronTasks.crontask.name.deliver_invoices'] = "Consegnare fatture";
$lang['CronTasks.crontask.description.deliver_invoices'] = "Le fatture in consegna saranno inviate con la tempistica impostata.";
$lang['CronTasks.crontask.name.suspend_services'] = "Sospendere i servizi";
$lang['CronTasks.crontask.description.suspend_services'] = "I servizi dovuti ma non saldati saranno sospesi giornalmente all'ora specificata.";
$lang['CronTasks.crontask.name.exchange_rates'] = "Aggiornamenti del tasso di cambio";
$lang['CronTasks.crontask.description.exchange_rates'] = "I tassi di cambio saranno aggiornati all'intervallo specificato. Non è consigliabile eseguire questo più di due volte al giorno per il rischio di essere bloccati.";
$lang['CronTasks.crontask.name.deliver_reports'] = "Consegnare report";
$lang['CronTasks.crontask.description.deliver_reports'] = "Rapporti A/R, Generazione fatture, Responsabilità fiscale e altri report verranno consegnati quotidianamente all'orario specificato.";
$lang['CronTasks.crontask.name.cleanup_logs'] = "Pulisci i registri";
$lang['CronTasks.crontask.name.process_renewing_services'] = "Processo di rinnovo dei servizi";
$lang['CronTasks.crontask.description.process_renewing_services'] = "I servizi di rinnovo allegati ai moduli vengono rinnovati all'intervallo selezionato.";
$lang['CronTasks.crontask.name.backups_amazons3'] = "Backup di Amazon S3";
$lang['CronTasks.crontask.description.backups_amazons3'] = "I backup di Amazon S3 sono pianificati in Impostazioni di sistema > Backup > Amazon S3.";
$lang['CronTasks.crontask.name.unsuspend_services'] = "Annullare la sospensione dei servizi";
$lang['CronTasks.crontask.description.unsuspend_services'] = "I servizi sospesi che sono stati pagati verranno riattivati all'intervallo selezionato.";
$lang['CronTasks.crontask.name.license_validation'] = "Convalida della licenza";
$lang['CronTasks.crontask.description.create_invoice'] = "Le fatture ricorrenti e i servizi di rinnovo vengono fatturati tramite questa attività, che viene eseguita una volta al giorno all'ora specificata.";
$lang['CronTasks.crontask.description.cleanup_logs'] = "Il vecchio gateway, il modulo e altri registri verranno ruotati quotidianamente in base alle impostazioni di conservazione al momento specificato.";
$lang['CronTasks.crontask.name.backups_sftp'] = "Backup SFTP";
$lang['CronTasks.crontask.description.backups_sftp'] = "I backup SFTP sono pianificati in Impostazioni di sistema > Backup > FTP sicuro.";
$lang['CronTasks.crontask.name.process_service_changes'] = "Elaborare modifiche al servizio";
$lang['CronTasks.crontask.description.process_service_changes'] = "Le modifiche ai servizi in coda a pagamento (ad esempio gli aggiornamenti) vengono elaborate all'intervallo selezionato.";
$lang['CronTasks.!error.task_type.format'] = "Tipo di attività non valido. Deve essere un modulo, un plug-in o un sistema.";
$lang['CronTasks.!error.dir.length'] = "La lunghezza della directory non può superare i 64 caratteri.";
$lang['CronTasks.task_type.system'] = "Sistema";
$lang['CronTasks.task_type.plugin'] = "Collegare";
$lang['CronTasks.task_type.module'] = "Modulo";
$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = "Applicare le penalità per il ritardo della fattura";
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = "Applica penali per il ritardo alle fatture aperte un numero configurato di giorni dopo la scadenza.";
$lang['CronTasks.crontask.name.transition_quotations'] = "Citazioni di transizione";
$lang['CronTasks.crontask.description.transition_quotations'] = "Contrassegna le quotazioni oltre la data di validità, come scadute";
?>