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

$lang['Proxmox.!actions.boot'] = "Stivale";
$lang['Proxmox.!actions.shutdown'] = "Spegnimento";
$lang['Proxmox.!actions.mount_iso'] = "Monta ISO";
$lang['Proxmox.!actions.unmount_iso'] = "Smonta ISO";
$lang['Proxmox.!actions.reinstall'] = "Reinstallare";
$lang['Proxmox.!actions.hostname'] = "Cambia nome host";
$lang['Proxmox.!actions.password'] = "Cambiare la password";
$lang['Proxmox.!error.server_name.empty'] = "Inserisci un'etichetta del server.";
$lang['Proxmox.!error.user.empty'] = "Inserisci un utente.";
$lang['Proxmox.!error.password.empty'] = "Per favore inserire una password.";
$lang['Proxmox.!error.host.format'] = "Il nome host sembra non essere valido.";
$lang['Proxmox.!error.port.format'] = "Inserisci un numero di porta valido.";
$lang['Proxmox.!error.vmid.format'] = "Inserisci un VMID valido.";
$lang['Proxmox.!error.ips.empty'] = "Inserisci gli IP.";
$lang['Proxmox.!error.meta[type].valid'] = "Seleziona un tipo di virtualizzazione valido.";
$lang['Proxmox.!error.meta[nodes].empty'] = "Seleziona almeno un nodo.";
$lang['Proxmox.!error.meta[memory].format'] = "Si prega di impostare la RAM.";
$lang['Proxmox.!error.meta[cpu].format'] = "Imposta il conteggio vCPU.";
$lang['Proxmox.!error.meta[hdd].format'] = "Imposta la dimensione dell'HDD.";
$lang['Proxmox.!error.meta[netspeed].format'] = "Imposta NetSpeed.";
$lang['Proxmox.!error.api.internal'] = "Si è verificato un errore interno oppure il server non ha risposto alla richiesta.";
$lang['Proxmox.!error.proxmox_hostname.format'] = "Il nome host sembra non essere valido.";
$lang['Proxmox.!error.proxmox_template.valid'] = "Seleziona un modello valido.";
$lang['Proxmox.!error.create_client.failed'] = "Si è verificato un errore interno e non è stato possibile creare l'account cliente.";
$lang['Proxmox.!error.api.template.valid'] = "Il modello selezionato non è valido.";
$lang['Proxmox.!error.api.confirm.valid'] = "È necessario confermare di aver compreso l'azione di reinstallazione per poter eseguire la reinstallazione del modello.";
$lang['Proxmox.!error.proxmox_root_password.length'] = "La password di root deve contenere almeno 6 caratteri.";
$lang['Proxmox.!error.proxmox_root_password.matches'] = "Le password di root non corrispondono.";
$lang['Proxmox.please_select'] = "-- Seleziona --";
$lang['Proxmox.!bytes.value'] = "%1\$s%2\$s
"; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)
$lang['Proxmox.!percent.used'] = "%1\$s%"; // %1$s is a percentage value
$lang['Proxmox.name'] = "Proxmox";
$lang['Proxmox.module_row'] = "Server principale Proxmox";
$lang['Proxmox.module_row_plural'] = "Server";
$lang['Proxmox.module_group'] = "Gruppo Proxmox Master";
$lang['Proxmox.add_module_row'] = "Aggiungi server";
$lang['Proxmox.add_module_group'] = "Aggiungi gruppo di server";
$lang['Proxmox.manage.module_rows_title'] = "Server principali Proxmox";
$lang['Proxmox.manage.module_groups_title'] = "Gruppi di server master Proxmox";
$lang['Proxmox.manage.module_rows_heading.server_label'] = "Etichetta del server";
$lang['Proxmox.manage.module_rows_heading.host'] = "Nome host";
$lang['Proxmox.manage.module_rows_heading.options'] = "Opzioni";
$lang['Proxmox.manage.module_groups_heading.name'] = "Nome del gruppo";
$lang['Proxmox.manage.module_groups_heading.servers'] = "Conteggio server";
$lang['Proxmox.manage.module_groups_heading.options'] = "Opzioni";
$lang['Proxmox.manage.module_rows.edit'] = "Modificare";
$lang['Proxmox.manage.module_groups.edit'] = "Modificare";
$lang['Proxmox.manage.module_rows.delete'] = "Eliminare";
$lang['Proxmox.manage.module_groups.delete'] = "Eliminare";
$lang['Proxmox.manage.module_rows.confirm_delete'] = "Sei sicuro di voler eliminare questo server?";
$lang['Proxmox.manage.module_groups.confirm_delete'] = "Sei sicuro di voler eliminare questo gruppo di server?";
$lang['Proxmox.manage.module_rows_no_results'] = "Non ci sono server.";
$lang['Proxmox.manage.module_groups_no_results'] = "Non sono presenti gruppi di server.";
$lang['Proxmox.order_options.first'] = "Primo server non completo";
$lang['Proxmox.row_meta.server_name'] = "Etichetta del server";
$lang['Proxmox.row_meta.user'] = "Utente";
$lang['Proxmox.row_meta.password'] = "Password";
$lang['Proxmox.row_meta.host'] = "Hostname";
$lang['Proxmox.row_meta.port'] = "Numero di porta SSL";
$lang['Proxmox.row_meta.vmid'] = "Successivo VMID (non modificare se non necessario!)";
$lang['Proxmox.row_meta.default_vmid'] = "200";
$lang['Proxmox.row_meta.default_port'] = "8006";
$lang['Proxmox.row_meta.ips'] = "IP (uno per riga)";
$lang['Proxmox.types.kvm'] = "KVM";
$lang['Proxmox.add_row.box_title'] = "Aggiungi il server Proxmox";
$lang['Proxmox.add_row.basic_title'] = "Impostazioni di base";
$lang['Proxmox.add_row.add_btn'] = "Aggiungi server";
$lang['Proxmox.edit_row.box_title'] = "Modifica server Proxmox";
$lang['Proxmox.edit_row.basic_title'] = "Impostazioni di base";
$lang['Proxmox.edit_row.add_btn'] = "Aggiorna server";
$lang['Proxmox.package_fields.type'] = "Tipo";
$lang['Proxmox.package_fields.hdd'] = "Spazio di archiviazione (GB)";
$lang['Proxmox.package_fields.memory'] = "RAM (MB)";
$lang['Proxmox.package_fields.assigned_nodes'] = "Nodi assegnati";
$lang['Proxmox.package_fields.available_nodes'] = "Nodi disponibili";
$lang['Proxmox.service_field.proxmox_hostname'] = "Nome host";
$lang['Proxmox.service_field.proxmox_template'] = "Modello";
$lang['Proxmox.service_info.proxmox_ip'] = "Indirizzo IP primario";
$lang['Proxmox.service_info.proxmox_username'] = "Nome utente";
$lang['Proxmox.tab_actions'] = "Azioni del server";
$lang['Proxmox.tab_stats'] = "Statistiche";
$lang['Proxmox.tab_console'] = "Consolle";
$lang['Proxmox.tab_actions.heading_actions'] = "Azioni";
$lang['Proxmox.tab_actions.status_running'] = "in linea";
$lang['Proxmox.tab_actions.status_stopped'] = "disconnesso";
$lang['Proxmox.tab_actions.status_disabled'] = "Disabilitato";
$lang['Proxmox.tab_actions.server_status'] = "Stato del server";
$lang['Proxmox.tab_actions.heading_mount_iso'] = "Monta ISO";
$lang['Proxmox.tab_actions.heading_reinstall'] = "Reinstalla";
$lang['Proxmox.tab_actions.field_iso'] = "Immagine";
$lang['Proxmox.tab_actions.field_mount_submit'] = "Montare";
$lang['Proxmox.tab_actions.field_template'] = "Modello";
$lang['Proxmox.tab_actions.field_reinstall_submit'] = "Reinstalla";
$lang['Proxmox.tab_client_actions.heading_server_status'] = "Stato del server";
$lang['Proxmox.tab_client_actions.status_running'] = "In Linea";
$lang['Proxmox.tab_client_actions.status_stopped'] = "Disconnesso";
$lang['Proxmox.tab_client_actions.status_disabled'] = "Disabilitato";
$lang['Proxmox.tab_client_actions.heading_mount_iso'] = "Monta ISO";
$lang['Proxmox.tab_client_actions.heading_reinstall'] = "Reinstallare";
$lang['Proxmox.tab_client_actions.field_iso'] = "Immagine";
$lang['Proxmox.tab_client_actions.field_mount_submit'] = "Montare";
$lang['Proxmox.tab_client_actions.field_template'] = "Modello";
$lang['Proxmox.tab_client_actions.field_password'] = "Password di root";
$lang['Proxmox.tab_client_actions.field_reinstall_submit'] = "Reinstallare";
$lang['Proxmox.tab_stats.heading_stats'] = "Statistiche";
$lang['Proxmox.tab_stats.memory'] = "Memoria:";
$lang['Proxmox.tab_stats.memory_percent_available'] = "(%1\$s%%)"; // %1$s is the percentage of memory used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Proxmox.tab_stats.heading_graphs'] = "Grafici";
$lang['Proxmox.tab_client_stats.heading_stats'] = "Statistiche";
$lang['Proxmox.tab_client_stats.heading_graphs'] = "Grafici";
$lang['Proxmox.tab_console.heading_console'] = "Consolle";
$lang['Proxmox.tab_console.vnc_ip'] = "Host VNC:";
$lang['Proxmox.tab_console.vnc_port'] = "Porta VNC:";
$lang['Proxmox.tab_console.vnc_user'] = "Nome utente VNC:";
$lang['Proxmox.tab_console.vnc_password'] = "Password VNC:";
$lang['Proxmox.tab_client_console.heading_console'] = "Consolle";
$lang['Proxmox.tab_actions.field_password'] = "Password di root";
$lang['Proxmox.tab_client_actions.heading_actions'] = "Azioni del server";
$lang['Proxmox.tab_client_console.vnc_ip'] = "Host VNC";
$lang['Proxmox.tab_client_console.vnc_port'] = "Porta VNC";
$lang['Proxmox.tab_client_console.vnc_user'] = "Nome utente VNC";
$lang['Proxmox.tab_client_console.vnc_password'] = "Password VNC";
$lang['Proxmox.!error.api.unknown'] = "Si è verificato un errore sconosciuto, riprova più tardi.";
$lang['Proxmox.description'] = "Proxmox Virtual Environment è un ambiente di virtualizzazione server open source. È una distribuzione Linux basata su Debian con un kernel Ubuntu LTS modificato e consente la distribuzione e la gestione di macchine virtuali e contenitori.";
$lang['Proxmox.!error.meta[default_template].empty'] = "Inserisci un modello valido.";
$lang['Proxmox.!error.meta[storage].format'] = "Inserisci un deposito valido.";
$lang['Proxmox.!error.meta[default_template].format'] = "Inserisci un modello predefinito valido.";
$lang['Proxmox.!error.meta[template_storage].format'] = "Inserisci un modello di archiviazione valido.";
$lang['Proxmox.!error.module_row.missing'] = "Si è verificato un errore interno. La riga del modulo non è disponibile.";
$lang['Proxmox.!uptime.value'] = "%3\$s giorni, %2\$s ore, %1\$s minuti"; // %1$s is the number of uptime days, %2$s is the number of uptime hours, %3$s is the number of uptime minutes
$lang['Proxmox.types.lxc'] = "LXC";
$lang['Proxmox.unprivileged.disabled'] = "Disabilitato";
$lang['Proxmox.unprivileged.enabled'] = "Abilitato";
$lang['Proxmox.package_fields.storage'] = "Nome di archiviazione";
$lang['Proxmox.package_fields.gateway'] = "Portale di rete";
$lang['Proxmox.package_fields.template_storage'] = "Nome di archiviazione del modello CT";
$lang['Proxmox.package_fields.default_template'] = "Modello predefinito";
$lang['Proxmox.package_fields.cpulimit'] = "Limite della CPU";
$lang['Proxmox.package_fields.cpuunits'] = "Unità CPU";
$lang['Proxmox.package_fields.swap'] = "SCAMBIO (MB)";
$lang['Proxmox.package_fields.unprivileged'] = "Senza privilegi";
$lang['Proxmox.package_fields.tooltip.storage'] = "Il nome della posizione di archiviazione del disco rootfs in cui verranno posizionate le nuove VM e CT (dovrebbe esistere su tutti i nodi assegnati).";
$lang['Proxmox.package_fields.tooltip.template_storage'] = "Il nome della posizione di archiviazione dei modelli da cui recuperare un elenco di modelli.";
$lang['Proxmox.service_field.proxmox_password'] = "Parola d'ordine";
$lang['Proxmox.service_field.tooltip.password'] = "Puoi lasciare vuota la password per generarne una automaticamente.";
$lang['Proxmox.service_info.proxmox_password'] = "Parola d'ordine";
$lang['Proxmox.service_info.vm_username'] = "root/Amministratore";
$lang['Proxmox.service_info.hostname'] = "Nome host";
$lang['Proxmox.service_info.login'] = "Login";
$lang['Proxmox.service_info.type'] = "Tipo:";
$lang['Proxmox.service_info.vm_memory'] = "Memoria";
$lang['Proxmox.service_info.cpu_usage'] = "Uso della CPU";
$lang['Proxmox.service_info.netspeed'] = "MB/s";
$lang['Proxmox.service_info.uptime'] = "Tempo di attività";
$lang['Proxmox.service_info.informations'] = "Informazioni";
$lang['Proxmox.service_info.vcpu'] = "CPU virtuale";
$lang['Proxmox.service_info.memory'] = "MB di RAM";
?>