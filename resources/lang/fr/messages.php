<?php

return [
    'activate_account_notification_body' => 'Vous recevez cet email car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.',
    'activate_account_notification_subject' => 'Activez votre compte',
    'asset_container_blueprint_instructions' => 'Les Blueprints définissent les champs personnalisés additionnels disponibles lors de la modification des ressources.',
    'asset_container_create_folder_instructions' => 'Si activé, donne la possibilité aux utilisateurs de créer des dossiers dans ce conteneur.',
    'asset_container_disk_instructions' => 'Les disques du système de fichiers vous permettent de préciser où seront stockés les fichiers, soit localement, soit sur un emplacement externe comme Amazon S3. Ils peuvent être configurés dans `config/filesystems.php`',
    'asset_container_handle_instructions' => 'Comment vous allez faire référence à ce conteneur sur le frontal. Ne peut pas être facilement changé.',
    'asset_container_move_instructions' => 'Si activé, donne la possibilité aux utilisateurs de déplacer les fichiers au sein de ce conteneur.',
    'asset_container_quick_download_instructions' => 'Si activé, ajoute un bouton de téléchargement rapide dans le Gestionnaire de Ressources.',
    'asset_container_rename_instructions' => 'Si activé, donne la possibilité aux utilisateurs de renommer les fichiers dans ce conteneur.',
    'asset_container_title_instructions' => 'Habituellement un nom au pluriel, comme "Images" ou "Documents".',
    'asset_folders_directory_instructions' => 'Nous vous recommandons d’éviter les espaces et les caractères spéciaux pour garder vos URL propres.',
    'blueprints_button_help_text' => 'Vous pourrez personnaliser votre Blueprint une fois qu’il aura été créé.',
    'blueprints_title_instructions' => 'Habituellement un nom singulier, comme "Article" ou "Produit".',
    'cache_utility_application_cache_description' => 'Le cache unifié de Laravel utilisé par Statamic, les extensions tierces et les packages Composer.',
    'cache_utility_description' => 'Gérez et affichez des informations importantes sur les différentes couches de mise en cache de Statamic.',
    'cache_utility_image_cache_description' => 'Le cache d’images stocke des copies de toutes les images transformées et redimensionnées.',
    'cache_utility_stache_description' => 'Le Stache est le magasin de contenu de Statamic qui fonctionne de manière similaire à une base de données. Il est généré automatiquement à partir de vos fichiers de contenu.',
    'cache_utility_static_cache_description' => 'Les pages statiques contournent complètement Statamic et sont rendues directement à partir de votre serveur pour des performances optimales.',
    'collection_configure_handle_instructions' => 'Comment vous allez faire référence à cette collection sur le frontal. Ne peut pas être facilement changé.',
    'collection_configure_intro' => 'Une collection est un groupe d’entrées liées qui partagent comportement, attributs et paramètres.',
    'collection_configure_layout_instructions' => 'Définissez la disposition par défaut de cette collection. Les entrées peuvent outrepasser ce paramètre avec un champ `template` nommé `layout`. La modification de ce paramètre est inhabituelle.',
    'collection_configure_template_instructions' => 'Définissez le modèle par défaut de cette collection. Les entrées peuvent outrepasser ce paramètre avec un champ `template`.',
    'collection_configure_title_instructions' => 'Nous recommandons un nom au pluriel, comme "Articles" ou "Produits".',
    'collection_next_steps_configure_description' => 'Configurer les URLs et les routes, définissez les Blueprints, les comportements des dates, l’ordonnancement et d’autres options.',
    'collection_next_steps_create_entry_description' => 'Créez votre première entrée ou écrasez une poignée d’entrées génériques, à vous de jouer.',
    'collection_next_steps_documentation_description' => 'Apprenez-en plus au sujet des collections, comment elles fonctionnent et comment les configurer.',
    'collection_next_steps_scaffold_description' => 'Générez rapidement des Blueprints vides et des vues pour le frontal basées sur le nom de votre collection.',
    'collection_scaffold_instructions' => 'Choisissez les ressources vides à générer. Les fichiers existants ne seront pas écrasés.',
    'collections_blueprint_instructions' => 'Les entrées de cette collection peuvent utiliser n’importe lequel de ces Blueprints.',
    'collections_default_publish_state_instructions' => 'Si les nouvelles entrées créées dans le Panneau de configuration doivent être publiées par défaut.',
    'collections_future_date_behavior_instructions' => 'Comment les entrées datées dans le futur doivent se comporter.',
    'collections_orderable_instructions' => 'Activez le réordonnancement manuel par glisser-déposer.',
    'collections_past_date_behavior_instructions' => 'Comment les entrées datées ayant expiré doivent se comporter.',
    'collections_route_instructions' => 'La route contrôle le modèle d’URL des entrées.',
    'collections_sort_direction_instructions' => 'Le sens de tri par défaut.',
    'collections_structure_instructions' => 'Les structures activent les hiérarchies de pages qui contrôlent l’ordre et les URL.',
    'collections_taxonomies_instructions' => 'Reliez les entrées de cette collection à des taxonomies. Des champs seront automatiquement ajoutés pour publier des formulaires.',
    'email_utility_configuration_description' => 'Les paramètres de messagerie sont configurés dans <code>:path</code>',
    'email_utility_description' => 'Vérifiez la configuration du courrier électronique et envoyez un test.',
    'field_conditions_instructions' => 'Quand afficher ou masquer ce champ.',
    'field_desynced_from_origin' => 'Désynchronisé de l’origine. Cliquez pour synchroniser et revenir à la valeur d’origine.',
    'field_synced_with_origin' => 'Synchronisé avec l’origine. Cliquez ou modifiez le champ à désynchroniser.',
    'field_validation_instructions' => 'A accès à toutes les règles de validation de Laravel.',
    'fields_blueprints_description' => 'Les Blueprints vous permettent de mélanger et d’associer des champs et des jeux de champs pour créer les structures de contenu des collections et d’autres types de données.',
    'fields_display_instructions' => 'L’étiquette du champ affichée dans le Panneau de configuration.',
    'fields_fieldsets_description' => 'Les jeux de champs sont des groupements simples, flexibles et totalement facultatifs de champs qui aident à organiser les champs réutilisables et préconfigurés.',
    'fields_handle_instructions' => 'La variable de modèle du champ.',
    'fields_instructions_instructions' => 'Texte affiché sous l’étiquette du champ. Markdown est pris en charge.',
    'fields_listable_instructions' => 'Contrôle la visibilité de ce champ dans les colonnes.',
    'fieldset_import_fieldset_instructions' => 'Le jeu de champs à importer.',
    'fieldset_import_prefix_instructions' => 'Le préfixe à appliquer à chaque champ lors de leur importation. Exemple : hero_',
    'fieldsets_button_help_text' => 'Vous pourrez personnaliser votre jeu de champs une fois qu’il aura été créé.',
    'fieldsets_title_instructions' => 'Décrit généralement quels champs seront inclus, comme "Bloc Image"',
    'focal_point_instructions' => 'La définition d’un point focal permet un recadrage dynamique des photos avec un sujet qui reste dans le cadre.',
    'focal_point_previews_are_examples' => 'Les aperçus de recadrage n’ont qu’une valeur d’exemple',
    'forgot_password_enter_email' => 'Entrez votre adresse e-mail afin que nous puissions envoyer un lien de réinitialisation du mot de passe.',
    'form_configure_blueprint_instructions' => 'Choisissez un Blueprint existant ou créez-en un nouveau.',
    'form_configure_email_from_instructions' => 'Laissez vide pour revenir à la valeur par défaut du site.',
    'form_configure_email_instructions' => 'Configurez les emails à envoyer quand de nouvelles soumissions de formulaires sont reçues.',
    'form_configure_email_reply_to_instructions' => 'Laissez le champ vide pour un retour à l’expéditeur.',
    'form_configure_email_subject_instructions' => 'Objet de l’e-mail.',
    'form_configure_email_template_instructions' => 'Laissez le champ vide pour utiliser un modèle de courrier électronique automagique.',
    'form_configure_email_to_instructions' => 'Adresse email du destinataire.',
    'form_configure_handle_instructions' => 'Comment vous allez faire référence à ce formulaire sur le frontal. Ne peut pas être facilement changé.',
    'form_configure_honeypot_instructions' => 'Le nom du champ à utiliser pour le pot de miel. Les pots de miel sont des champs spéciaux utilisés pour réduire le nombre de spams.',
    'form_configure_store_instructions' => 'Désactivez cette option si vous souhaitez uniquement recevoir des notifications par email.',
    'form_configure_title_instructions' => 'Habituellement un appel à l’action, comme "Contactez-nous".',
    'form_wizard_blueprint_instructions' => 'Choisissez un Blueprint existant ou créez-en un nouveau.',
    'form_wizard_email_notifications_instructions' => 'Être informé des soumissions à cette adresse email. Vous pourrez personnaliser davantage les paramètres de notification ultérieurement.',
    'form_wizard_fields_intro' => 'Définissez les champs pour votre formulaire.',
    'form_wizard_intro' => 'Un formulaire est un groupe de champs utilisé pour collecter les entrées de l’utilisateur.',
    'form_wizard_store_submissions_instructions' => 'Si les formulaires doivent être stockés. Désactivez cette option si vous souhaitez uniquement recevoir des notifications par courrier électronique.',
    'form_wizard_submissions_intro' => 'Choisissez comment vous souhaitez gérer les soumissions de formulaire.',
    'getting_started_widget_blueprints' => 'Les Blueprints définissent les champs personnalisés utilisés pour créer et stocker votre contenu.',
    'getting_started_widget_collections' => 'Les collections contiennent les différents types de contenu de votre site.',
    'getting_started_widget_docs' => 'Apprenez à connaître Statamic pour bien comprendre ses capacités.',
    'getting_started_widget_header' => 'Débuter avec Statamic',
    'getting_started_widget_intro' => 'Pour commencer à construire votre nouveau site Statamic, nous vous recommandons de commencer par ces étapes.',
    'getting_started_widget_structures' => 'Les structures établissent la hiérarchie de vos pages et vous aident à gérer la navigation de votre site.',
    'global_search_open_using_slash' => 'Vous pouvez ouvrir la recherche globale en utilisant la touche <kbd>/</kbd>',
    'global_set_blueprint_instructions' => 'Définit la disposition du champ lors de la modification de ce jeu de globales.',
    'global_set_handle_instructions' => 'Comment vous allez référencer ce jeu de globales dans les modèles, etc.',
    'global_set_title_instructions' => 'Le nom d’affichage de ce jeu de globales.',
    'phpinfo_utility_description' => 'Vérifiez vos paramètres de configuration PHP et les modules installés.',
    'publish_actions_create_revision' => 'Une révision sera créée à partir de la copie de travail. La révision actuelle ne changera pas.',
    'publish_actions_current_becomes_draft_because_scheduled' => 'Étant donné que la révision actuelle est publiée et que vous avez sélectionné une date dans le futur, une fois que vous aurez soumis la révision, elle restera en statut brouillon jusqu’à la date sélectionnée.',
    'publish_actions_publish' => 'Les modifications apportées à la copie de travail s’appliqueront à l’entrée et celle-ci sera publiée immédiatement.',
    'publish_actions_schedule' => 'Les modifications apportées à la copie de travail s’appliqueront à l’entrée et celle-ci paraîtra publiée à la date sélectionnée.',
    'publish_actions_unpublish' => 'La révision actuelle ne sera pas publiée.',
    'reset_password_notification_body' => 'Vous recevez cet email car nous avons reçu une demande de réinitialisation du mot de passe pour votre compte.',
    'reset_password_notification_no_action' => 'Si vous n’avez pas demandé de réinitialisation de mot de passe, aucune autre action n’est requise.',
    'reset_password_notification_subject' => 'Réinitialiser la notification du mot de passe',
    'role_change_handle_warning' => 'Changer l’identifiant ne mettra pas à jour les références à ce dernier dans les utilisateurs et les groupes.',
    'role_handle_instructions' => 'Comment vous allez faire référence à ce rôle sur le frontal. Ne peut pas être facilement changé.',
    'role_title_instructions' => 'Habituellement un nom singulier, comme "Editeur" ou "Admin".',
    'search_utility_description' => 'Gérez et affichez des informations importantes sur les index de recherche de Statamic.',
    'session_expiry_enter_password' => 'Entrez votre mot de passe pour continuer là où vous vous êtes arrêté.',
    'session_expiry_logged_out_for_inactivity' => 'Vous avez été déconnecté parce que vous êtes resté inactif trop longtemps.',
    'session_expiry_logging_out_in_seconds' => 'Vous avez été inactif pendant un certain temps et vous serez déconnecté dans :seconds secondes. Cliquez pour prolonger votre session.',
    'session_expiry_new_window' => 'Ouvre dans une nouvelle fenêtre. Revenez une fois que vous êtes connecté.',
    'structure_wizard_collection_instructions' => 'Si la collection que vous avez l’intention d’utiliser n’existe pas encore, choisissez <b>cette structure</b> ultérieurement lors de sa création.',
    'structure_wizard_collections_instructions' => 'Les entrées des collections sélectionnées pourront être sélectionnées lors de la construction de l’arborescence.',
    'structure_wizard_description' => 'Les structures sont des arbres de liens le plus souvent utilisés pour créer des barres de navigation et d’autres formes de navigation sur les sites.',
    'structure_wizard_expect_root_instructions' => 'Si vous souhaitez que la première page de l’arborescence soit considérée comme la page racine ou page d’accueil.',
    'structure_wizard_handle_instructions' => 'Comment vous allez faire référence à cette structure sur le frontal. Ne peut pas être facilement changé.',
    'structure_wizard_max_depth_instructions' => 'Le nombre maximum de niveaux sur lesquels une page peut être imbriquée. Laissez vide pour aucune limite.',
    'structure_wizard_purpose_collection' => 'Contrôler les URL d’une collection avec des relations parent-enfant.',
    'structure_wizard_purpose_intro' => 'Les structures peuvent soit contrôler une collection avec des URL parent-enfant, soit définir des arborescences de navigation conçues à la main à partir d’entrées existantes et d’URL définies par l’utilisateur.',
    'structure_wizard_purpose_navigation' => 'Créez une arborescence de liens vers des entrées existantes et/ou des URL définies par l’utilisateur.',
    'structure_wizard_settings_intro' => 'Définissez les collections disponibles pour cette structure et la profondeur de cette dernière.',
    'structure_wizard_title_instructions' => 'Par exemple : "Pages", "Barre de navigation principale" ou "Documentation".',
    'structures_empty' => 'Les structures peuvent contenir des liens disposés dans une hiérarchie à partir de laquelle vous pouvez créer des URL ou des zones de navigation.',
    'tab_sections_instructions' => 'Les champs de chaque section seront regroupés dans des onglets. Créez de nouveaux champs, réutilisez des champs existants ou importez des groupes entiers de champs à partir de jeux de champs existants.',
    'taxonomies_blueprints_instructions' => 'Les termes de cette taxonomie peuvent utiliser n’importe lequel de ces Blueprints.',
    'taxonomy_wizard_blueprint_instructions' => 'Choisissez un Blueprint existant ou créez-en un nouveau.',
    'taxonomy_wizard_collections_instructions' => 'Des champs sont automatiquement ajoutés quand les taxonomies sont rattachées aux collections.',
    'taxonomy_wizard_collections_intro' => 'Affectez cette taxonomie à des collections existantes (optionnel). Vous pourrez toujours le faire plus tard en modifiant un paramètre dans les collections.',
    'taxonomy_wizard_fields_intro' => 'Les Blueprints sont utilisés pour personnaliser les champs disponibles pour cette taxonomie.',
    'taxonomy_wizard_handle_instructions' => 'Comment vous allez faire référence à cette taxonomie sur le frontal. Ne peut pas être facilement changé.',
    'taxonomy_wizard_intro' => 'Une taxonomie est un système de classification des données autour d’un ensemble de caractéristiques uniques, telles que la catégorie ou la couleur.',
    'taxonomy_wizard_title_instructions' => 'Nous recommandons un nom au pluriel, tel que "Catégories" ou "Etiquettes".',
    'updates_available' => 'Mise à jour disponible | :count mises à jour disponibles',
    'user_groups_handle_instructions' => 'Comment vous allez faire référence à ce groupe d’utilisateurs sur le frontal. Ne peut pas être facilement changé.',
    'user_groups_role_instructions' => 'Affectez des rôles afin de donner aux utilisateurs de ce groupe toutes les autorisations correspondantes.',
    'user_groups_title_instructions' => 'Habituellement un nom au pluriel, comme "Editeurs" ou "Photographes".',
    'user_wizard_account_created' => 'Le compte d’utilisateur a été créé.',
    'user_wizard_email_instructions' => 'L’adresse e-mail sert également de nom d’utilisateur et doit être unique.',
    'user_wizard_intro' => 'Les utilisateurs peuvent se voir attribuer des rôles qui personnalisent leurs autorisations, leurs accès et leurs capacités via le Panneau de configuration.',
    'user_wizard_invitation_body' => 'Activez votre nouveau compte Statamic sur :site pour commencer à gérer ce site. Pour votre sécurité, le lien ci-dessous expire après 1 heure. Ensuite, contactez l’administrateur du site pour obtenir un nouveau mot de passe.',
    'user_wizard_invitation_intro' => 'Envoyez un courrier électronique de bienvenue avec les détails d’activation du compte au nouvel utilisateur.',
    'user_wizard_invitation_share' => 'Copiez ces informations d’identification et partagez-les avec <code>:email</code> via votre méthode préférée.',
    'user_wizard_invitation_share_before' => 'Après avoir créé l’utilisateur, vous recevrez des détails avec lesquels partager <code>:email</code> via votre méthode préférée.',
    'user_wizard_invitation_subject' => 'Activez votre nouveau compte Statamic sur :site',
    'user_wizard_name_instructions' => 'Vous pouvez laisser le nom vide si vous voulez laisser l’utilisateur le remplir.',
    'user_wizard_roles_groups_intro' => 'Les utilisateurs peuvent se voir attribuer des rôles qui personnalisent leurs autorisations, leurs accès et leurs capacités via le Panneau de configuration.',
    'user_wizard_super_admin_instructions' => 'Les super-administrateurs ont le contrôle complet et l’accès à tout ce qui se trouve dans le panneau de commande. Accordez ce rôle à bon escient.',
];
