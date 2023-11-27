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

$lang['AdminSystemGeneral.!success.basic_updated'] = "Le impostazioni di configurazione di base sono state aggiornate con successo!";
$lang['AdminSystemGeneral.!success.geoip_updated'] = "Le impostazioni GeoIP sono state aggiornate con successo!";
$lang['AdminSystemGeneral.!success.maintenance_updated'] = "Le impostazioni di manutenzione sono state aggiornate con successo!";
$lang['AdminSystemGeneral.!success.license_updated'] = "La tua chiave di licenza è stata aggiornata con successo!";
$lang['AdminSystemGeneral.!success.addtype_created'] = "Il tipo di pagamento \"%1\$s\" è stato creato con successo!"; // %1$s is the name of the payment type
$lang['AdminSystemGeneral.!success.edittype_updated'] = "Il tipo di pagamento \"%1\$s\" è stato aggiornato con successo!"; // %1$s is the name of the payment type
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = "Il tipo di pagamento \"%1\$s\" è stato cancellato con successo!"; // %1$s is the name of the payment type
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = "Configurazione di base";
$lang['AdminSystemGeneral.basic.text_writable'] = "Scrivibile";
$lang['AdminSystemGeneral.basic.text_unwritable'] = "Non scrivibile";
$lang['AdminSystemGeneral.basic.text_day'] = "Giorno";
$lang['AdminSystemGeneral.basic.text_days'] = "Giorni";
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = "GeoIP";
$lang['AdminSystemGeneral.geoip.text_setup'] = "GeoIP può essere attivato, dando funzionalità a servizi di localizzazione GeoIP per Blesta. L'attivazione consentirà di usufruire di servizi di localizzazione.";
$lang['AdminSystemGeneral.geoip.text_database_exists'] = "%1\$s esiste."; // %1$s is a file system path to the GeoIP database file
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = "%1\$s non esiste."; // %1$s is a file system path to the GeoIP database file
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = "Abilita GeoIP";
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = "Aggiorna Settaggi";
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = "Manutenzione";
$lang['AdminSystemGeneral.license.boxtitle_license'] = "Chiave di licenza";
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = "Crea metodo di pagamento";
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = "Modalità di pagamento";
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = "Nome";
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = "Utilizza la definizione del linguaggio";
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = "Opzioni";
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = "Modifica";
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = "Cancella";
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = "L'eliminazione di questo tipo di pagamento farà sì che tutte le transazioni che utilizzano questo tipo di pagamento vengano impostate su \"altro\". Sei sicuro di voler eliminare questo tipo di pagamento?";
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = "sì";
$lang['AdminSystemGeneral.paymenttypes.text_no'] = "No";
$lang['AdminSystemGeneral.paymenttypes.no_results'] = "Non sono previste tipologie di pagamento.";
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = "Crea tipo di pagamento";
$lang['AdminSystemGeneral.addtype.field_name'] = "Nome";
$lang['AdminSystemGeneral.addtype.field_is_lang'] = "Utilizzare la definizione della lingua";
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = "Crea tipo di pagamento";
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = "Modifica tipo di pagamento";
$lang['AdminSystemGeneral.edittype.field_name'] = "Nome";
$lang['AdminSystemGeneral.edittype.field_is_lang'] = "Utilizzare la definizione della lingua";
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = "Modifica tipo di pagamento";
$lang['AdminSystemGeneral.basic.page_title'] = "Impostazioni > Sistema > Generali > Configurazione di base";
$lang['AdminSystemGeneral.geoip.page_title'] = "Impostazioni > Sistema > Generali > Impostazioni GeoIP";
$lang['AdminSystemGeneral.maintenance.page_title'] = "Impostazioni> Sistema> Generale> Manutenzione";
$lang['AdminSystemGeneral.license.page_title'] = "Impostazioni > Sistema > Generali > Chiave di licenza";
$lang['AdminSystemGeneral.paymenttypes.page_title'] = "Impostazioni > Sistema > Generali > Tipi di pagamento";
$lang['AdminSystemGeneral.addtype.page_title'] = "Impostazioni > Sistema > Generali > Crea Tipo Pagamento";
$lang['AdminSystemGeneral.edittype.page_title'] = "Impostazioni> Sistema> Generale> Modifica tipo di pagamento";
$lang['AdminSystemGeneral.basic.text_no_log'] = "Non ruotare mai il registro";
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = "Seleziona questa casella solo se hai aggiunto una definizione della lingua per questo tipo di pagamento nel file della lingua personalizzata.";
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = "Per questa funzionalità è richiesta l'estensione mbstring.";
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = "Tipo";
$lang['AdminSystemGeneral.!paymenttypes.type'] = "Se impostate su debito, le transazioni che utilizzano questo tipo di pagamento sono considerate basate sul reddito mentre il credito non è basato sul reddito.";
$lang['AdminSystemGeneral.addtype.field_type'] = "Tipo";
$lang['AdminSystemGeneral.edittype.field_type'] = "Tipo";
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = "Se selezionato, Blesta presumerà che si trovi dietro un proxy e determinerà gli indirizzi IP da un'intestazione x-forwarded-for fornita dal proxy. Dovresti controllare questa impostazione solo se l'intestazione x-forwarded-for può essere considerata attendibile.";
$lang['AdminSystemGeneral.basic.text_docroot'] = "View the Google Translation"; // %1$s is the absolute path to the document root directory
$lang['AdminSystemGeneral.!tooltip.license_key'] = "Questa è la tua chiave di licenza Blesta. Se ricevi una nuova chiave di licenza, inseriscila qui.";
$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = "Questo valore rappresenta il percorso completo del server alla directory root dei documenti del server web (ad esempio /home/user/public_html/). Questo non è necessariamente il percorso della directory in cui è installato Blesta.";
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = "Questo valore rappresenta il percorso completo del server in cui Blesta dovrebbe scrivere i file temporanei. Questa directory deve essere scrivibile dall'utente web del server e dall'utente cron.";
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = "Questo valore rappresenta il percorso completo del server in cui Blesta dovrebbe scrivere i file caricati. Questa directory deve essere scrivibile dall'utente web del server e dall'utente cron.";
$lang['AdminSystemGeneral.!tooltip.log_dir'] = "Questo valore rappresenta il percorso completo del server in cui Blesta dovrebbe scrivere i file di registro. Questa directory deve essere scrivibile dall'utente web del server e dall'utente cron.";
$lang['AdminSystemGeneral.!tooltip.log_days'] = "La politica di rotazione stabilisce il periodo di tempo durante il quale conservare la maggior parte dei dati di registro aziendali. Il file di configurazione del sistema potrebbe definire ulteriori impostazioni di conservazione dei registri.";
$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = "In modalità manutenzione, solo gli utenti dello staff possono utilizzare il sistema. Tutti gli altri utenti verranno indirizzati alla pagina di accesso e verrà mostrato il motivo della manutenzione.";
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = "Questo motivo di manutenzione verrà visualizzato agli utenti non dipendenti che accedono al sistema quando la modalità di manutenzione è abilitata.";
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = "Directory Web principale";
$lang['AdminSystemGeneral.basic.field.temp_dir'] = "Directory temporanea";
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = "Directory dei caricamenti";
$lang['AdminSystemGeneral.basic.field.log_dir'] = "Directory di registro";
$lang['AdminSystemGeneral.basic.field.log_days'] = "Politica di rotazione";
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = "La mia installazione è dietro un proxy o un bilanciatore del carico";
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = "Aggiorna impostazioni";
$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = "Abilita la modalità di manutenzione";
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = "Motivo della manutenzione";
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = "Aggiorna impostazioni";
$lang['AdminSystemGeneral.license.field.license_key'] = "Chiave di licenza";
$lang['AdminSystemGeneral.license.field.licensesubmit'] = "Aggiorna impostazioni";
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = "Registrati per un account MaxMind";
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = "Utilizza l'e-mail di benvenuto per impostare la password";
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = "Accedi al tuo account";
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = "In \"GeoIP2 / GeoLite2 > Scarica file\" scarica il file binario GeoLite2-City";
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = "Carica il file nell'installazione di Blesta nel percorso indicato di seguito";
$lang['AdminSystemGeneral.geoip.text_geolite'] = "GeoIP richiede il database binario GeoLite City, che può essere scaricato dal tuo account su <a target=\"_blank\" href=\"%1\$s\">%1\$s</a>. Il file deve essere decompresso e caricato in:"; // %1$s is the URL to maxmind
?>