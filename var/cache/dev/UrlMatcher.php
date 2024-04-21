<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/Finance/Activite' => [[['_route' => 'activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Finance/Activite/All' => [[['_route' => 'activite_all', '_controller' => 'App\\Controller\\ActiviteController::all'], null, ['GET' => 0], null, true, false, null]],
        '/Finance/Activite/new' => [[['_route' => 'activite_new', '_controller' => 'App\\Controller\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Finance/Assignation/Bureau/All' => [[['_route' => 'bureau_assignation_all', '_controller' => 'App\\Controller\\AssignationController::all'], null, ['GET' => 0], null, true, false, null]],
        '/Finance/Assignation/Cellule/All' => [[['_route' => 'assignation_all', '_controller' => 'App\\Controller\\AssignationController::celall'], null, ['GET' => 0], null, true, false, null]],
        '/Finance/Assignation/Bureau' => [[['_route' => 'bureau_assignation_index', '_controller' => 'App\\Controller\\AssignationController::bureau'], null, ['GET' => 0], null, true, false, null]],
        '/Finance/Assignation/new' => [[['_route' => 'assignation_new', '_controller' => 'App\\Controller\\AssignationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/autreentree' => [[['_route' => 'autreentree_index', '_controller' => 'App\\Controller\\AutreentreeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/autreentree/new' => [[['_route' => 'autreentree_new', '_controller' => 'App\\Controller\\AutreentreeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cellule' => [[['_route' => 'cellule_index', '_controller' => 'App\\Controller\\CelluleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cellule/new' => [[['_route' => 'cellule_new', '_controller' => 'App\\Controller\\CelluleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Finance' => [[['_route' => 'finance_index', '_controller' => 'App\\Controller\\FinanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Finance/Caisses' => [[['_route' => 'finance_caisses', '_controller' => 'App\\Controller\\FinanceController::caisses'], null, ['GET' => 0], null, false, false, null]],
        '/Finance/National' => [[['_route' => 'finance_national', '_controller' => 'App\\Controller\\FinanceController::national'], null, ['GET' => 0], null, false, false, null]],
        '/Finance/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\FinanceController::test'], null, ['GET' => 0], null, false, false, null]],
        '/Finance/Bilan' => [[['_route' => 'finance_bilan', '_controller' => 'App\\Controller\\FinanceController::bilan'], null, ['GET' => 0], null, false, false, null]],
        '/Finance/Brouillard' => [[['_route' => 'finance_brouillard', '_controller' => 'App\\Controller\\FinanceController::brouyard'], null, ['GET' => 0], null, false, false, null]],
        '/Finance/LienDayBrouyard' => [[['_route' => 'finance_day_brouyard_lien', '_controller' => 'App\\Controller\\FinanceController::liendaybrouyard'], null, null, null, false, false, null]],
        '/Finance/LienDaysBrouyardBanque' => [[['_route' => 'finance_days_brouyard_lien', '_controller' => 'App\\Controller\\FinanceController::liendaysbrouyardbanque'], null, null, null, false, false, null]],
        '/Finance/LienDayBrouyardCellule' => [[['_route' => 'finance_day_brouyard_lien_cellule', '_controller' => 'App\\Controller\\FinanceController::liendaybrouyardcellule'], null, null, null, false, false, null]],
        '/Finance/LienDaysBrouyardCellule' => [[['_route' => 'finance_days_brouyard_lien_cellule', '_controller' => 'App\\Controller\\FinanceController::liendaysbrouyardcellule'], null, null, null, false, false, null]],
        '/partenaire' => [[['_route' => 'partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/partenaire/new' => [[['_route' => 'partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/CA' => [[['_route' => 'poste_index', '_controller' => 'App\\Controller\\PosteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/poste/BEN' => [[['_route' => 'poste_ben_index', '_controller' => 'App\\Controller\\PosteController::benindex'], null, ['GET' => 0], null, false, false, null]],
        '/poste/CA/new' => [[['_route' => 'poste_new', '_controller' => 'App\\Controller\\PosteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste/BEN/new' => [[['_route' => 'poste_ben_new', '_controller' => 'App\\Controller\\PosteController::bennew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rubrique' => [[['_route' => 'rubrique_index', '_controller' => 'App\\Controller\\RubriqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rubrique/new' => [[['_route' => 'rubrique_new', '_controller' => 'App\\Controller\\RubriqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'tam_index', '_controller' => 'App\\Controller\\Security\\securityController::tam'], null, null, null, false, false, null],
            [['_route' => 'website_index', '_controller' => 'App\\Controller\\Security\\websiteController::home'], null, null, null, false, false, null],
        ],
        '/registration' => [[['_route' => 'security_register', '_controller' => 'App\\Controller\\Security\\securityController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Security\\securityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\Security\\securityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'security_profile', '_controller' => 'App\\Controller\\Security\\securityController::profile'], null, null, null, false, false, null]],
        '/edit_profile' => [[['_route' => 'security_profile_edit', '_controller' => 'App\\Controller\\Security\\securityController::edit'], null, null, null, false, false, null]],
        '/ChangePassword' => [[['_route' => 'security_change_password', '_controller' => 'App\\Controller\\Security\\securityController::change'], null, null, null, false, false, null]],
        '/forgottenPassword' => [[['_route' => 'security_forgotten_password', '_controller' => 'App\\Controller\\Security\\securityController::forgotten'], null, null, null, false, false, null]],
        '/Users' => [[['_route' => 'security_users', '_controller' => 'App\\Controller\\Security\\securityController::users'], null, null, null, false, false, null]],
        '/UserDisable' => [[['_route' => 'security_user_disable', '_controller' => 'App\\Controller\\Security\\securityController::UserdisableAction'], null, null, null, false, false, null]],
        '/UserEnable' => [[['_route' => 'security_user_enable', '_controller' => 'App\\Controller\\Security\\securityController::UserenableAction'], null, null, null, false, false, null]],
        '/Users/Waiting' => [[['_route' => 'security_waiting', '_controller' => 'App\\Controller\\Security\\securityController::waiting'], null, null, null, false, false, null]],
        '/Admin/registration' => [[['_route' => 'security_admin_register', '_controller' => 'App\\Controller\\Security\\securityController::admin_new'], null, null, null, false, false, null]],
        '/UserDelete' => [[['_route' => 'security_user_delete', '_controller' => 'App\\Controller\\Security\\securityController::userdelete'], null, null, null, true, false, null]],
        '/Presentation' => [[['_route' => 'website_presentation', '_controller' => 'App\\Controller\\Security\\websiteController::presentation'], null, null, null, false, false, null]],
        '/Evenement' => [[['_route' => 'website_evenement', '_controller' => 'App\\Controller\\Security\\websiteController::evenement'], null, null, null, false, false, null]],
        '/Galerie' => [[['_route' => 'website_gallery', '_controller' => 'App\\Controller\\Security\\websiteController::gallery'], null, null, null, false, false, null]],
        '/Partenaires' => [[['_route' => 'website_partenaire', '_controller' => 'App\\Controller\\Security\\websiteController::partenaires'], null, null, null, false, false, null]],
        '/RappelSms' => [[['_route' => 'rappelsms', '_controller' => 'App\\Controller\\SmsController::rappelsms'], null, null, null, false, false, null]],
        '/GroupSms' => [[['_route' => 'groupsms', '_controller' => 'App\\Controller\\SmsController::groupsms'], null, null, null, false, false, null]],
        '/SimpleSms' => [[['_route' => 'simplesms', '_controller' => 'App\\Controller\\SmsController::simplesms'], null, null, null, false, false, null]],
        '/CreditSms' => [[['_route' => 'creditsms', '_controller' => 'App\\Controller\\SmsController::creditsms'], null, null, null, false, false, null]],
        '/transfert' => [[['_route' => 'transfert_index', '_controller' => 'App\\Controller\\TransfertController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transfert/new' => [[['_route' => 'transfert_new', '_controller' => 'App\\Controller\\TransfertController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/zone' => [[['_route' => 'zone_index', '_controller' => 'App\\Controller\\ZoneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/zone/new' => [[['_route' => 'zone_new', '_controller' => 'App\\Controller\\ZoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Rh' => [[['_route' => 'tam_rh', '_controller' => 'App\\Controller\\rhController::index'], null, null, null, false, false, null]],
        '/RH/CA' => [[['_route' => 'tam_ca', '_controller' => 'App\\Controller\\rhController::ca'], null, null, null, false, false, null]],
        '/RH/BEN' => [[['_route' => 'tam_ben', '_controller' => 'App\\Controller\\rhController::ben'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/F(?'
                    .'|inance/(?'
                        .'|A(?'
                            .'|ctivite(?'
                                .'|/(?'
                                    .'|([^/]++)(?'
                                        .'|(*:213)'
                                        .'|/edit(*:226)'
                                        .'|(*:234)'
                                    .')'
                                    .'|Depense/(?'
                                        .'|([^/]++)(*:262)'
                                        .'|Edit/([^/]++)(*:283)'
                                    .')'
                                    .'|Activite/Delete/Depense/([^/]++)(*:324)'
                                    .'|cloturer/([^/]++)(*:349)'
                                .')'
                                .'|cellule/(?'
                                    .'|([^/]++)(*:377)'
                                    .'|new/([^/]++)(*:397)'
                                    .'|All/([^/]++)(*:417)'
                                    .'|Show/([^/]++)(*:438)'
                                    .'|([^/]++)(?'
                                        .'|/([^/]++)/edit(*:471)'
                                        .'|(*:479)'
                                    .')'
                                    .'|Depensecellule/(?'
                                        .'|([^/]++)(*:514)'
                                        .'|Edit/([^/]++)(*:535)'
                                    .')'
                                    .'|Activitecellule/Delete/Depensecellule/([^/]++)(*:590)'
                                    .'|cloturer/([^/]++)(*:615)'
                                .')'
                            .')'
                            .'|ssignation/(?'
                                .'|Cellule/([^/]++)(*:655)'
                                .'|([^/]++)(?'
                                    .'|/edit(*:679)'
                                    .'|(*:687)'
                                .')'
                                .'|assignation(?'
                                    .'|Multiple(*:718)'
                                    .'|Bureau(*:732)'
                                .')'
                                .'|CA(*:743)'
                                .'|BEN(*:754)'
                            .')'
                        .')'
                        .'|C(?'
                            .'|otisation(?'
                                .'|/(?'
                                    .'|([^/]++)(*:792)'
                                    .'|Cellule(?'
                                        .'|/([^/]++)(?'
                                            .'|/([^/]++)(*:831)'
                                            .'|(*:839)'
                                        .')'
                                        .'|s(*:849)'
                                    .')'
                                    .'|Setting/([^/]++)(*:874)'
                                    .'|new/([^/]++)(*:894)'
                                    .'|([^/]++)/(?'
                                        .'|edit/([^/]++)(*:927)'
                                        .'|([^/]++)/([^/]++)(*:952)'
                                    .')'
                                    .'|CA/([^/]++)(*:972)'
                                    .'|B(?'
                                        .'|EN/([^/]++)(*:995)'
                                        .'|ureau_Multiple(*:1017)'
                                    .')'
                                    .'|Multiple(*:1035)'
                                .')'
                                .'|s/([^/]++)(*:1055)'
                            .')'
                            .'|ellule/([^/]++)(*:1080)'
                        .')'
                        .'|User/([^/]++)(*:1103)'
                        .'|Situation(?'
                            .'|jour(?'
                                .'|/([^/]++)(*:1140)'
                                .'|cellule/([^/]++)/([^/]++)(*:1174)'
                            .')'
                            .'|Intervalle(?'
                                .'|/([^/]++)/([^/]++)(*:1215)'
                                .'|Cellule/([^/]++)/([^/]++)/([^/]++)(*:1258)'
                            .')'
                        .')'
                        .'|B(?'
                            .'|ilanCellule/([^/]++)(*:1293)'
                            .'|rouillardCellule/([^/]++)(*:1327)'
                        .')'
                    .')'
                    .'|onction/([^/]++)/([^/]++)(*:1363)'
                .')'
                .'|/autreentree(?'
                    .'|/([^/]++)(?'
                        .'|/edit(*:1405)'
                        .'|(*:1414)'
                    .')'
                    .'|cellule/(?'
                        .'|([^/]++)(*:1443)'
                        .'|new/([^/]++)(*:1464)'
                        .'|([^/]++)(?'
                            .'|/([^/]++)/edit(*:1498)'
                            .'|(*:1507)'
                        .')'
                    .')'
                .')'
                .'|/cellule(?'
                    .'|/([^/]++)(?'
                        .'|(*:1542)'
                        .'|/edit(*:1556)'
                        .'|(*:1565)'
                    .')'
                    .'|joindre(?'
                        .'|/([^/]++)/([^/]++)(*:1603)'
                        .'|Admin/([^/]++)/([^/]++)(*:1635)'
                    .')'
                .')'
                .'|/p(?'
                    .'|artenaire(?'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:1678)'
                                .'|/edit(*:1692)'
                                .'|(*:1701)'
                            .')'
                            .'|Financement/([^/]++)(*:1731)'
                        .')'
                        .'|cellule/(?'
                            .'|Cellule/([^/]++)(*:1768)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|new(*:1795)'
                                    .'|([^/]++)(?'
                                        .'|(*:1815)'
                                        .'|/edit(*:1829)'
                                    .')'
                                .')'
                                .'|(*:1840)'
                            .')'
                            .'|Financement/([^/]++)/([^/]++)(*:1879)'
                        .')'
                    .')'
                    .'|oste/(?'
                        .'|([^/]++)/edit(*:1911)'
                        .'|BEN/([^/]++)/edit(*:1937)'
                        .'|([^/]++)(*:1954)'
                    .')'
                .')'
                .'|/rubrique/([^/]++)(?'
                    .'|/edit(*:1991)'
                    .'|(*:2000)'
                .')'
                .'|/User(?'
                    .'|/([^/]++)(*:2027)'
                    .'|Disable_admin/([^/]++)(*:2058)'
                    .'|Enable_admin/([^/]++)(*:2088)'
                .')'
                .'|/ResetPassword/([^/]++)(*:2121)'
                .'|/Activation/([^/]++)(*:2150)'
                .'|/edit_user/([^/]++)(*:2178)'
                .'|/Smstransit/([^/]++)/([^/]++)/([^/]++)(*:2225)'
                .'|/transfert(?'
                    .'|/([^/]++)(?'
                        .'|/edit(*:2264)'
                        .'|(*:2273)'
                    .')'
                    .'|cellule/(?'
                        .'|([^/]++)(*:2302)'
                        .'|new/([^/]++)(*:2323)'
                        .'|([^/]++)/([^/]++)(?'
                            .'|/edit(*:2357)'
                            .'|(*:2366)'
                        .')'
                    .')'
                .')'
                .'|/zone/(?'
                    .'|([^/]++)(?'
                        .'|(*:2398)'
                        .'|/edit(*:2412)'
                        .'|(*:2421)'
                    .')'
                    .'|region/([^/]++)(*:2446)'
                    .'|Cellule/([^/]++)(*:2471)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        213 => [[['_route' => 'activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'activite_delete', '_controller' => 'App\\Controller\\ActiviteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        262 => [[['_route' => 'activite_depense', '_controller' => 'App\\Controller\\ActiviteController::depense'], ['activite'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        283 => [[['_route' => 'activite_depense_edit', '_controller' => 'App\\Controller\\ActiviteController::editdepense'], ['depense'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        324 => [[['_route' => 'activite_depense_delete', '_controller' => 'App\\Controller\\ActiviteController::depensedelete'], ['depense'], ['DELETE' => 0], null, false, true, null]],
        349 => [[['_route' => 'activite_cloturer', '_controller' => 'App\\Controller\\ActiviteController::cloturer'], ['activite'], ['GET' => 0], null, true, true, null]],
        377 => [[['_route' => 'activitecellule_index', '_controller' => 'App\\Controller\\ActivitecelluleController::index'], ['cellule'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'activitecellule_new', '_controller' => 'App\\Controller\\ActivitecelluleController::new'], ['cellule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        417 => [[['_route' => 'activitecellule_all', '_controller' => 'App\\Controller\\ActivitecelluleController::all'], ['cellule'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'activitecellule_show', '_controller' => 'App\\Controller\\ActivitecelluleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        471 => [[['_route' => 'activitecellule_edit', '_controller' => 'App\\Controller\\ActivitecelluleController::edit'], ['cellule', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        479 => [[['_route' => 'activitecellule_delete', '_controller' => 'App\\Controller\\ActivitecelluleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        514 => [[['_route' => 'activitecellule_depense', '_controller' => 'App\\Controller\\ActivitecelluleController::depense'], ['activitecellule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        535 => [[['_route' => 'activitecellule_depense_edit', '_controller' => 'App\\Controller\\ActivitecelluleController::editdepense'], ['depense'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        590 => [[['_route' => 'activitecellule_depense_delete', '_controller' => 'App\\Controller\\ActivitecelluleController::depensedelete'], ['depense'], ['DELETE' => 0], null, false, true, null]],
        615 => [[['_route' => 'activitecellule_cloturer', '_controller' => 'App\\Controller\\ActivitecelluleController::cloturer'], ['activitecellule'], ['GET' => 0], null, true, true, null]],
        655 => [[['_route' => 'assignation_index', '_controller' => 'App\\Controller\\AssignationController::index'], ['cellule'], ['GET' => 0], null, false, true, null]],
        679 => [[['_route' => 'assignation_edit', '_controller' => 'App\\Controller\\AssignationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        687 => [[['_route' => 'assignation_delete', '_controller' => 'App\\Controller\\AssignationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        718 => [[['_route' => 'assignation_multiple_index', '_controller' => 'App\\Controller\\AssignationController::multiple'], [], ['POST' => 0], null, false, false, null]],
        732 => [[['_route' => 'assignation_bureau_index', '_controller' => 'App\\Controller\\AssignationController::asigbureau'], [], ['POST' => 0], null, false, false, null]],
        743 => [[['_route' => 'assignation_ca', '_controller' => 'App\\Controller\\AssignationController::ca'], [], ['GET' => 0], null, true, false, null]],
        754 => [[['_route' => 'assignation_ben', '_controller' => 'App\\Controller\\AssignationController::ben'], [], ['GET' => 0], null, true, false, null]],
        792 => [[['_route' => 'cotisation', '_controller' => 'App\\Controller\\CotisationController::cotisation'], ['mois'], ['GET' => 0], null, false, true, null]],
        831 => [[['_route' => 'cotisation_cellule', '_controller' => 'App\\Controller\\CotisationController::index'], ['cellule', 'mois'], ['GET' => 0], null, false, true, null]],
        839 => [[['_route' => 'cotisation_cellule_one', '_controller' => 'App\\Controller\\CotisationController::one_index'], ['cellule'], ['GET' => 0], null, true, true, null]],
        849 => [[['_route' => 'cotisation_cellules', '_controller' => 'App\\Controller\\CotisationController::cellules'], [], null, null, false, false, null]],
        874 => [[['_route' => 'cotisation_param_index', '_controller' => 'App\\Controller\\CotisationController::param'], ['cellule'], ['GET' => 0], null, false, true, null]],
        894 => [[['_route' => 'cotisation_new', '_controller' => 'App\\Controller\\CotisationController::new'], ['cellule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        927 => [[['_route' => 'cotisation_edit', '_controller' => 'App\\Controller\\CotisationController::edit'], ['id', 'cellule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        952 => [[['_route' => 'cotisation_delete', '_controller' => 'App\\Controller\\CotisationController::delete'], ['id', 'cellule', 'mois'], ['DELETE' => 0], null, false, true, null]],
        972 => [[['_route' => 'cotisation_ca', '_controller' => 'App\\Controller\\CotisationController::ca'], ['mois'], null, null, false, true, null]],
        995 => [[['_route' => 'cotisation_ben', '_controller' => 'App\\Controller\\CotisationController::ben'], ['mois'], null, null, false, true, null]],
        1017 => [[['_route' => 'bureau_multiple_index', '_controller' => 'App\\Controller\\CotisationController::bureaumultiple'], [], ['POST' => 0], null, false, false, null]],
        1035 => [[['_route' => 'multiple_index', '_controller' => 'App\\Controller\\CotisationController::multiple'], [], ['POST' => 0], null, false, false, null]],
        1055 => [[['_route' => 'finance_cotisation_user', '_controller' => 'App\\Controller\\FinanceController::cotisations'], ['user'], ['GET' => 0], null, false, true, null]],
        1080 => [[['_route' => 'finance_cellule', '_controller' => 'App\\Controller\\FinanceController::cellule'], ['cellule'], null, null, false, true, null]],
        1103 => [[['_route' => 'finance_user', '_controller' => 'App\\Controller\\FinanceController::user'], ['user'], null, null, false, true, null]],
        1140 => [[['_route' => 'finance_daybrouillard', '_controller' => 'App\\Controller\\FinanceController::daybrouyard'], ['jour'], ['GET' => 0], null, false, true, null]],
        1174 => [[['_route' => 'finance_daybrouillard_cellule', '_controller' => 'App\\Controller\\FinanceController::daybrouyardcellule'], ['jour', 'cellule'], ['GET' => 0], null, false, true, null]],
        1215 => [[['_route' => 'finance_brouillard_intervale', '_controller' => 'App\\Controller\\FinanceController::daysbrouyard'], ['jour1', 'jour2'], ['GET' => 0], null, false, true, null]],
        1258 => [[['_route' => 'finance_brouillard_intervale_cellule', '_controller' => 'App\\Controller\\FinanceController::daysbrouyardcellule'], ['jour1', 'jour2', 'cellule'], ['GET' => 0], null, false, true, null]],
        1293 => [[['_route' => 'finance_bilan_cellule', '_controller' => 'App\\Controller\\FinanceController::bilancellule'], ['cellule'], ['GET' => 0], null, false, true, null]],
        1327 => [[['_route' => 'finance_brouillard_cellule', '_controller' => 'App\\Controller\\FinanceController::brouyardcellule'], ['cellule'], ['GET' => 0], null, false, true, null]],
        1363 => [[['_route' => 'fonction_change', '_controller' => 'App\\Controller\\Security\\securityController::joindreadmin'], ['user', 'fonction'], ['GET' => 0], null, false, true, null]],
        1405 => [[['_route' => 'autreentree_edit', '_controller' => 'App\\Controller\\AutreentreeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1414 => [[['_route' => 'autreentree_delete', '_controller' => 'App\\Controller\\AutreentreeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1443 => [[['_route' => 'autreentreecellule_index', '_controller' => 'App\\Controller\\AutreentreecelluleController::index'], ['cellule'], ['GET' => 0], null, false, true, null]],
        1464 => [[['_route' => 'autreentreecellule_new', '_controller' => 'App\\Controller\\AutreentreecelluleController::new'], ['cellule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1498 => [[['_route' => 'autreentreecellule_edit', '_controller' => 'App\\Controller\\AutreentreecelluleController::edit'], ['cellule', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1507 => [[['_route' => 'autreentreecellule_delete', '_controller' => 'App\\Controller\\AutreentreecelluleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1542 => [[['_route' => 'cellule_show', '_controller' => 'App\\Controller\\CelluleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1556 => [[['_route' => 'cellule_edit', '_controller' => 'App\\Controller\\CelluleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1565 => [[['_route' => 'cellule_delete', '_controller' => 'App\\Controller\\CelluleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1603 => [[['_route' => 'cellule_joindre', '_controller' => 'App\\Controller\\CelluleController::joindre'], ['user', 'cellule'], ['GET' => 0], null, false, true, null]],
        1635 => [[['_route' => 'cellule_joindre_admin', '_controller' => 'App\\Controller\\CelluleController::joindreadmin'], ['user', 'cellule'], ['GET' => 0], null, false, true, null]],
        1678 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1692 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1701 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1731 => [[['_route' => 'partenaire_financement', '_controller' => 'App\\Controller\\PartenaireController::financement'], ['partenaire'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1768 => [[['_route' => 'partenairecellule_index', '_controller' => 'App\\Controller\\PartenairecelluleController::index'], ['cellule'], ['GET' => 0], null, false, true, null]],
        1795 => [[['_route' => 'partenairecellule_new', '_controller' => 'App\\Controller\\PartenairecelluleController::new'], ['cellule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1815 => [[['_route' => 'partenairecellule_show', '_controller' => 'App\\Controller\\PartenairecelluleController::show'], ['cellule', 'id'], ['GET' => 0], null, false, true, null]],
        1829 => [[['_route' => 'partenairecellule_edit', '_controller' => 'App\\Controller\\PartenairecelluleController::edit'], ['cellule', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1840 => [[['_route' => 'partenairecellule_delete', '_controller' => 'App\\Controller\\PartenairecelluleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1879 => [[['_route' => 'partenairecellule_financement', '_controller' => 'App\\Controller\\PartenairecelluleController::financement'], ['cellule', 'partenaire'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1911 => [[['_route' => 'poste_edit', '_controller' => 'App\\Controller\\PosteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1937 => [[['_route' => 'poste_ben_edit', '_controller' => 'App\\Controller\\PosteController::benedit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1954 => [[['_route' => 'poste_delete', '_controller' => 'App\\Controller\\PosteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1991 => [[['_route' => 'rubrique_edit', '_controller' => 'App\\Controller\\RubriqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2000 => [[['_route' => 'rubrique_delete', '_controller' => 'App\\Controller\\RubriqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2027 => [[['_route' => 'security_user', '_controller' => 'App\\Controller\\Security\\securityController::user'], ['user'], null, null, false, true, null]],
        2058 => [[['_route' => 'security_user_admin_cancel', '_controller' => 'App\\Controller\\Security\\securityController::UseradminAction'], ['user'], null, null, false, true, null]],
        2088 => [[['_route' => 'security_user_admin', '_controller' => 'App\\Controller\\Security\\securityController::UserenableadminAction'], ['user'], null, null, false, true, null]],
        2121 => [[['_route' => 'security_reset_password', '_controller' => 'App\\Controller\\Security\\securityController::reset'], ['token'], null, null, false, true, null]],
        2150 => [[['_route' => 'security_activation', '_controller' => 'App\\Controller\\Security\\securityController::active'], ['token'], null, null, false, true, null]],
        2178 => [[['_route' => 'security_user_edit', '_controller' => 'App\\Controller\\Security\\securityController::edit_user'], ['user'], null, null, false, true, null]],
        2225 => [[['_route' => 'smstransit', '_controller' => 'App\\Controller\\SmsController::transit'], ['send', 'solde', 'page'], null, null, false, true, null]],
        2264 => [[['_route' => 'transfert_edit', '_controller' => 'App\\Controller\\TransfertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2273 => [[['_route' => 'transfert_delete', '_controller' => 'App\\Controller\\TransfertController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2302 => [[['_route' => 'transfertcellule_index', '_controller' => 'App\\Controller\\TransfertcelluleController::index'], ['cellule'], ['GET' => 0], null, false, true, null]],
        2323 => [[['_route' => 'transfertcellule_new', '_controller' => 'App\\Controller\\TransfertcelluleController::new'], ['cellule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2357 => [[['_route' => 'transfertcellule_edit', '_controller' => 'App\\Controller\\TransfertcelluleController::edit'], ['id', 'cellule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2366 => [[['_route' => 'transfertcellule_delete', '_controller' => 'App\\Controller\\TransfertcelluleController::delete'], ['id', 'cellule'], ['DELETE' => 0], null, false, true, null]],
        2398 => [[['_route' => 'zone_show', '_controller' => 'App\\Controller\\ZoneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2412 => [[['_route' => 'zone_edit', '_controller' => 'App\\Controller\\ZoneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2421 => [[['_route' => 'zone_delete', '_controller' => 'App\\Controller\\ZoneController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2446 => [[['_route' => 'zone_region', '_controller' => 'App\\Controller\\ZoneController::region'], ['id'], ['GET' => 0], null, false, true, null]],
        2471 => [
            [['_route' => 'zone_cellule', '_controller' => 'App\\Controller\\ZoneController::cellule'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
