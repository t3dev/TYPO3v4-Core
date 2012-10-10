<?php
return array(
	'AjaxLogin' => 'TYPO3\\CMS\\Backend\\AjaxLoginHandler',
	'clickMenu' => 'TYPO3\\CMS\\Backend\\ClickMenu\\ClickMenu',
	't3lib_clipboard' => 'TYPO3\\CMS\\Backend\\Clipboard\\Clipboard',
	't3lib_transl8tools' => 'TYPO3\\CMS\\Backend\\Configuration\\TranslationConfigurationProvider',
	't3lib_TSparser_TSconfig' => 'TYPO3\\CMS\\Backend\\Configuration\\TsConfigParser',
	't3lib_matchCondition_backend' => 'TYPO3\\CMS\\Backend\\Configuration\\TypoScript\\ConditionMatching\\ConditionMatcher',
	't3lib_contextmenu_AbstractContextMenu' => 'TYPO3\\CMS\\Backend\\ContextMenu\\AbstractContextMenu',
	't3lib_contextmenu_AbstractDataProvider' => 'TYPO3\\CMS\\Backend\\ContextMenu\\AbstractContextMenuDataProvider',
	't3lib_contextmenu_Action' => 'TYPO3\\CMS\\Backend\\ContextMenu\\ContextMenuAction',
	't3lib_contextmenu_ActionCollection' => 'TYPO3\\CMS\\Backend\\ContextMenu\\ContextMenuActionCollection',
	't3lib_contextmenu_extdirect_ContextMenu' => 'TYPO3\\CMS\\Backend\\ContextMenu\\Extdirect\\AbstractExtdirectContextMenu',
	't3lib_contextmenu_pagetree_DataProvider' => 'TYPO3\\CMS\\Backend\\ContextMenu\\Pagetree\\ContextMenuDataProvider',
	't3lib_contextmenu_pagetree_extdirect_ContextMenu' => 'TYPO3\\CMS\\Backend\\ContextMenu\\Pagetree\\Extdirect\\ContextMenuConfiguration',
	't3lib_contextmenu_renderer_Abstract' => 'TYPO3\\CMS\\Backend\\ContextMenu\\Renderer\\AbstractContextMenuRenderer',
	'TYPO3backend' => 'TYPO3\\CMS\\Backend\\Controller\\BackendController',
	'SC_wizard_backend_layout' => 'TYPO3\\CMS\\Backend\\Controller\\BackendLayoutWizardController',
	'SC_alt_clickmenu' => 'TYPO3\\CMS\\Backend\\Controller\\ClickMenuController',
	'SC_show_rechis' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementHistoryController',
	'SC_show_item' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\ElementInformationController',
	'SC_move_el' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\MoveElementController',
	'SC_db_new_content_el' => 'TYPO3\\CMS\\Backend\\Controller\\ContentElement\\NewContentElementController',
	'SC_dummy' => 'TYPO3\\CMS\\Backend\\Controller\\DummyController',
	'SC_alt_doc' => 'TYPO3\\CMS\\Backend\\Controller\\EditDocumentController',
	'SC_file_newfolder' => 'TYPO3\\CMS\\Backend\\Controller\\File\\CreateFolderController',
	'SC_file_edit' => 'TYPO3\\CMS\\Backend\\Controller\\File\\EditFileController',
	'TYPO3_tcefile' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileController',
	'SC_file_upload' => 'TYPO3\\CMS\\Backend\\Controller\\File\\FileUploadController',
	'SC_file_rename' => 'TYPO3\\CMS\\Backend\\Controller\\File\\RenameFileController',
	'SC_alt_file_navframe' => 'TYPO3\\CMS\\Backend\\Controller\\FileSystemNavigationFrameController',
	'SC_listframe_loader' => 'TYPO3\\CMS\\Backend\\Controller\\ListFrameLoaderController',
	'SC_index' => 'TYPO3\\CMS\\Backend\\Controller\\LoginController',
	'SC_login_frameset' => 'TYPO3\\CMS\\Backend\\Controller\\LoginFramesetController',
	'SC_logout' => 'TYPO3\\CMS\\Backend\\Controller\\LogoutController',
	'SC_db_new' => 'TYPO3\\CMS\\Backend\\Controller\\NewRecordController',
	'SC_alt_doc_nodoc' => 'TYPO3\\CMS\\Backend\\Controller\\NoDocumentsOpenController',
	'SC_db_layout' => 'TYPO3\\CMS\\Backend\\Controller\\PageLayoutController',
	'SC_alt_db_navframe' => 'TYPO3\\CMS\\Backend\\Controller\\PageTreeNavigationController',
	'SC_alt_shortcut' => 'TYPO3\\CMS\\Backend\\Controller\\ShortcutFrameController',
	'SC_tce_db' => 'TYPO3\\CMS\\Backend\\Controller\\SimpleDataHandlerController',
	'SC_wizard_add' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\AddController',
	'SC_wizard_colorpicker' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ColorpickerController',
	'SC_wizard_edit' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\EditController',
	'SC_wizard_forms' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\FormsController',
	'SC_wizard_list' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\ListController',
	'SC_wizard_rte' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\RteController',
	'SC_wizard_table' => 'TYPO3\\CMS\\Backend\\Controller\\Wizard\\TableController',
	't3lib_transferData' => 'TYPO3\\CMS\\Backend\\Form\\DataPreprocessor',
	't3lib_TCEforms_inline' => 'TYPO3\\CMS\\Backend\\Form\\Element\\InlineElement',
	't3lib_tceformsInlineHook' => 'TYPO3\\CMS\\Backend\\Form\\Element\\InlineElementHookInterface',
	't3lib_TCEforms_FE' => 'TYPO3\\CMS\\Backend\\Form\\FrontendFormEngine',
	't3lib_TCEforms_dbFileIconsHook' => 'TYPO3\\CMS\\Backend\\Form\\DatabaseFileIconsHookInterface',
	't3lib_TCEforms_Suggest_DefaultReceiver' => 'TYPO3\\CMS\\Backend\\Form\\Element\\SuggestDefaultReceiver',
	't3lib_TCEforms_Suggest' => 'TYPO3\\CMS\\Backend\\Form\\Element\\SuggestElement',
	't3lib_TCEforms_Tree' => 'TYPO3\\CMS\\Backend\\Form\\Element\\TreeElement',
	't3lib_TCEforms_ValueSlider' => 'TYPO3\\CMS\\Backend\\Form\\Element\\ValueSlider',
	't3lib_TCEforms_Flexforms' => 'TYPO3\\CMS\\Backend\\Form\\FlexFormsHelper',
	't3lib_TCEforms' => 'TYPO3\\CMS\\Backend\\Form\\FormEngine',
	't3lib_tsfeBeUserAuth' => 'TYPO3\\CMS\\Backend\\FrontendBackendUserAuthentication',
	'recordHistory' => 'TYPO3\\CMS\\Backend\\History\\RecordHistory',
	'extDirect_DataProvider_State' => 'TYPO3\\CMS\\Backend\\InterfaceState\\ExtDirect\\DataProvider',
	't3lib_extobjbase' => 'TYPO3\\CMS\\Backend\\Module\\AbstractFunctionModule',
	't3lib_SCbase' => 'TYPO3\\CMS\\Backend\\Module\\BaseScriptClass',
	't3lib_loadModules' => 'TYPO3\\CMS\\Backend\\Module\\ModuleLoader',
	'Typo3_ModuleStorage' => 'TYPO3\\CMS\\Backend\\Module\\ModuleStorage',
	't3lib_modSettings' => 'TYPO3\\CMS\\Backend\\ModuleSettings',
	't3lib_recordList' => 'TYPO3\\CMS\\Backend\\RecordList\\AbstractRecordList',
	'TBE_browser_recordList' => 'TYPO3\\CMS\\Backend\\RecordList\\ElementBrowserRecordList',
	't3lib_localRecordListGetTableHook' => 'TYPO3\\CMS\\Backend\\RecordList\\RecordListGetTableHookInterface',
	't3lib_rteapi' => 'TYPO3\\CMS\\Backend\\Rte\\AbstractRte',
	'extDirect_dataProvider_BackendLiveSearch' => 'TYPO3\\CMS\\Backend\\Search\\LiveSearch\\ExtDirect\\LiveSearchDataProvider',
	't3lib_search_liveSearch' => 'TYPO3\\CMS\\Backend\\Search\\LiveSearch\\LiveSearch',
	't3lib_search_liveSearch_queryParser' => 'TYPO3\\CMS\\Backend\\Search\\LiveSearch\\QueryParser',
	't3lib_spritemanager_AbstractHandler' => 'TYPO3\\CMS\\Backend\\Sprite\\AbstractSpriteHandler',
	't3lib_spritemanager_SimpleHandler' => 'TYPO3\\CMS\\Backend\\Sprite\\SimpleSpriteHandler',
	't3lib_spritemanager_SpriteBuildingHandler' => 'TYPO3\\CMS\\Backend\\Sprite\\SpriteBuildingHandler',
	't3lib_spritemanager_SpriteGenerator' => 'TYPO3\\CMS\\Backend\\Sprite\\SpriteGenerator',
	't3lib_spritemanager_SpriteIconGenerator' => 'TYPO3\\CMS\\Backend\\Sprite\\SpriteIconGeneratorInterface',
	't3lib_SpriteManager' => 'TYPO3\\CMS\\Backend\\Sprite\\SpriteManager',
	'bigDoc' => 'TYPO3\\CMS\\Backend\\Template\\BigDocumentTemplate',
	'template' => 'TYPO3\\CMS\\Backend\\Template\\DocumentTemplate',
	'frontendDoc' => 'TYPO3\\CMS\\Backend\\Template\\FrontendDocumentTemplate',
	'mediumDoc' => 'TYPO3\\CMS\\Backend\\Template\\MediumDocumentTemplate',
	'smallDoc' => 'TYPO3\\CMS\\Backend\\Template\\SmallDocumentTemplate',
	'noDoc' => 'TYPO3\\CMS\\Backend\\Template\\StandardDocumentTemplate',
	'backend_cacheActionsHook' => 'TYPO3\\CMS\\Backend\\Toolbar\\ClearCacheActionsHookInterface',
	'ClearCacheMenu' => 'TYPO3\\CMS\\Backend\\Toolbar\\ClearCacheToolbarItem',
	'LiveSearch' => 'TYPO3\\CMS\\Backend\\Toolbar\\LiveSearchToolbarItem',
	'ShortcutMenu' => 'TYPO3\\CMS\\Backend\\Toolbar\\ShortcutToolbarItem',
	'backend_toolbarItem' => 'TYPO3\\CMS\\Backend\\Toolbar\\ToolbarItemHookInterface',
	't3lib_tree_ExtDirect_AbstractExtJsTree' => 'TYPO3\\CMS\\Backend\\Tree\\AbstractExtJsTree',
	't3lib_tree_AbstractTree' => 'TYPO3\\CMS\\Backend\\Tree\\AbstractTree',
	't3lib_tree_AbstractDataProvider' => 'TYPO3\\CMS\\Backend\\Tree\\AbstractTreeDataProvider',
	't3lib_tree_AbstractStateProvider' => 'TYPO3\\CMS\\Backend\\Tree\\AbstractTreeStateProvider',
	't3lib_tree_ComparableNode' => 'TYPO3\\CMS\\Backend\\Tree\\ComparableNodeInterface',
	't3lib_tree_DraggableAndDropable' => 'TYPO3\\CMS\\Backend\\Tree\\DraggableAndDropableNodeInterface',
	't3lib_tree_LabelEditable' => 'TYPO3\\CMS\\Backend\\Tree\\EditableNodeLabelInterface',
	't3lib_tree_extdirect_Node' => 'TYPO3\\CMS\\Backend\\Tree\\ExtDirectNode',
	't3lib_tree_pagetree_interfaces_CollectionProcessor' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\CollectionProcessorInterface',
	't3lib_tree_pagetree_Commands' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\Commands',
	't3lib_tree_pagetree_DataProvider' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\DataProvider',
	't3lib_tree_pagetree_extdirect_Commands' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\ExtdirectTreeCommands',
	't3lib_tree_pagetree_extdirect_Tree' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\ExtdirectTreeDataProvide',
	't3lib_tree_pagetree_Indicator' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\Indicator',
	't3lib_tree_pagetree_interfaces_IndicatorProvider' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\IndicatorProviderInterface',
	't3lib_tree_pagetree_Node' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode',
	't3lib_tree_pagetree_NodeCollection' => 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNodeCollection',
	't3lib_tree_Renderer_Abstract' => 'TYPO3\\CMS\\Backend\\Tree\\Renderer\\AbstractTreeRenderer',
	't3lib_tree_Renderer_ExtJsJson' => 'TYPO3\\CMS\\Backend\\Tree\\Renderer\\ExtJsJsonTreeRenderer',
	't3lib_tree_Renderer_UnorderedList' => 'TYPO3\\CMS\\Backend\\Tree\\Renderer\\UnorderedListTreeRenderer',
	't3lib_tree_SortedNodeCollection' => 'TYPO3\\CMS\\Backend\\Tree\\SortedTreeNodeCollection',
	't3lib_tree_Node' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNode',
	't3lib_tree_NodeCollection' => 'TYPO3\\CMS\\Backend\\Tree\\TreeNodeCollection',
	't3lib_tree_RepresentationNode' => 'TYPO3\\CMS\\Backend\\Tree\\TreeRepresentationNode',
	't3lib_treeView' => 'TYPO3\\CMS\\Backend\\Tree\\View\\AbstractTreeView',
	't3lib_browseTree' => 'TYPO3\\CMS\\Backend\\Tree\\View\\BrowseTreeView',
	't3lib_folderTree' => 'TYPO3\\CMS\\Backend\\Tree\\View\\FolderTreeView',
	't3lib_positionMap' => 'TYPO3\\CMS\\Backend\\Tree\\View\\PagePositionMap',
	't3lib_pageTree' => 'TYPO3\\CMS\\Backend\\Tree\\View\\PageTreeView',
	'extDirect_DataProvider_BackendUserSettings' => 'TYPO3\\CMS\\Backend\\User\\ExtDirect\\BackendUserSettingsDataProvider',
	't3lib_BEfunc' => 'TYPO3\\CMS\\Backend\\Utility\\BackendUtility',
	't3lib_iconWorks' => 'TYPO3\\CMS\\Backend\\Utility\\IconUtility',
	'tx_cms_BackendLayout' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView',
	'ModuleMenu' => 'TYPO3\\CMS\\Backend\\View\\ModuleMenuView',
	'tx_cms_layout' => 'TYPO3\\CMS\\Backend\\View\\PageLayoutView',
	'tx_cms_layout_tt_content_drawItemHook' => 'TYPO3\\CMS\\Backend\\View\\PageLayoutViewDrawItemHookInterface',
	'webPageTree' => 'TYPO3\\CMS\\Backend\\View\\PageTreeView',
	'SC_t3lib_thumbs' => 'TYPO3\\CMS\\Backend\\View\\ThumbnailView',
	'TYPO3Logo' => 'TYPO3\\CMS\\Backend\\View\\LogoView',
	'cms_newContentElementWizardsHook' => 'TYPO3\\CMS\\Backend\\Wizard\\NewContentElementWizardHookInterface',
	'SC_wizard_tsconfig' => 'TYPO3\\CMS\\Backend\\Wizard\\TsconfigWizard',
	't3lib_extjs_ExtDirectRouter' => 'TYPO3\\CMS\\Core\\ExtDirect\\ExtDirectRouter',
	't3lib_extjs_ExtDirectApi' => 'TYPO3\\CMS\\Core\\ExtDirect\\ExtDirectApi',
	't3lib_extjs_ExtDirectDebug' => 'TYPO3\\CMS\\Core\\ExtDirect\\ExtDirectDebug',
);
?>