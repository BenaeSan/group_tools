<?php

return array(

	// general
	'group_tools:add_users' => "Ajouter ces utilisateurs",
	'group_tools:delete_selected' => "Supprimer la selection",
	'group_tools:clear_selection' => "Effecer la selection",
	'group_tools:all_members' => "Tous les membres",
	'group_tools:explain' => "Explication",

	'group_tools:default:access:group' => "Uniquement les membres du groupe",

	'group_tools:joinrequest:already' => "Supprimer la demande d'adhésion",
	'group_tools:joinrequest:already:tooltip' => "Vous avez déjà demandé à rejoindre ce groupe, cliquez ici pour annuler cette demande",
	'group_tools:join:already:tooltip' => "Vous avez été invité dans groupe. Vous pouvez le rejoindre dès maintenant.",
	
	'item:object:group_tools_group_mail' => "Mail de groupe",
	
	// menu
	'group_tools:menu:mail' => "Envoyer un mail aux membres",
	'group_tools:menu:invitations' => "Gérer les invitations",
	'admin:administer_utilities:group_bulk_delete' => "Group bulk delete",
	'admin:groups:admin_approval' => "Approbation nécessaire",

	'admin:appearance:group_tool_presets' => "Group tool presets",
	
	// plugin settings
	'group_tools:settings:default_off' => "Oui, défaut off",
	'group_tools:settings:default_on' => "Oui, défaut on",
	'group_tools:settings:required' => "Oui, requit",
	'group_tools:settings:admin_only' => "Admin seulement",

	'group_tools:settings:edit:title' => "Édition des parametres de groupe",
	'group_tools:settings:simple_access_tab' => "Selection d'accés au groupe simplifié",
	'group_tools:settings:simple_access_tab:help' => "Remplacer les options d'access au groupe lors de la creation du groupe avec un choix simplifié entre 'Ouvert' et 'Fermé'",

	'group_tools:settings:simple_create_form' => "Simple formulaire de création de groupe",
	'group_tools:settings:simple_create_form:help' => "Autoriser la maniere dont sera afficher le formulaire 'Nouveau Groupe'",

	'group_tools:settings:allow_hidden_groups:help' => "Qui peut créer un groupe caché. Ce parametrage surchargera celui du plugin group.",

	'group_tools:settings:invite:title' => "Option d'invitation de groupe",
	'group_tools:settings:management:title' => "Options générales",
	'group_tools:settings:default_access:title' => "Acces par défaut pour les groupes",

	'group_tools:settings:admin_transfer' => "Autoriser le transfert de l'appartenance d'un groupe",
	'group_tools:settings:admin_transfer:admin' => "Aux admins seuls",
	'group_tools:settings:admin_transfer:owner' => "Aux admin et au propriétaire du groupe",

	'group_tools:settings:multiple_admin' => "Autoriser plusieurs animateurs de groupe",
	'group_tools:settings:auto_suggest_groups' => "Auto suggèrent des groupes sur la page « suggérée » des groupes basés sur des informations de profil . Sera complété avec les groupes proposés prédéfinis . Mettre ce paramètre à «Non» ne montre que les groupes proposés prédéfinis ( s'il y en a ).",
	
	'group_tools:settings:notifications:title' => "Parametrage des notifications de groupe",
	'group_tools:settings:notifications:notification_toggle' => "Montrer une notification au moment de rejoindre un groupe",
	'group_tools:settings:notifications:notification_toggle:description' => "Ceci montrera un message systeme où un utilisateur peut modifier ses préférences de notification, et ajouter un lien dans le courriel de notification vers les parametrages de notifications de groupe.",
	
	'group_tools:settings:invite' => "Tous les membres du site peuvent être invités (Pas seulement les contacts)",
	'group_tools:settings:invite_friends' => "Autoriser les amis à être invités",
	'group_tools:settings:invite_email' => "Des membres extérieurs non inscrits peuvent être invités par leur adresse mail",
	'group_tools:settings:invite_email:match' => "Essaie de faire correspondre les adresses courriel vers un utilisateur existant",
	'group_tools:settings:invite_csv' => "Des membres extérieurs non inscrits peuvent être invités via un fichier CSV (non conseillé)",
	'group_tools:settings:invite_members' => "Autoriser les membres du groupe à inviter de nouveaux membres",
	'group_tools:settings:invite_members:description' => "Les propriétaires de groupes / admins peuvent activer/désactiver pour leur groupe",
	'group_tools:settings:domain_based' => "Activer les groupes basés sur des domaines e-mail",
	'group_tools:settings:domain_based:description' => "Les utilisateurs peuvent se joindre à un groupe en fonction de leur domaine e-mail. Lors de l'inscription , ils seront automatiquement inscrits à des groupes en fonction de leur domaine e-mail.",
	'group_tools:settings:join_motivation' => "Rejoindre un groupe fermé peut demander une demande motivé",
	'group_tools:settings:join_motivation:description' => "Quand un utilisateur veut rejoindre un groupe fermé, une demande de motivé est requise. Le propriétaire d'un groupe peut changer ce parametrage, s'il n'est pas défini sur 'non' ou 'requis'.",

	'group_tools:settings:mail' => "Autoriser les mails de groupes (permet aux administrateurs de groupes d'envoyer un message à tous les membres)" ,

	'group_tools:settings:mail:members' => "Autoriser les admins de groupe à permettre les courriels de groupe pour leurs membres",
	'group_tools:settings:mail:members:description' => "Ceci requiere que les courriels de groupe soit autorisé",
	
	'group_tools:settings:listing:title' => "Parametres de liste de groupe",
	'group_tools:settings:listing:description' => "Here you can configure which tabs will be visible on the group listing page, which tab will be the default landing page and what the default sorting will be per tab.",
	'group_tools:settings:listing:enabled' => "Activé",
	'group_tools:settings:listing:default_short' => "Default tab",
	'group_tools:settings:listing:default' => "Affichage de la liste des groupes par défaut",
	'group_tools:settings:listing:available' => "Liste des groupes disponibles",

	'group_tools:settings:content:title' => "Parametres de contenu de groupe",
	'group_tools:settings:default_access' => "Accès par défaut pour les publications des groupes",
	'group_tools:settings:stale_timeout' => "Les groupes deviennent obsolètes si aucun contenu n'est créé dans un certain nombre de jours",
	'group_tools:settings:stale_timeout:help' => "Si pas de nouveau cointenu est ajouté suivant le nombre de jour parametré, le groupe est montrée comme périmé. Le propriétaire du groupe recevra une notification le dernier jour. Le propriétaire ou un admin du groupe peut indiqué que le groupe est toujours actif. 0 ou vide pour ne pas activé cette fonctionnalité.",
	
	'group_tools:settings:search_index' => "Autoriser les groupes privés à être indexés par les moteurs de recherche (non conseillé)",
	'group_tools:settings:auto_notification' => "Activer les notifications du groupe pour tous les nouveaux inscrits (oui conseillé)",
	'group_tools:settings:show_membership_mode' => "Afficher le statut du groupe Ouvert/Fermé aux membres sur le profil du groupe et sur le bloc propriétaire",
	'group_tools:settings:show_hidden_group_indicator' => "Afficher un indicateur si un groupe est caché",
	'group_tools:settings:show_hidden_group_indicator:group_acl' => "Oui, si le groupe est pour les membres seulement",
	'group_tools:settings:show_hidden_group_indicator:logged_in' => "Oui, pour tout les groupes non public",
	
	'group_tools:settings:special_states' => "Groupes avec état spécial",
	'group_tools:settings:special_states:featured:description' => "Les administrateurs du site ont choisi de présenter les groupes suivants.",
	'group_tools:settings:special_states:auto_join' => "Groupes obligatoires",
	'group_tools:settings:special_states:auto_join:description' => "Les nouveaux membres rejoindront automatiquement les groupes suivants :",
	'group_tools:settings:special_states:suggested' => "Suggestion",
	'group_tools:settings:special_states:suggested:description' => " Les groupes suivants sont proposés aux (nouveaux) utilisateurs. Il est possible d'auto-suggérer des groupes, si aucun groupe n'est automatiquement détecté ou trop peu, la liste sera annexée par ces groupes.",

	'group_tools:settings:fix:title' => "Résoudre les problèmes d'accès au groupe",
	'group_tools:settings:fix:missing' => "Il y a % d'utilisateurs qui sont membres d'un groupe, mais qui n'ont pas accès au contenu partagé de ce groupe.",
	'group_tools:settings:fix:excess' => "Il y a % d'utilisateurs qui ont accès au contenu de ce groupe et qui n'en sont plus un membre.",
	'group_tools:settings:fix:without' => "Il y a % de groupes qui n'ont pas la possibilité de partager du contenu avec leurs membres.",
	'group_tools:settings:fix:all:description' => "Corrige tout les problemes ci-dessous en une fois.",
	'group_tools:settings:fix_it' => "Corriger cela",
	'group_tools:settings:fix:all' => "Corriger tout les problemes.",
	
	'group_tools:settings:member_export' => "Autoriser les administrateurs du groupe à exporter les informations des membres",
	'group_tools:settings:member_export:description' => "Cela inclut le nom, l'identifiant et l'adresse e-mail de l'utilisateur.",
	
	'group_tools:settings:admin_approve' => "Les administrateurs du site doivent autoriser les nouveaux groupes",
	'group_tools:settings:admin_approve:description' => "N'inporte quel utilisateur peuvent créer un groupe, mais un administrateur du site doit valider ce nouveau groupe",
		
	// simplified access
	'group_tools:edit:access_simplified:open' => 'Groupe Ouvert',
	'group_tools:edit:access_simplified:open:description' => "<ul><li>N'importe quel utilisateur peut rejoindre</li><li>Le contenu peut être partager entre tous</li></ul>",
	'group_tools:edit:access_simplified:closed' => 'Groupe Fermé',
	'group_tools:edit:access_simplified:closed:description' => "<ul><li>L'adhésion doit être approuvé</li><li>Le contenu ne peut être partagé qu'avec les autres membres du groupe</li></ul>",

	// group tool presets
	'group_tools:admin:group_tool_presets:description' => "Ici, vous pouvez configurer un groupe d'outils prédéfinis.
Lorsqu'un utilisateur crée un groupe il/elle doit choisir un des préréglages afin d'obtenir rapidement les outils appropriés. Une option vide est également offerte à l'utilisateur pour lui permettre de faire son/ses propres choix.",
	'group_tools:admin:group_tool_presets:header' => "Les préréglages existants",
	'group_tools:create_group:tool_presets:description' => "Vous pouvez sélectionner un outil de groupe dans la liste de pré sélection. Si vous le faites, vous obtiendrez un ensemble d'outils qui sont configurés en fonction de ce choix. Vous pouvez toujours choisir d'ajouter des outils supplémentaires à la pré sélection, ou supprimer ceux que vous ne voulez plus.",
	'group_tools:create_group:tool_presets:active_header' => "Outils pour cette pré selection",
	'group_tools:create_group:tool_presets:more_header' => "Outils supplémentaires",
	'group_tools:create_group:tool_presets:select' => "Sélectionnez un type de groupe",
	'group_tools:create_group:tool_presets:show_more' => "Plus d'outils",
	'group_tools:create_group:tool_presets:blank:title' => "Groupe vide",
	'group_tools:create_group:tool_presets:blank:description' => "Choisissez ce groupe pour sélectionner vos propres outils.",
	
	
	// group invite message
	'group_tools:groups:invite:body' => "Bonjour %s,

%s vous a invité à rejoindre le groupe '%s'.
%s

Cliquez sur le lien ci-dessous pour voir vos invitations aux groupes :
%s",

	// group add message
	'group_tools:groups:invite:add:subject' => "Vous avez été ajouté en tant que membre du groupe %s",
	'group_tools:groups:invite:add:body' => "Bonjour %s,

%s vous a ajouté comme membre du groupe %s.
%s

Pour accéder à ce groupe, cliquez sur ce lien
%s",
	// group invite by email
	'group_tools:groups:invite:email:subject' => "Vous avez été invité dans le groupe %s",
	'group_tools:groups:invite:email:body' => "Bonjour,

%s Vous a invité dans le groupe %s sur %s.
%s

Si vous n'avez pas encore de compte sur %s vous pouvez en créer un ici :
%s

Si vous avez déjà un compte ou après vous être inscrit/e, cliquez sur le lien suivant pour accepter l'invitation
%s

Vous pouvez également aller sur tous les groupes du site - > Invitations de groupe et entrez le code suivant :
%s",
	// group transfer notification
	'group_tools:notify:transfer:subject' => "L'administration du groupe %s vous a été attribuée",
	'group_tools:notify:transfer:message' => "Bonjour %s,

%s vous a attribué les droits d'administration du groupe %s. 

Cliquez le lien suivant pour accéder à votre groupe:
%s",
	
	// deline membeship request notification
	'group_tools:notify:membership:declined:subject' => "Votre demande d'adhésion pour '%s' a été refusée",
	'group_tools:notify:membership:declined:message' => "Bonjour %s,

Votre demande d'adhésion pour '%s' a été refusée.

Vous pouvez trouver le groupe ici :
%s",
	'group_tools:notify:membership:declined:message:reason' => "Bonjour %s,

Votre demande d'adhésion pour '%s' du groupe a été refusée, en raison de :

%s

Vous pouvez trouver le groupe ici :
%s",

	// group edit tabbed
	'group_tools:group:edit:profile' => "Profil",
	'group_tools:group:edit:access' => "Accès",
	'group_tools:group:edit:tools' => "Outils",
	'group_tools:group:edit:other' => "Autres options",

	// admin transfer - form
	'group_tools:admin_transfer:current' => "Garder le propriétaire actuel : % s" ,
	'group_tools:admin_transfer:myself' => "Moi",
	
	// special states form
	'group_tools:special_states:title' => "Etats spéciaux de groupe" ,
	'group_tools:special_states:description' => "Un groupe peut avoir plusieurs états spéciaux, voici un aperçu des états spéciaux et leur valeur actuelle.",
	'group_tools:special_states:featured' => "Ce groupe est-il mis en avant ?",
	'group_tools:special_states:auto_join' => "Les utilisateurs peuvent-ils se joindre automatiquement ce groupe ?",
	'group_tools:special_states:auto_join:fix' => "Pour rendre tous les membres du site membres de ce groupe, %sCliquer ici%s.",
	'group_tools:special_states:suggested' => "Ce groupe est-il suggéré aux nouveaux membres ?",
	
	// group admins
	'group_tools:multiple_admin:group_admins' => "Admins de groupe",
	'group_tools:multiple_admin:profile_actions:remove' => "Supprimer un admin ",
	'group_tools:multiple_admin:profile_actions:add' => "Ajouter un admin",

	'group_tools:multiple_admin:group_tool_option' => "Autoriser les administrateurs du groupe a créer d'autres admistrateurs de groupe",

	// cleanup options
	'group_tools:cleanup:title' => "Gestion de la barre de menu du groupe",
	'group_tools:cleanup:description' => "Nettoyage de la barre latérale du groupe. Ce sera sans effet pour les administrateurs du groupe.",
	'group_tools:cleanup:owner_block' => "Limiter le bloque propriétaire",
	'group_tools:cleanup:owner_block:explain' => "Le bloc propriétaire se trouve au sommet de la barre latérale, quelques liens supplémentaires peuvent être affichés dans ce domaine ( par exemple : liens RSS ).",
	'group_tools:cleanup:actions' => "Voulez-vous autoriser les utilisateurs à joindre ce groupe",
	'group_tools:cleanup:actions:explain' => "En fonction de votre environnement de groupe , les utilisateurs peuvent directement rejoindre le groupe ou demander l'adhésion.",
	'group_tools:cleanup:menu' => "Cacher les éléments du menu",
	'group_tools:cleanup:menu:explain' => "Masquer les liens de menu aux différents outils de groupe. Les utilisateurs ne seront en mesure d'obtenir l'accès aux outils de groupe qu'en utilisant les widgets de groupe.",
	'group_tools:cleanup:members' => "Cacher les membres du groupe",
	'group_tools:cleanup:members:explain' => "Sur la page de profil de groupe une liste des membres du groupe se trouve à la section en surbrillance . Vous pouvez choisir de masquer cette liste.",
	'group_tools:cleanup:search' => "Cacher la recherche des groupes",
	'group_tools:cleanup:search:explain' => "Sur la page de profil de groupe une boîte de recherche est disponible. Vous pouvez choisir de la cacher.",
	'group_tools:cleanup:featured' => "Montrer les caractéristiques des groupes dans le menu",
	'group_tools:cleanup:featured:explain' => "Vous pouvez choisir d'afficher une liste des groupes en vedette dans la section en surbrillance sur la page de profil de groupe.",
	'group_tools:cleanup:featured_sorting' => "Comment trier les caractéristiques des groupes",
	'group_tools:cleanup:featured_sorting:time_created' => "Plus récentes",
	'group_tools:cleanup:my_status' => "Cacher mon statut dans la barre latérale",
	'group_tools:cleanup:my_status:explain' => " Dans la barre latérale sur la page de profil de groupe il y a un élément qui vous montre votre statut de membre en cours et d'autres informations d'état. Vous pouvez choisir de les cacher.",

	// group default access
	'group_tools:default_access:title' => "Accès par défaut aux éléments du groupe",
	'group_tools:default_access:description' => "Vous pouvez contrôler le niveau d'accès par défaut des nouveaux contenus du groupe.",

	// group admin approve
	'group_tools:group:admin_approve:notice' => "Les nouveaux groupes doivent être approuvé par un administrateur du site. Vous pouvez créer ou modifier le groupe, mais il ne sera pas visible par les autres tant qu'il 'aurat pas été validé.",
	'group_tools:group:admin_approve:decline:confirm' => "Etes vous sur de vouloir refuser ce groupe ? Ceci supprimera le groupe.",
	'group_tools:group:admin_approve:admin:description' => "Voici une liste de groupe qui doivent être approuvé par un administrateur du site avant d'être utilisé.

Quand vous approuvez un groupe, son propriétaire recevra une notification qu'il est maintenant utilisable.
Si vous refusez un groupe, le propriétaire recevra une notification que son groupe à été refuser et qu'il sera supprimer.",
	
	'group_tools:group:admin_approve:approve:success' => "Le groupe peut maintenant être utilisé sur le site",
	'group_tools:group:admin_approve:decline:success' => "Le groupe à était supprimé",

	'group_tools:group:admin_approve:approve:subject' => "Votre groupe à été approuvé '%s'",
	'group_tools:group:admin_approve:approve:summary' => "Votre groupe à été approuvé '%s'",
	'group_tools:group:admin_approve:approve:message' => "Bonjour %s,

Votre groupe à été approuvé '%s par un administrateur du site. Vous pouvez maintenant l'utiliser.

Pour visiter le groupe, cliquez ici:
%s",
	'group_tools:group:admin_approve:admin:subject' => "Un nouveau groupe '%s' qui require une approbation à était créé",
	'group_tools:group:admin_approve:admin:summary' => "Un nouveau groupe '%s' qui require une approbation à était créé",
	'group_tools:group:admin_approve:admin:message' => "Bonjour %s,

%s à créé un groupe '%s' qui néccesite une approbation par un administrateur du site.

Pour voir le groupe, cliquez ici:
%s

Pour voir tout les groupe qui néccesite une action de votre part, cliquez ici:
%s",
	
	'group_tools:group:admin_approve:decline:subject' => "Votre groupe '%s' à été refusé",
	'group_tools:group:admin_approve:decline:summary' => "Votre groupe '%s' à été refusé",
	'group_tools:group:admin_approve:decline:message' => "Bonjour %s,

votre groupe '%s' à été refusé et supprimer par un administrateur du site.",
	
	// group notification
	'group_tools:notifications:title' => "Notifications de groupe",
	'group_tools:notifications:description' => "Ce groupe a %s membres dont %s ayant activé les notifications. Ci-dessous vous pouvez changer cela pour tous les utilisateurs du groupe.",
	'group_tools:notifications:disclaimer' => "Cette action peut prendre un certain temps pour des groupes ayant un nombre important de membres.",
	'group_tools:notifications:enable' => "Activer les notifications pour tout le monde",
	'group_tools:notifications:disable' => "Désactiver les notifications pour tout le monde",

	'group_tools:notifications:toggle:email:enabled' => "Actuellement vous recevez les notifications de l'activité du groupe. Si ne voulez plus les recevoirs, changez vos parametres ici %s",
	'group_tools:notifications:toggle:email:disabled' => "Actuellement vous ne recevez pas les notifications de l'activité du groupe. Si voulez les recevoirs, changez vos parametres ici %s",

	'group_tools:notifications:toggle:site:enabled' => "Actuellement vous recevez les notifications de l'activité du groupe. Si ne voulez plus les recevoirs, changez vos parametres ici %s",
	'group_tools:notifications:toggle:site:enabled:link' => "désactivé les notifications",
	'group_tools:notifications:toggle:site:disabled' => "Actuellement vous ne recevez pas les notifications de l'activité du groupe. Si voulez les recevoirs, changez vos parametres ici %s",
	'group_tools:notifications:toggle:site:disabled:link' => "activer les notifications",

	// group mail
	'group_tools:tools:mail_members' => "Autoriser les membres du groupe à s'envoyer des courriels",
	'mail_members:group_tool_option:description' => "Ceci autorisera les membres standard à envoyer des mails aux autres membres du groupe. Par défaut c'est une fonctionnalité limité aux administrateurs du groupe.",
	
	'group_tools:mail:message:from' => "Du groupe",

	'group_tools:mail:title' => "Envoyer un message aux membres du groupe",
	'group_tools:mail:form:recipients' => "Nombre de destinataires",
	'group_tools:mail:form:members:selection' => "Sélectionner les membres individuellement",

	'group_tools:mail:form:title' => "Sujet",
	'group_tools:mail:form:description' => "Message",

	'group_tools:mail:form:js:members' => "Merci de sélectionner au moins un destinataire",
	'group_tools:mail:form:js:description' => "Merci de saisir un message",

	// group invite
	'group_tools:groups:invite:error' => "No invitation options are available",
	'group_tools:groups:invite:title' => "Inviter des membres dans ce groupe",
	'group_tools:groups:invite' => "Inviter des membres",
	'group_tools:groups:invite:user_already_member' => "L'utilisateur est déjà membre du groupe",

	'group_tools:group:invite:friends:select_all' => "Sélectionner tous les contacts",
	'group_tools:group:invite:friends:deselect_all' => "Déselectionner tous les contacts",

	'group_tools:group:invite:users' => "Trouver des membres",
	'group_tools:group:invite:users:description' => "Saisir le nom d'un membre et sélectionner-le dans la liste",
	'group_tools:group:invite:users:all' => "Inviter tous les membres dans ce groupe",

	'group_tools:group:invite:email' => "Via l'adresse email",
	'group_tools:group:invite:email:description' => "Saisir une adresse email valide et la sélectionner dans la liste",

	'group_tools:group:invite:csv' => "En utilisant un ficher CSV",
	'group_tools:group:invite:csv:description' => "Vous pouvez charger un fichier CSV contenant les membres à inviter.<br />Le format doit être en première ligne: displayname;e-mail address. Les autres lignes contiennent donc : nom prénom; adresse e-mail",

	'group_tools:group:invite:text' => "Message personnel (optionnel)",
	'group_tools:group:invite:add:confirm' => "Etes-vous sûr de vouloir directement ajouter ces membres ?",

	'group_tools:group:invite:resend' => "Envoyer de nouveau l'invitation aux utilisateurs ayant déjà été invités",

	'group_tools:groups:invitation:code:title' => "Invitation de groupe via adresse email",
	'group_tools:groups:invitation:code:description' => "Si vous avez reçu une invitation pour joindre un groupe par email, vous pouvez entrer le code d'invitation ici. Si vous sélectionnez le lien contenu dans l'email d'invitation, le code sera automatiquement saisi.",

	// group membership requests
	'group_tools:groups:membershipreq:requests' => "Utilisateurs voulant rejoindre le groupe",
	'group_tools:groups:membershipreq:invitations' => "Invitations envoyées",
	'group_tools:groups:membershipreq:invitations:none' => "Aucune invitation envoyée",
	'group_tools:groups:membershipreq:email_invitations' => "Invitations en attente",
	'group_tools:groups:membershipreq:email_invitations:none' => "Pas d'invitations en attente",
	'group_tools:groups:membershipreq:invitations:revoke:confirm' => "Voulez vous vraiment annuler cette invitation ?",
	'group_tools:groups:membershipreq:kill_request:prompt' => " Optionnellement vous pouvez dire à l'utilisateur pourquoi vous avez refusé la demande.",

	// group invitations
	'group_tools:group:invitations:request' => "Invitations en attente de validation",
	'group_tools:group:invitations:request:revoke:confirm' => "Etes-vous sûr/e de vouloir annuler votre demande d'adhésion ?",
	'group_tools:group:invitations:request:non_found' => "Il n'y a pas d'invitations en attente.",

	// group listing
	'group_tools:groups:sorting:open' => "Groupes ouverts",
	'group_tools:groups:sorting:closed' => "Groupes fermés",
	'group_tools:groups:sorting:ordered' => "Ordered",
	'group_tools:groups:sorting:suggested' => "Groupes suggerés",
		
	// allow group members to invite
	'group_tools:invite_members:title' => "Les membres du groupe peuvent inviter",
	'group_tools:invite_members:description' => "Permettre aux membres de ce groupe d'inviter de nouveaux membres",
	'group_tools:invite_members:disclaimer' => "Please note that for closed groups allowing your users to invite new members means they don't require approval by the group owner/admin(s).",

	// group tool option descriptions
	'activity:group_tool_option:description' => "Afficher un flux d'activité sur le contenu du groupe lié.",
	'forum:group_tool_option:description' => "Permettre aux membres du groupe d'entamer une discussion dans un format simple forum.",
	
	// actions
	// group edit
	'group_tools:action:group:edit:error:default_access' => "Le niveau d'accès par défaut choisi était plus public que l'accès au contenu du groupe, donc par défaut l'accès a été réduit aux membres du groupe.",
	
	// group admins - action
	'group_tools:action:toggle_admin:error:group' => "L'entrée donnée ne conduit pas à un groupe ou vous ne pouvez pas modifier ce groupe ou l'utilisateur n'en fait pas partie",
	'group_tools:action:toggle_admin:error:remove' => "Erreur inconnue lors de la suppression du membre comme administrateur de groupe",
	'group_tools:action:toggle_admin:error:add' => "Erreur inconnue lors de la nomination du membre comme administrateur",
	'group_tools:action:toggle_admin:success:remove' => "Le membre n'est plus administrateur de ce groupe",
	'group_tools:action:toggle_admin:success:add' => "Le membre est maintenant administrateur de ce groupe",

	// group mail - action
	'group_tools:action:mail:success' => "Message envoyé avec succès",

	// group - invite - action
	'group_tools:action:invite:error:invite'=> "Aucun utilisateur n'a été invité (%s ont déjà été invité(s) et (%s) sont déjà membres)",
	'group_tools:action:invite:error:add'=> "Aucun utilisateur n'a été ajouté (%s ont déjà été invité(s) et (%s) sont déjà membres)",
	'group_tools:action:invite:success:invite'=> "Vous avez invité %s utilisateurs (%s ont déjà été invité(s) et (%s) sont déjà membres)",
	'group_tools:action:invite:success:add'=> "Vous avez ajouté %s utilisateurs (%s ont déjà été invité(s) et (%s) sont déjà membres)",

	// group - invite - accept e-mail
	'group_tools:action:groups:email_invitation:error:code' => "Ce code n'est plus valide",
	'group_tools:action:groups:email_invitation:error:join' => "Erreur lors de la tentative de rejoindre le groupe %s, peut-être êtes vous déjà membre",
	'group_tools:action:groups:email_invitation:success' => "Vous avez rejoint le groupe avec succès",

	// group - invite - decline e-mail
	'group_tools:action:groups:decline_email_invitation:error:delete' => "Une erreur est survenue lors de la suppression de l'invitation",

	// suggested groups
	'group_tools:suggested_groups:info' => "Les groupes suivants pourraient être intéressant pour vous. Cliquez sur les boutons pour se joindre à eux immédiatement ou cliquez sur le titre pour afficher plus d'informations sur le groupe à rejoindre.",
	'group_tools:suggested_groups:none' => "Nous ne pouvons vous suggerer des groupes. Cela arrive quand nous manquons d'informations sur vous ou que vous êtes déjà membres des groupes que vous pourriez rejoindre. Utilisez le champs recherche pour trouver d'autre groupes.",
		
	// group toggle auto join
	'group_tools:action:toggle_special_state:error:auto_join' => "Une erreur est survenu durant la sauvegarde du parametrage des inscriptions automatique",
	'group_tools:action:toggle_special_state:error:suggested' => "Une erreur est survenue lors de l'enregistrement des nouveaux réglages suggérés",
	'group_tools:action:toggle_special_state:error:state' => "Etat invalide",
	'group_tools:action:toggle_special_state:auto_join' => "Le parametrage des nouvelles inscriptions automatique ont été enregistré avec succès",
	'group_tools:action:toggle_special_state:suggested' => "Les nouveaux réglages suggérés ont été sauvegardés avec succès",
	
	// group fix auto_join
	'group_tools:action:fix_auto_join:success' => "Appartenance au groupe: %s nouveau membres, %s déjà membre/s,  %s échec/s",

	// group cleanup
	'group_tools:actions:cleanup:success' => "Les paramètres ont été appliqués",

	// group notifications
	'group_tools:action:notifications:error:toggle' => "Option incorrecte",
	'group_tools:action:notifications:success:disable' => "Les notifications ont été désactivées pour tous vos membres",
	'group_tools:action:notifications:success:enable' => "Les notifications ont été activées pour tous vos membres",

	// fix group problems
	'group_tools:action:fix_acl:error:input' => "Option invalide que vous ne pouvez corriger: %s",
	'group_tools:action:fix_acl:error:missing:nothing' => "Pas d'utilisateur manquant dans le groupe ACLs",
	'group_tools:action:fix_acl:error:excess:nothing' => "No excess users found in the groups ACLs", // @FIXME searcdh meanings
	'group_tools:action:fix_acl:error:without:nothing' => "Pas de groupe trouvé avec un ACL",

	'group_tools:action:fix_acl:success:missing' => "Successfully added %d users to group ACLs", // @FIXME searcdh meanings
	'group_tools:action:fix_acl:success:excess' => "Successfully removed %d users from group ACLs", // @FIXME searcdh meanings
	'group_tools:action:fix_acl:success:without' => "Successfully created %d group ACLs", // @FIXME searcdh meanings

	// Widgets
	// Group River Widget
	'widgets:group_river_widget:title' => "Activité d'un groupe",
    'widgets:group_river_widget:description' => "Affiche les dernières activités d'un groupe choisi",

    'widgets:group_river_widget:edit:num_display' => "Nb à afficher",
	'widgets:group_river_widget:edit:group' => "Choisissez un groupe",
	'widgets:group_river_widget:edit:no_groups' => "Vous devez être membre d'au moins un groupe pour utiliser ce bloc d'info",

	'widgets:group_river_widget:view:not_configured' => "Le bloc d'info n'est pas encore configuré",

	'widgets:group_river_widget:view:noactivity' => "Aucune activité pour le moment.",

	// Group Members
	'widgets:group_members:title' => "Membres du groupe",
  	'widgets:group_members:description' => "Affiche les membres de ce groupe",

	'widgets:group_members:view:no_members' => "Aucun membre pour le moment",

  	// Group Invitations
	'widgets:group_invitations:title' => "Invitation de groupes", 
  	'widgets:group_invitations:description' => "Affiche vos invitations à des groupes",

	// index_groups
	'widgets:index_groups:description' => "Affiche les derniers groupes créés",
	'widgets:index_groups:show_members' => "Affiche le nombre de membre",
	'widgets:index_groups:featured' => "Afficher les groupes A la Une",
	'widgets:index_groups:sorting' => "Comment faire pour trier les groupes",

	'widgets:index_groups:filter:field' => "Filtrer les groupe en utilisant les champs de groupe",
	'widgets:index_groups:filter:value' => "avec la valeur",
	'widgets:index_groups:filter:no_filter' => "Pas de filtre",

	// Featured Groups
	'widgets:featured_groups:description' => "Affiche une liste aléatoire de groupes à la une",
  	'widgets:featured_groups:edit:show_random_group' => "Affiche une liste aléatoire de groupes",

	// group_news widget
	"widgets:group_news:title" => "Blogs de groupes", 
	"widgets:group_news:description" => "Affiche les 5 derniers blogs de divers groupes", 
	"widgets:group_news:no_projects" => "Aucun groupe configuré", 
	"widgets:group_news:no_news" => "Pas de blog pour ce groupe", 
	"widgets:group_news:settings:project" => "Groupe",
	"widgets:group_news:settings:no_project" => "Choisir un groupe",
	"widgets:group_news:settings:blog_count" => "Nb de blog maximum",
	"widgets:group_news:settings:group_icon_size" => "Taille de l'icône de groupe",
	
	'groups:search:title' => "Recherche pour des groupes correspondant à '%s'",
	
	// welcome message
	'group_tools:welcome_message:title' => "Message de bienvenue dans le groupe",
	'group_tools:welcome_message:description' => "Vous pouvez configurer un message de bienvenue pour les nouveaux utilisateurs qui se joignent à ce groupe. Si vous ne voulez pas envoyer un message de bienvenue laisser ce champ vide.",
	'group_tools:welcome_message:explain' => "Afin de personnaliser le message vous pouvez utiliser les variables suivantes :
[name]: le nom du nouvel utilisateur (eg. %s)
[group_name]: le nom du groupe (eg. %s)
[group_url]: l'url du groupe (eg. %s)",
	
	'group_tools:action:welcome_message:success' => "Le message de bienvenue a été sauvegardé",
	
	'group_tools:welcome_message:subject' => "Bienvenue à %s",
	
	// email invitations
	'group_tools:action:revoke_email_invitation:error' => "Une erreur est survenue lors de la révoquation de l'invitation, s'il vous plaît essayez à nouveau",
	'group_tools:action:revoke_email_invitation:success' => "L'invitation a été revoquée",
	
	// domain based groups
	'group_tools:join:domain_based:tooltip' => "En raison d'un domaine e-mail correspondant, vous pouvez rejoindre ce groupe.",
	
	'group_tools:domain_based:title' => "Configurer les domaines de messagerie",
	'group_tools:domain_based:description' => "Lorsque vous configurez un (ou plusieurs) des domaines de messagerie, les utilisateurs avec ce domaine e-mail pourront automatiquement rejoindre votre groupe lors de l'inscription. Aussi, si vous avez un utilisateur de groupe fermé avec un domaine e-mail correspondant il pourra s'y joindre sans demander d'adhésion. Vous pouvez configurer des domaines multipe en utilisant une virgule. Ne pas inclure le signe @",
	
	'group_tools:action:domain_based:success' => "Les nouveaux domaines de messagerie ont été sauvés",
	
	// related groups
	'groups_tools:related_groups:tool_option' => "Afficher les groupes liés",
	
	'groups_tools:related_groups:widget:title' => "Groupes liés",
	'groups_tools:related_groups:widget:description' => "Afficher la liste des groupes ajoutés comme étant liés à ce groupe.",
	
	'groups_tools:related_groups:none' => "Aucun groupe associé trouvé.",
	'group_tools:related_groups:title' => "Groupes liés",
	
	'group_tools:related_groups:form:placeholder' => "Rechercher un nouveau groupe lié",
	'group_tools:related_groups:form:description' => "Vous pouvez rechercher un nouveau groupe lié, sélectionnez-le dans la liste et cliquez sur Ajouter.",
	
	'group_tools:action:related_groups:error:same' => "Vous ne pouvez pas lié ce groupe à lui-même",
	'group_tools:action:related_groups:error:already' => "Le groupe sélectionné est déjà lié",
	'group_tools:action:related_groups:error:add' => "Une erreur inconnue est survenue lors de l'ajout de la relation, s'il vous plaît essayer à nouveau",
	'group_tools:action:related_groups:success' => "Le groupe est maintenant lié",
	
	'group_tools:related_groups:notify:owner:subject' => "Un nouveau groupe lié a été ajouté",
	'group_tools:related_groups:notify:owner:message' => "Bonjour %s,
	
%s ajoutez votre groupe %s comme un groupe lié à %s.",
	
	'group_tools:related_groups:entity:remove' => "Supprimer le groupe lié",
	
	'group_tools:action:remove_related_groups:error:not_related' => "Le groupe n'est pas lié",
	'group_tools:action:remove_related_groups:error:remove' => "Une erreur inconnue est survenue lors du retrait de la relation. S'il vous plaît essayez à nouveau",
	'group_tools:action:remove_related_groups:success' => "Le groupe n'est plus lié",
	
	'group_tools:action:group_tool:presets:saved' => "Les nouveaux préréglages des outils du groupe ont été sauvegardés",
	
	'group_tools:forms:members_search:members_search:placeholder' => "Entrez le nom ou l'identifiant de l'utilisateur pour rechercher",
	
	// group member export
	'group_tools:member_export:title_button' => "Exporter les membres",
	
	// csv exporter
	'group_tools:csv_exporter:group_admin:name' => "Noms des admins du groupe",
	'group_tools:csv_exporter:group_admin:email' => "Adresse couriels des admins du groupe",
	'group_tools:csv_exporter:group_admin:url' => "URL des admins du groupe",
	
	'group_tools:csv_exporter:user:group_admin:name' => "Nom des groupes administrés",
	'group_tools:csv_exporter:user:group_admin:url' => "URL des groupes administrés",
	
	// group bulk delete
	'group_tools:action:bulk_delete:success' => "Les groupes sélectionnés ont été supprimés",
	'group_tools:action:bulk_delete:error' => "Une erreur est survenue lors de la suppression des groupes, s'il vous plaît essayez à nouveau",
	
	// group toggle notifications
	'group_tools:action:toggle_notifications:disabled' => "Les notifications du groupe '%s' ont étaient désactivées",
	'group_tools:action:toggle_notifications:enabled' => "Les notifications du groupe '%s' ont étaient activées",

// group join motivation
	'group_tools:join_motivation:edit:option:label' => "Rejoindre ce groupe fermé nécessite un texte de motivation",
	'group_tools:join_motivation:edit:option:description' => "Les groupes fermés peuvent demander aux nouveaux utilisateurs de fournir un texte de motivation pour rejoindre le groupe.",
	
	'group_tools:join_motivation:title' => "Pourquoi voulez-vous rejoindre '%s'?",
	'group_tools:join_motivation:description' => "Le propriétaire de '%s' qu'une demande motivé été nécessaire pour rejoindre ce groupe. Veuillez fournir un texte montrant votre motivation ci-dessous pour juger votre demande d'adhésion.",
	'group_tools:join_motivation:label' => "Mon texte de motivation pour rejoindre ce groupe",
	
	'group_tools:join_motivation:notification:subject' => "%s à demandé pour rejoindre %s",
	'group_tools:join_motivation:notification:summary' => "%s à demandé pour rejoindre %s",
	'group_tools:join_motivation:notification:body' => "Bonjour %s,

%s à demandé à rejoindre le groupe '%s'.

Leurs motivations pour rejoindre est: 
%s

Cliquez ci-dessous pour voir leurs profiles:
%s

Cliquez ci-dessous pour voir les demandes d'adhésions des groupes:
%s",
	'group_tools:join_motivation:toggle' => "Montrer les demandes",
	'group_tools:join_motivation:listing' => "Raison pour rejoindre:",
	
	// stale groups
	'group_tools:stale_info:description' => "Ce groupe a été inactif depuis un moment. Le contenu n'est peut être plus pertinant.",
	'group_tools:stale_info:link' => "Ce groupe est toujours pertinant",
	
	'group_tools:csv_exporter:stale_info:is_stale' => "Groupe déprécié",
	'group_tools:csv_exporter:stale_info:timestamp' => "Durée pertinance",
	'group_tools:csv_exporter:stale_info:timestamp:readable' => "Durée pertinance (lisible)",
	
	'groups_tools:state_info:notification:subject' => "Votre groupe '%s' est inactif depuis un moment",
	'groups_tools:state_info:notification:summary' => "Votre groupe '%s' est inactif depuis un moment",
	'groups_tools:state_info:notification:message' => "Bonjour %s,

Votre groupe '%s' est inactif depuis un moment.

Veuillez vérifier votre groupe avec le lien ci-dessous:
%s",
);
