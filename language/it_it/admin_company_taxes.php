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

$lang['AdminCompanyTaxes.!success.basic_updated'] = "Le impostazioni fiscali di base sono state aggiornate con successo!";
$lang['AdminCompanyTaxes.!success.taxrule_created'] = "La regola fiscale è stata creata con successo!";
$lang['AdminCompanyTaxes.!success.taxrule_updated'] = "La regola fiscale è stata aggiornata con successo!";
$lang['AdminCompanyTaxes.countries.all'] = "

-- Tutto --
";
$lang['AdminCompanyTaxes.states.all'] = "-- Tutto --";
$lang['AdminCompanyTaxes.basic.boxtitle_basic'] = "Impostazioni fiscali di base";
$lang['AdminCompanyTaxes.basic.field_taxid'] = "Codice fiscale/IVA";
$lang['AdminCompanyTaxes.basic.field_addsubmit'] = "Aggiorna impostazioni";
$lang['AdminCompanyTaxes.rules.no_results'] = "Non esistono regole fiscali di livello %1\$s."; // %1$s is the tax level number
$lang['AdminCompanyTaxes.rules.categorylink_addrule'] = "Aggiungi Regole Tasse";
$lang['AdminCompanyTaxes.rules.boxtitle_rules'] = "Norme fiscali";
$lang['AdminCompanyTaxes.rules.heading_level1'] = "Regole di livello 1";
$lang['AdminCompanyTaxes.rules.heading_level2'] = "Regole del livello 2";
$lang['AdminCompanyTaxes.rules.text_name'] = "Nome";
$lang['AdminCompanyTaxes.rules.text_type'] = "Tipo";
$lang['AdminCompanyTaxes.rules.text_amount'] = "Importo";
$lang['AdminCompanyTaxes.rules.text_country'] = "Paese";
$lang['AdminCompanyTaxes.rules.text_state'] = "Provincia";
$lang['AdminCompanyTaxes.rules.text_options'] = "Opzioni";
$lang['AdminCompanyTaxes.rules.text_all'] = "Tutto";
$lang['AdminCompanyTaxes.rules.option_edit'] = "Modifica";
$lang['AdminCompanyTaxes.add.boxtitle_add'] = "Aggiungi regola fiscale";
$lang['AdminCompanyTaxes.edit.boxtitle_edit'] = "Modifica le tasse";
$lang['AdminCompanyTaxes.basic.page_title'] = "Impostazioni > Azienda > Tasse > Impostazioni fiscali di base";
$lang['AdminCompanyTaxes.basic.field_enable_tax'] = "Abilita imposta";
$lang['AdminCompanyTaxes.basic.field_cascade_tax'] = "Tassa a cascata";
$lang['AdminCompanyTaxes.basic.field_setup_fee_tax'] = "Tassa costi di attivazione";
$lang['AdminCompanyTaxes.basic.field_cancelation_fee_tax'] = "Commissioni di annullamento fiscale";
$lang['AdminCompanyTaxes.rules.page_title'] = "Impostazioni > Azienda > Tasse > Regole fiscali";
$lang['AdminCompanyTaxes.add.page_title'] = "Impostazioni > Azienda > Tasse > Aggiungi regola fiscale";
$lang['AdminCompanyTaxes.edit.page_title'] = "Impostazioni > Azienda > Tasse > Modifica regola fiscale";
$lang['AdminCompanyTaxes.basic.note_enable_tax'] = "Seleziona questa opzione per abilitare le tasse per questa azienda.";
$lang['AdminCompanyTaxes.basic.note_cascade_tax'] = "Se abilitato, il livello fiscale 1 verrà valutato prima sul totale della fattura, quindi il livello fiscale 2 verrà valutato su questo nuovo totale, incluso il livello fiscale 1. Ciò si traduce in un'imposta su imposta. In caso contrario, il livello fiscale 1 e il livello fiscale 2 vengono valutati solo sul totale della fattura al lordo delle imposte.";
$lang['AdminCompanyTaxes.basic.note_setup_fee_tax'] = "Se abilitato, eventuali spese di installazione verranno tassate.";
$lang['AdminCompanyTaxes.basic.note_cancelation_fee_tax'] = "Se abilitato, eventuali spese di cancellazione verranno tassate.";
$lang['AdminCompanyTaxes.!success.rule_deleted'] = "La regola fiscale è stata eliminata con successo.";
$lang['AdminCompanyTaxes.rules.option_delete'] = "Eliminare";
$lang['AdminCompanyTaxes.rules.confirm_delete'] = "Sei sicuro di voler eliminare questa regola fiscale?";
$lang['AdminCompanyTaxes.!tooltip.type'] = "Incluso calcolerà le imposte come parte dei prezzi degli articoli impostati e verrà sottratto dal prezzo dell'articolo per gli utenti esentasse.<br/>
Inclusivo (additivo) calcolerà le tasse in aggiunta ai prezzi degli articoli impostati.<br/>
Exclusive calcolerà le tasse in aggiunta ai prezzi degli articoli impostati, ma non le includerà nella visualizzazione del totale dell'ordine.";
$lang['AdminCompanyTaxes.!tooltip.level'] = "Il livello fiscale consente di impostare l'ordine fiscale se si applicano più regole fiscali.";
$lang['AdminCompanyTaxes.!tooltip.name'] = "Il nome visualizzato dell'imposta (ad es. Imposta sulle vendite).";
$lang['AdminCompanyTaxes.!tooltip.amount'] = "L'importo dell'imposta in percentuale.";
$lang['AdminCompanyTaxes.!tooltip.country'] = "Seleziona il Paese a cui si applica questa regola fiscale.";
$lang['AdminCompanyTaxes.!tooltip.state'] = "Seleziona lo stato/provincia a cui si applica questa regola fiscale.";
$lang['AdminCompanyTaxes.add.field.type'] = "Tipo di imposta";
$lang['AdminCompanyTaxes.add.field.level'] = "Livello fiscale";
$lang['AdminCompanyTaxes.add.field.level1'] = "Livello 1";
$lang['AdminCompanyTaxes.add.field.level2'] = "Livello 2";
$lang['AdminCompanyTaxes.add.field.name'] = "Nome dell'imposta";
$lang['AdminCompanyTaxes.add.field.amount'] = "Quantità";
$lang['AdminCompanyTaxes.add.field.country'] = "Paese";
$lang['AdminCompanyTaxes.add.field.state'] = "Stato/Provincia";
$lang['AdminCompanyTaxes.add.field.addsubmit'] = "Crea regola";
$lang['AdminCompanyTaxes.edit.field.type'] = "Tipo di imposta";
$lang['AdminCompanyTaxes.edit.field.level'] = "Livello fiscale";
$lang['AdminCompanyTaxes.edit.field.level1'] = "Livello 1";
$lang['AdminCompanyTaxes.edit.field.level2'] = "Livello 2";
$lang['AdminCompanyTaxes.edit.field.name'] = "Nome dell'imposta";
$lang['AdminCompanyTaxes.edit.field.amount'] = "Quantità";
$lang['AdminCompanyTaxes.edit.field.country'] = "Paese";
$lang['AdminCompanyTaxes.edit.field.state'] = "Stato/Provincia";
$lang['AdminCompanyTaxes.edit.field.editsubmit'] = "Modifica regola";
$lang['AdminCompanyTaxes.basic.heading_general'] = "impostazioni generali";
$lang['AdminCompanyTaxes.basic.heading_tax_provider'] = "%1\$s Impostazioni"; // %1$s is the name of the tax provider
?>