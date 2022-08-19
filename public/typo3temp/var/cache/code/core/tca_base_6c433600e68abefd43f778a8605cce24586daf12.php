<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'groupName' => 'backendaccess',
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'exclude' => 1,
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailablePageTypes',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExcludeFields',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExplicitAuthValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateCustomPermissionOptions',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableGroupModules',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'mfa_providers' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:mfa_providers',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Authentication\\Mfa\\MfaProviderRegistry->allowedProvidersItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT({#be_groups}.{#uid} = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'availableWidgets' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:availableWidgets',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Dashboard\\WidgetRegistry->widgetItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,
                groupMods, availableWidgets, mfa_providers, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny, allowed_languages, custom_options,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'nospace,trim,lower,unique,required',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,password,saltedPassword',
            'autocomplete' => false,
          ),
        ),
        'mfa' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.mfa',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'mfaInfo',
            'eval' => 'password',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'size' => 5,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim,email',
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isRecordCurrentUser:false',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'default' => 1,
          ),
        ),
        'admin' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'exclude' => 1,
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSystemLanguagesForBackend',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                0 => 'English',
                1 => 'default',
              ),
            ),
            'itemGroups' => 
            array (
              'installed' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.installed',
              'unavailable' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.unavailable',
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                disable, admin, username, password, mfa, avatar, usergroup, realName, email, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,
                userMods, allowed_languages,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, options, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                disable, admin, username, password, mfa, avatar, usergroup, realName, email, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig, db_mountpoints, options, file_mountpoints,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
        ),
        'searchFields' => 'title,nav_title,subtitle,url,slug,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
                2 => NULL,
                3 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
                3 => 'default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
                3 => 'default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
                2 => NULL,
                3 => 'link',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
                3 => 'link',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
                3 => 'link',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
                3 => 'link',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
                2 => NULL,
                3 => 'special',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
                3 => 'special',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
                3 => 'special',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
                3 => 'special',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
              'link' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition->isInPseudoSite:pages:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#uid}=###CURRENT_PID### AND {#pages}.{#sys_language_uid} = 0',
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'url',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                1 => 60,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                1 => 300,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                1 => 900,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                1 => 1800,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                1 => 3600,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                1 => 14400,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                1 => 86400,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                1 => 172800,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                1 => 604800,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                1 => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim,email',
            'max' => 255,
            'softref' => 'email[subst]',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                1 => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                1 => 'fe_users',
                2 => 'status-user-frontend',
              ),
            ),
            'default' => '',
          ),
        ),
        'fe_login_mode' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enable',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableAll',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
                1 => 3,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
                1 => 2,
              ),
            ),
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'fieldInformation' => 
            array (
              'backendLayoutFromParentPage' => 
              array (
                'renderType' => 'backendLayoutFromParentPage',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Provider (provider)',
                1 => 'EXT:provider/Configuration/TsConfig/Page/All.tsconfig',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.always',
                1 => 'always',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.hourly',
                1 => 'hourly',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.daily',
                1 => 'daily',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.weekly',
                1 => 'weekly',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.monthly',
                1 => 'monthly',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.yearly',
                1 => 'yearly',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.never',
                1 => 'never',
              ),
            ),
          ),
        ),
        'sitemap_priority' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '0.5',
            'items' => 
            array (
              0 => 
              array (
                0 => '0.0',
                1 => '0.0',
              ),
              1 => 
              array (
                0 => '0.1',
                1 => '0.1',
              ),
              2 => 
              array (
                0 => '0.2',
                1 => '0.2',
              ),
              3 => 
              array (
                0 => '0.3',
                1 => '0.3',
              ),
              4 => 
              array (
                0 => '0.4',
                1 => '0.4',
              ),
              5 => 
              array (
                0 => '0.5',
                1 => '0.5',
              ),
              6 => 
              array (
                0 => '0.6',
                1 => '0.6',
              ),
              7 => 
              array (
                0 => '0.7',
                1 => '0.7',
              ),
              8 => 
              array (
                0 => '0.8',
                1 => '0.8',
              ),
              9 => 
              array (
                0 => '0.9',
                1 => '0.9',
              ),
              10 => 
              array (
                0 => '1.0',
                1 => '1.0',
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
                  'blindLinkFields' => 'class,target,title',
                  'blindLinkOptions' => 'mail,folder,file,telephone',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'summary',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary',
                1 => 'summary',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary_large_image',
                1 => 'summary_large_image',
              ),
            ),
          ),
        ),
        'tx_faicon_icon' => 
        array (
          'label' => 'LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon',
          'exclude' => 0,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => 
            array (
              0 => 
              array (
                0 => '0',
                1 => 'fa fa-0',
              ),
              1 => 
              array (
                0 => '1',
                1 => 'fa fa-1',
              ),
              2 => 
              array (
                0 => '2',
                1 => 'fa fa-2',
              ),
              3 => 
              array (
                0 => '3',
                1 => 'fa fa-3',
              ),
              4 => 
              array (
                0 => '4',
                1 => 'fa fa-4',
              ),
              5 => 
              array (
                0 => '5',
                1 => 'fa fa-5',
              ),
              6 => 
              array (
                0 => '6',
                1 => 'fa fa-6',
              ),
              7 => 
              array (
                0 => '7',
                1 => 'fa fa-7',
              ),
              8 => 
              array (
                0 => '8',
                1 => 'fa fa-8',
              ),
              9 => 
              array (
                0 => '9',
                1 => 'fa fa-9',
              ),
              10 => 
              array (
                0 => '42.group',
                1 => 'fab fa-42-group',
              ),
              11 => 
              array (
                0 => '500px',
                1 => 'fab fa-500px',
              ),
              12 => 
              array (
                0 => 'A',
                1 => 'fa fa-a',
              ),
              13 => 
              array (
                0 => 'Accessible Icon',
                1 => 'fab fa-accessible-icon',
              ),
              14 => 
              array (
                0 => 'Accusoft',
                1 => 'fab fa-accusoft',
              ),
              15 => 
              array (
                0 => 'Address Book',
                1 => 'fa fa-address-book',
              ),
              16 => 
              array (
                0 => 'Address Card',
                1 => 'fa fa-address-card',
              ),
              17 => 
              array (
                0 => 'App.net',
                1 => 'fab fa-adn',
              ),
              18 => 
              array (
                0 => 'Adversal',
                1 => 'fab fa-adversal',
              ),
              19 => 
              array (
                0 => 'affiliatetheme',
                1 => 'fab fa-affiliatetheme',
              ),
              20 => 
              array (
                0 => 'Airbnb',
                1 => 'fab fa-airbnb',
              ),
              21 => 
              array (
                0 => 'Algolia',
                1 => 'fab fa-algolia',
              ),
              22 => 
              array (
                0 => 'align-center',
                1 => 'fa fa-align-center',
              ),
              23 => 
              array (
                0 => 'align-justify',
                1 => 'fa fa-align-justify',
              ),
              24 => 
              array (
                0 => 'align-left',
                1 => 'fa fa-align-left',
              ),
              25 => 
              array (
                0 => 'align-right',
                1 => 'fa fa-align-right',
              ),
              26 => 
              array (
                0 => 'Alipay',
                1 => 'fab fa-alipay',
              ),
              27 => 
              array (
                0 => 'Amazon',
                1 => 'fab fa-amazon',
              ),
              28 => 
              array (
                0 => 'Amazon Pay',
                1 => 'fab fa-amazon-pay',
              ),
              29 => 
              array (
                0 => 'Amilia',
                1 => 'fab fa-amilia',
              ),
              30 => 
              array (
                0 => 'Anchor',
                1 => 'fa fa-anchor',
              ),
              31 => 
              array (
                0 => 'Anchor Circle-check',
                1 => 'fa fa-anchor-circle-check',
              ),
              32 => 
              array (
                0 => 'Anchor Circle-exclamation',
                1 => 'fa fa-anchor-circle-exclamation',
              ),
              33 => 
              array (
                0 => 'Anchor Circle-xmark',
                1 => 'fa fa-anchor-circle-xmark',
              ),
              34 => 
              array (
                0 => 'Anchor Lock',
                1 => 'fa fa-anchor-lock',
              ),
              35 => 
              array (
                0 => 'Android',
                1 => 'fab fa-android',
              ),
              36 => 
              array (
                0 => 'AngelList',
                1 => 'fab fa-angellist',
              ),
              37 => 
              array (
                0 => 'angle-down',
                1 => 'fa fa-angle-down',
              ),
              38 => 
              array (
                0 => 'angle-left',
                1 => 'fa fa-angle-left',
              ),
              39 => 
              array (
                0 => 'angle-right',
                1 => 'fa fa-angle-right',
              ),
              40 => 
              array (
                0 => 'angle-up',
                1 => 'fa fa-angle-up',
              ),
              41 => 
              array (
                0 => 'Angles down',
                1 => 'fa fa-angles-down',
              ),
              42 => 
              array (
                0 => 'Angles left',
                1 => 'fa fa-angles-left',
              ),
              43 => 
              array (
                0 => 'Angles right',
                1 => 'fa fa-angles-right',
              ),
              44 => 
              array (
                0 => 'Angles up',
                1 => 'fa fa-angles-up',
              ),
              45 => 
              array (
                0 => 'Angry Creative',
                1 => 'fab fa-angrycreative',
              ),
              46 => 
              array (
                0 => 'Angular',
                1 => 'fab fa-angular',
              ),
              47 => 
              array (
                0 => 'Ankh',
                1 => 'fa fa-ankh',
              ),
              48 => 
              array (
                0 => 'App Store',
                1 => 'fab fa-app-store',
              ),
              49 => 
              array (
                0 => 'iOS App Store',
                1 => 'fab fa-app-store-ios',
              ),
              50 => 
              array (
                0 => 'Apper Systems AB',
                1 => 'fab fa-apper',
              ),
              51 => 
              array (
                0 => 'Apple',
                1 => 'fab fa-apple',
              ),
              52 => 
              array (
                0 => 'Apple Pay',
                1 => 'fab fa-apple-pay',
              ),
              53 => 
              array (
                0 => 'Apple whole',
                1 => 'fa fa-apple-whole',
              ),
              54 => 
              array (
                0 => 'Archway',
                1 => 'fa fa-archway',
              ),
              55 => 
              array (
                0 => 'Arrow down',
                1 => 'fa fa-arrow-down',
              ),
              56 => 
              array (
                0 => 'Arrow down 1 9',
                1 => 'fa fa-arrow-down-1-9',
              ),
              57 => 
              array (
                0 => 'Arrow down 9 1',
                1 => 'fa fa-arrow-down-9-1',
              ),
              58 => 
              array (
                0 => 'Arrow down a z',
                1 => 'fa fa-arrow-down-a-z',
              ),
              59 => 
              array (
                0 => 'Arrow down long',
                1 => 'fa fa-arrow-down-long',
              ),
              60 => 
              array (
                0 => 'Arrow down short wide',
                1 => 'fa fa-arrow-down-short-wide',
              ),
              61 => 
              array (
                0 => 'Arrow Down-up-across-line',
                1 => 'fa fa-arrow-down-up-across-line',
              ),
              62 => 
              array (
                0 => 'Arrow Down-up-lock',
                1 => 'fa fa-arrow-down-up-lock',
              ),
              63 => 
              array (
                0 => 'Arrow down wide short',
                1 => 'fa fa-arrow-down-wide-short',
              ),
              64 => 
              array (
                0 => 'Arrow down z a',
                1 => 'fa fa-arrow-down-z-a',
              ),
              65 => 
              array (
                0 => 'arrow-left',
                1 => 'fa fa-arrow-left',
              ),
              66 => 
              array (
                0 => 'Arrow left long',
                1 => 'fa fa-arrow-left-long',
              ),
              67 => 
              array (
                0 => 'Arrow pointer',
                1 => 'fa fa-arrow-pointer',
              ),
              68 => 
              array (
                0 => 'arrow right',
                1 => 'fa fa-arrow-right',
              ),
              69 => 
              array (
                0 => 'Arrow right arrow left',
                1 => 'fa fa-arrow-right-arrow-left',
              ),
              70 => 
              array (
                0 => 'Arrow right from bracket',
                1 => 'fa fa-arrow-right-from-bracket',
              ),
              71 => 
              array (
                0 => 'Arrow right long',
                1 => 'fa fa-arrow-right-long',
              ),
              72 => 
              array (
                0 => 'Arrow right to bracket',
                1 => 'fa fa-arrow-right-to-bracket',
              ),
              73 => 
              array (
                0 => 'Arrow Right-to-city',
                1 => 'fa fa-arrow-right-to-city',
              ),
              74 => 
              array (
                0 => 'Arrow Rotate Left',
                1 => 'fa fa-arrow-rotate-left',
              ),
              75 => 
              array (
                0 => 'Arrow Rotate Right',
                1 => 'fa fa-arrow-rotate-right',
              ),
              76 => 
              array (
                0 => 'Arrow trend down',
                1 => 'fa fa-arrow-trend-down',
              ),
              77 => 
              array (
                0 => 'Arrow trend up',
                1 => 'fa fa-arrow-trend-up',
              ),
              78 => 
              array (
                0 => 'Arrow turn down',
                1 => 'fa fa-arrow-turn-down',
              ),
              79 => 
              array (
                0 => 'Arrow turn up',
                1 => 'fa fa-arrow-turn-up',
              ),
              80 => 
              array (
                0 => 'Arrow up',
                1 => 'fa fa-arrow-up',
              ),
              81 => 
              array (
                0 => 'Arrow up 1 9',
                1 => 'fa fa-arrow-up-1-9',
              ),
              82 => 
              array (
                0 => 'Arrow up 9 1',
                1 => 'fa fa-arrow-up-9-1',
              ),
              83 => 
              array (
                0 => 'Arrow up a z',
                1 => 'fa fa-arrow-up-a-z',
              ),
              84 => 
              array (
                0 => 'Arrow up from bracket',
                1 => 'fa fa-arrow-up-from-bracket',
              ),
              85 => 
              array (
                0 => 'Arrow Up-from-ground-water',
                1 => 'fa fa-arrow-up-from-ground-water',
              ),
              86 => 
              array (
                0 => 'Arrow Up-from-water-pump',
                1 => 'fa fa-arrow-up-from-water-pump',
              ),
              87 => 
              array (
                0 => 'Arrow up long',
                1 => 'fa fa-arrow-up-long',
              ),
              88 => 
              array (
                0 => 'Arrow Up-right-dots',
                1 => 'fa fa-arrow-up-right-dots',
              ),
              89 => 
              array (
                0 => 'Arrow up right from square',
                1 => 'fa fa-arrow-up-right-from-square',
              ),
              90 => 
              array (
                0 => 'Arrow up short wide',
                1 => 'fa fa-arrow-up-short-wide',
              ),
              91 => 
              array (
                0 => 'Arrow up wide short',
                1 => 'fa fa-arrow-up-wide-short',
              ),
              92 => 
              array (
                0 => 'Arrow up z a',
                1 => 'fa fa-arrow-up-z-a',
              ),
              93 => 
              array (
                0 => 'Arrows Down-to-line',
                1 => 'fa fa-arrows-down-to-line',
              ),
              94 => 
              array (
                0 => 'Arrows Down-to-people',
                1 => 'fa fa-arrows-down-to-people',
              ),
              95 => 
              array (
                0 => 'Arrows left right',
                1 => 'fa fa-arrows-left-right',
              ),
              96 => 
              array (
                0 => 'Arrows Left-right-to-line',
                1 => 'fa fa-arrows-left-right-to-line',
              ),
              97 => 
              array (
                0 => 'Arrows rotate',
                1 => 'fa fa-arrows-rotate',
              ),
              98 => 
              array (
                0 => 'Arrows Spin',
                1 => 'fa fa-arrows-spin',
              ),
              99 => 
              array (
                0 => 'Arrows Split-up-and-left',
                1 => 'fa fa-arrows-split-up-and-left',
              ),
              100 => 
              array (
                0 => 'Arrows To-circle',
                1 => 'fa fa-arrows-to-circle',
              ),
              101 => 
              array (
                0 => 'Arrows To-dot',
                1 => 'fa fa-arrows-to-dot',
              ),
              102 => 
              array (
                0 => 'Arrows To-eye',
                1 => 'fa fa-arrows-to-eye',
              ),
              103 => 
              array (
                0 => 'Arrows Turn-right',
                1 => 'fa fa-arrows-turn-right',
              ),
              104 => 
              array (
                0 => 'Arrows Turn-to-dots',
                1 => 'fa fa-arrows-turn-to-dots',
              ),
              105 => 
              array (
                0 => 'Arrows up down',
                1 => 'fa fa-arrows-up-down',
              ),
              106 => 
              array (
                0 => 'Arrows up down left right',
                1 => 'fa fa-arrows-up-down-left-right',
              ),
              107 => 
              array (
                0 => 'Arrows Up-to-line',
                1 => 'fa fa-arrows-up-to-line',
              ),
              108 => 
              array (
                0 => 'Artstation',
                1 => 'fab fa-artstation',
              ),
              109 => 
              array (
                0 => 'asterisk',
                1 => 'fa fa-asterisk',
              ),
              110 => 
              array (
                0 => 'Asymmetrik, Ltd.',
                1 => 'fab fa-asymmetrik',
              ),
              111 => 
              array (
                0 => 'At',
                1 => 'fa fa-at',
              ),
              112 => 
              array (
                0 => 'Atlassian',
                1 => 'fab fa-atlassian',
              ),
              113 => 
              array (
                0 => 'Atom',
                1 => 'fa fa-atom',
              ),
              114 => 
              array (
                0 => 'Audible',
                1 => 'fab fa-audible',
              ),
              115 => 
              array (
                0 => 'Rectangle audio description',
                1 => 'fa fa-audio-description',
              ),
              116 => 
              array (
                0 => 'Austral Sign',
                1 => 'fa fa-austral-sign',
              ),
              117 => 
              array (
                0 => 'Autoprefixer',
                1 => 'fab fa-autoprefixer',
              ),
              118 => 
              array (
                0 => 'avianex',
                1 => 'fab fa-avianex',
              ),
              119 => 
              array (
                0 => 'Aviato',
                1 => 'fab fa-aviato',
              ),
              120 => 
              array (
                0 => 'Award',
                1 => 'fa fa-award',
              ),
              121 => 
              array (
                0 => 'Amazon Web Services (AWS)',
                1 => 'fab fa-aws',
              ),
              122 => 
              array (
                0 => 'B',
                1 => 'fa fa-b',
              ),
              123 => 
              array (
                0 => 'Baby',
                1 => 'fa fa-baby',
              ),
              124 => 
              array (
                0 => 'Baby Carriage',
                1 => 'fa fa-baby-carriage',
              ),
              125 => 
              array (
                0 => 'backward',
                1 => 'fa fa-backward',
              ),
              126 => 
              array (
                0 => 'Backward fast',
                1 => 'fa fa-backward-fast',
              ),
              127 => 
              array (
                0 => 'Backward step',
                1 => 'fa fa-backward-step',
              ),
              128 => 
              array (
                0 => 'Bacon',
                1 => 'fa fa-bacon',
              ),
              129 => 
              array (
                0 => 'Bacteria',
                1 => 'fa fa-bacteria',
              ),
              130 => 
              array (
                0 => 'Bacterium',
                1 => 'fa fa-bacterium',
              ),
              131 => 
              array (
                0 => 'Bag shopping',
                1 => 'fa fa-bag-shopping',
              ),
              132 => 
              array (
                0 => 'Bahá\'í',
                1 => 'fa fa-bahai',
              ),
              133 => 
              array (
                0 => 'Baht Sign',
                1 => 'fa fa-baht-sign',
              ),
              134 => 
              array (
                0 => 'ban',
                1 => 'fa fa-ban',
              ),
              135 => 
              array (
                0 => 'Ban smoking',
                1 => 'fa fa-ban-smoking',
              ),
              136 => 
              array (
                0 => 'Bandage',
                1 => 'fa fa-bandage',
              ),
              137 => 
              array (
                0 => 'Bandcamp',
                1 => 'fab fa-bandcamp',
              ),
              138 => 
              array (
                0 => 'barcode',
                1 => 'fa fa-barcode',
              ),
              139 => 
              array (
                0 => 'Bars',
                1 => 'fa fa-bars',
              ),
              140 => 
              array (
                0 => 'Bars progress',
                1 => 'fa fa-bars-progress',
              ),
              141 => 
              array (
                0 => 'Bars staggered',
                1 => 'fa fa-bars-staggered',
              ),
              142 => 
              array (
                0 => 'Baseball Ball',
                1 => 'fa fa-baseball',
              ),
              143 => 
              array (
                0 => 'Baseball bat ball',
                1 => 'fa fa-baseball-bat-ball',
              ),
              144 => 
              array (
                0 => 'Basket shopping',
                1 => 'fa fa-basket-shopping',
              ),
              145 => 
              array (
                0 => 'Basketball Ball',
                1 => 'fa fa-basketball',
              ),
              146 => 
              array (
                0 => 'Bath',
                1 => 'fa fa-bath',
              ),
              147 => 
              array (
                0 => 'Battery Empty',
                1 => 'fa fa-battery-empty',
              ),
              148 => 
              array (
                0 => 'Battery Full',
                1 => 'fa fa-battery-full',
              ),
              149 => 
              array (
                0 => 'Battery 1/2 Full',
                1 => 'fa fa-battery-half',
              ),
              150 => 
              array (
                0 => 'Battery 1/4 Full',
                1 => 'fa fa-battery-quarter',
              ),
              151 => 
              array (
                0 => 'Battery 3/4 Full',
                1 => 'fa fa-battery-three-quarters',
              ),
              152 => 
              array (
                0 => 'Battle.net',
                1 => 'fab fa-battle-net',
              ),
              153 => 
              array (
                0 => 'Bed',
                1 => 'fa fa-bed',
              ),
              154 => 
              array (
                0 => 'Bed pulse',
                1 => 'fa fa-bed-pulse',
              ),
              155 => 
              array (
                0 => 'Beer mug empty',
                1 => 'fa fa-beer-mug-empty',
              ),
              156 => 
              array (
                0 => 'Behance',
                1 => 'fab fa-behance',
              ),
              157 => 
              array (
                0 => 'Behance Square',
                1 => 'fab fa-behance-square',
              ),
              158 => 
              array (
                0 => 'bell',
                1 => 'fa fa-bell',
              ),
              159 => 
              array (
                0 => 'Bell concierge',
                1 => 'fa fa-bell-concierge',
              ),
              160 => 
              array (
                0 => 'Bell Slash',
                1 => 'fa fa-bell-slash',
              ),
              161 => 
              array (
                0 => 'Bezier Curve',
                1 => 'fa fa-bezier-curve',
              ),
              162 => 
              array (
                0 => 'Bicycle',
                1 => 'fa fa-bicycle',
              ),
              163 => 
              array (
                0 => 'Bilibili',
                1 => 'fab fa-bilibili',
              ),
              164 => 
              array (
                0 => 'BIMobject',
                1 => 'fab fa-bimobject',
              ),
              165 => 
              array (
                0 => 'Binoculars',
                1 => 'fa fa-binoculars',
              ),
              166 => 
              array (
                0 => 'Biohazard',
                1 => 'fa fa-biohazard',
              ),
              167 => 
              array (
                0 => 'Bitbucket',
                1 => 'fab fa-bitbucket',
              ),
              168 => 
              array (
                0 => 'Bitcoin',
                1 => 'fab fa-bitcoin',
              ),
              169 => 
              array (
                0 => 'Bitcoin Sign',
                1 => 'fa fa-bitcoin-sign',
              ),
              170 => 
              array (
                0 => 'Bity',
                1 => 'fab fa-bity',
              ),
              171 => 
              array (
                0 => 'Font Awesome Black Tie',
                1 => 'fab fa-black-tie',
              ),
              172 => 
              array (
                0 => 'BlackBerry',
                1 => 'fab fa-blackberry',
              ),
              173 => 
              array (
                0 => 'Blender',
                1 => 'fa fa-blender',
              ),
              174 => 
              array (
                0 => 'Blender Phone',
                1 => 'fa fa-blender-phone',
              ),
              175 => 
              array (
                0 => 'Blog',
                1 => 'fa fa-blog',
              ),
              176 => 
              array (
                0 => 'Blogger',
                1 => 'fab fa-blogger',
              ),
              177 => 
              array (
                0 => 'Blogger B',
                1 => 'fab fa-blogger-b',
              ),
              178 => 
              array (
                0 => 'Bluetooth',
                1 => 'fab fa-bluetooth',
              ),
              179 => 
              array (
                0 => 'Bluetooth',
                1 => 'fab fa-bluetooth-b',
              ),
              180 => 
              array (
                0 => 'bold',
                1 => 'fa fa-bold',
              ),
              181 => 
              array (
                0 => 'Bolt',
                1 => 'fa fa-bolt',
              ),
              182 => 
              array (
                0 => 'Lightning Bolt',
                1 => 'fa fa-bolt-lightning',
              ),
              183 => 
              array (
                0 => 'Bomb',
                1 => 'fa fa-bomb',
              ),
              184 => 
              array (
                0 => 'Bone',
                1 => 'fa fa-bone',
              ),
              185 => 
              array (
                0 => 'Bong',
                1 => 'fa fa-bong',
              ),
              186 => 
              array (
                0 => 'book',
                1 => 'fa fa-book',
              ),
              187 => 
              array (
                0 => 'Book atlas',
                1 => 'fa fa-book-atlas',
              ),
              188 => 
              array (
                0 => 'Book bible',
                1 => 'fa fa-book-bible',
              ),
              189 => 
              array (
                0 => 'Book Bookmark',
                1 => 'fa fa-book-bookmark',
              ),
              190 => 
              array (
                0 => 'Book journal whills',
                1 => 'fa fa-book-journal-whills',
              ),
              191 => 
              array (
                0 => 'Medical Book',
                1 => 'fa fa-book-medical',
              ),
              192 => 
              array (
                0 => 'Book Open',
                1 => 'fa fa-book-open',
              ),
              193 => 
              array (
                0 => 'Book open reader',
                1 => 'fa fa-book-open-reader',
              ),
              194 => 
              array (
                0 => 'Book quran',
                1 => 'fa fa-book-quran',
              ),
              195 => 
              array (
                0 => 'Book skull',
                1 => 'fa fa-book-skull',
              ),
              196 => 
              array (
                0 => 'bookmark',
                1 => 'fa fa-bookmark',
              ),
              197 => 
              array (
                0 => 'Bootstrap',
                1 => 'fab fa-bootstrap',
              ),
              198 => 
              array (
                0 => 'Border All',
                1 => 'fa fa-border-all',
              ),
              199 => 
              array (
                0 => 'Border None',
                1 => 'fa fa-border-none',
              ),
              200 => 
              array (
                0 => 'Border top left',
                1 => 'fa fa-border-top-left',
              ),
              201 => 
              array (
                0 => 'Bore Hole',
                1 => 'fa fa-bore-hole',
              ),
              202 => 
              array (
                0 => 'Bots',
                1 => 'fab fa-bots',
              ),
              203 => 
              array (
                0 => 'Bottle Droplet',
                1 => 'fa fa-bottle-droplet',
              ),
              204 => 
              array (
                0 => 'Bottle Water',
                1 => 'fa fa-bottle-water',
              ),
              205 => 
              array (
                0 => 'Bowl Food',
                1 => 'fa fa-bowl-food',
              ),
              206 => 
              array (
                0 => 'Bowl Rice',
                1 => 'fa fa-bowl-rice',
              ),
              207 => 
              array (
                0 => 'Bowling Ball',
                1 => 'fa fa-bowling-ball',
              ),
              208 => 
              array (
                0 => 'Box',
                1 => 'fa fa-box',
              ),
              209 => 
              array (
                0 => 'Box archive',
                1 => 'fa fa-box-archive',
              ),
              210 => 
              array (
                0 => 'Box Open',
                1 => 'fa fa-box-open',
              ),
              211 => 
              array (
                0 => 'Tissue Box',
                1 => 'fa fa-box-tissue',
              ),
              212 => 
              array (
                0 => 'Boxes Packing',
                1 => 'fa fa-boxes-packing',
              ),
              213 => 
              array (
                0 => 'Boxes stacked',
                1 => 'fa fa-boxes-stacked',
              ),
              214 => 
              array (
                0 => 'Braille',
                1 => 'fa fa-braille',
              ),
              215 => 
              array (
                0 => 'Brain',
                1 => 'fa fa-brain',
              ),
              216 => 
              array (
                0 => 'Brazilian Real Sign',
                1 => 'fa fa-brazilian-real-sign',
              ),
              217 => 
              array (
                0 => 'Bread Slice',
                1 => 'fa fa-bread-slice',
              ),
              218 => 
              array (
                0 => 'Bridge',
                1 => 'fa fa-bridge',
              ),
              219 => 
              array (
                0 => 'Bridge Circle-check',
                1 => 'fa fa-bridge-circle-check',
              ),
              220 => 
              array (
                0 => 'Bridge Circle-exclamation',
                1 => 'fa fa-bridge-circle-exclamation',
              ),
              221 => 
              array (
                0 => 'Bridge Circle-xmark',
                1 => 'fa fa-bridge-circle-xmark',
              ),
              222 => 
              array (
                0 => 'Bridge Lock',
                1 => 'fa fa-bridge-lock',
              ),
              223 => 
              array (
                0 => 'Bridge Water',
                1 => 'fa fa-bridge-water',
              ),
              224 => 
              array (
                0 => 'Briefcase',
                1 => 'fa fa-briefcase',
              ),
              225 => 
              array (
                0 => 'Medical Briefcase',
                1 => 'fa fa-briefcase-medical',
              ),
              226 => 
              array (
                0 => 'Broom',
                1 => 'fa fa-broom',
              ),
              227 => 
              array (
                0 => 'Broom and Ball',
                1 => 'fa fa-broom-ball',
              ),
              228 => 
              array (
                0 => 'Brush',
                1 => 'fa fa-brush',
              ),
              229 => 
              array (
                0 => 'BTC',
                1 => 'fab fa-btc',
              ),
              230 => 
              array (
                0 => 'Bucket',
                1 => 'fa fa-bucket',
              ),
              231 => 
              array (
                0 => 'Buffer',
                1 => 'fab fa-buffer',
              ),
              232 => 
              array (
                0 => 'Bug',
                1 => 'fa fa-bug',
              ),
              233 => 
              array (
                0 => 'Bug Slash',
                1 => 'fa fa-bug-slash',
              ),
              234 => 
              array (
                0 => 'Bugs',
                1 => 'fa fa-bugs',
              ),
              235 => 
              array (
                0 => 'Building',
                1 => 'fa fa-building',
              ),
              236 => 
              array (
                0 => 'Building Circle-arrow-right',
                1 => 'fa fa-building-circle-arrow-right',
              ),
              237 => 
              array (
                0 => 'Building Circle-check',
                1 => 'fa fa-building-circle-check',
              ),
              238 => 
              array (
                0 => 'Building Circle-exclamation',
                1 => 'fa fa-building-circle-exclamation',
              ),
              239 => 
              array (
                0 => 'Building Circle-xmark',
                1 => 'fa fa-building-circle-xmark',
              ),
              240 => 
              array (
                0 => 'Building with Columns',
                1 => 'fa fa-building-columns',
              ),
              241 => 
              array (
                0 => 'Building Flag',
                1 => 'fa fa-building-flag',
              ),
              242 => 
              array (
                0 => 'Building Lock',
                1 => 'fa fa-building-lock',
              ),
              243 => 
              array (
                0 => 'Building Ngo',
                1 => 'fa fa-building-ngo',
              ),
              244 => 
              array (
                0 => 'Building Shield',
                1 => 'fa fa-building-shield',
              ),
              245 => 
              array (
                0 => 'Building Un',
                1 => 'fa fa-building-un',
              ),
              246 => 
              array (
                0 => 'Building User',
                1 => 'fa fa-building-user',
              ),
              247 => 
              array (
                0 => 'Building Wheat',
                1 => 'fa fa-building-wheat',
              ),
              248 => 
              array (
                0 => 'bullhorn',
                1 => 'fa fa-bullhorn',
              ),
              249 => 
              array (
                0 => 'Bullseye',
                1 => 'fa fa-bullseye',
              ),
              250 => 
              array (
                0 => 'Burger',
                1 => 'fa fa-burger',
              ),
              251 => 
              array (
                0 => 'Büromöbel-Experte GmbH & Co. KG.',
                1 => 'fab fa-buromobelexperte',
              ),
              252 => 
              array (
                0 => 'Burst',
                1 => 'fa fa-burst',
              ),
              253 => 
              array (
                0 => 'Bus',
                1 => 'fa fa-bus',
              ),
              254 => 
              array (
                0 => 'Bus simple',
                1 => 'fa fa-bus-simple',
              ),
              255 => 
              array (
                0 => 'Briefcase clock',
                1 => 'fa fa-business-time',
              ),
              256 => 
              array (
                0 => 'Buy n Large',
                1 => 'fab fa-buy-n-large',
              ),
              257 => 
              array (
                0 => 'BuySellAds',
                1 => 'fab fa-buysellads',
              ),
              258 => 
              array (
                0 => 'C',
                1 => 'fa fa-c',
              ),
              259 => 
              array (
                0 => 'Cake candles',
                1 => 'fa fa-cake-candles',
              ),
              260 => 
              array (
                0 => 'Calculator',
                1 => 'fa fa-calculator',
              ),
              261 => 
              array (
                0 => 'Calendar',
                1 => 'fa fa-calendar',
              ),
              262 => 
              array (
                0 => 'Calendar Check',
                1 => 'fa fa-calendar-check',
              ),
              263 => 
              array (
                0 => 'Calendar with Day Focus',
                1 => 'fa fa-calendar-day',
              ),
              264 => 
              array (
                0 => 'Calendar Days',
                1 => 'fa fa-calendar-days',
              ),
              265 => 
              array (
                0 => 'Calendar Minus',
                1 => 'fa fa-calendar-minus',
              ),
              266 => 
              array (
                0 => 'Calendar Plus',
                1 => 'fa fa-calendar-plus',
              ),
              267 => 
              array (
                0 => 'Calendar with Week Focus',
                1 => 'fa fa-calendar-week',
              ),
              268 => 
              array (
                0 => 'Calendar X Mark',
                1 => 'fa fa-calendar-xmark',
              ),
              269 => 
              array (
                0 => 'camera',
                1 => 'fa fa-camera',
              ),
              270 => 
              array (
                0 => 'Retro Camera',
                1 => 'fa fa-camera-retro',
              ),
              271 => 
              array (
                0 => 'Camera Rotate',
                1 => 'fa fa-camera-rotate',
              ),
              272 => 
              array (
                0 => 'Campground',
                1 => 'fa fa-campground',
              ),
              273 => 
              array (
                0 => 'Canadian Maple Leaf',
                1 => 'fab fa-canadian-maple-leaf',
              ),
              274 => 
              array (
                0 => 'Candy Cane',
                1 => 'fa fa-candy-cane',
              ),
              275 => 
              array (
                0 => 'Cannabis',
                1 => 'fa fa-cannabis',
              ),
              276 => 
              array (
                0 => 'Capsules',
                1 => 'fa fa-capsules',
              ),
              277 => 
              array (
                0 => 'Car',
                1 => 'fa fa-car',
              ),
              278 => 
              array (
                0 => 'Car Battery',
                1 => 'fa fa-car-battery',
              ),
              279 => 
              array (
                0 => 'Car Crash',
                1 => 'fa fa-car-burst',
              ),
              280 => 
              array (
                0 => 'Car On',
                1 => 'fa fa-car-on',
              ),
              281 => 
              array (
                0 => 'Car rear',
                1 => 'fa fa-car-rear',
              ),
              282 => 
              array (
                0 => 'Car Side',
                1 => 'fa fa-car-side',
              ),
              283 => 
              array (
                0 => 'Car Tunnel',
                1 => 'fa fa-car-tunnel',
              ),
              284 => 
              array (
                0 => 'Caravan',
                1 => 'fa fa-caravan',
              ),
              285 => 
              array (
                0 => 'Caret Down',
                1 => 'fa fa-caret-down',
              ),
              286 => 
              array (
                0 => 'Caret Left',
                1 => 'fa fa-caret-left',
              ),
              287 => 
              array (
                0 => 'Caret Right',
                1 => 'fa fa-caret-right',
              ),
              288 => 
              array (
                0 => 'Caret Up',
                1 => 'fa fa-caret-up',
              ),
              289 => 
              array (
                0 => 'Carrot',
                1 => 'fa fa-carrot',
              ),
              290 => 
              array (
                0 => 'Shopping Cart Arrow Down',
                1 => 'fa fa-cart-arrow-down',
              ),
              291 => 
              array (
                0 => 'Cart flatbed',
                1 => 'fa fa-cart-flatbed',
              ),
              292 => 
              array (
                0 => 'Cart flatbed suitcase',
                1 => 'fa fa-cart-flatbed-suitcase',
              ),
              293 => 
              array (
                0 => 'Add to Shopping Cart',
                1 => 'fa fa-cart-plus',
              ),
              294 => 
              array (
                0 => 'Cart shopping',
                1 => 'fa fa-cart-shopping',
              ),
              295 => 
              array (
                0 => 'Cash Register',
                1 => 'fa fa-cash-register',
              ),
              296 => 
              array (
                0 => 'Cat',
                1 => 'fa fa-cat',
              ),
              297 => 
              array (
                0 => 'Amazon Pay Credit Card',
                1 => 'fab fa-cc-amazon-pay',
              ),
              298 => 
              array (
                0 => 'American Express Credit Card',
                1 => 'fab fa-cc-amex',
              ),
              299 => 
              array (
                0 => 'Apple Pay Credit Card',
                1 => 'fab fa-cc-apple-pay',
              ),
              300 => 
              array (
                0 => 'Diner\'s Club Credit Card',
                1 => 'fab fa-cc-diners-club',
              ),
              301 => 
              array (
                0 => 'Discover Credit Card',
                1 => 'fab fa-cc-discover',
              ),
              302 => 
              array (
                0 => 'JCB Credit Card',
                1 => 'fab fa-cc-jcb',
              ),
              303 => 
              array (
                0 => 'MasterCard Credit Card',
                1 => 'fab fa-cc-mastercard',
              ),
              304 => 
              array (
                0 => 'Paypal Credit Card',
                1 => 'fab fa-cc-paypal',
              ),
              305 => 
              array (
                0 => 'Stripe Credit Card',
                1 => 'fab fa-cc-stripe',
              ),
              306 => 
              array (
                0 => 'Visa Credit Card',
                1 => 'fab fa-cc-visa',
              ),
              307 => 
              array (
                0 => 'Cedi Sign',
                1 => 'fa fa-cedi-sign',
              ),
              308 => 
              array (
                0 => 'Cent Sign',
                1 => 'fa fa-cent-sign',
              ),
              309 => 
              array (
                0 => 'Centercode',
                1 => 'fab fa-centercode',
              ),
              310 => 
              array (
                0 => 'Centos',
                1 => 'fab fa-centos',
              ),
              311 => 
              array (
                0 => 'certificate',
                1 => 'fa fa-certificate',
              ),
              312 => 
              array (
                0 => 'Chair',
                1 => 'fa fa-chair',
              ),
              313 => 
              array (
                0 => 'Chalkboard',
                1 => 'fa fa-chalkboard',
              ),
              314 => 
              array (
                0 => 'Chalkboard user',
                1 => 'fa fa-chalkboard-user',
              ),
              315 => 
              array (
                0 => 'Champagne glasses',
                1 => 'fa fa-champagne-glasses',
              ),
              316 => 
              array (
                0 => 'Charging Station',
                1 => 'fa fa-charging-station',
              ),
              317 => 
              array (
                0 => 'Area Chart',
                1 => 'fa fa-chart-area',
              ),
              318 => 
              array (
                0 => 'Bar Chart',
                1 => 'fa fa-chart-bar',
              ),
              319 => 
              array (
                0 => 'Chart Column',
                1 => 'fa fa-chart-column',
              ),
              320 => 
              array (
                0 => 'Chart Gantt',
                1 => 'fa fa-chart-gantt',
              ),
              321 => 
              array (
                0 => 'Line Chart',
                1 => 'fa fa-chart-line',
              ),
              322 => 
              array (
                0 => 'Pie Chart',
                1 => 'fa fa-chart-pie',
              ),
              323 => 
              array (
                0 => 'Chart Simple',
                1 => 'fa fa-chart-simple',
              ),
              324 => 
              array (
                0 => 'Check',
                1 => 'fa fa-check',
              ),
              325 => 
              array (
                0 => 'Double Check',
                1 => 'fa fa-check-double',
              ),
              326 => 
              array (
                0 => 'Check to Slot',
                1 => 'fa fa-check-to-slot',
              ),
              327 => 
              array (
                0 => 'Cheese',
                1 => 'fa fa-cheese',
              ),
              328 => 
              array (
                0 => 'Chess',
                1 => 'fa fa-chess',
              ),
              329 => 
              array (
                0 => 'Chess Bishop',
                1 => 'fa fa-chess-bishop',
              ),
              330 => 
              array (
                0 => 'Chess Board',
                1 => 'fa fa-chess-board',
              ),
              331 => 
              array (
                0 => 'Chess King',
                1 => 'fa fa-chess-king',
              ),
              332 => 
              array (
                0 => 'Chess Knight',
                1 => 'fa fa-chess-knight',
              ),
              333 => 
              array (
                0 => 'Chess Pawn',
                1 => 'fa fa-chess-pawn',
              ),
              334 => 
              array (
                0 => 'Chess Queen',
                1 => 'fa fa-chess-queen',
              ),
              335 => 
              array (
                0 => 'Chess Rook',
                1 => 'fa fa-chess-rook',
              ),
              336 => 
              array (
                0 => 'chevron-down',
                1 => 'fa fa-chevron-down',
              ),
              337 => 
              array (
                0 => 'chevron-left',
                1 => 'fa fa-chevron-left',
              ),
              338 => 
              array (
                0 => 'chevron-right',
                1 => 'fa fa-chevron-right',
              ),
              339 => 
              array (
                0 => 'chevron-up',
                1 => 'fa fa-chevron-up',
              ),
              340 => 
              array (
                0 => 'Child',
                1 => 'fa fa-child',
              ),
              341 => 
              array (
                0 => 'Child Dress',
                1 => 'fa fa-child-dress',
              ),
              342 => 
              array (
                0 => 'Child Reaching',
                1 => 'fa fa-child-reaching',
              ),
              343 => 
              array (
                0 => 'Child Rifle',
                1 => 'fa fa-child-rifle',
              ),
              344 => 
              array (
                0 => 'Children',
                1 => 'fa fa-children',
              ),
              345 => 
              array (
                0 => 'Chrome',
                1 => 'fab fa-chrome',
              ),
              346 => 
              array (
                0 => 'Chromecast',
                1 => 'fab fa-chromecast',
              ),
              347 => 
              array (
                0 => 'Church',
                1 => 'fa fa-church',
              ),
              348 => 
              array (
                0 => 'Circle',
                1 => 'fa fa-circle',
              ),
              349 => 
              array (
                0 => 'Circle arrow down',
                1 => 'fa fa-circle-arrow-down',
              ),
              350 => 
              array (
                0 => 'Circle arrow left',
                1 => 'fa fa-circle-arrow-left',
              ),
              351 => 
              array (
                0 => 'Circle arrow right',
                1 => 'fa fa-circle-arrow-right',
              ),
              352 => 
              array (
                0 => 'Circle arrow up',
                1 => 'fa fa-circle-arrow-up',
              ),
              353 => 
              array (
                0 => 'Circle check',
                1 => 'fa fa-circle-check',
              ),
              354 => 
              array (
                0 => 'Circle chevron down',
                1 => 'fa fa-circle-chevron-down',
              ),
              355 => 
              array (
                0 => 'Circle chevron left',
                1 => 'fa fa-circle-chevron-left',
              ),
              356 => 
              array (
                0 => 'Circle chevron right',
                1 => 'fa fa-circle-chevron-right',
              ),
              357 => 
              array (
                0 => 'Circle chevron up',
                1 => 'fa fa-circle-chevron-up',
              ),
              358 => 
              array (
                0 => 'Circle dollar to slot',
                1 => 'fa fa-circle-dollar-to-slot',
              ),
              359 => 
              array (
                0 => 'Circle dot',
                1 => 'fa fa-circle-dot',
              ),
              360 => 
              array (
                0 => 'Circle down',
                1 => 'fa fa-circle-down',
              ),
              361 => 
              array (
                0 => 'Circle exclamation',
                1 => 'fa fa-circle-exclamation',
              ),
              362 => 
              array (
                0 => 'Circle h',
                1 => 'fa fa-circle-h',
              ),
              363 => 
              array (
                0 => 'Circle half stroke',
                1 => 'fa fa-circle-half-stroke',
              ),
              364 => 
              array (
                0 => 'Circle info',
                1 => 'fa fa-circle-info',
              ),
              365 => 
              array (
                0 => 'Circle left',
                1 => 'fa fa-circle-left',
              ),
              366 => 
              array (
                0 => 'Circle minus',
                1 => 'fa fa-circle-minus',
              ),
              367 => 
              array (
                0 => 'Circle Nodes',
                1 => 'fa fa-circle-nodes',
              ),
              368 => 
              array (
                0 => 'Circle Notched',
                1 => 'fa fa-circle-notch',
              ),
              369 => 
              array (
                0 => 'Circle pause',
                1 => 'fa fa-circle-pause',
              ),
              370 => 
              array (
                0 => 'Circle play',
                1 => 'fa fa-circle-play',
              ),
              371 => 
              array (
                0 => 'Circle plus',
                1 => 'fa fa-circle-plus',
              ),
              372 => 
              array (
                0 => 'Circle question',
                1 => 'fa fa-circle-question',
              ),
              373 => 
              array (
                0 => 'Circle radiation',
                1 => 'fa fa-circle-radiation',
              ),
              374 => 
              array (
                0 => 'Circle right',
                1 => 'fa fa-circle-right',
              ),
              375 => 
              array (
                0 => 'Circle stop',
                1 => 'fa fa-circle-stop',
              ),
              376 => 
              array (
                0 => 'Circle up',
                1 => 'fa fa-circle-up',
              ),
              377 => 
              array (
                0 => 'Circle user',
                1 => 'fa fa-circle-user',
              ),
              378 => 
              array (
                0 => 'Circle X Mark',
                1 => 'fa fa-circle-xmark',
              ),
              379 => 
              array (
                0 => 'City',
                1 => 'fa fa-city',
              ),
              380 => 
              array (
                0 => 'Clapperboard',
                1 => 'fa fa-clapperboard',
              ),
              381 => 
              array (
                0 => 'Clipboard',
                1 => 'fa fa-clipboard',
              ),
              382 => 
              array (
                0 => 'Clipboard with Check',
                1 => 'fa fa-clipboard-check',
              ),
              383 => 
              array (
                0 => 'Clipboard List',
                1 => 'fa fa-clipboard-list',
              ),
              384 => 
              array (
                0 => 'Clipboard Question',
                1 => 'fa fa-clipboard-question',
              ),
              385 => 
              array (
                0 => 'Clipboard with User',
                1 => 'fa fa-clipboard-user',
              ),
              386 => 
              array (
                0 => 'Clock',
                1 => 'fa fa-clock',
              ),
              387 => 
              array (
                0 => 'Clock Rotate Left',
                1 => 'fa fa-clock-rotate-left',
              ),
              388 => 
              array (
                0 => 'Clone',
                1 => 'fa fa-clone',
              ),
              389 => 
              array (
                0 => 'Closed Captioning',
                1 => 'fa fa-closed-captioning',
              ),
              390 => 
              array (
                0 => 'Cloud',
                1 => 'fa fa-cloud',
              ),
              391 => 
              array (
                0 => 'Cloud arrow down',
                1 => 'fa fa-cloud-arrow-down',
              ),
              392 => 
              array (
                0 => 'Cloud arrow up',
                1 => 'fa fa-cloud-arrow-up',
              ),
              393 => 
              array (
                0 => 'Cloud bolt',
                1 => 'fa fa-cloud-bolt',
              ),
              394 => 
              array (
                0 => 'Cloud with (a chance of) Meatball',
                1 => 'fa fa-cloud-meatball',
              ),
              395 => 
              array (
                0 => 'Cloud with Moon',
                1 => 'fa fa-cloud-moon',
              ),
              396 => 
              array (
                0 => 'Cloud with Moon and Rain',
                1 => 'fa fa-cloud-moon-rain',
              ),
              397 => 
              array (
                0 => 'Cloud with Rain',
                1 => 'fa fa-cloud-rain',
              ),
              398 => 
              array (
                0 => 'Cloud with Heavy Showers',
                1 => 'fa fa-cloud-showers-heavy',
              ),
              399 => 
              array (
                0 => 'Cloud Showers-water',
                1 => 'fa fa-cloud-showers-water',
              ),
              400 => 
              array (
                0 => 'Cloud with Sun',
                1 => 'fa fa-cloud-sun',
              ),
              401 => 
              array (
                0 => 'Cloud with Sun and Rain',
                1 => 'fa fa-cloud-sun-rain',
              ),
              402 => 
              array (
                0 => 'Cloudflare',
                1 => 'fab fa-cloudflare',
              ),
              403 => 
              array (
                0 => 'cloudscale.ch',
                1 => 'fab fa-cloudscale',
              ),
              404 => 
              array (
                0 => 'Cloudsmith',
                1 => 'fab fa-cloudsmith',
              ),
              405 => 
              array (
                0 => 'cloudversify',
                1 => 'fab fa-cloudversify',
              ),
              406 => 
              array (
                0 => 'Clover',
                1 => 'fa fa-clover',
              ),
              407 => 
              array (
                0 => 'Cmplid',
                1 => 'fab fa-cmplid',
              ),
              408 => 
              array (
                0 => 'Code',
                1 => 'fa fa-code',
              ),
              409 => 
              array (
                0 => 'Code Branch',
                1 => 'fa fa-code-branch',
              ),
              410 => 
              array (
                0 => 'Code Commit',
                1 => 'fa fa-code-commit',
              ),
              411 => 
              array (
                0 => 'Code Compare',
                1 => 'fa fa-code-compare',
              ),
              412 => 
              array (
                0 => 'Code Fork',
                1 => 'fa fa-code-fork',
              ),
              413 => 
              array (
                0 => 'Code Merge',
                1 => 'fa fa-code-merge',
              ),
              414 => 
              array (
                0 => 'Code Pull Request',
                1 => 'fa fa-code-pull-request',
              ),
              415 => 
              array (
                0 => 'Codepen',
                1 => 'fab fa-codepen',
              ),
              416 => 
              array (
                0 => 'Codie Pie',
                1 => 'fab fa-codiepie',
              ),
              417 => 
              array (
                0 => 'Coins',
                1 => 'fa fa-coins',
              ),
              418 => 
              array (
                0 => 'Colon Sign',
                1 => 'fa fa-colon-sign',
              ),
              419 => 
              array (
                0 => 'comment',
                1 => 'fa fa-comment',
              ),
              420 => 
              array (
                0 => 'Comment Dollar',
                1 => 'fa fa-comment-dollar',
              ),
              421 => 
              array (
                0 => 'Comment Dots',
                1 => 'fa fa-comment-dots',
              ),
              422 => 
              array (
                0 => 'Alternate Medical Chat',
                1 => 'fa fa-comment-medical',
              ),
              423 => 
              array (
                0 => 'Comment Slash',
                1 => 'fa fa-comment-slash',
              ),
              424 => 
              array (
                0 => 'Comment sms',
                1 => 'fa fa-comment-sms',
              ),
              425 => 
              array (
                0 => 'comments',
                1 => 'fa fa-comments',
              ),
              426 => 
              array (
                0 => 'Comments Dollar',
                1 => 'fa fa-comments-dollar',
              ),
              427 => 
              array (
                0 => 'Compact Disc',
                1 => 'fa fa-compact-disc',
              ),
              428 => 
              array (
                0 => 'Compass',
                1 => 'fa fa-compass',
              ),
              429 => 
              array (
                0 => 'Compass drafting',
                1 => 'fa fa-compass-drafting',
              ),
              430 => 
              array (
                0 => 'Compress',
                1 => 'fa fa-compress',
              ),
              431 => 
              array (
                0 => 'Computer',
                1 => 'fa fa-computer',
              ),
              432 => 
              array (
                0 => 'Computer mouse',
                1 => 'fa fa-computer-mouse',
              ),
              433 => 
              array (
                0 => 'Confluence',
                1 => 'fab fa-confluence',
              ),
              434 => 
              array (
                0 => 'Connect Develop',
                1 => 'fab fa-connectdevelop',
              ),
              435 => 
              array (
                0 => 'Contao',
                1 => 'fab fa-contao',
              ),
              436 => 
              array (
                0 => 'Cookie',
                1 => 'fa fa-cookie',
              ),
              437 => 
              array (
                0 => 'Cookie Bite',
                1 => 'fa fa-cookie-bite',
              ),
              438 => 
              array (
                0 => 'Copy',
                1 => 'fa fa-copy',
              ),
              439 => 
              array (
                0 => 'Copyright',
                1 => 'fa fa-copyright',
              ),
              440 => 
              array (
                0 => 'Cotton Bureau',
                1 => 'fab fa-cotton-bureau',
              ),
              441 => 
              array (
                0 => 'Couch',
                1 => 'fa fa-couch',
              ),
              442 => 
              array (
                0 => 'Cow',
                1 => 'fa fa-cow',
              ),
              443 => 
              array (
                0 => 'cPanel',
                1 => 'fab fa-cpanel',
              ),
              444 => 
              array (
                0 => 'Creative Commons',
                1 => 'fab fa-creative-commons',
              ),
              445 => 
              array (
                0 => 'Creative Commons Attribution',
                1 => 'fab fa-creative-commons-by',
              ),
              446 => 
              array (
                0 => 'Creative Commons Noncommercial',
                1 => 'fab fa-creative-commons-nc',
              ),
              447 => 
              array (
                0 => 'Creative Commons Noncommercial (Euro Sign)',
                1 => 'fab fa-creative-commons-nc-eu',
              ),
              448 => 
              array (
                0 => 'Creative Commons Noncommercial (Yen Sign)',
                1 => 'fab fa-creative-commons-nc-jp',
              ),
              449 => 
              array (
                0 => 'Creative Commons No Derivative Works',
                1 => 'fab fa-creative-commons-nd',
              ),
              450 => 
              array (
                0 => 'Creative Commons Public Domain',
                1 => 'fab fa-creative-commons-pd',
              ),
              451 => 
              array (
                0 => 'Alternate Creative Commons Public Domain',
                1 => 'fab fa-creative-commons-pd-alt',
              ),
              452 => 
              array (
                0 => 'Creative Commons Remix',
                1 => 'fab fa-creative-commons-remix',
              ),
              453 => 
              array (
                0 => 'Creative Commons Share Alike',
                1 => 'fab fa-creative-commons-sa',
              ),
              454 => 
              array (
                0 => 'Creative Commons Sampling',
                1 => 'fab fa-creative-commons-sampling',
              ),
              455 => 
              array (
                0 => 'Creative Commons Sampling +',
                1 => 'fab fa-creative-commons-sampling-plus',
              ),
              456 => 
              array (
                0 => 'Creative Commons Share',
                1 => 'fab fa-creative-commons-share',
              ),
              457 => 
              array (
                0 => 'Creative Commons CC0',
                1 => 'fab fa-creative-commons-zero',
              ),
              458 => 
              array (
                0 => 'Credit Card',
                1 => 'fa fa-credit-card',
              ),
              459 => 
              array (
                0 => 'Critical Role',
                1 => 'fab fa-critical-role',
              ),
              460 => 
              array (
                0 => 'crop',
                1 => 'fa fa-crop',
              ),
              461 => 
              array (
                0 => 'Crop simple',
                1 => 'fa fa-crop-simple',
              ),
              462 => 
              array (
                0 => 'Cross',
                1 => 'fa fa-cross',
              ),
              463 => 
              array (
                0 => 'Crosshairs',
                1 => 'fa fa-crosshairs',
              ),
              464 => 
              array (
                0 => 'Crow',
                1 => 'fa fa-crow',
              ),
              465 => 
              array (
                0 => 'Crown',
                1 => 'fa fa-crown',
              ),
              466 => 
              array (
                0 => 'Crutch',
                1 => 'fa fa-crutch',
              ),
              467 => 
              array (
                0 => 'Cruzeiro Sign',
                1 => 'fa fa-cruzeiro-sign',
              ),
              468 => 
              array (
                0 => 'CSS 3 Logo',
                1 => 'fab fa-css3',
              ),
              469 => 
              array (
                0 => 'Alternate CSS3 Logo',
                1 => 'fab fa-css3-alt',
              ),
              470 => 
              array (
                0 => 'Cube',
                1 => 'fa fa-cube',
              ),
              471 => 
              array (
                0 => 'Cubes',
                1 => 'fa fa-cubes',
              ),
              472 => 
              array (
                0 => 'Cubes Stacked',
                1 => 'fa fa-cubes-stacked',
              ),
              473 => 
              array (
                0 => 'Cuttlefish',
                1 => 'fab fa-cuttlefish',
              ),
              474 => 
              array (
                0 => 'D',
                1 => 'fa fa-d',
              ),
              475 => 
              array (
                0 => 'Dungeons & Dragons',
                1 => 'fab fa-d-and-d',
              ),
              476 => 
              array (
                0 => 'D&D Beyond',
                1 => 'fab fa-d-and-d-beyond',
              ),
              477 => 
              array (
                0 => 'dailymotion',
                1 => 'fab fa-dailymotion',
              ),
              478 => 
              array (
                0 => 'DashCube',
                1 => 'fab fa-dashcube',
              ),
              479 => 
              array (
                0 => 'Database',
                1 => 'fa fa-database',
              ),
              480 => 
              array (
                0 => 'Deezer',
                1 => 'fab fa-deezer',
              ),
              481 => 
              array (
                0 => 'Delete left',
                1 => 'fa fa-delete-left',
              ),
              482 => 
              array (
                0 => 'Delicious',
                1 => 'fab fa-delicious',
              ),
              483 => 
              array (
                0 => 'Democrat',
                1 => 'fa fa-democrat',
              ),
              484 => 
              array (
                0 => 'deploy.dog',
                1 => 'fab fa-deploydog',
              ),
              485 => 
              array (
                0 => 'Deskpro',
                1 => 'fab fa-deskpro',
              ),
              486 => 
              array (
                0 => 'Desktop',
                1 => 'fa fa-desktop',
              ),
              487 => 
              array (
                0 => 'DEV',
                1 => 'fab fa-dev',
              ),
              488 => 
              array (
                0 => 'deviantART',
                1 => 'fab fa-deviantart',
              ),
              489 => 
              array (
                0 => 'Dharmachakra',
                1 => 'fa fa-dharmachakra',
              ),
              490 => 
              array (
                0 => 'DHL',
                1 => 'fab fa-dhl',
              ),
              491 => 
              array (
                0 => 'Diagram Next',
                1 => 'fa fa-diagram-next',
              ),
              492 => 
              array (
                0 => 'Diagram Predecessor',
                1 => 'fa fa-diagram-predecessor',
              ),
              493 => 
              array (
                0 => 'Project Diagram',
                1 => 'fa fa-diagram-project',
              ),
              494 => 
              array (
                0 => 'Diagram Successor',
                1 => 'fa fa-diagram-successor',
              ),
              495 => 
              array (
                0 => 'Diamond',
                1 => 'fa fa-diamond',
              ),
              496 => 
              array (
                0 => 'Diamond turn right',
                1 => 'fa fa-diamond-turn-right',
              ),
              497 => 
              array (
                0 => 'Diaspora',
                1 => 'fab fa-diaspora',
              ),
              498 => 
              array (
                0 => 'Dice',
                1 => 'fa fa-dice',
              ),
              499 => 
              array (
                0 => 'Dice D20',
                1 => 'fa fa-dice-d20',
              ),
              500 => 
              array (
                0 => 'Dice D6',
                1 => 'fa fa-dice-d6',
              ),
              501 => 
              array (
                0 => 'Dice Five',
                1 => 'fa fa-dice-five',
              ),
              502 => 
              array (
                0 => 'Dice Four',
                1 => 'fa fa-dice-four',
              ),
              503 => 
              array (
                0 => 'Dice One',
                1 => 'fa fa-dice-one',
              ),
              504 => 
              array (
                0 => 'Dice Six',
                1 => 'fa fa-dice-six',
              ),
              505 => 
              array (
                0 => 'Dice Three',
                1 => 'fa fa-dice-three',
              ),
              506 => 
              array (
                0 => 'Dice Two',
                1 => 'fa fa-dice-two',
              ),
              507 => 
              array (
                0 => 'Digg Logo',
                1 => 'fab fa-digg',
              ),
              508 => 
              array (
                0 => 'Digital Ocean',
                1 => 'fab fa-digital-ocean',
              ),
              509 => 
              array (
                0 => 'Discord',
                1 => 'fab fa-discord',
              ),
              510 => 
              array (
                0 => 'Discourse',
                1 => 'fab fa-discourse',
              ),
              511 => 
              array (
                0 => 'Disease',
                1 => 'fa fa-disease',
              ),
              512 => 
              array (
                0 => 'Display',
                1 => 'fa fa-display',
              ),
              513 => 
              array (
                0 => 'Divide',
                1 => 'fa fa-divide',
              ),
              514 => 
              array (
                0 => 'DNA',
                1 => 'fa fa-dna',
              ),
              515 => 
              array (
                0 => 'DocHub',
                1 => 'fab fa-dochub',
              ),
              516 => 
              array (
                0 => 'Docker',
                1 => 'fab fa-docker',
              ),
              517 => 
              array (
                0 => 'Dog',
                1 => 'fa fa-dog',
              ),
              518 => 
              array (
                0 => 'Dollar Sign',
                1 => 'fa fa-dollar-sign',
              ),
              519 => 
              array (
                0 => 'Dolly',
                1 => 'fa fa-dolly',
              ),
              520 => 
              array (
                0 => 'Dong Sign',
                1 => 'fa fa-dong-sign',
              ),
              521 => 
              array (
                0 => 'Door Closed',
                1 => 'fa fa-door-closed',
              ),
              522 => 
              array (
                0 => 'Door Open',
                1 => 'fa fa-door-open',
              ),
              523 => 
              array (
                0 => 'Dove',
                1 => 'fa fa-dove',
              ),
              524 => 
              array (
                0 => 'Down left and up right to center',
                1 => 'fa fa-down-left-and-up-right-to-center',
              ),
              525 => 
              array (
                0 => 'Down long',
                1 => 'fa fa-down-long',
              ),
              526 => 
              array (
                0 => 'Download',
                1 => 'fa fa-download',
              ),
              527 => 
              array (
                0 => 'Draft2digital',
                1 => 'fab fa-draft2digital',
              ),
              528 => 
              array (
                0 => 'Dragon',
                1 => 'fa fa-dragon',
              ),
              529 => 
              array (
                0 => 'Draw Polygon',
                1 => 'fa fa-draw-polygon',
              ),
              530 => 
              array (
                0 => 'Dribbble',
                1 => 'fab fa-dribbble',
              ),
              531 => 
              array (
                0 => 'Dribbble Square',
                1 => 'fab fa-dribbble-square',
              ),
              532 => 
              array (
                0 => 'Dropbox',
                1 => 'fab fa-dropbox',
              ),
              533 => 
              array (
                0 => 'Droplet',
                1 => 'fa fa-droplet',
              ),
              534 => 
              array (
                0 => 'Droplet slash',
                1 => 'fa fa-droplet-slash',
              ),
              535 => 
              array (
                0 => 'Drum',
                1 => 'fa fa-drum',
              ),
              536 => 
              array (
                0 => 'Drum Steelpan',
                1 => 'fa fa-drum-steelpan',
              ),
              537 => 
              array (
                0 => 'Drumstick with Bite Taken Out',
                1 => 'fa fa-drumstick-bite',
              ),
              538 => 
              array (
                0 => 'Drupal Logo',
                1 => 'fab fa-drupal',
              ),
              539 => 
              array (
                0 => 'Dumbbell',
                1 => 'fa fa-dumbbell',
              ),
              540 => 
              array (
                0 => 'Dumpster',
                1 => 'fa fa-dumpster',
              ),
              541 => 
              array (
                0 => 'Dumpster Fire',
                1 => 'fa fa-dumpster-fire',
              ),
              542 => 
              array (
                0 => 'Dungeon',
                1 => 'fa fa-dungeon',
              ),
              543 => 
              array (
                0 => 'Dyalog',
                1 => 'fab fa-dyalog',
              ),
              544 => 
              array (
                0 => 'E',
                1 => 'fa fa-e',
              ),
              545 => 
              array (
                0 => 'Ear deaf',
                1 => 'fa fa-ear-deaf',
              ),
              546 => 
              array (
                0 => 'Ear listen',
                1 => 'fa fa-ear-listen',
              ),
              547 => 
              array (
                0 => 'Earlybirds',
                1 => 'fab fa-earlybirds',
              ),
              548 => 
              array (
                0 => 'Earth Africa',
                1 => 'fa fa-earth-africa',
              ),
              549 => 
              array (
                0 => 'Earth americas',
                1 => 'fa fa-earth-americas',
              ),
              550 => 
              array (
                0 => 'Earth Asia',
                1 => 'fa fa-earth-asia',
              ),
              551 => 
              array (
                0 => 'Earth Europe',
                1 => 'fa fa-earth-europe',
              ),
              552 => 
              array (
                0 => 'Earth Oceania',
                1 => 'fa fa-earth-oceania',
              ),
              553 => 
              array (
                0 => 'eBay',
                1 => 'fab fa-ebay',
              ),
              554 => 
              array (
                0 => 'Edge Browser',
                1 => 'fab fa-edge',
              ),
              555 => 
              array (
                0 => 'Edge Legacy Browser',
                1 => 'fab fa-edge-legacy',
              ),
              556 => 
              array (
                0 => 'Egg',
                1 => 'fa fa-egg',
              ),
              557 => 
              array (
                0 => 'eject',
                1 => 'fa fa-eject',
              ),
              558 => 
              array (
                0 => 'Elementor',
                1 => 'fab fa-elementor',
              ),
              559 => 
              array (
                0 => 'Elevator',
                1 => 'fa fa-elevator',
              ),
              560 => 
              array (
                0 => 'Ellipsis',
                1 => 'fa fa-ellipsis',
              ),
              561 => 
              array (
                0 => 'Ellipsis vertical',
                1 => 'fa fa-ellipsis-vertical',
              ),
              562 => 
              array (
                0 => 'Ello',
                1 => 'fab fa-ello',
              ),
              563 => 
              array (
                0 => 'Ember',
                1 => 'fab fa-ember',
              ),
              564 => 
              array (
                0 => 'Galactic Empire',
                1 => 'fab fa-empire',
              ),
              565 => 
              array (
                0 => 'Envelope',
                1 => 'fa fa-envelope',
              ),
              566 => 
              array (
                0 => 'Envelope Circle-check',
                1 => 'fa fa-envelope-circle-check',
              ),
              567 => 
              array (
                0 => 'Envelope Open',
                1 => 'fa fa-envelope-open',
              ),
              568 => 
              array (
                0 => 'Envelope Open-text',
                1 => 'fa fa-envelope-open-text',
              ),
              569 => 
              array (
                0 => 'Envelopes bulk',
                1 => 'fa fa-envelopes-bulk',
              ),
              570 => 
              array (
                0 => 'Envira Gallery',
                1 => 'fab fa-envira',
              ),
              571 => 
              array (
                0 => 'Equals',
                1 => 'fa fa-equals',
              ),
              572 => 
              array (
                0 => 'eraser',
                1 => 'fa fa-eraser',
              ),
              573 => 
              array (
                0 => 'Erlang',
                1 => 'fab fa-erlang',
              ),
              574 => 
              array (
                0 => 'Ethereum',
                1 => 'fab fa-ethereum',
              ),
              575 => 
              array (
                0 => 'Ethernet',
                1 => 'fa fa-ethernet',
              ),
              576 => 
              array (
                0 => 'Etsy',
                1 => 'fab fa-etsy',
              ),
              577 => 
              array (
                0 => 'Euro Sign',
                1 => 'fa fa-euro-sign',
              ),
              578 => 
              array (
                0 => 'Evernote',
                1 => 'fab fa-evernote',
              ),
              579 => 
              array (
                0 => 'exclamation',
                1 => 'fa fa-exclamation',
              ),
              580 => 
              array (
                0 => 'Expand',
                1 => 'fa fa-expand',
              ),
              581 => 
              array (
                0 => 'ExpeditedSSL',
                1 => 'fab fa-expeditedssl',
              ),
              582 => 
              array (
                0 => 'Explosion',
                1 => 'fa fa-explosion',
              ),
              583 => 
              array (
                0 => 'Eye',
                1 => 'fa fa-eye',
              ),
              584 => 
              array (
                0 => 'Eye Dropper',
                1 => 'fa fa-eye-dropper',
              ),
              585 => 
              array (
                0 => 'Eye low vision',
                1 => 'fa fa-eye-low-vision',
              ),
              586 => 
              array (
                0 => 'Eye Slash',
                1 => 'fa fa-eye-slash',
              ),
              587 => 
              array (
                0 => 'F',
                1 => 'fa fa-f',
              ),
              588 => 
              array (
                0 => 'Face angry',
                1 => 'fa fa-face-angry',
              ),
              589 => 
              array (
                0 => 'Face dizzy',
                1 => 'fa fa-face-dizzy',
              ),
              590 => 
              array (
                0 => 'Face flushed',
                1 => 'fa fa-face-flushed',
              ),
              591 => 
              array (
                0 => 'Face frown',
                1 => 'fa fa-face-frown',
              ),
              592 => 
              array (
                0 => 'Face frown open',
                1 => 'fa fa-face-frown-open',
              ),
              593 => 
              array (
                0 => 'Face grimace',
                1 => 'fa fa-face-grimace',
              ),
              594 => 
              array (
                0 => 'Face grin',
                1 => 'fa fa-face-grin',
              ),
              595 => 
              array (
                0 => 'Face grin beam',
                1 => 'fa fa-face-grin-beam',
              ),
              596 => 
              array (
                0 => 'Face grin beam sweat',
                1 => 'fa fa-face-grin-beam-sweat',
              ),
              597 => 
              array (
                0 => 'Face grin hearts',
                1 => 'fa fa-face-grin-hearts',
              ),
              598 => 
              array (
                0 => 'Face grin squint',
                1 => 'fa fa-face-grin-squint',
              ),
              599 => 
              array (
                0 => 'Face grin squint tears',
                1 => 'fa fa-face-grin-squint-tears',
              ),
              600 => 
              array (
                0 => 'Face grin stars',
                1 => 'fa fa-face-grin-stars',
              ),
              601 => 
              array (
                0 => 'Face grin tears',
                1 => 'fa fa-face-grin-tears',
              ),
              602 => 
              array (
                0 => 'Face grin tongue',
                1 => 'fa fa-face-grin-tongue',
              ),
              603 => 
              array (
                0 => 'Face grin tongue squint',
                1 => 'fa fa-face-grin-tongue-squint',
              ),
              604 => 
              array (
                0 => 'Face grin tongue wink',
                1 => 'fa fa-face-grin-tongue-wink',
              ),
              605 => 
              array (
                0 => 'Face grin wide',
                1 => 'fa fa-face-grin-wide',
              ),
              606 => 
              array (
                0 => 'Face grin wink',
                1 => 'fa fa-face-grin-wink',
              ),
              607 => 
              array (
                0 => 'Face kiss',
                1 => 'fa fa-face-kiss',
              ),
              608 => 
              array (
                0 => 'Face Kiss Beam',
                1 => 'fa fa-face-kiss-beam',
              ),
              609 => 
              array (
                0 => 'Face Kiss Wink Heart',
                1 => 'fa fa-face-kiss-wink-heart',
              ),
              610 => 
              array (
                0 => 'Face Laugh',
                1 => 'fa fa-face-laugh',
              ),
              611 => 
              array (
                0 => 'Face Laugh Beam',
                1 => 'fa fa-face-laugh-beam',
              ),
              612 => 
              array (
                0 => 'Face Laugh Squint',
                1 => 'fa fa-face-laugh-squint',
              ),
              613 => 
              array (
                0 => 'Face Laugh Wink',
                1 => 'fa fa-face-laugh-wink',
              ),
              614 => 
              array (
                0 => 'Face meh',
                1 => 'fa fa-face-meh',
              ),
              615 => 
              array (
                0 => 'Face Meh Blank',
                1 => 'fa fa-face-meh-blank',
              ),
              616 => 
              array (
                0 => 'Face Rolling Eyes',
                1 => 'fa fa-face-rolling-eyes',
              ),
              617 => 
              array (
                0 => 'Face Sad Cry',
                1 => 'fa fa-face-sad-cry',
              ),
              618 => 
              array (
                0 => 'Face Sad Tear',
                1 => 'fa fa-face-sad-tear',
              ),
              619 => 
              array (
                0 => 'Face Smile',
                1 => 'fa fa-face-smile',
              ),
              620 => 
              array (
                0 => 'Face Smile Beam',
                1 => 'fa fa-face-smile-beam',
              ),
              621 => 
              array (
                0 => 'Face Smile Wink',
                1 => 'fa fa-face-smile-wink',
              ),
              622 => 
              array (
                0 => 'Face Surprise',
                1 => 'fa fa-face-surprise',
              ),
              623 => 
              array (
                0 => 'Face Tired',
                1 => 'fa fa-face-tired',
              ),
              624 => 
              array (
                0 => 'Facebook',
                1 => 'fab fa-facebook',
              ),
              625 => 
              array (
                0 => 'Facebook F',
                1 => 'fab fa-facebook-f',
              ),
              626 => 
              array (
                0 => 'Facebook Messenger',
                1 => 'fab fa-facebook-messenger',
              ),
              627 => 
              array (
                0 => 'Facebook Square',
                1 => 'fab fa-facebook-square',
              ),
              628 => 
              array (
                0 => 'Fan',
                1 => 'fa fa-fan',
              ),
              629 => 
              array (
                0 => 'Fantasy Flight-games',
                1 => 'fab fa-fantasy-flight-games',
              ),
              630 => 
              array (
                0 => 'Faucet',
                1 => 'fa fa-faucet',
              ),
              631 => 
              array (
                0 => 'Faucet Drip',
                1 => 'fa fa-faucet-drip',
              ),
              632 => 
              array (
                0 => 'Fax',
                1 => 'fa fa-fax',
              ),
              633 => 
              array (
                0 => 'Feather',
                1 => 'fa fa-feather',
              ),
              634 => 
              array (
                0 => 'Feather pointed',
                1 => 'fa fa-feather-pointed',
              ),
              635 => 
              array (
                0 => 'FedEx',
                1 => 'fab fa-fedex',
              ),
              636 => 
              array (
                0 => 'Fedora',
                1 => 'fab fa-fedora',
              ),
              637 => 
              array (
                0 => 'Ferry',
                1 => 'fa fa-ferry',
              ),
              638 => 
              array (
                0 => 'Figma',
                1 => 'fab fa-figma',
              ),
              639 => 
              array (
                0 => 'File',
                1 => 'fa fa-file',
              ),
              640 => 
              array (
                0 => 'File arrow down',
                1 => 'fa fa-file-arrow-down',
              ),
              641 => 
              array (
                0 => 'File arrow up',
                1 => 'fa fa-file-arrow-up',
              ),
              642 => 
              array (
                0 => 'Audio File',
                1 => 'fa fa-file-audio',
              ),
              643 => 
              array (
                0 => 'File Circle-Check',
                1 => 'fa fa-file-circle-check',
              ),
              644 => 
              array (
                0 => 'File Circle-exclamation',
                1 => 'fa fa-file-circle-exclamation',
              ),
              645 => 
              array (
                0 => 'File Circle-minus',
                1 => 'fa fa-file-circle-minus',
              ),
              646 => 
              array (
                0 => 'File Circle-plus',
                1 => 'fa fa-file-circle-plus',
              ),
              647 => 
              array (
                0 => 'File Circle-question',
                1 => 'fa fa-file-circle-question',
              ),
              648 => 
              array (
                0 => 'File Circle-xmark',
                1 => 'fa fa-file-circle-xmark',
              ),
              649 => 
              array (
                0 => 'Code File',
                1 => 'fa fa-file-code',
              ),
              650 => 
              array (
                0 => 'File Contract',
                1 => 'fa fa-file-contract',
              ),
              651 => 
              array (
                0 => 'File CSV',
                1 => 'fa fa-file-csv',
              ),
              652 => 
              array (
                0 => 'Excel File',
                1 => 'fa fa-file-excel',
              ),
              653 => 
              array (
                0 => 'File Export',
                1 => 'fa fa-file-export',
              ),
              654 => 
              array (
                0 => 'Image File',
                1 => 'fa fa-file-image',
              ),
              655 => 
              array (
                0 => 'File Import',
                1 => 'fa fa-file-import',
              ),
              656 => 
              array (
                0 => 'File Invoice',
                1 => 'fa fa-file-invoice',
              ),
              657 => 
              array (
                0 => 'File Invoice with US Dollar',
                1 => 'fa fa-file-invoice-dollar',
              ),
              658 => 
              array (
                0 => 'File lines',
                1 => 'fa fa-file-lines',
              ),
              659 => 
              array (
                0 => 'Medical File',
                1 => 'fa fa-file-medical',
              ),
              660 => 
              array (
                0 => 'PDF File',
                1 => 'fa fa-file-pdf',
              ),
              661 => 
              array (
                0 => 'File pen',
                1 => 'fa fa-file-pen',
              ),
              662 => 
              array (
                0 => 'Powerpoint File',
                1 => 'fa fa-file-powerpoint',
              ),
              663 => 
              array (
                0 => 'File Prescription',
                1 => 'fa fa-file-prescription',
              ),
              664 => 
              array (
                0 => 'File Shield',
                1 => 'fa fa-file-shield',
              ),
              665 => 
              array (
                0 => 'File Signature',
                1 => 'fa fa-file-signature',
              ),
              666 => 
              array (
                0 => 'Video File',
                1 => 'fa fa-file-video',
              ),
              667 => 
              array (
                0 => 'File waveform',
                1 => 'fa fa-file-waveform',
              ),
              668 => 
              array (
                0 => 'Word File',
                1 => 'fa fa-file-word',
              ),
              669 => 
              array (
                0 => 'File zipper',
                1 => 'fa fa-file-zipper',
              ),
              670 => 
              array (
                0 => 'Fill',
                1 => 'fa fa-fill',
              ),
              671 => 
              array (
                0 => 'Fill Drip',
                1 => 'fa fa-fill-drip',
              ),
              672 => 
              array (
                0 => 'Film',
                1 => 'fa fa-film',
              ),
              673 => 
              array (
                0 => 'Filter',
                1 => 'fa fa-filter',
              ),
              674 => 
              array (
                0 => 'Filter Circle Dollar',
                1 => 'fa fa-filter-circle-dollar',
              ),
              675 => 
              array (
                0 => 'Filter Circle X Mark',
                1 => 'fa fa-filter-circle-xmark',
              ),
              676 => 
              array (
                0 => 'Fingerprint',
                1 => 'fa fa-fingerprint',
              ),
              677 => 
              array (
                0 => 'fire',
                1 => 'fa fa-fire',
              ),
              678 => 
              array (
                0 => 'Fire Burner',
                1 => 'fa fa-fire-burner',
              ),
              679 => 
              array (
                0 => 'fire-extinguisher',
                1 => 'fa fa-fire-extinguisher',
              ),
              680 => 
              array (
                0 => 'Fire flame curved',
                1 => 'fa fa-fire-flame-curved',
              ),
              681 => 
              array (
                0 => 'Fire flame simple',
                1 => 'fa fa-fire-flame-simple',
              ),
              682 => 
              array (
                0 => 'Firefox',
                1 => 'fab fa-firefox',
              ),
              683 => 
              array (
                0 => 'Firefox Browser',
                1 => 'fab fa-firefox-browser',
              ),
              684 => 
              array (
                0 => 'First Order',
                1 => 'fab fa-first-order',
              ),
              685 => 
              array (
                0 => 'Alternate First Order',
                1 => 'fab fa-first-order-alt',
              ),
              686 => 
              array (
                0 => 'firstdraft',
                1 => 'fab fa-firstdraft',
              ),
              687 => 
              array (
                0 => 'Fish',
                1 => 'fa fa-fish',
              ),
              688 => 
              array (
                0 => 'Fish Fins',
                1 => 'fa fa-fish-fins',
              ),
              689 => 
              array (
                0 => 'flag',
                1 => 'fa fa-flag',
              ),
              690 => 
              array (
                0 => 'flag-checkered',
                1 => 'fa fa-flag-checkered',
              ),
              691 => 
              array (
                0 => 'United States of America Flag',
                1 => 'fa fa-flag-usa',
              ),
              692 => 
              array (
                0 => 'Flask',
                1 => 'fa fa-flask',
              ),
              693 => 
              array (
                0 => 'Flask and Vial',
                1 => 'fa fa-flask-vial',
              ),
              694 => 
              array (
                0 => 'Flickr',
                1 => 'fab fa-flickr',
              ),
              695 => 
              array (
                0 => 'Flipboard',
                1 => 'fab fa-flipboard',
              ),
              696 => 
              array (
                0 => 'Floppy Disk',
                1 => 'fa fa-floppy-disk',
              ),
              697 => 
              array (
                0 => 'Florin Sign',
                1 => 'fa fa-florin-sign',
              ),
              698 => 
              array (
                0 => 'Fly',
                1 => 'fab fa-fly',
              ),
              699 => 
              array (
                0 => 'Folder',
                1 => 'fa fa-folder',
              ),
              700 => 
              array (
                0 => 'Folder Closed',
                1 => 'fa fa-folder-closed',
              ),
              701 => 
              array (
                0 => 'Folder Minus',
                1 => 'fa fa-folder-minus',
              ),
              702 => 
              array (
                0 => 'Folder Open',
                1 => 'fa fa-folder-open',
              ),
              703 => 
              array (
                0 => 'Folder Plus',
                1 => 'fa fa-folder-plus',
              ),
              704 => 
              array (
                0 => 'Folder Tree',
                1 => 'fa fa-folder-tree',
              ),
              705 => 
              array (
                0 => 'font',
                1 => 'fa fa-font',
              ),
              706 => 
              array (
                0 => 'Font Awesome',
                1 => 'fa fa-font-awesome',
              ),
              707 => 
              array (
                0 => 'Fonticons',
                1 => 'fab fa-fonticons',
              ),
              708 => 
              array (
                0 => 'Fonticons Fi',
                1 => 'fab fa-fonticons-fi',
              ),
              709 => 
              array (
                0 => 'Football Ball',
                1 => 'fa fa-football',
              ),
              710 => 
              array (
                0 => 'Fort Awesome',
                1 => 'fab fa-fort-awesome',
              ),
              711 => 
              array (
                0 => 'Alternate Fort Awesome',
                1 => 'fab fa-fort-awesome-alt',
              ),
              712 => 
              array (
                0 => 'Forumbee',
                1 => 'fab fa-forumbee',
              ),
              713 => 
              array (
                0 => 'forward',
                1 => 'fa fa-forward',
              ),
              714 => 
              array (
                0 => 'Forward fast',
                1 => 'fa fa-forward-fast',
              ),
              715 => 
              array (
                0 => 'Forward step',
                1 => 'fa fa-forward-step',
              ),
              716 => 
              array (
                0 => 'Foursquare',
                1 => 'fab fa-foursquare',
              ),
              717 => 
              array (
                0 => 'Franc Sign',
                1 => 'fa fa-franc-sign',
              ),
              718 => 
              array (
                0 => 'freeCodeCamp',
                1 => 'fab fa-free-code-camp',
              ),
              719 => 
              array (
                0 => 'FreeBSD',
                1 => 'fab fa-freebsd',
              ),
              720 => 
              array (
                0 => 'Frog',
                1 => 'fa fa-frog',
              ),
              721 => 
              array (
                0 => 'Fulcrum',
                1 => 'fab fa-fulcrum',
              ),
              722 => 
              array (
                0 => 'Futbol ball',
                1 => 'fa fa-futbol',
              ),
              723 => 
              array (
                0 => 'G',
                1 => 'fa fa-g',
              ),
              724 => 
              array (
                0 => 'Galactic Republic',
                1 => 'fab fa-galactic-republic',
              ),
              725 => 
              array (
                0 => 'Galactic Senate',
                1 => 'fab fa-galactic-senate',
              ),
              726 => 
              array (
                0 => 'Gamepad',
                1 => 'fa fa-gamepad',
              ),
              727 => 
              array (
                0 => 'Gas Pump',
                1 => 'fa fa-gas-pump',
              ),
              728 => 
              array (
                0 => 'Gauge med',
                1 => 'fa fa-gauge',
              ),
              729 => 
              array (
                0 => 'Gauge',
                1 => 'fa fa-gauge-high',
              ),
              730 => 
              array (
                0 => 'Gauge simple med',
                1 => 'fa fa-gauge-simple',
              ),
              731 => 
              array (
                0 => 'Gauge simple',
                1 => 'fa fa-gauge-simple-high',
              ),
              732 => 
              array (
                0 => 'Gavel',
                1 => 'fa fa-gavel',
              ),
              733 => 
              array (
                0 => 'Gear',
                1 => 'fa fa-gear',
              ),
              734 => 
              array (
                0 => 'Gears',
                1 => 'fa fa-gears',
              ),
              735 => 
              array (
                0 => 'Gem',
                1 => 'fa fa-gem',
              ),
              736 => 
              array (
                0 => 'Genderless',
                1 => 'fa fa-genderless',
              ),
              737 => 
              array (
                0 => 'Get Pocket',
                1 => 'fab fa-get-pocket',
              ),
              738 => 
              array (
                0 => 'GG Currency',
                1 => 'fab fa-gg',
              ),
              739 => 
              array (
                0 => 'GG Currency Circle',
                1 => 'fab fa-gg-circle',
              ),
              740 => 
              array (
                0 => 'Ghost',
                1 => 'fa fa-ghost',
              ),
              741 => 
              array (
                0 => 'gift',
                1 => 'fa fa-gift',
              ),
              742 => 
              array (
                0 => 'Gifts',
                1 => 'fa fa-gifts',
              ),
              743 => 
              array (
                0 => 'Git',
                1 => 'fab fa-git',
              ),
              744 => 
              array (
                0 => 'Git Alt',
                1 => 'fab fa-git-alt',
              ),
              745 => 
              array (
                0 => 'Git Square',
                1 => 'fab fa-git-square',
              ),
              746 => 
              array (
                0 => 'GitHub',
                1 => 'fab fa-github',
              ),
              747 => 
              array (
                0 => 'Alternate GitHub',
                1 => 'fab fa-github-alt',
              ),
              748 => 
              array (
                0 => 'GitHub Square',
                1 => 'fab fa-github-square',
              ),
              749 => 
              array (
                0 => 'GitKraken',
                1 => 'fab fa-gitkraken',
              ),
              750 => 
              array (
                0 => 'GitLab',
                1 => 'fab fa-gitlab',
              ),
              751 => 
              array (
                0 => 'Gitter',
                1 => 'fab fa-gitter',
              ),
              752 => 
              array (
                0 => 'Glass Water',
                1 => 'fa fa-glass-water',
              ),
              753 => 
              array (
                0 => 'Glass Water-droplet',
                1 => 'fa fa-glass-water-droplet',
              ),
              754 => 
              array (
                0 => 'Glasses',
                1 => 'fa fa-glasses',
              ),
              755 => 
              array (
                0 => 'Glide',
                1 => 'fab fa-glide',
              ),
              756 => 
              array (
                0 => 'Glide G',
                1 => 'fab fa-glide-g',
              ),
              757 => 
              array (
                0 => 'Globe',
                1 => 'fa fa-globe',
              ),
              758 => 
              array (
                0 => 'Gofore',
                1 => 'fab fa-gofore',
              ),
              759 => 
              array (
                0 => 'Go',
                1 => 'fab fa-golang',
              ),
              760 => 
              array (
                0 => 'Golf ball tee',
                1 => 'fa fa-golf-ball-tee',
              ),
              761 => 
              array (
                0 => 'Goodreads',
                1 => 'fab fa-goodreads',
              ),
              762 => 
              array (
                0 => 'Goodreads G',
                1 => 'fab fa-goodreads-g',
              ),
              763 => 
              array (
                0 => 'Google Logo',
                1 => 'fab fa-google',
              ),
              764 => 
              array (
                0 => 'Google Drive',
                1 => 'fab fa-google-drive',
              ),
              765 => 
              array (
                0 => 'Google Pay',
                1 => 'fab fa-google-pay',
              ),
              766 => 
              array (
                0 => 'Google Play',
                1 => 'fab fa-google-play',
              ),
              767 => 
              array (
                0 => 'Google Plus',
                1 => 'fab fa-google-plus',
              ),
              768 => 
              array (
                0 => 'Google Plus G',
                1 => 'fab fa-google-plus-g',
              ),
              769 => 
              array (
                0 => 'Google Plus Square',
                1 => 'fab fa-google-plus-square',
              ),
              770 => 
              array (
                0 => 'Google Wallet',
                1 => 'fab fa-google-wallet',
              ),
              771 => 
              array (
                0 => 'Gopuram',
                1 => 'fa fa-gopuram',
              ),
              772 => 
              array (
                0 => 'Graduation Cap',
                1 => 'fa fa-graduation-cap',
              ),
              773 => 
              array (
                0 => 'Gratipay (Gittip)',
                1 => 'fab fa-gratipay',
              ),
              774 => 
              array (
                0 => 'Grav',
                1 => 'fab fa-grav',
              ),
              775 => 
              array (
                0 => 'Greater Than',
                1 => 'fa fa-greater-than',
              ),
              776 => 
              array (
                0 => 'Greater Than Equal To',
                1 => 'fa fa-greater-than-equal',
              ),
              777 => 
              array (
                0 => 'Grip',
                1 => 'fa fa-grip',
              ),
              778 => 
              array (
                0 => 'Grip Lines',
                1 => 'fa fa-grip-lines',
              ),
              779 => 
              array (
                0 => 'Grip Lines Vertical',
                1 => 'fa fa-grip-lines-vertical',
              ),
              780 => 
              array (
                0 => 'Grip Vertical',
                1 => 'fa fa-grip-vertical',
              ),
              781 => 
              array (
                0 => 'Gripfire, Inc.',
                1 => 'fab fa-gripfire',
              ),
              782 => 
              array (
                0 => 'Group Arrows-rotate',
                1 => 'fa fa-group-arrows-rotate',
              ),
              783 => 
              array (
                0 => 'Grunt',
                1 => 'fab fa-grunt',
              ),
              784 => 
              array (
                0 => 'Guarani Sign',
                1 => 'fa fa-guarani-sign',
              ),
              785 => 
              array (
                0 => 'Guilded',
                1 => 'fab fa-guilded',
              ),
              786 => 
              array (
                0 => 'Guitar',
                1 => 'fa fa-guitar',
              ),
              787 => 
              array (
                0 => 'Gulp',
                1 => 'fab fa-gulp',
              ),
              788 => 
              array (
                0 => 'Gun',
                1 => 'fa fa-gun',
              ),
              789 => 
              array (
                0 => 'H',
                1 => 'fa fa-h',
              ),
              790 => 
              array (
                0 => 'Hacker News',
                1 => 'fab fa-hacker-news',
              ),
              791 => 
              array (
                0 => 'Hacker News Square',
                1 => 'fab fa-hacker-news-square',
              ),
              792 => 
              array (
                0 => 'Hackerrank',
                1 => 'fab fa-hackerrank',
              ),
              793 => 
              array (
                0 => 'Hammer',
                1 => 'fa fa-hammer',
              ),
              794 => 
              array (
                0 => 'Hamsa',
                1 => 'fa fa-hamsa',
              ),
              795 => 
              array (
                0 => 'Paper (Hand)',
                1 => 'fa fa-hand',
              ),
              796 => 
              array (
                0 => 'Rock (Hand)',
                1 => 'fa fa-hand-back-fist',
              ),
              797 => 
              array (
                0 => 'Hand dots',
                1 => 'fa fa-hand-dots',
              ),
              798 => 
              array (
                0 => 'Raised Fist',
                1 => 'fa fa-hand-fist',
              ),
              799 => 
              array (
                0 => 'Hand Holding',
                1 => 'fa fa-hand-holding',
              ),
              800 => 
              array (
                0 => 'Hand holding dollar',
                1 => 'fa fa-hand-holding-dollar',
              ),
              801 => 
              array (
                0 => 'Hand holding droplet',
                1 => 'fa fa-hand-holding-droplet',
              ),
              802 => 
              array (
                0 => 'Hand Holding-hand',
                1 => 'fa fa-hand-holding-hand',
              ),
              803 => 
              array (
                0 => 'Hand Holding Heart',
                1 => 'fa fa-hand-holding-heart',
              ),
              804 => 
              array (
                0 => 'Hand Holding Medical Cross',
                1 => 'fa fa-hand-holding-medical',
              ),
              805 => 
              array (
                0 => 'Lizard (Hand)',
                1 => 'fa fa-hand-lizard',
              ),
              806 => 
              array (
                0 => 'Hand with Middle Finger Raised',
                1 => 'fa fa-hand-middle-finger',
              ),
              807 => 
              array (
                0 => 'Peace (Hand)',
                1 => 'fa fa-hand-peace',
              ),
              808 => 
              array (
                0 => 'Hand Pointing Down',
                1 => 'fa fa-hand-point-down',
              ),
              809 => 
              array (
                0 => 'Hand Pointing Left',
                1 => 'fa fa-hand-point-left',
              ),
              810 => 
              array (
                0 => 'Hand Pointing Right',
                1 => 'fa fa-hand-point-right',
              ),
              811 => 
              array (
                0 => 'Hand Pointing Up',
                1 => 'fa fa-hand-point-up',
              ),
              812 => 
              array (
                0 => 'Pointer (Hand)',
                1 => 'fa fa-hand-pointer',
              ),
              813 => 
              array (
                0 => 'Scissors (Hand)',
                1 => 'fa fa-hand-scissors',
              ),
              814 => 
              array (
                0 => 'Hand Sparkles',
                1 => 'fa fa-hand-sparkles',
              ),
              815 => 
              array (
                0 => 'Spock (Hand)',
                1 => 'fa fa-hand-spock',
              ),
              816 => 
              array (
                0 => 'Handcuffs',
                1 => 'fa fa-handcuffs',
              ),
              817 => 
              array (
                0 => 'Hands',
                1 => 'fa fa-hands',
              ),
              818 => 
              array (
                0 => 'Hands american sign language interpreting',
                1 => 'fa fa-hands-asl-interpreting',
              ),
              819 => 
              array (
                0 => 'Hands Bound',
                1 => 'fa fa-hands-bound',
              ),
              820 => 
              array (
                0 => 'Hands bubbles',
                1 => 'fa fa-hands-bubbles',
              ),
              821 => 
              array (
                0 => 'Hands Clapping',
                1 => 'fa fa-hands-clapping',
              ),
              822 => 
              array (
                0 => 'Hands holding',
                1 => 'fa fa-hands-holding',
              ),
              823 => 
              array (
                0 => 'Hands Holding-child',
                1 => 'fa fa-hands-holding-child',
              ),
              824 => 
              array (
                0 => 'Hands Holding-circle',
                1 => 'fa fa-hands-holding-circle',
              ),
              825 => 
              array (
                0 => 'Hands praying',
                1 => 'fa fa-hands-praying',
              ),
              826 => 
              array (
                0 => 'Handshake',
                1 => 'fa fa-handshake',
              ),
              827 => 
              array (
                0 => 'Handshake angle',
                1 => 'fa fa-handshake-angle',
              ),
              828 => 
              array (
                0 => 'Handshake simple',
                1 => 'fa fa-handshake-simple',
              ),
              829 => 
              array (
                0 => 'Handshake simple slash',
                1 => 'fa fa-handshake-simple-slash',
              ),
              830 => 
              array (
                0 => 'Handshake Slash',
                1 => 'fa fa-handshake-slash',
              ),
              831 => 
              array (
                0 => 'Hanukiah',
                1 => 'fa fa-hanukiah',
              ),
              832 => 
              array (
                0 => 'Hard drive',
                1 => 'fa fa-hard-drive',
              ),
              833 => 
              array (
                0 => 'Hashnode',
                1 => 'fab fa-hashnode',
              ),
              834 => 
              array (
                0 => 'Hashtag',
                1 => 'fa fa-hashtag',
              ),
              835 => 
              array (
                0 => 'Cowboy Hat',
                1 => 'fa fa-hat-cowboy',
              ),
              836 => 
              array (
                0 => 'Cowboy Hat Side',
                1 => 'fa fa-hat-cowboy-side',
              ),
              837 => 
              array (
                0 => 'Wizard\'s Hat',
                1 => 'fa fa-hat-wizard',
              ),
              838 => 
              array (
                0 => 'Head Side Cough',
                1 => 'fa fa-head-side-cough',
              ),
              839 => 
              array (
                0 => 'Head Side-cough-slash',
                1 => 'fa fa-head-side-cough-slash',
              ),
              840 => 
              array (
                0 => 'Head Side Mask',
                1 => 'fa fa-head-side-mask',
              ),
              841 => 
              array (
                0 => 'Head Side Virus',
                1 => 'fa fa-head-side-virus',
              ),
              842 => 
              array (
                0 => 'heading',
                1 => 'fa fa-heading',
              ),
              843 => 
              array (
                0 => 'headphones',
                1 => 'fa fa-headphones',
              ),
              844 => 
              array (
                0 => 'Headphones simple',
                1 => 'fa fa-headphones-simple',
              ),
              845 => 
              array (
                0 => 'Headset',
                1 => 'fa fa-headset',
              ),
              846 => 
              array (
                0 => 'Heart',
                1 => 'fa fa-heart',
              ),
              847 => 
              array (
                0 => 'Heart Circle-bolt',
                1 => 'fa fa-heart-circle-bolt',
              ),
              848 => 
              array (
                0 => 'Heart Circle-check',
                1 => 'fa fa-heart-circle-check',
              ),
              849 => 
              array (
                0 => 'Heart Circle-exclamation',
                1 => 'fa fa-heart-circle-exclamation',
              ),
              850 => 
              array (
                0 => 'Heart Circle-minus',
                1 => 'fa fa-heart-circle-minus',
              ),
              851 => 
              array (
                0 => 'Heart Circle-plus',
                1 => 'fa fa-heart-circle-plus',
              ),
              852 => 
              array (
                0 => 'Heart Circle-xmark',
                1 => 'fa fa-heart-circle-xmark',
              ),
              853 => 
              array (
                0 => 'Heart crack',
                1 => 'fa fa-heart-crack',
              ),
              854 => 
              array (
                0 => 'Heart pulse',
                1 => 'fa fa-heart-pulse',
              ),
              855 => 
              array (
                0 => 'Helicopter',
                1 => 'fa fa-helicopter',
              ),
              856 => 
              array (
                0 => 'Helicopter Symbol',
                1 => 'fa fa-helicopter-symbol',
              ),
              857 => 
              array (
                0 => 'Helmet safety',
                1 => 'fa fa-helmet-safety',
              ),
              858 => 
              array (
                0 => 'Helmet Un',
                1 => 'fa fa-helmet-un',
              ),
              859 => 
              array (
                0 => 'Highlighter',
                1 => 'fa fa-highlighter',
              ),
              860 => 
              array (
                0 => 'Hill Avalanche',
                1 => 'fa fa-hill-avalanche',
              ),
              861 => 
              array (
                0 => 'Hill Rockslide',
                1 => 'fa fa-hill-rockslide',
              ),
              862 => 
              array (
                0 => 'Hippo',
                1 => 'fa fa-hippo',
              ),
              863 => 
              array (
                0 => 'Hips',
                1 => 'fab fa-hips',
              ),
              864 => 
              array (
                0 => 'HireAHelper',
                1 => 'fab fa-hire-a-helper',
              ),
              865 => 
              array (
                0 => 'Hive Blockchain Network',
                1 => 'fab fa-hive',
              ),
              866 => 
              array (
                0 => 'Hockey Puck',
                1 => 'fa fa-hockey-puck',
              ),
              867 => 
              array (
                0 => 'Holly Berry',
                1 => 'fa fa-holly-berry',
              ),
              868 => 
              array (
                0 => 'Hooli',
                1 => 'fab fa-hooli',
              ),
              869 => 
              array (
                0 => 'Hornbill',
                1 => 'fab fa-hornbill',
              ),
              870 => 
              array (
                0 => 'Horse',
                1 => 'fa fa-horse',
              ),
              871 => 
              array (
                0 => 'Horse Head',
                1 => 'fa fa-horse-head',
              ),
              872 => 
              array (
                0 => 'hospital',
                1 => 'fa fa-hospital',
              ),
              873 => 
              array (
                0 => 'Hospital with User',
                1 => 'fa fa-hospital-user',
              ),
              874 => 
              array (
                0 => 'Hot tub person',
                1 => 'fa fa-hot-tub-person',
              ),
              875 => 
              array (
                0 => 'Hot Dog',
                1 => 'fa fa-hotdog',
              ),
              876 => 
              array (
                0 => 'Hotel',
                1 => 'fa fa-hotel',
              ),
              877 => 
              array (
                0 => 'Hotjar',
                1 => 'fab fa-hotjar',
              ),
              878 => 
              array (
                0 => 'Hourglass',
                1 => 'fa fa-hourglass',
              ),
              879 => 
              array (
                0 => 'Hourglass empty',
                1 => 'fa fa-hourglass-empty',
              ),
              880 => 
              array (
                0 => 'Hourglass End',
                1 => 'fa fa-hourglass-end',
              ),
              881 => 
              array (
                0 => 'Hourglass Start',
                1 => 'fa fa-hourglass-start',
              ),
              882 => 
              array (
                0 => 'House',
                1 => 'fa fa-house',
              ),
              883 => 
              array (
                0 => 'House Chimney',
                1 => 'fa fa-house-chimney',
              ),
              884 => 
              array (
                0 => 'House crack',
                1 => 'fa fa-house-chimney-crack',
              ),
              885 => 
              array (
                0 => 'House medical',
                1 => 'fa fa-house-chimney-medical',
              ),
              886 => 
              array (
                0 => 'House User',
                1 => 'fa fa-house-chimney-user',
              ),
              887 => 
              array (
                0 => 'House with Window + Chimney',
                1 => 'fa fa-house-chimney-window',
              ),
              888 => 
              array (
                0 => 'House Circle-check',
                1 => 'fa fa-house-circle-check',
              ),
              889 => 
              array (
                0 => 'House Circle-exclamation',
                1 => 'fa fa-house-circle-exclamation',
              ),
              890 => 
              array (
                0 => 'House Circle-xmark',
                1 => 'fa fa-house-circle-xmark',
              ),
              891 => 
              array (
                0 => 'House Simple Crack',
                1 => 'fa fa-house-crack',
              ),
              892 => 
              array (
                0 => 'House Fire',
                1 => 'fa fa-house-fire',
              ),
              893 => 
              array (
                0 => 'House Flag',
                1 => 'fa fa-house-flag',
              ),
              894 => 
              array (
                0 => 'House Flood',
                1 => 'fa fa-house-flood-water',
              ),
              895 => 
              array (
                0 => 'House Flood-circle-arrow-right',
                1 => 'fa fa-house-flood-water-circle-arrow-right',
              ),
              896 => 
              array (
                0 => 'House laptop',
                1 => 'fa fa-house-laptop',
              ),
              897 => 
              array (
                0 => 'House Lock',
                1 => 'fa fa-house-lock',
              ),
              898 => 
              array (
                0 => 'House Simple Medical',
                1 => 'fa fa-house-medical',
              ),
              899 => 
              array (
                0 => 'House Medical-circle-check',
                1 => 'fa fa-house-medical-circle-check',
              ),
              900 => 
              array (
                0 => 'House Medical-circle-exclamation',
                1 => 'fa fa-house-medical-circle-exclamation',
              ),
              901 => 
              array (
                0 => 'House Medical-circle-xmark',
                1 => 'fa fa-house-medical-circle-xmark',
              ),
              902 => 
              array (
                0 => 'House Medical-flag',
                1 => 'fa fa-house-medical-flag',
              ),
              903 => 
              array (
                0 => 'House Signal',
                1 => 'fa fa-house-signal',
              ),
              904 => 
              array (
                0 => 'House Tsunami',
                1 => 'fa fa-house-tsunami',
              ),
              905 => 
              array (
                0 => 'Home User',
                1 => 'fa fa-house-user',
              ),
              906 => 
              array (
                0 => 'Houzz',
                1 => 'fab fa-houzz',
              ),
              907 => 
              array (
                0 => 'Hryvnia sign',
                1 => 'fa fa-hryvnia-sign',
              ),
              908 => 
              array (
                0 => 'HTML 5 Logo',
                1 => 'fab fa-html5',
              ),
              909 => 
              array (
                0 => 'HubSpot',
                1 => 'fab fa-hubspot',
              ),
              910 => 
              array (
                0 => 'Hurricane',
                1 => 'fa fa-hurricane',
              ),
              911 => 
              array (
                0 => 'I',
                1 => 'fa fa-i',
              ),
              912 => 
              array (
                0 => 'I Beam Cursor',
                1 => 'fa fa-i-cursor',
              ),
              913 => 
              array (
                0 => 'Ice Cream',
                1 => 'fa fa-ice-cream',
              ),
              914 => 
              array (
                0 => 'Icicles',
                1 => 'fa fa-icicles',
              ),
              915 => 
              array (
                0 => 'Icons',
                1 => 'fa fa-icons',
              ),
              916 => 
              array (
                0 => 'Identification Badge',
                1 => 'fa fa-id-badge',
              ),
              917 => 
              array (
                0 => 'Identification Card',
                1 => 'fa fa-id-card',
              ),
              918 => 
              array (
                0 => 'Id card clip',
                1 => 'fa fa-id-card-clip',
              ),
              919 => 
              array (
                0 => 'iDeal',
                1 => 'fab fa-ideal',
              ),
              920 => 
              array (
                0 => 'Igloo',
                1 => 'fa fa-igloo',
              ),
              921 => 
              array (
                0 => 'Image',
                1 => 'fa fa-image',
              ),
              922 => 
              array (
                0 => 'Image portrait',
                1 => 'fa fa-image-portrait',
              ),
              923 => 
              array (
                0 => 'Images',
                1 => 'fa fa-images',
              ),
              924 => 
              array (
                0 => 'IMDB',
                1 => 'fab fa-imdb',
              ),
              925 => 
              array (
                0 => 'inbox',
                1 => 'fa fa-inbox',
              ),
              926 => 
              array (
                0 => 'Indent',
                1 => 'fa fa-indent',
              ),
              927 => 
              array (
                0 => 'Indian Rupee-sign',
                1 => 'fa fa-indian-rupee-sign',
              ),
              928 => 
              array (
                0 => 'Industry',
                1 => 'fa fa-industry',
              ),
              929 => 
              array (
                0 => 'Infinity',
                1 => 'fa fa-infinity',
              ),
              930 => 
              array (
                0 => 'Info',
                1 => 'fa fa-info',
              ),
              931 => 
              array (
                0 => 'Instagram',
                1 => 'fab fa-instagram',
              ),
              932 => 
              array (
                0 => 'Instagram Square',
                1 => 'fab fa-instagram-square',
              ),
              933 => 
              array (
                0 => 'InstaLOD',
                1 => 'fab fa-instalod',
              ),
              934 => 
              array (
                0 => 'Intercom',
                1 => 'fab fa-intercom',
              ),
              935 => 
              array (
                0 => 'Internet-explorer',
                1 => 'fab fa-internet-explorer',
              ),
              936 => 
              array (
                0 => 'InVision',
                1 => 'fab fa-invision',
              ),
              937 => 
              array (
                0 => 'ioxhost',
                1 => 'fab fa-ioxhost',
              ),
              938 => 
              array (
                0 => 'italic',
                1 => 'fa fa-italic',
              ),
              939 => 
              array (
                0 => 'itch.io',
                1 => 'fab fa-itch-io',
              ),
              940 => 
              array (
                0 => 'iTunes',
                1 => 'fab fa-itunes',
              ),
              941 => 
              array (
                0 => 'Itunes Note',
                1 => 'fab fa-itunes-note',
              ),
              942 => 
              array (
                0 => 'J',
                1 => 'fa fa-j',
              ),
              943 => 
              array (
                0 => 'Jar',
                1 => 'fa fa-jar',
              ),
              944 => 
              array (
                0 => 'Jar Wheat',
                1 => 'fa fa-jar-wheat',
              ),
              945 => 
              array (
                0 => 'Java',
                1 => 'fab fa-java',
              ),
              946 => 
              array (
                0 => 'Jedi',
                1 => 'fa fa-jedi',
              ),
              947 => 
              array (
                0 => 'Jedi Order',
                1 => 'fab fa-jedi-order',
              ),
              948 => 
              array (
                0 => 'Jenkis',
                1 => 'fab fa-jenkins',
              ),
              949 => 
              array (
                0 => 'Jet fighter',
                1 => 'fa fa-jet-fighter',
              ),
              950 => 
              array (
                0 => 'Jet Fighter Up',
                1 => 'fa fa-jet-fighter-up',
              ),
              951 => 
              array (
                0 => 'Jira',
                1 => 'fab fa-jira',
              ),
              952 => 
              array (
                0 => 'Joget',
                1 => 'fab fa-joget',
              ),
              953 => 
              array (
                0 => 'Joint',
                1 => 'fa fa-joint',
              ),
              954 => 
              array (
                0 => 'Joomla Logo',
                1 => 'fab fa-joomla',
              ),
              955 => 
              array (
                0 => 'JavaScript (JS)',
                1 => 'fab fa-js',
              ),
              956 => 
              array (
                0 => 'JavaScript (JS) Square',
                1 => 'fab fa-js-square',
              ),
              957 => 
              array (
                0 => 'jsFiddle',
                1 => 'fab fa-jsfiddle',
              ),
              958 => 
              array (
                0 => 'Jug Detergent',
                1 => 'fa fa-jug-detergent',
              ),
              959 => 
              array (
                0 => 'K',
                1 => 'fa fa-k',
              ),
              960 => 
              array (
                0 => 'Kaaba',
                1 => 'fa fa-kaaba',
              ),
              961 => 
              array (
                0 => 'Kaggle',
                1 => 'fab fa-kaggle',
              ),
              962 => 
              array (
                0 => 'key',
                1 => 'fa fa-key',
              ),
              963 => 
              array (
                0 => 'Keybase',
                1 => 'fab fa-keybase',
              ),
              964 => 
              array (
                0 => 'Keyboard',
                1 => 'fa fa-keyboard',
              ),
              965 => 
              array (
                0 => 'KeyCDN',
                1 => 'fab fa-keycdn',
              ),
              966 => 
              array (
                0 => 'Khanda',
                1 => 'fa fa-khanda',
              ),
              967 => 
              array (
                0 => 'Kickstarter',
                1 => 'fab fa-kickstarter',
              ),
              968 => 
              array (
                0 => 'Kickstarter K',
                1 => 'fab fa-kickstarter-k',
              ),
              969 => 
              array (
                0 => 'Kip Sign',
                1 => 'fa fa-kip-sign',
              ),
              970 => 
              array (
                0 => 'Kit medical',
                1 => 'fa fa-kit-medical',
              ),
              971 => 
              array (
                0 => 'Kitchen Set',
                1 => 'fa fa-kitchen-set',
              ),
              972 => 
              array (
                0 => 'Kiwi Bird',
                1 => 'fa fa-kiwi-bird',
              ),
              973 => 
              array (
                0 => 'KORVUE',
                1 => 'fab fa-korvue',
              ),
              974 => 
              array (
                0 => 'L',
                1 => 'fa fa-l',
              ),
              975 => 
              array (
                0 => 'Land Mine-on',
                1 => 'fa fa-land-mine-on',
              ),
              976 => 
              array (
                0 => 'Landmark',
                1 => 'fa fa-landmark',
              ),
              977 => 
              array (
                0 => 'Landmark dome',
                1 => 'fa fa-landmark-dome',
              ),
              978 => 
              array (
                0 => 'Landmark Flag',
                1 => 'fa fa-landmark-flag',
              ),
              979 => 
              array (
                0 => 'Language',
                1 => 'fa fa-language',
              ),
              980 => 
              array (
                0 => 'Laptop',
                1 => 'fa fa-laptop',
              ),
              981 => 
              array (
                0 => 'Laptop Code',
                1 => 'fa fa-laptop-code',
              ),
              982 => 
              array (
                0 => 'Laptop File',
                1 => 'fa fa-laptop-file',
              ),
              983 => 
              array (
                0 => 'Laptop Medical',
                1 => 'fa fa-laptop-medical',
              ),
              984 => 
              array (
                0 => 'Laravel',
                1 => 'fab fa-laravel',
              ),
              985 => 
              array (
                0 => 'Lari Sign',
                1 => 'fa fa-lari-sign',
              ),
              986 => 
              array (
                0 => 'last.fm',
                1 => 'fab fa-lastfm',
              ),
              987 => 
              array (
                0 => 'last.fm Square',
                1 => 'fab fa-lastfm-square',
              ),
              988 => 
              array (
                0 => 'Layer Group',
                1 => 'fa fa-layer-group',
              ),
              989 => 
              array (
                0 => 'leaf',
                1 => 'fa fa-leaf',
              ),
              990 => 
              array (
                0 => 'Leanpub',
                1 => 'fab fa-leanpub',
              ),
              991 => 
              array (
                0 => 'Left long',
                1 => 'fa fa-left-long',
              ),
              992 => 
              array (
                0 => 'Left right',
                1 => 'fa fa-left-right',
              ),
              993 => 
              array (
                0 => 'Lemon',
                1 => 'fa fa-lemon',
              ),
              994 => 
              array (
                0 => 'Less',
                1 => 'fab fa-less',
              ),
              995 => 
              array (
                0 => 'Less Than',
                1 => 'fa fa-less-than',
              ),
              996 => 
              array (
                0 => 'Less Than Equal To',
                1 => 'fa fa-less-than-equal',
              ),
              997 => 
              array (
                0 => 'Life Ring',
                1 => 'fa fa-life-ring',
              ),
              998 => 
              array (
                0 => 'Lightbulb',
                1 => 'fa fa-lightbulb',
              ),
              999 => 
              array (
                0 => 'Line',
                1 => 'fab fa-line',
              ),
              1000 => 
              array (
                0 => 'Lines Leaning',
                1 => 'fa fa-lines-leaning',
              ),
              1001 => 
              array (
                0 => 'Link',
                1 => 'fa fa-link',
              ),
              1002 => 
              array (
                0 => 'Link Slash',
                1 => 'fa fa-link-slash',
              ),
              1003 => 
              array (
                0 => 'LinkedIn',
                1 => 'fab fa-linkedin',
              ),
              1004 => 
              array (
                0 => 'LinkedIn In',
                1 => 'fab fa-linkedin-in',
              ),
              1005 => 
              array (
                0 => 'Linode',
                1 => 'fab fa-linode',
              ),
              1006 => 
              array (
                0 => 'Linux',
                1 => 'fab fa-linux',
              ),
              1007 => 
              array (
                0 => 'Turkish Lira Sign',
                1 => 'fa fa-lira-sign',
              ),
              1008 => 
              array (
                0 => 'List',
                1 => 'fa fa-list',
              ),
              1009 => 
              array (
                0 => 'List check',
                1 => 'fa fa-list-check',
              ),
              1010 => 
              array (
                0 => 'list-ol',
                1 => 'fa fa-list-ol',
              ),
              1011 => 
              array (
                0 => 'list-ul',
                1 => 'fa fa-list-ul',
              ),
              1012 => 
              array (
                0 => 'Litecoin Sign',
                1 => 'fa fa-litecoin-sign',
              ),
              1013 => 
              array (
                0 => 'location-arrow',
                1 => 'fa fa-location-arrow',
              ),
              1014 => 
              array (
                0 => 'Location Crosshairs',
                1 => 'fa fa-location-crosshairs',
              ),
              1015 => 
              array (
                0 => 'Location dot',
                1 => 'fa fa-location-dot',
              ),
              1016 => 
              array (
                0 => 'Location',
                1 => 'fa fa-location-pin',
              ),
              1017 => 
              array (
                0 => 'Location Pin-lock',
                1 => 'fa fa-location-pin-lock',
              ),
              1018 => 
              array (
                0 => 'lock',
                1 => 'fa fa-lock',
              ),
              1019 => 
              array (
                0 => 'Lock Open',
                1 => 'fa fa-lock-open',
              ),
              1020 => 
              array (
                0 => 'Locust',
                1 => 'fa fa-locust',
              ),
              1021 => 
              array (
                0 => 'Lungs',
                1 => 'fa fa-lungs',
              ),
              1022 => 
              array (
                0 => 'Lungs Virus',
                1 => 'fa fa-lungs-virus',
              ),
              1023 => 
              array (
                0 => 'lyft',
                1 => 'fab fa-lyft',
              ),
              1024 => 
              array (
                0 => 'M',
                1 => 'fa fa-m',
              ),
              1025 => 
              array (
                0 => 'Magento',
                1 => 'fab fa-magento',
              ),
              1026 => 
              array (
                0 => 'magnet',
                1 => 'fa fa-magnet',
              ),
              1027 => 
              array (
                0 => 'Magnifying glass',
                1 => 'fa fa-magnifying-glass',
              ),
              1028 => 
              array (
                0 => 'Magnifying Glass-arrow-right',
                1 => 'fa fa-magnifying-glass-arrow-right',
              ),
              1029 => 
              array (
                0 => 'Magnifying Glass-chart',
                1 => 'fa fa-magnifying-glass-chart',
              ),
              1030 => 
              array (
                0 => 'Magnifying glass dollar',
                1 => 'fa fa-magnifying-glass-dollar',
              ),
              1031 => 
              array (
                0 => 'Magnifying glass location',
                1 => 'fa fa-magnifying-glass-location',
              ),
              1032 => 
              array (
                0 => 'Magnifying glass minus',
                1 => 'fa fa-magnifying-glass-minus',
              ),
              1033 => 
              array (
                0 => 'Magnifying glass plus',
                1 => 'fa fa-magnifying-glass-plus',
              ),
              1034 => 
              array (
                0 => 'Mailchimp',
                1 => 'fab fa-mailchimp',
              ),
              1035 => 
              array (
                0 => 'Manat Sign',
                1 => 'fa fa-manat-sign',
              ),
              1036 => 
              array (
                0 => 'Mandalorian',
                1 => 'fab fa-mandalorian',
              ),
              1037 => 
              array (
                0 => 'Map',
                1 => 'fa fa-map',
              ),
              1038 => 
              array (
                0 => 'Map location',
                1 => 'fa fa-map-location',
              ),
              1039 => 
              array (
                0 => 'Map location dot',
                1 => 'fa fa-map-location-dot',
              ),
              1040 => 
              array (
                0 => 'Map Pin',
                1 => 'fa fa-map-pin',
              ),
              1041 => 
              array (
                0 => 'Markdown',
                1 => 'fab fa-markdown',
              ),
              1042 => 
              array (
                0 => 'Marker',
                1 => 'fa fa-marker',
              ),
              1043 => 
              array (
                0 => 'Mars',
                1 => 'fa fa-mars',
              ),
              1044 => 
              array (
                0 => 'Mars and Venus',
                1 => 'fa fa-mars-and-venus',
              ),
              1045 => 
              array (
                0 => 'Mars and Venus Burst',
                1 => 'fa fa-mars-and-venus-burst',
              ),
              1046 => 
              array (
                0 => 'Mars Double',
                1 => 'fa fa-mars-double',
              ),
              1047 => 
              array (
                0 => 'Mars Stroke',
                1 => 'fa fa-mars-stroke',
              ),
              1048 => 
              array (
                0 => 'Mars stroke right',
                1 => 'fa fa-mars-stroke-right',
              ),
              1049 => 
              array (
                0 => 'Mars stroke up',
                1 => 'fa fa-mars-stroke-up',
              ),
              1050 => 
              array (
                0 => 'Martini glass',
                1 => 'fa fa-martini-glass',
              ),
              1051 => 
              array (
                0 => 'Martini glass citrus',
                1 => 'fa fa-martini-glass-citrus',
              ),
              1052 => 
              array (
                0 => 'Martini glass empty',
                1 => 'fa fa-martini-glass-empty',
              ),
              1053 => 
              array (
                0 => 'Mask',
                1 => 'fa fa-mask',
              ),
              1054 => 
              array (
                0 => 'Face Mask',
                1 => 'fa fa-mask-face',
              ),
              1055 => 
              array (
                0 => 'Mask Ventilator',
                1 => 'fa fa-mask-ventilator',
              ),
              1056 => 
              array (
                0 => 'Masks theater',
                1 => 'fa fa-masks-theater',
              ),
              1057 => 
              array (
                0 => 'Mastodon',
                1 => 'fab fa-mastodon',
              ),
              1058 => 
              array (
                0 => 'Mattress Pillow',
                1 => 'fa fa-mattress-pillow',
              ),
              1059 => 
              array (
                0 => 'MaxCDN',
                1 => 'fab fa-maxcdn',
              ),
              1060 => 
              array (
                0 => 'Maximize',
                1 => 'fa fa-maximize',
              ),
              1061 => 
              array (
                0 => 'Material Design for Bootstrap',
                1 => 'fab fa-mdb',
              ),
              1062 => 
              array (
                0 => 'Medal',
                1 => 'fa fa-medal',
              ),
              1063 => 
              array (
                0 => 'MedApps',
                1 => 'fab fa-medapps',
              ),
              1064 => 
              array (
                0 => 'Medium',
                1 => 'fab fa-medium',
              ),
              1065 => 
              array (
                0 => 'MRT',
                1 => 'fab fa-medrt',
              ),
              1066 => 
              array (
                0 => 'Meetup',
                1 => 'fab fa-meetup',
              ),
              1067 => 
              array (
                0 => 'Megaport',
                1 => 'fab fa-megaport',
              ),
              1068 => 
              array (
                0 => 'Memory',
                1 => 'fa fa-memory',
              ),
              1069 => 
              array (
                0 => 'Mendeley',
                1 => 'fab fa-mendeley',
              ),
              1070 => 
              array (
                0 => 'Menorah',
                1 => 'fa fa-menorah',
              ),
              1071 => 
              array (
                0 => 'Mercury',
                1 => 'fa fa-mercury',
              ),
              1072 => 
              array (
                0 => 'Message',
                1 => 'fa fa-message',
              ),
              1073 => 
              array (
                0 => 'Meteor',
                1 => 'fa fa-meteor',
              ),
              1074 => 
              array (
                0 => 'Micro.blog',
                1 => 'fab fa-microblog',
              ),
              1075 => 
              array (
                0 => 'Microchip',
                1 => 'fa fa-microchip',
              ),
              1076 => 
              array (
                0 => 'microphone',
                1 => 'fa fa-microphone',
              ),
              1077 => 
              array (
                0 => 'Microphone lines',
                1 => 'fa fa-microphone-lines',
              ),
              1078 => 
              array (
                0 => 'Microphone lines slash',
                1 => 'fa fa-microphone-lines-slash',
              ),
              1079 => 
              array (
                0 => 'Microphone Slash',
                1 => 'fa fa-microphone-slash',
              ),
              1080 => 
              array (
                0 => 'Microscope',
                1 => 'fa fa-microscope',
              ),
              1081 => 
              array (
                0 => 'Microsoft',
                1 => 'fab fa-microsoft',
              ),
              1082 => 
              array (
                0 => 'Mill Sign',
                1 => 'fa fa-mill-sign',
              ),
              1083 => 
              array (
                0 => 'Minimize',
                1 => 'fa fa-minimize',
              ),
              1084 => 
              array (
                0 => 'minus',
                1 => 'fa fa-minus',
              ),
              1085 => 
              array (
                0 => 'Mitten',
                1 => 'fa fa-mitten',
              ),
              1086 => 
              array (
                0 => 'Mix',
                1 => 'fab fa-mix',
              ),
              1087 => 
              array (
                0 => 'Mixcloud',
                1 => 'fab fa-mixcloud',
              ),
              1088 => 
              array (
                0 => 'Mixer',
                1 => 'fab fa-mixer',
              ),
              1089 => 
              array (
                0 => 'Mizuni',
                1 => 'fab fa-mizuni',
              ),
              1090 => 
              array (
                0 => 'Mobile',
                1 => 'fa fa-mobile',
              ),
              1091 => 
              array (
                0 => 'Mobile button',
                1 => 'fa fa-mobile-button',
              ),
              1092 => 
              array (
                0 => 'Mobile Retro',
                1 => 'fa fa-mobile-retro',
              ),
              1093 => 
              array (
                0 => 'Mobile screen',
                1 => 'fa fa-mobile-screen',
              ),
              1094 => 
              array (
                0 => 'Mobile screen button',
                1 => 'fa fa-mobile-screen-button',
              ),
              1095 => 
              array (
                0 => 'MODX',
                1 => 'fab fa-modx',
              ),
              1096 => 
              array (
                0 => 'Monero',
                1 => 'fab fa-monero',
              ),
              1097 => 
              array (
                0 => 'Money Bill',
                1 => 'fa fa-money-bill',
              ),
              1098 => 
              array (
                0 => 'Money bill 1',
                1 => 'fa fa-money-bill-1',
              ),
              1099 => 
              array (
                0 => 'Money bill 1 wave',
                1 => 'fa fa-money-bill-1-wave',
              ),
              1100 => 
              array (
                0 => 'Money Bill-transfer',
                1 => 'fa fa-money-bill-transfer',
              ),
              1101 => 
              array (
                0 => 'Money Bill-trend-up',
                1 => 'fa fa-money-bill-trend-up',
              ),
              1102 => 
              array (
                0 => 'Wavy Money Bill',
                1 => 'fa fa-money-bill-wave',
              ),
              1103 => 
              array (
                0 => 'Money Bill-wheat',
                1 => 'fa fa-money-bill-wheat',
              ),
              1104 => 
              array (
                0 => 'Money Bills',
                1 => 'fa fa-money-bills',
              ),
              1105 => 
              array (
                0 => 'Money Check',
                1 => 'fa fa-money-check',
              ),
              1106 => 
              array (
                0 => 'Money check dollar',
                1 => 'fa fa-money-check-dollar',
              ),
              1107 => 
              array (
                0 => 'Monument',
                1 => 'fa fa-monument',
              ),
              1108 => 
              array (
                0 => 'Moon',
                1 => 'fa fa-moon',
              ),
              1109 => 
              array (
                0 => 'Mortar Pestle',
                1 => 'fa fa-mortar-pestle',
              ),
              1110 => 
              array (
                0 => 'Mosque',
                1 => 'fa fa-mosque',
              ),
              1111 => 
              array (
                0 => 'Mosquito',
                1 => 'fa fa-mosquito',
              ),
              1112 => 
              array (
                0 => 'Mosquito Net',
                1 => 'fa fa-mosquito-net',
              ),
              1113 => 
              array (
                0 => 'Motorcycle',
                1 => 'fa fa-motorcycle',
              ),
              1114 => 
              array (
                0 => 'Mound',
                1 => 'fa fa-mound',
              ),
              1115 => 
              array (
                0 => 'Mountain',
                1 => 'fa fa-mountain',
              ),
              1116 => 
              array (
                0 => 'Mountain City',
                1 => 'fa fa-mountain-city',
              ),
              1117 => 
              array (
                0 => 'Mountain Sun',
                1 => 'fa fa-mountain-sun',
              ),
              1118 => 
              array (
                0 => 'Mug Hot',
                1 => 'fa fa-mug-hot',
              ),
              1119 => 
              array (
                0 => 'Mug saucer',
                1 => 'fa fa-mug-saucer',
              ),
              1120 => 
              array (
                0 => 'Music',
                1 => 'fa fa-music',
              ),
              1121 => 
              array (
                0 => 'N',
                1 => 'fa fa-n',
              ),
              1122 => 
              array (
                0 => 'Naira Sign',
                1 => 'fa fa-naira-sign',
              ),
              1123 => 
              array (
                0 => 'Napster',
                1 => 'fab fa-napster',
              ),
              1124 => 
              array (
                0 => 'Neos',
                1 => 'fab fa-neos',
              ),
              1125 => 
              array (
                0 => 'Wired Network',
                1 => 'fa fa-network-wired',
              ),
              1126 => 
              array (
                0 => 'Neuter',
                1 => 'fa fa-neuter',
              ),
              1127 => 
              array (
                0 => 'Newspaper',
                1 => 'fa fa-newspaper',
              ),
              1128 => 
              array (
                0 => 'NFC Directional',
                1 => 'fab fa-nfc-directional',
              ),
              1129 => 
              array (
                0 => 'NFC Simplified',
                1 => 'fab fa-nfc-symbol',
              ),
              1130 => 
              array (
                0 => 'Nimblr',
                1 => 'fab fa-nimblr',
              ),
              1131 => 
              array (
                0 => 'Node.js',
                1 => 'fab fa-node',
              ),
              1132 => 
              array (
                0 => 'Node.js JS',
                1 => 'fab fa-node-js',
              ),
              1133 => 
              array (
                0 => 'Not Equal',
                1 => 'fa fa-not-equal',
              ),
              1134 => 
              array (
                0 => 'Note sticky',
                1 => 'fa fa-note-sticky',
              ),
              1135 => 
              array (
                0 => 'Medical Notes',
                1 => 'fa fa-notes-medical',
              ),
              1136 => 
              array (
                0 => 'npm',
                1 => 'fab fa-npm',
              ),
              1137 => 
              array (
                0 => 'NS8',
                1 => 'fab fa-ns8',
              ),
              1138 => 
              array (
                0 => 'Nutritionix',
                1 => 'fab fa-nutritionix',
              ),
              1139 => 
              array (
                0 => 'O',
                1 => 'fa fa-o',
              ),
              1140 => 
              array (
                0 => 'Object Group',
                1 => 'fa fa-object-group',
              ),
              1141 => 
              array (
                0 => 'Object Ungroup',
                1 => 'fa fa-object-ungroup',
              ),
              1142 => 
              array (
                0 => 'Octopus Deploy',
                1 => 'fab fa-octopus-deploy',
              ),
              1143 => 
              array (
                0 => 'Odnoklassniki',
                1 => 'fab fa-odnoklassniki',
              ),
              1144 => 
              array (
                0 => 'Odnoklassniki Square',
                1 => 'fab fa-odnoklassniki-square',
              ),
              1145 => 
              array (
                0 => 'Oil Can',
                1 => 'fa fa-oil-can',
              ),
              1146 => 
              array (
                0 => 'Oil Well',
                1 => 'fa fa-oil-well',
              ),
              1147 => 
              array (
                0 => 'Old Republic',
                1 => 'fab fa-old-republic',
              ),
              1148 => 
              array (
                0 => 'Om',
                1 => 'fa fa-om',
              ),
              1149 => 
              array (
                0 => 'OpenCart',
                1 => 'fab fa-opencart',
              ),
              1150 => 
              array (
                0 => 'OpenID',
                1 => 'fab fa-openid',
              ),
              1151 => 
              array (
                0 => 'Opera',
                1 => 'fab fa-opera',
              ),
              1152 => 
              array (
                0 => 'Optin Monster',
                1 => 'fab fa-optin-monster',
              ),
              1153 => 
              array (
                0 => 'ORCID',
                1 => 'fab fa-orcid',
              ),
              1154 => 
              array (
                0 => 'Open Source Initiative',
                1 => 'fab fa-osi',
              ),
              1155 => 
              array (
                0 => 'Otter',
                1 => 'fa fa-otter',
              ),
              1156 => 
              array (
                0 => 'Outdent',
                1 => 'fa fa-outdent',
              ),
              1157 => 
              array (
                0 => 'P',
                1 => 'fa fa-p',
              ),
              1158 => 
              array (
                0 => 'Padlet',
                1 => 'fab fa-padlet',
              ),
              1159 => 
              array (
                0 => 'page4 Corporation',
                1 => 'fab fa-page4',
              ),
              1160 => 
              array (
                0 => 'Pagelines',
                1 => 'fab fa-pagelines',
              ),
              1161 => 
              array (
                0 => 'Pager',
                1 => 'fa fa-pager',
              ),
              1162 => 
              array (
                0 => 'Paint Roller',
                1 => 'fa fa-paint-roller',
              ),
              1163 => 
              array (
                0 => 'Paint Brush',
                1 => 'fa fa-paintbrush',
              ),
              1164 => 
              array (
                0 => 'Palette',
                1 => 'fa fa-palette',
              ),
              1165 => 
              array (
                0 => 'Palfed',
                1 => 'fab fa-palfed',
              ),
              1166 => 
              array (
                0 => 'Pallet',
                1 => 'fa fa-pallet',
              ),
              1167 => 
              array (
                0 => 'Panorama',
                1 => 'fa fa-panorama',
              ),
              1168 => 
              array (
                0 => 'Paper Plane',
                1 => 'fa fa-paper-plane',
              ),
              1169 => 
              array (
                0 => 'Paperclip',
                1 => 'fa fa-paperclip',
              ),
              1170 => 
              array (
                0 => 'Parachute Box',
                1 => 'fa fa-parachute-box',
              ),
              1171 => 
              array (
                0 => 'paragraph',
                1 => 'fa fa-paragraph',
              ),
              1172 => 
              array (
                0 => 'Passport',
                1 => 'fa fa-passport',
              ),
              1173 => 
              array (
                0 => 'Paste',
                1 => 'fa fa-paste',
              ),
              1174 => 
              array (
                0 => 'Patreon',
                1 => 'fab fa-patreon',
              ),
              1175 => 
              array (
                0 => 'pause',
                1 => 'fa fa-pause',
              ),
              1176 => 
              array (
                0 => 'Paw',
                1 => 'fa fa-paw',
              ),
              1177 => 
              array (
                0 => 'Paypal',
                1 => 'fab fa-paypal',
              ),
              1178 => 
              array (
                0 => 'Peace',
                1 => 'fa fa-peace',
              ),
              1179 => 
              array (
                0 => 'Pen',
                1 => 'fa fa-pen',
              ),
              1180 => 
              array (
                0 => 'Pen clip',
                1 => 'fa fa-pen-clip',
              ),
              1181 => 
              array (
                0 => 'Pen Fancy',
                1 => 'fa fa-pen-fancy',
              ),
              1182 => 
              array (
                0 => 'Pen Nib',
                1 => 'fa fa-pen-nib',
              ),
              1183 => 
              array (
                0 => 'Pen ruler',
                1 => 'fa fa-pen-ruler',
              ),
              1184 => 
              array (
                0 => 'Pen to square',
                1 => 'fa fa-pen-to-square',
              ),
              1185 => 
              array (
                0 => 'pencil',
                1 => 'fa fa-pencil',
              ),
              1186 => 
              array (
                0 => 'People arrows left right',
                1 => 'fa fa-people-arrows-left-right',
              ),
              1187 => 
              array (
                0 => 'People carry box',
                1 => 'fa fa-people-carry-box',
              ),
              1188 => 
              array (
                0 => 'People Group',
                1 => 'fa fa-people-group',
              ),
              1189 => 
              array (
                0 => 'People Line',
                1 => 'fa fa-people-line',
              ),
              1190 => 
              array (
                0 => 'People Pulling',
                1 => 'fa fa-people-pulling',
              ),
              1191 => 
              array (
                0 => 'People Robbery',
                1 => 'fa fa-people-robbery',
              ),
              1192 => 
              array (
                0 => 'People Roof',
                1 => 'fa fa-people-roof',
              ),
              1193 => 
              array (
                0 => 'Hot Pepper',
                1 => 'fa fa-pepper-hot',
              ),
              1194 => 
              array (
                0 => 'PerByte',
                1 => 'fab fa-perbyte',
              ),
              1195 => 
              array (
                0 => 'Percent',
                1 => 'fa fa-percent',
              ),
              1196 => 
              array (
                0 => 'Periscope',
                1 => 'fab fa-periscope',
              ),
              1197 => 
              array (
                0 => 'Person',
                1 => 'fa fa-person',
              ),
              1198 => 
              array (
                0 => 'Person Arrow-down-to-line',
                1 => 'fa fa-person-arrow-down-to-line',
              ),
              1199 => 
              array (
                0 => 'Person Arrow-up-from-line',
                1 => 'fa fa-person-arrow-up-from-line',
              ),
              1200 => 
              array (
                0 => 'Person biking',
                1 => 'fa fa-person-biking',
              ),
              1201 => 
              array (
                0 => 'Person Entering Booth',
                1 => 'fa fa-person-booth',
              ),
              1202 => 
              array (
                0 => 'Person Breastfeeding',
                1 => 'fa fa-person-breastfeeding',
              ),
              1203 => 
              array (
                0 => 'Person Burst',
                1 => 'fa fa-person-burst',
              ),
              1204 => 
              array (
                0 => 'Person Cane',
                1 => 'fa fa-person-cane',
              ),
              1205 => 
              array (
                0 => 'Person Chalkboard',
                1 => 'fa fa-person-chalkboard',
              ),
              1206 => 
              array (
                0 => 'Person Circle-check',
                1 => 'fa fa-person-circle-check',
              ),
              1207 => 
              array (
                0 => 'Person Circle-exclamation',
                1 => 'fa fa-person-circle-exclamation',
              ),
              1208 => 
              array (
                0 => 'Person Circle-minus',
                1 => 'fa fa-person-circle-minus',
              ),
              1209 => 
              array (
                0 => 'Person Circle-plus',
                1 => 'fa fa-person-circle-plus',
              ),
              1210 => 
              array (
                0 => 'Person Circle-question',
                1 => 'fa fa-person-circle-question',
              ),
              1211 => 
              array (
                0 => 'Person Circle-xmark',
                1 => 'fa fa-person-circle-xmark',
              ),
              1212 => 
              array (
                0 => 'Person digging',
                1 => 'fa fa-person-digging',
              ),
              1213 => 
              array (
                0 => 'Person dots from line',
                1 => 'fa fa-person-dots-from-line',
              ),
              1214 => 
              array (
                0 => 'Person dress',
                1 => 'fa fa-person-dress',
              ),
              1215 => 
              array (
                0 => 'Person Dress BUrst',
                1 => 'fa fa-person-dress-burst',
              ),
              1216 => 
              array (
                0 => 'Person Drowning',
                1 => 'fa fa-person-drowning',
              ),
              1217 => 
              array (
                0 => 'Person Falling',
                1 => 'fa fa-person-falling',
              ),
              1218 => 
              array (
                0 => 'Person Falling Burst',
                1 => 'fa fa-person-falling-burst',
              ),
              1219 => 
              array (
                0 => 'Person Half-dress',
                1 => 'fa fa-person-half-dress',
              ),
              1220 => 
              array (
                0 => 'Person Harassing',
                1 => 'fa fa-person-harassing',
              ),
              1221 => 
              array (
                0 => 'Person hiking',
                1 => 'fa fa-person-hiking',
              ),
              1222 => 
              array (
                0 => 'Person Military-pointing',
                1 => 'fa fa-person-military-pointing',
              ),
              1223 => 
              array (
                0 => 'Person Military-rifle',
                1 => 'fa fa-person-military-rifle',
              ),
              1224 => 
              array (
                0 => 'Person Military-to-person',
                1 => 'fa fa-person-military-to-person',
              ),
              1225 => 
              array (
                0 => 'Person praying',
                1 => 'fa fa-person-praying',
              ),
              1226 => 
              array (
                0 => 'Person Pregnant',
                1 => 'fa fa-person-pregnant',
              ),
              1227 => 
              array (
                0 => 'Person Rays',
                1 => 'fa fa-person-rays',
              ),
              1228 => 
              array (
                0 => 'Person Rifle',
                1 => 'fa fa-person-rifle',
              ),
              1229 => 
              array (
                0 => 'Person running',
                1 => 'fa fa-person-running',
              ),
              1230 => 
              array (
                0 => 'Person Shelter',
                1 => 'fa fa-person-shelter',
              ),
              1231 => 
              array (
                0 => 'Person skating',
                1 => 'fa fa-person-skating',
              ),
              1232 => 
              array (
                0 => 'Person skiing',
                1 => 'fa fa-person-skiing',
              ),
              1233 => 
              array (
                0 => 'Person skiing nordic',
                1 => 'fa fa-person-skiing-nordic',
              ),
              1234 => 
              array (
                0 => 'Person snowboarding',
                1 => 'fa fa-person-snowboarding',
              ),
              1235 => 
              array (
                0 => 'Person swimming',
                1 => 'fa fa-person-swimming',
              ),
              1236 => 
              array (
                0 => 'Person Through-window',
                1 => 'fa fa-person-through-window',
              ),
              1237 => 
              array (
                0 => 'Person walking',
                1 => 'fa fa-person-walking',
              ),
              1238 => 
              array (
                0 => 'Person Walking-arrow-loop-left',
                1 => 'fa fa-person-walking-arrow-loop-left',
              ),
              1239 => 
              array (
                0 => 'Person Walking-arrow-right',
                1 => 'fa fa-person-walking-arrow-right',
              ),
              1240 => 
              array (
                0 => 'Person Walking-dashed-line-arrow-right',
                1 => 'fa fa-person-walking-dashed-line-arrow-right',
              ),
              1241 => 
              array (
                0 => 'Person Walking-luggage',
                1 => 'fa fa-person-walking-luggage',
              ),
              1242 => 
              array (
                0 => 'Person walking with cane',
                1 => 'fa fa-person-walking-with-cane',
              ),
              1243 => 
              array (
                0 => 'Peseta Sign',
                1 => 'fa fa-peseta-sign',
              ),
              1244 => 
              array (
                0 => 'Peso Sign',
                1 => 'fa fa-peso-sign',
              ),
              1245 => 
              array (
                0 => 'Phabricator',
                1 => 'fab fa-phabricator',
              ),
              1246 => 
              array (
                0 => 'Phoenix Framework',
                1 => 'fab fa-phoenix-framework',
              ),
              1247 => 
              array (
                0 => 'Phoenix Squadron',
                1 => 'fab fa-phoenix-squadron',
              ),
              1248 => 
              array (
                0 => 'Phone',
                1 => 'fa fa-phone',
              ),
              1249 => 
              array (
                0 => 'Phone flip',
                1 => 'fa fa-phone-flip',
              ),
              1250 => 
              array (
                0 => 'Phone Slash',
                1 => 'fa fa-phone-slash',
              ),
              1251 => 
              array (
                0 => 'Phone Volume',
                1 => 'fa fa-phone-volume',
              ),
              1252 => 
              array (
                0 => 'Photo film',
                1 => 'fa fa-photo-film',
              ),
              1253 => 
              array (
                0 => 'PHP',
                1 => 'fab fa-php',
              ),
              1254 => 
              array (
                0 => 'Pied Piper Logo',
                1 => 'fab fa-pied-piper',
              ),
              1255 => 
              array (
                0 => 'Alternate Pied Piper Logo (Old)',
                1 => 'fab fa-pied-piper-alt',
              ),
              1256 => 
              array (
                0 => 'Pied Piper Hat (Old)',
                1 => 'fab fa-pied-piper-hat',
              ),
              1257 => 
              array (
                0 => 'Pied Piper PP Logo (Old)',
                1 => 'fab fa-pied-piper-pp',
              ),
              1258 => 
              array (
                0 => 'Pied Piper Square Logo (Old)',
                1 => 'fab fa-pied-piper-square',
              ),
              1259 => 
              array (
                0 => 'Piggy Bank',
                1 => 'fa fa-piggy-bank',
              ),
              1260 => 
              array (
                0 => 'Pills',
                1 => 'fa fa-pills',
              ),
              1261 => 
              array (
                0 => 'Pinterest',
                1 => 'fab fa-pinterest',
              ),
              1262 => 
              array (
                0 => 'Pinterest P',
                1 => 'fab fa-pinterest-p',
              ),
              1263 => 
              array (
                0 => 'Pinterest Square',
                1 => 'fab fa-pinterest-square',
              ),
              1264 => 
              array (
                0 => 'Pix',
                1 => 'fab fa-pix',
              ),
              1265 => 
              array (
                0 => 'Pizza Slice',
                1 => 'fa fa-pizza-slice',
              ),
              1266 => 
              array (
                0 => 'Place of Worship',
                1 => 'fa fa-place-of-worship',
              ),
              1267 => 
              array (
                0 => 'plane',
                1 => 'fa fa-plane',
              ),
              1268 => 
              array (
                0 => 'Plane Arrival',
                1 => 'fa fa-plane-arrival',
              ),
              1269 => 
              array (
                0 => 'Plane Circle-check',
                1 => 'fa fa-plane-circle-check',
              ),
              1270 => 
              array (
                0 => 'Plane Circle-exclamation',
                1 => 'fa fa-plane-circle-exclamation',
              ),
              1271 => 
              array (
                0 => 'Plane Circle-xmark',
                1 => 'fa fa-plane-circle-xmark',
              ),
              1272 => 
              array (
                0 => 'Plane Departure',
                1 => 'fa fa-plane-departure',
              ),
              1273 => 
              array (
                0 => 'Plane Lock',
                1 => 'fa fa-plane-lock',
              ),
              1274 => 
              array (
                0 => 'Plane Slash',
                1 => 'fa fa-plane-slash',
              ),
              1275 => 
              array (
                0 => 'Plane Up',
                1 => 'fa fa-plane-up',
              ),
              1276 => 
              array (
                0 => 'Plant Wilt',
                1 => 'fa fa-plant-wilt',
              ),
              1277 => 
              array (
                0 => 'Plate Wheat',
                1 => 'fa fa-plate-wheat',
              ),
              1278 => 
              array (
                0 => 'play',
                1 => 'fa fa-play',
              ),
              1279 => 
              array (
                0 => 'PlayStation',
                1 => 'fab fa-playstation',
              ),
              1280 => 
              array (
                0 => 'Plug',
                1 => 'fa fa-plug',
              ),
              1281 => 
              array (
                0 => 'Plug Circle-bolt',
                1 => 'fa fa-plug-circle-bolt',
              ),
              1282 => 
              array (
                0 => 'Plug Circle-check',
                1 => 'fa fa-plug-circle-check',
              ),
              1283 => 
              array (
                0 => 'Plug Circle-exclamation',
                1 => 'fa fa-plug-circle-exclamation',
              ),
              1284 => 
              array (
                0 => 'Plug Circle-minus',
                1 => 'fa fa-plug-circle-minus',
              ),
              1285 => 
              array (
                0 => 'Plug Circle-plus',
                1 => 'fa fa-plug-circle-plus',
              ),
              1286 => 
              array (
                0 => 'Plug Circle-xmark',
                1 => 'fa fa-plug-circle-xmark',
              ),
              1287 => 
              array (
                0 => 'plus',
                1 => 'fa fa-plus',
              ),
              1288 => 
              array (
                0 => 'Plus Minus',
                1 => 'fa fa-plus-minus',
              ),
              1289 => 
              array (
                0 => 'Podcast',
                1 => 'fa fa-podcast',
              ),
              1290 => 
              array (
                0 => 'Poo',
                1 => 'fa fa-poo',
              ),
              1291 => 
              array (
                0 => 'Poo bolt',
                1 => 'fa fa-poo-storm',
              ),
              1292 => 
              array (
                0 => 'Poop',
                1 => 'fa fa-poop',
              ),
              1293 => 
              array (
                0 => 'Power Off',
                1 => 'fa fa-power-off',
              ),
              1294 => 
              array (
                0 => 'Prescription',
                1 => 'fa fa-prescription',
              ),
              1295 => 
              array (
                0 => 'Prescription Bottle',
                1 => 'fa fa-prescription-bottle',
              ),
              1296 => 
              array (
                0 => 'Prescription bottle medical',
                1 => 'fa fa-prescription-bottle-medical',
              ),
              1297 => 
              array (
                0 => 'print',
                1 => 'fa fa-print',
              ),
              1298 => 
              array (
                0 => 'Product Hunt',
                1 => 'fab fa-product-hunt',
              ),
              1299 => 
              array (
                0 => 'Pump Medical',
                1 => 'fa fa-pump-medical',
              ),
              1300 => 
              array (
                0 => 'Pump Soap',
                1 => 'fa fa-pump-soap',
              ),
              1301 => 
              array (
                0 => 'Pushed',
                1 => 'fab fa-pushed',
              ),
              1302 => 
              array (
                0 => 'Puzzle Piece',
                1 => 'fa fa-puzzle-piece',
              ),
              1303 => 
              array (
                0 => 'Python',
                1 => 'fab fa-python',
              ),
              1304 => 
              array (
                0 => 'Q',
                1 => 'fa fa-q',
              ),
              1305 => 
              array (
                0 => 'QQ',
                1 => 'fab fa-qq',
              ),
              1306 => 
              array (
                0 => 'qrcode',
                1 => 'fa fa-qrcode',
              ),
              1307 => 
              array (
                0 => 'Question',
                1 => 'fa fa-question',
              ),
              1308 => 
              array (
                0 => 'QuinScape',
                1 => 'fab fa-quinscape',
              ),
              1309 => 
              array (
                0 => 'Quora',
                1 => 'fab fa-quora',
              ),
              1310 => 
              array (
                0 => 'quote-left',
                1 => 'fa fa-quote-left',
              ),
              1311 => 
              array (
                0 => 'quote-right',
                1 => 'fa fa-quote-right',
              ),
              1312 => 
              array (
                0 => 'R',
                1 => 'fa fa-r',
              ),
              1313 => 
              array (
                0 => 'R Project',
                1 => 'fab fa-r-project',
              ),
              1314 => 
              array (
                0 => 'Radiation',
                1 => 'fa fa-radiation',
              ),
              1315 => 
              array (
                0 => 'Radio',
                1 => 'fa fa-radio',
              ),
              1316 => 
              array (
                0 => 'Rainbow',
                1 => 'fa fa-rainbow',
              ),
              1317 => 
              array (
                0 => 'Ranking Star',
                1 => 'fa fa-ranking-star',
              ),
              1318 => 
              array (
                0 => 'Raspberry Pi',
                1 => 'fab fa-raspberry-pi',
              ),
              1319 => 
              array (
                0 => 'Ravelry',
                1 => 'fab fa-ravelry',
              ),
              1320 => 
              array (
                0 => 'React',
                1 => 'fab fa-react',
              ),
              1321 => 
              array (
                0 => 'ReactEurope',
                1 => 'fab fa-reacteurope',
              ),
              1322 => 
              array (
                0 => 'ReadMe',
                1 => 'fab fa-readme',
              ),
              1323 => 
              array (
                0 => 'Rebel Alliance',
                1 => 'fab fa-rebel',
              ),
              1324 => 
              array (
                0 => 'Receipt',
                1 => 'fa fa-receipt',
              ),
              1325 => 
              array (
                0 => 'Record Vinyl',
                1 => 'fa fa-record-vinyl',
              ),
              1326 => 
              array (
                0 => 'Rectangle ad',
                1 => 'fa fa-rectangle-ad',
              ),
              1327 => 
              array (
                0 => 'Rectangle list',
                1 => 'fa fa-rectangle-list',
              ),
              1328 => 
              array (
                0 => 'Rectangle X Mark',
                1 => 'fa fa-rectangle-xmark',
              ),
              1329 => 
              array (
                0 => 'Recycle',
                1 => 'fa fa-recycle',
              ),
              1330 => 
              array (
                0 => 'red river',
                1 => 'fab fa-red-river',
              ),
              1331 => 
              array (
                0 => 'reddit Logo',
                1 => 'fab fa-reddit',
              ),
              1332 => 
              array (
                0 => 'reddit Alien',
                1 => 'fab fa-reddit-alien',
              ),
              1333 => 
              array (
                0 => 'reddit Square',
                1 => 'fab fa-reddit-square',
              ),
              1334 => 
              array (
                0 => 'Redhat',
                1 => 'fab fa-redhat',
              ),
              1335 => 
              array (
                0 => 'Registered Trademark',
                1 => 'fa fa-registered',
              ),
              1336 => 
              array (
                0 => 'Renren',
                1 => 'fab fa-renren',
              ),
              1337 => 
              array (
                0 => 'Repeat',
                1 => 'fa fa-repeat',
              ),
              1338 => 
              array (
                0 => 'Reply',
                1 => 'fa fa-reply',
              ),
              1339 => 
              array (
                0 => 'reply-all',
                1 => 'fa fa-reply-all',
              ),
              1340 => 
              array (
                0 => 'replyd',
                1 => 'fab fa-replyd',
              ),
              1341 => 
              array (
                0 => 'Republican',
                1 => 'fa fa-republican',
              ),
              1342 => 
              array (
                0 => 'Researchgate',
                1 => 'fab fa-researchgate',
              ),
              1343 => 
              array (
                0 => 'Resolving',
                1 => 'fab fa-resolving',
              ),
              1344 => 
              array (
                0 => 'Restroom',
                1 => 'fa fa-restroom',
              ),
              1345 => 
              array (
                0 => 'Retweet',
                1 => 'fa fa-retweet',
              ),
              1346 => 
              array (
                0 => 'Rev.io',
                1 => 'fab fa-rev',
              ),
              1347 => 
              array (
                0 => 'Ribbon',
                1 => 'fa fa-ribbon',
              ),
              1348 => 
              array (
                0 => 'Right from bracket',
                1 => 'fa fa-right-from-bracket',
              ),
              1349 => 
              array (
                0 => 'Right left',
                1 => 'fa fa-right-left',
              ),
              1350 => 
              array (
                0 => 'Right long',
                1 => 'fa fa-right-long',
              ),
              1351 => 
              array (
                0 => 'Right to bracket',
                1 => 'fa fa-right-to-bracket',
              ),
              1352 => 
              array (
                0 => 'Ring',
                1 => 'fa fa-ring',
              ),
              1353 => 
              array (
                0 => 'road',
                1 => 'fa fa-road',
              ),
              1354 => 
              array (
                0 => 'Road Barrier',
                1 => 'fa fa-road-barrier',
              ),
              1355 => 
              array (
                0 => 'Road Bridge',
                1 => 'fa fa-road-bridge',
              ),
              1356 => 
              array (
                0 => 'Road Circle-check',
                1 => 'fa fa-road-circle-check',
              ),
              1357 => 
              array (
                0 => 'Road Circle-exclamation',
                1 => 'fa fa-road-circle-exclamation',
              ),
              1358 => 
              array (
                0 => 'Road Circle-xmark',
                1 => 'fa fa-road-circle-xmark',
              ),
              1359 => 
              array (
                0 => 'Road Lock',
                1 => 'fa fa-road-lock',
              ),
              1360 => 
              array (
                0 => 'Road Spikes',
                1 => 'fa fa-road-spikes',
              ),
              1361 => 
              array (
                0 => 'Robot',
                1 => 'fa fa-robot',
              ),
              1362 => 
              array (
                0 => 'rocket',
                1 => 'fa fa-rocket',
              ),
              1363 => 
              array (
                0 => 'Rocket.Chat',
                1 => 'fab fa-rocketchat',
              ),
              1364 => 
              array (
                0 => 'Rockrms',
                1 => 'fab fa-rockrms',
              ),
              1365 => 
              array (
                0 => 'Rotate',
                1 => 'fa fa-rotate',
              ),
              1366 => 
              array (
                0 => 'Rotate Left',
                1 => 'fa fa-rotate-left',
              ),
              1367 => 
              array (
                0 => 'Rotate Right',
                1 => 'fa fa-rotate-right',
              ),
              1368 => 
              array (
                0 => 'Route',
                1 => 'fa fa-route',
              ),
              1369 => 
              array (
                0 => 'rss',
                1 => 'fa fa-rss',
              ),
              1370 => 
              array (
                0 => 'Ruble Sign',
                1 => 'fa fa-ruble-sign',
              ),
              1371 => 
              array (
                0 => 'Rug',
                1 => 'fa fa-rug',
              ),
              1372 => 
              array (
                0 => 'Ruler',
                1 => 'fa fa-ruler',
              ),
              1373 => 
              array (
                0 => 'Ruler Combined',
                1 => 'fa fa-ruler-combined',
              ),
              1374 => 
              array (
                0 => 'Ruler Horizontal',
                1 => 'fa fa-ruler-horizontal',
              ),
              1375 => 
              array (
                0 => 'Ruler Vertical',
                1 => 'fa fa-ruler-vertical',
              ),
              1376 => 
              array (
                0 => 'Indian Rupee Sign',
                1 => 'fa fa-rupee-sign',
              ),
              1377 => 
              array (
                0 => 'Rupiah Sign',
                1 => 'fa fa-rupiah-sign',
              ),
              1378 => 
              array (
                0 => 'Rust',
                1 => 'fab fa-rust',
              ),
              1379 => 
              array (
                0 => 'S',
                1 => 'fa fa-s',
              ),
              1380 => 
              array (
                0 => 'Sack of Money',
                1 => 'fa fa-sack-dollar',
              ),
              1381 => 
              array (
                0 => 'Sack Xmark',
                1 => 'fa fa-sack-xmark',
              ),
              1382 => 
              array (
                0 => 'Safari',
                1 => 'fab fa-safari',
              ),
              1383 => 
              array (
                0 => 'Sailboat',
                1 => 'fa fa-sailboat',
              ),
              1384 => 
              array (
                0 => 'Salesforce',
                1 => 'fab fa-salesforce',
              ),
              1385 => 
              array (
                0 => 'Sass',
                1 => 'fab fa-sass',
              ),
              1386 => 
              array (
                0 => 'Satellite',
                1 => 'fa fa-satellite',
              ),
              1387 => 
              array (
                0 => 'Satellite Dish',
                1 => 'fa fa-satellite-dish',
              ),
              1388 => 
              array (
                0 => 'Scale balanced',
                1 => 'fa fa-scale-balanced',
              ),
              1389 => 
              array (
                0 => 'Scale unbalanced',
                1 => 'fa fa-scale-unbalanced',
              ),
              1390 => 
              array (
                0 => 'Scale unbalanced flip',
                1 => 'fa fa-scale-unbalanced-flip',
              ),
              1391 => 
              array (
                0 => 'SCHLIX',
                1 => 'fab fa-schlix',
              ),
              1392 => 
              array (
                0 => 'School',
                1 => 'fa fa-school',
              ),
              1393 => 
              array (
                0 => 'School Circle-check',
                1 => 'fa fa-school-circle-check',
              ),
              1394 => 
              array (
                0 => 'School Circle-exclamation',
                1 => 'fa fa-school-circle-exclamation',
              ),
              1395 => 
              array (
                0 => 'School Circle-xmark',
                1 => 'fa fa-school-circle-xmark',
              ),
              1396 => 
              array (
                0 => 'School Flag',
                1 => 'fa fa-school-flag',
              ),
              1397 => 
              array (
                0 => 'School Lock',
                1 => 'fa fa-school-lock',
              ),
              1398 => 
              array (
                0 => 'Scissors',
                1 => 'fa fa-scissors',
              ),
              1399 => 
              array (
                0 => 'Screenpal',
                1 => 'fab fa-screenpal',
              ),
              1400 => 
              array (
                0 => 'Screwdriver',
                1 => 'fa fa-screwdriver',
              ),
              1401 => 
              array (
                0 => 'Screwdriver wrench',
                1 => 'fa fa-screwdriver-wrench',
              ),
              1402 => 
              array (
                0 => 'Scribd',
                1 => 'fab fa-scribd',
              ),
              1403 => 
              array (
                0 => 'Scroll',
                1 => 'fa fa-scroll',
              ),
              1404 => 
              array (
                0 => 'Scroll torah',
                1 => 'fa fa-scroll-torah',
              ),
              1405 => 
              array (
                0 => 'Sd Card',
                1 => 'fa fa-sd-card',
              ),
              1406 => 
              array (
                0 => 'Searchengin',
                1 => 'fab fa-searchengin',
              ),
              1407 => 
              array (
                0 => 'Section',
                1 => 'fa fa-section',
              ),
              1408 => 
              array (
                0 => 'Seedling',
                1 => 'fa fa-seedling',
              ),
              1409 => 
              array (
                0 => 'Sellcast',
                1 => 'fab fa-sellcast',
              ),
              1410 => 
              array (
                0 => 'Sellsy',
                1 => 'fab fa-sellsy',
              ),
              1411 => 
              array (
                0 => 'Server',
                1 => 'fa fa-server',
              ),
              1412 => 
              array (
                0 => 'Servicestack',
                1 => 'fab fa-servicestack',
              ),
              1413 => 
              array (
                0 => 'Shapes',
                1 => 'fa fa-shapes',
              ),
              1414 => 
              array (
                0 => 'Share',
                1 => 'fa fa-share',
              ),
              1415 => 
              array (
                0 => 'Share from square',
                1 => 'fa fa-share-from-square',
              ),
              1416 => 
              array (
                0 => 'Share nodes',
                1 => 'fa fa-share-nodes',
              ),
              1417 => 
              array (
                0 => 'Sheet Plastic',
                1 => 'fa fa-sheet-plastic',
              ),
              1418 => 
              array (
                0 => 'Shekel Sign',
                1 => 'fa fa-shekel-sign',
              ),
              1419 => 
              array (
                0 => 'shield',
                1 => 'fa fa-shield',
              ),
              1420 => 
              array (
                0 => 'Shield Cat',
                1 => 'fa fa-shield-cat',
              ),
              1421 => 
              array (
                0 => 'Shield Dog',
                1 => 'fa fa-shield-dog',
              ),
              1422 => 
              array (
                0 => 'Shield Halved',
                1 => 'fa fa-shield-halved',
              ),
              1423 => 
              array (
                0 => 'Shield Heart',
                1 => 'fa fa-shield-heart',
              ),
              1424 => 
              array (
                0 => 'Shield Virus',
                1 => 'fa fa-shield-virus',
              ),
              1425 => 
              array (
                0 => 'Ship',
                1 => 'fa fa-ship',
              ),
              1426 => 
              array (
                0 => 'T-Shirt',
                1 => 'fa fa-shirt',
              ),
              1427 => 
              array (
                0 => 'Shirts in Bulk',
                1 => 'fab fa-shirtsinbulk',
              ),
              1428 => 
              array (
                0 => 'Shoe Prints',
                1 => 'fa fa-shoe-prints',
              ),
              1429 => 
              array (
                0 => 'Shop',
                1 => 'fa fa-shop',
              ),
              1430 => 
              array (
                0 => 'Shop Lock',
                1 => 'fa fa-shop-lock',
              ),
              1431 => 
              array (
                0 => 'Shop slash',
                1 => 'fa fa-shop-slash',
              ),
              1432 => 
              array (
                0 => 'Shopify',
                1 => 'fab fa-shopify',
              ),
              1433 => 
              array (
                0 => 'Shopware',
                1 => 'fab fa-shopware',
              ),
              1434 => 
              array (
                0 => 'Shower',
                1 => 'fa fa-shower',
              ),
              1435 => 
              array (
                0 => 'Shrimp',
                1 => 'fa fa-shrimp',
              ),
              1436 => 
              array (
                0 => 'Shuffle',
                1 => 'fa fa-shuffle',
              ),
              1437 => 
              array (
                0 => 'Shuttle space',
                1 => 'fa fa-shuttle-space',
              ),
              1438 => 
              array (
                0 => 'Sign hanging',
                1 => 'fa fa-sign-hanging',
              ),
              1439 => 
              array (
                0 => 'signal',
                1 => 'fa fa-signal',
              ),
              1440 => 
              array (
                0 => 'Signature',
                1 => 'fa fa-signature',
              ),
              1441 => 
              array (
                0 => 'Signs post',
                1 => 'fa fa-signs-post',
              ),
              1442 => 
              array (
                0 => 'SIM Card',
                1 => 'fa fa-sim-card',
              ),
              1443 => 
              array (
                0 => 'SimplyBuilt',
                1 => 'fab fa-simplybuilt',
              ),
              1444 => 
              array (
                0 => 'Sink',
                1 => 'fa fa-sink',
              ),
              1445 => 
              array (
                0 => 'SISTRIX',
                1 => 'fab fa-sistrix',
              ),
              1446 => 
              array (
                0 => 'Sitemap',
                1 => 'fa fa-sitemap',
              ),
              1447 => 
              array (
                0 => 'Sith',
                1 => 'fab fa-sith',
              ),
              1448 => 
              array (
                0 => 'Sitrox',
                1 => 'fab fa-sitrox',
              ),
              1449 => 
              array (
                0 => 'Sketch',
                1 => 'fab fa-sketch',
              ),
              1450 => 
              array (
                0 => 'Skull',
                1 => 'fa fa-skull',
              ),
              1451 => 
              array (
                0 => 'Skull & Crossbones',
                1 => 'fa fa-skull-crossbones',
              ),
              1452 => 
              array (
                0 => 'skyatlas',
                1 => 'fab fa-skyatlas',
              ),
              1453 => 
              array (
                0 => 'Skype',
                1 => 'fab fa-skype',
              ),
              1454 => 
              array (
                0 => 'Slack Logo',
                1 => 'fab fa-slack',
              ),
              1455 => 
              array (
                0 => 'Slash',
                1 => 'fa fa-slash',
              ),
              1456 => 
              array (
                0 => 'Sleigh',
                1 => 'fa fa-sleigh',
              ),
              1457 => 
              array (
                0 => 'Sliders',
                1 => 'fa fa-sliders',
              ),
              1458 => 
              array (
                0 => 'Slideshare',
                1 => 'fab fa-slideshare',
              ),
              1459 => 
              array (
                0 => 'Smog',
                1 => 'fa fa-smog',
              ),
              1460 => 
              array (
                0 => 'Smoking',
                1 => 'fa fa-smoking',
              ),
              1461 => 
              array (
                0 => 'Snapchat',
                1 => 'fab fa-snapchat',
              ),
              1462 => 
              array (
                0 => 'Snapchat Square',
                1 => 'fab fa-snapchat-square',
              ),
              1463 => 
              array (
                0 => 'Snowflake',
                1 => 'fa fa-snowflake',
              ),
              1464 => 
              array (
                0 => 'Snowman',
                1 => 'fa fa-snowman',
              ),
              1465 => 
              array (
                0 => 'Snowplow',
                1 => 'fa fa-snowplow',
              ),
              1466 => 
              array (
                0 => 'Soap',
                1 => 'fa fa-soap',
              ),
              1467 => 
              array (
                0 => 'Socks',
                1 => 'fa fa-socks',
              ),
              1468 => 
              array (
                0 => 'Solar Panel',
                1 => 'fa fa-solar-panel',
              ),
              1469 => 
              array (
                0 => 'Sort',
                1 => 'fa fa-sort',
              ),
              1470 => 
              array (
                0 => 'Sort Down (Descending)',
                1 => 'fa fa-sort-down',
              ),
              1471 => 
              array (
                0 => 'Sort Up (Ascending)',
                1 => 'fa fa-sort-up',
              ),
              1472 => 
              array (
                0 => 'SoundCloud',
                1 => 'fab fa-soundcloud',
              ),
              1473 => 
              array (
                0 => 'Sourcetree',
                1 => 'fab fa-sourcetree',
              ),
              1474 => 
              array (
                0 => 'Spa',
                1 => 'fa fa-spa',
              ),
              1475 => 
              array (
                0 => 'Spaghetti monster flying',
                1 => 'fa fa-spaghetti-monster-flying',
              ),
              1476 => 
              array (
                0 => 'Speakap',
                1 => 'fab fa-speakap',
              ),
              1477 => 
              array (
                0 => 'Speaker Deck',
                1 => 'fab fa-speaker-deck',
              ),
              1478 => 
              array (
                0 => 'Spell Check',
                1 => 'fa fa-spell-check',
              ),
              1479 => 
              array (
                0 => 'Spider',
                1 => 'fa fa-spider',
              ),
              1480 => 
              array (
                0 => 'Spinner',
                1 => 'fa fa-spinner',
              ),
              1481 => 
              array (
                0 => 'Splotch',
                1 => 'fa fa-splotch',
              ),
              1482 => 
              array (
                0 => 'Spoon',
                1 => 'fa fa-spoon',
              ),
              1483 => 
              array (
                0 => 'Spotify',
                1 => 'fab fa-spotify',
              ),
              1484 => 
              array (
                0 => 'Spray Can',
                1 => 'fa fa-spray-can',
              ),
              1485 => 
              array (
                0 => 'Spray Can Sparkles',
                1 => 'fa fa-spray-can-sparkles',
              ),
              1486 => 
              array (
                0 => 'Square',
                1 => 'fa fa-square',
              ),
              1487 => 
              array (
                0 => 'Square arrow up right',
                1 => 'fa fa-square-arrow-up-right',
              ),
              1488 => 
              array (
                0 => 'Square caret down',
                1 => 'fa fa-square-caret-down',
              ),
              1489 => 
              array (
                0 => 'Square caret left',
                1 => 'fa fa-square-caret-left',
              ),
              1490 => 
              array (
                0 => 'Square caret right',
                1 => 'fa fa-square-caret-right',
              ),
              1491 => 
              array (
                0 => 'Square caret up',
                1 => 'fa fa-square-caret-up',
              ),
              1492 => 
              array (
                0 => 'Square check',
                1 => 'fa fa-square-check',
              ),
              1493 => 
              array (
                0 => 'Square envelope',
                1 => 'fa fa-square-envelope',
              ),
              1494 => 
              array (
                0 => 'Font Awesome in Square',
                1 => 'fab fa-square-font-awesome',
              ),
              1495 => 
              array (
                0 => 'Font Awesome in Square with Stroke Outline',
                1 => 'fab fa-square-font-awesome-stroke',
              ),
              1496 => 
              array (
                0 => 'Square Full',
                1 => 'fa fa-square-full',
              ),
              1497 => 
              array (
                0 => 'Square h',
                1 => 'fa fa-square-h',
              ),
              1498 => 
              array (
                0 => 'Square minus',
                1 => 'fa fa-square-minus',
              ),
              1499 => 
              array (
                0 => 'Square Nfi',
                1 => 'fa fa-square-nfi',
              ),
              1500 => 
              array (
                0 => 'Square parking',
                1 => 'fa fa-square-parking',
              ),
              1501 => 
              array (
                0 => 'Square pen',
                1 => 'fa fa-square-pen',
              ),
              1502 => 
              array (
                0 => 'Square Person-confined',
                1 => 'fa fa-square-person-confined',
              ),
              1503 => 
              array (
                0 => 'Square phone',
                1 => 'fa fa-square-phone',
              ),
              1504 => 
              array (
                0 => 'Square phone flip',
                1 => 'fa fa-square-phone-flip',
              ),
              1505 => 
              array (
                0 => 'Square plus',
                1 => 'fa fa-square-plus',
              ),
              1506 => 
              array (
                0 => 'Square poll horizontal',
                1 => 'fa fa-square-poll-horizontal',
              ),
              1507 => 
              array (
                0 => 'Square poll vertical',
                1 => 'fa fa-square-poll-vertical',
              ),
              1508 => 
              array (
                0 => 'Square root variable',
                1 => 'fa fa-square-root-variable',
              ),
              1509 => 
              array (
                0 => 'Square rss',
                1 => 'fa fa-square-rss',
              ),
              1510 => 
              array (
                0 => 'Square share nodes',
                1 => 'fa fa-square-share-nodes',
              ),
              1511 => 
              array (
                0 => 'Square up right',
                1 => 'fa fa-square-up-right',
              ),
              1512 => 
              array (
                0 => 'Square Virus',
                1 => 'fa fa-square-virus',
              ),
              1513 => 
              array (
                0 => 'Square X Mark',
                1 => 'fa fa-square-xmark',
              ),
              1514 => 
              array (
                0 => 'Squarespace',
                1 => 'fab fa-squarespace',
              ),
              1515 => 
              array (
                0 => 'Stack Exchange',
                1 => 'fab fa-stack-exchange',
              ),
              1516 => 
              array (
                0 => 'Stack Overflow',
                1 => 'fab fa-stack-overflow',
              ),
              1517 => 
              array (
                0 => 'Stackpath',
                1 => 'fab fa-stackpath',
              ),
              1518 => 
              array (
                0 => 'Staff Aesculapius',
                1 => 'fa fa-staff-aesculapius',
              ),
              1519 => 
              array (
                0 => 'Stairs',
                1 => 'fa fa-stairs',
              ),
              1520 => 
              array (
                0 => 'Stamp',
                1 => 'fa fa-stamp',
              ),
              1521 => 
              array (
                0 => 'Star',
                1 => 'fa fa-star',
              ),
              1522 => 
              array (
                0 => 'Star and Crescent',
                1 => 'fa fa-star-and-crescent',
              ),
              1523 => 
              array (
                0 => 'star-half',
                1 => 'fa fa-star-half',
              ),
              1524 => 
              array (
                0 => 'Star half stroke',
                1 => 'fa fa-star-half-stroke',
              ),
              1525 => 
              array (
                0 => 'Star of David',
                1 => 'fa fa-star-of-david',
              ),
              1526 => 
              array (
                0 => 'Star of Life',
                1 => 'fa fa-star-of-life',
              ),
              1527 => 
              array (
                0 => 'StayLinked',
                1 => 'fab fa-staylinked',
              ),
              1528 => 
              array (
                0 => 'Steam',
                1 => 'fab fa-steam',
              ),
              1529 => 
              array (
                0 => 'Steam Square',
                1 => 'fab fa-steam-square',
              ),
              1530 => 
              array (
                0 => 'Steam Symbol',
                1 => 'fab fa-steam-symbol',
              ),
              1531 => 
              array (
                0 => 'Sterling sign',
                1 => 'fa fa-sterling-sign',
              ),
              1532 => 
              array (
                0 => 'Stethoscope',
                1 => 'fa fa-stethoscope',
              ),
              1533 => 
              array (
                0 => 'Sticker Mule',
                1 => 'fab fa-sticker-mule',
              ),
              1534 => 
              array (
                0 => 'stop',
                1 => 'fa fa-stop',
              ),
              1535 => 
              array (
                0 => 'Stopwatch',
                1 => 'fa fa-stopwatch',
              ),
              1536 => 
              array (
                0 => 'Stopwatch 20',
                1 => 'fa fa-stopwatch-20',
              ),
              1537 => 
              array (
                0 => 'Store',
                1 => 'fa fa-store',
              ),
              1538 => 
              array (
                0 => 'Store Slash',
                1 => 'fa fa-store-slash',
              ),
              1539 => 
              array (
                0 => 'Strava',
                1 => 'fab fa-strava',
              ),
              1540 => 
              array (
                0 => 'Street View',
                1 => 'fa fa-street-view',
              ),
              1541 => 
              array (
                0 => 'Strikethrough',
                1 => 'fa fa-strikethrough',
              ),
              1542 => 
              array (
                0 => 'Stripe',
                1 => 'fab fa-stripe',
              ),
              1543 => 
              array (
                0 => 'Stripe S',
                1 => 'fab fa-stripe-s',
              ),
              1544 => 
              array (
                0 => 'Stroopwafel',
                1 => 'fa fa-stroopwafel',
              ),
              1545 => 
              array (
                0 => 'Studio Vinari',
                1 => 'fab fa-studiovinari',
              ),
              1546 => 
              array (
                0 => 'StumbleUpon Logo',
                1 => 'fab fa-stumbleupon',
              ),
              1547 => 
              array (
                0 => 'StumbleUpon Circle',
                1 => 'fab fa-stumbleupon-circle',
              ),
              1548 => 
              array (
                0 => 'subscript',
                1 => 'fa fa-subscript',
              ),
              1549 => 
              array (
                0 => 'Suitcase',
                1 => 'fa fa-suitcase',
              ),
              1550 => 
              array (
                0 => 'Suitcase medical',
                1 => 'fa fa-suitcase-medical',
              ),
              1551 => 
              array (
                0 => 'Suitcase Rolling',
                1 => 'fa fa-suitcase-rolling',
              ),
              1552 => 
              array (
                0 => 'Sun',
                1 => 'fa fa-sun',
              ),
              1553 => 
              array (
                0 => 'Sun Plant-wilt',
                1 => 'fa fa-sun-plant-wilt',
              ),
              1554 => 
              array (
                0 => 'Superpowers',
                1 => 'fab fa-superpowers',
              ),
              1555 => 
              array (
                0 => 'superscript',
                1 => 'fa fa-superscript',
              ),
              1556 => 
              array (
                0 => 'Supple',
                1 => 'fab fa-supple',
              ),
              1557 => 
              array (
                0 => 'Suse',
                1 => 'fab fa-suse',
              ),
              1558 => 
              array (
                0 => 'Swatchbook',
                1 => 'fa fa-swatchbook',
              ),
              1559 => 
              array (
                0 => 'Swift',
                1 => 'fab fa-swift',
              ),
              1560 => 
              array (
                0 => 'Symfony',
                1 => 'fab fa-symfony',
              ),
              1561 => 
              array (
                0 => 'Synagogue',
                1 => 'fa fa-synagogue',
              ),
              1562 => 
              array (
                0 => 'Syringe',
                1 => 'fa fa-syringe',
              ),
              1563 => 
              array (
                0 => 'T',
                1 => 'fa fa-t',
              ),
              1564 => 
              array (
                0 => 'table',
                1 => 'fa fa-table',
              ),
              1565 => 
              array (
                0 => 'Table cells',
                1 => 'fa fa-table-cells',
              ),
              1566 => 
              array (
                0 => 'Table cells large',
                1 => 'fa fa-table-cells-large',
              ),
              1567 => 
              array (
                0 => 'Table columns',
                1 => 'fa fa-table-columns',
              ),
              1568 => 
              array (
                0 => 'Table list',
                1 => 'fa fa-table-list',
              ),
              1569 => 
              array (
                0 => 'Table tennis paddle ball',
                1 => 'fa fa-table-tennis-paddle-ball',
              ),
              1570 => 
              array (
                0 => 'Tablet',
                1 => 'fa fa-tablet',
              ),
              1571 => 
              array (
                0 => 'Tablet button',
                1 => 'fa fa-tablet-button',
              ),
              1572 => 
              array (
                0 => 'Tablet screen button',
                1 => 'fa fa-tablet-screen-button',
              ),
              1573 => 
              array (
                0 => 'Tablets',
                1 => 'fa fa-tablets',
              ),
              1574 => 
              array (
                0 => 'Tachograph digital',
                1 => 'fa fa-tachograph-digital',
              ),
              1575 => 
              array (
                0 => 'tag',
                1 => 'fa fa-tag',
              ),
              1576 => 
              array (
                0 => 'tags',
                1 => 'fa fa-tags',
              ),
              1577 => 
              array (
                0 => 'Tape',
                1 => 'fa fa-tape',
              ),
              1578 => 
              array (
                0 => 'Tarp',
                1 => 'fa fa-tarp',
              ),
              1579 => 
              array (
                0 => 'Tarp Droplet',
                1 => 'fa fa-tarp-droplet',
              ),
              1580 => 
              array (
                0 => 'Taxi',
                1 => 'fa fa-taxi',
              ),
              1581 => 
              array (
                0 => 'TeamSpeak',
                1 => 'fab fa-teamspeak',
              ),
              1582 => 
              array (
                0 => 'Teeth',
                1 => 'fa fa-teeth',
              ),
              1583 => 
              array (
                0 => 'Teeth Open',
                1 => 'fa fa-teeth-open',
              ),
              1584 => 
              array (
                0 => 'Telegram',
                1 => 'fab fa-telegram',
              ),
              1585 => 
              array (
                0 => 'Temperature arrow down',
                1 => 'fa fa-temperature-arrow-down',
              ),
              1586 => 
              array (
                0 => 'Temperature arrow up',
                1 => 'fa fa-temperature-arrow-up',
              ),
              1587 => 
              array (
                0 => 'Temperature empty',
                1 => 'fa fa-temperature-empty',
              ),
              1588 => 
              array (
                0 => 'Temperature full',
                1 => 'fa fa-temperature-full',
              ),
              1589 => 
              array (
                0 => 'Temperature half',
                1 => 'fa fa-temperature-half',
              ),
              1590 => 
              array (
                0 => 'High Temperature',
                1 => 'fa fa-temperature-high',
              ),
              1591 => 
              array (
                0 => 'Low Temperature',
                1 => 'fa fa-temperature-low',
              ),
              1592 => 
              array (
                0 => 'Temperature quarter',
                1 => 'fa fa-temperature-quarter',
              ),
              1593 => 
              array (
                0 => 'Temperature three quarters',
                1 => 'fa fa-temperature-three-quarters',
              ),
              1594 => 
              array (
                0 => 'Tencent Weibo',
                1 => 'fab fa-tencent-weibo',
              ),
              1595 => 
              array (
                0 => 'Tenge sign',
                1 => 'fa fa-tenge-sign',
              ),
              1596 => 
              array (
                0 => 'Tent',
                1 => 'fa fa-tent',
              ),
              1597 => 
              array (
                0 => 'Tent Arrow-down-to-line',
                1 => 'fa fa-tent-arrow-down-to-line',
              ),
              1598 => 
              array (
                0 => 'Tent Arrow-left-right',
                1 => 'fa fa-tent-arrow-left-right',
              ),
              1599 => 
              array (
                0 => 'Tent Arrow-turn-left',
                1 => 'fa fa-tent-arrow-turn-left',
              ),
              1600 => 
              array (
                0 => 'Tent Arrows-down',
                1 => 'fa fa-tent-arrows-down',
              ),
              1601 => 
              array (
                0 => 'Tents',
                1 => 'fa fa-tents',
              ),
              1602 => 
              array (
                0 => 'Terminal',
                1 => 'fa fa-terminal',
              ),
              1603 => 
              array (
                0 => 'text-height',
                1 => 'fa fa-text-height',
              ),
              1604 => 
              array (
                0 => 'Text slash',
                1 => 'fa fa-text-slash',
              ),
              1605 => 
              array (
                0 => 'Text Width',
                1 => 'fa fa-text-width',
              ),
              1606 => 
              array (
                0 => 'The Red Yeti',
                1 => 'fab fa-the-red-yeti',
              ),
              1607 => 
              array (
                0 => 'Themeco',
                1 => 'fab fa-themeco',
              ),
              1608 => 
              array (
                0 => 'ThemeIsle',
                1 => 'fab fa-themeisle',
              ),
              1609 => 
              array (
                0 => 'Thermometer',
                1 => 'fa fa-thermometer',
              ),
              1610 => 
              array (
                0 => 'Think Peaks',
                1 => 'fab fa-think-peaks',
              ),
              1611 => 
              array (
                0 => 'thumbs-down',
                1 => 'fa fa-thumbs-down',
              ),
              1612 => 
              array (
                0 => 'thumbs-up',
                1 => 'fa fa-thumbs-up',
              ),
              1613 => 
              array (
                0 => 'Thumbtack',
                1 => 'fa fa-thumbtack',
              ),
              1614 => 
              array (
                0 => 'Ticket',
                1 => 'fa fa-ticket',
              ),
              1615 => 
              array (
                0 => 'Ticket simple',
                1 => 'fa fa-ticket-simple',
              ),
              1616 => 
              array (
                0 => 'TikTok',
                1 => 'fab fa-tiktok',
              ),
              1617 => 
              array (
                0 => 'Timeline',
                1 => 'fa fa-timeline',
              ),
              1618 => 
              array (
                0 => 'Toggle Off',
                1 => 'fa fa-toggle-off',
              ),
              1619 => 
              array (
                0 => 'Toggle On',
                1 => 'fa fa-toggle-on',
              ),
              1620 => 
              array (
                0 => 'Toilet',
                1 => 'fa fa-toilet',
              ),
              1621 => 
              array (
                0 => 'Toilet Paper',
                1 => 'fa fa-toilet-paper',
              ),
              1622 => 
              array (
                0 => 'Toilet Paper Slash',
                1 => 'fa fa-toilet-paper-slash',
              ),
              1623 => 
              array (
                0 => 'Toilet Portable',
                1 => 'fa fa-toilet-portable',
              ),
              1624 => 
              array (
                0 => 'Toilets Portable',
                1 => 'fa fa-toilets-portable',
              ),
              1625 => 
              array (
                0 => 'Toolbox',
                1 => 'fa fa-toolbox',
              ),
              1626 => 
              array (
                0 => 'Tooth',
                1 => 'fa fa-tooth',
              ),
              1627 => 
              array (
                0 => 'Torii Gate',
                1 => 'fa fa-torii-gate',
              ),
              1628 => 
              array (
                0 => 'Tornado',
                1 => 'fa fa-tornado',
              ),
              1629 => 
              array (
                0 => 'Tower broadcast',
                1 => 'fa fa-tower-broadcast',
              ),
              1630 => 
              array (
                0 => 'Tower Cell',
                1 => 'fa fa-tower-cell',
              ),
              1631 => 
              array (
                0 => 'Tower Observation',
                1 => 'fa fa-tower-observation',
              ),
              1632 => 
              array (
                0 => 'Tractor',
                1 => 'fa fa-tractor',
              ),
              1633 => 
              array (
                0 => 'Trade Federation',
                1 => 'fab fa-trade-federation',
              ),
              1634 => 
              array (
                0 => 'Trademark',
                1 => 'fa fa-trademark',
              ),
              1635 => 
              array (
                0 => 'Traffic Light',
                1 => 'fa fa-traffic-light',
              ),
              1636 => 
              array (
                0 => 'Trailer',
                1 => 'fa fa-trailer',
              ),
              1637 => 
              array (
                0 => 'Train',
                1 => 'fa fa-train',
              ),
              1638 => 
              array (
                0 => 'Train subway',
                1 => 'fa fa-train-subway',
              ),
              1639 => 
              array (
                0 => 'Train tram',
                1 => 'fa fa-train-tram',
              ),
              1640 => 
              array (
                0 => 'Transgender',
                1 => 'fa fa-transgender',
              ),
              1641 => 
              array (
                0 => 'Trash',
                1 => 'fa fa-trash',
              ),
              1642 => 
              array (
                0 => 'Trash arrow up',
                1 => 'fa fa-trash-arrow-up',
              ),
              1643 => 
              array (
                0 => 'Trash can',
                1 => 'fa fa-trash-can',
              ),
              1644 => 
              array (
                0 => 'Trash can arrow up',
                1 => 'fa fa-trash-can-arrow-up',
              ),
              1645 => 
              array (
                0 => 'Tree',
                1 => 'fa fa-tree',
              ),
              1646 => 
              array (
                0 => 'Tree City',
                1 => 'fa fa-tree-city',
              ),
              1647 => 
              array (
                0 => 'Trello',
                1 => 'fab fa-trello',
              ),
              1648 => 
              array (
                0 => 'Triangle exclamation',
                1 => 'fa fa-triangle-exclamation',
              ),
              1649 => 
              array (
                0 => 'trophy',
                1 => 'fa fa-trophy',
              ),
              1650 => 
              array (
                0 => 'Trowel',
                1 => 'fa fa-trowel',
              ),
              1651 => 
              array (
                0 => 'Trowel Bricks',
                1 => 'fa fa-trowel-bricks',
              ),
              1652 => 
              array (
                0 => 'truck',
                1 => 'fa fa-truck',
              ),
              1653 => 
              array (
                0 => 'Truck Arrow-right',
                1 => 'fa fa-truck-arrow-right',
              ),
              1654 => 
              array (
                0 => 'Truck Droplet',
                1 => 'fa fa-truck-droplet',
              ),
              1655 => 
              array (
                0 => 'Truck fast',
                1 => 'fa fa-truck-fast',
              ),
              1656 => 
              array (
                0 => 'Truck Field',
                1 => 'fa fa-truck-field',
              ),
              1657 => 
              array (
                0 => 'Truck Field-un',
                1 => 'fa fa-truck-field-un',
              ),
              1658 => 
              array (
                0 => 'Truck Front',
                1 => 'fa fa-truck-front',
              ),
              1659 => 
              array (
                0 => 'Truck medical',
                1 => 'fa fa-truck-medical',
              ),
              1660 => 
              array (
                0 => 'Truck Monster',
                1 => 'fa fa-truck-monster',
              ),
              1661 => 
              array (
                0 => 'Truck Moving',
                1 => 'fa fa-truck-moving',
              ),
              1662 => 
              array (
                0 => 'Truck Side',
                1 => 'fa fa-truck-pickup',
              ),
              1663 => 
              array (
                0 => 'Truck Plane',
                1 => 'fa fa-truck-plane',
              ),
              1664 => 
              array (
                0 => 'Truck ramp box',
                1 => 'fa fa-truck-ramp-box',
              ),
              1665 => 
              array (
                0 => 'TTY',
                1 => 'fa fa-tty',
              ),
              1666 => 
              array (
                0 => 'Tumblr',
                1 => 'fab fa-tumblr',
              ),
              1667 => 
              array (
                0 => 'Tumblr Square',
                1 => 'fab fa-tumblr-square',
              ),
              1668 => 
              array (
                0 => 'Turkish Lira-sign',
                1 => 'fa fa-turkish-lira-sign',
              ),
              1669 => 
              array (
                0 => 'Turn down',
                1 => 'fa fa-turn-down',
              ),
              1670 => 
              array (
                0 => 'Turn up',
                1 => 'fa fa-turn-up',
              ),
              1671 => 
              array (
                0 => 'Television',
                1 => 'fa fa-tv',
              ),
              1672 => 
              array (
                0 => 'Twitch',
                1 => 'fab fa-twitch',
              ),
              1673 => 
              array (
                0 => 'Twitter',
                1 => 'fab fa-twitter',
              ),
              1674 => 
              array (
                0 => 'Twitter Square',
                1 => 'fab fa-twitter-square',
              ),
              1675 => 
              array (
                0 => 'Typo3',
                1 => 'fab fa-typo3',
              ),
              1676 => 
              array (
                0 => 'U',
                1 => 'fa fa-u',
              ),
              1677 => 
              array (
                0 => 'Uber',
                1 => 'fab fa-uber',
              ),
              1678 => 
              array (
                0 => 'Ubuntu',
                1 => 'fab fa-ubuntu',
              ),
              1679 => 
              array (
                0 => 'UIkit',
                1 => 'fab fa-uikit',
              ),
              1680 => 
              array (
                0 => 'Umbraco',
                1 => 'fab fa-umbraco',
              ),
              1681 => 
              array (
                0 => 'Umbrella',
                1 => 'fa fa-umbrella',
              ),
              1682 => 
              array (
                0 => 'Umbrella Beach',
                1 => 'fa fa-umbrella-beach',
              ),
              1683 => 
              array (
                0 => 'Uncharted Software',
                1 => 'fab fa-uncharted',
              ),
              1684 => 
              array (
                0 => 'Underline',
                1 => 'fa fa-underline',
              ),
              1685 => 
              array (
                0 => 'Uniregistry',
                1 => 'fab fa-uniregistry',
              ),
              1686 => 
              array (
                0 => 'Unity 3D',
                1 => 'fab fa-unity',
              ),
              1687 => 
              array (
                0 => 'Universal Access',
                1 => 'fa fa-universal-access',
              ),
              1688 => 
              array (
                0 => 'unlock',
                1 => 'fa fa-unlock',
              ),
              1689 => 
              array (
                0 => 'Unlock keyhole',
                1 => 'fa fa-unlock-keyhole',
              ),
              1690 => 
              array (
                0 => 'Unsplash',
                1 => 'fab fa-unsplash',
              ),
              1691 => 
              array (
                0 => 'Untappd',
                1 => 'fab fa-untappd',
              ),
              1692 => 
              array (
                0 => 'Up down',
                1 => 'fa fa-up-down',
              ),
              1693 => 
              array (
                0 => 'Up down left right',
                1 => 'fa fa-up-down-left-right',
              ),
              1694 => 
              array (
                0 => 'Up long',
                1 => 'fa fa-up-long',
              ),
              1695 => 
              array (
                0 => 'Up right and down left from center',
                1 => 'fa fa-up-right-and-down-left-from-center',
              ),
              1696 => 
              array (
                0 => 'Up right from square',
                1 => 'fa fa-up-right-from-square',
              ),
              1697 => 
              array (
                0 => 'Upload',
                1 => 'fa fa-upload',
              ),
              1698 => 
              array (
                0 => 'UPS',
                1 => 'fab fa-ups',
              ),
              1699 => 
              array (
                0 => 'USB',
                1 => 'fab fa-usb',
              ),
              1700 => 
              array (
                0 => 'User',
                1 => 'fa fa-user',
              ),
              1701 => 
              array (
                0 => 'User Astronaut',
                1 => 'fa fa-user-astronaut',
              ),
              1702 => 
              array (
                0 => 'User Check',
                1 => 'fa fa-user-check',
              ),
              1703 => 
              array (
                0 => 'User Clock',
                1 => 'fa fa-user-clock',
              ),
              1704 => 
              array (
                0 => 'User doctor',
                1 => 'fa fa-user-doctor',
              ),
              1705 => 
              array (
                0 => 'User gear',
                1 => 'fa fa-user-gear',
              ),
              1706 => 
              array (
                0 => 'User Graduate',
                1 => 'fa fa-user-graduate',
              ),
              1707 => 
              array (
                0 => 'User group',
                1 => 'fa fa-user-group',
              ),
              1708 => 
              array (
                0 => 'User Injured',
                1 => 'fa fa-user-injured',
              ),
              1709 => 
              array (
                0 => 'User large',
                1 => 'fa fa-user-large',
              ),
              1710 => 
              array (
                0 => 'User large slash',
                1 => 'fa fa-user-large-slash',
              ),
              1711 => 
              array (
                0 => 'User Lock',
                1 => 'fa fa-user-lock',
              ),
              1712 => 
              array (
                0 => 'User Minus',
                1 => 'fa fa-user-minus',
              ),
              1713 => 
              array (
                0 => 'User Ninja',
                1 => 'fa fa-user-ninja',
              ),
              1714 => 
              array (
                0 => 'Nurse',
                1 => 'fa fa-user-nurse',
              ),
              1715 => 
              array (
                0 => 'User pen',
                1 => 'fa fa-user-pen',
              ),
              1716 => 
              array (
                0 => 'User Plus',
                1 => 'fa fa-user-plus',
              ),
              1717 => 
              array (
                0 => 'User Secret',
                1 => 'fa fa-user-secret',
              ),
              1718 => 
              array (
                0 => 'User Shield',
                1 => 'fa fa-user-shield',
              ),
              1719 => 
              array (
                0 => 'User Slash',
                1 => 'fa fa-user-slash',
              ),
              1720 => 
              array (
                0 => 'User Tag',
                1 => 'fa fa-user-tag',
              ),
              1721 => 
              array (
                0 => 'User Tie',
                1 => 'fa fa-user-tie',
              ),
              1722 => 
              array (
                0 => 'User X Mark',
                1 => 'fa fa-user-xmark',
              ),
              1723 => 
              array (
                0 => 'Users',
                1 => 'fa fa-users',
              ),
              1724 => 
              array (
                0 => 'Users Between-lines',
                1 => 'fa fa-users-between-lines',
              ),
              1725 => 
              array (
                0 => 'Users gear',
                1 => 'fa fa-users-gear',
              ),
              1726 => 
              array (
                0 => 'Users Line',
                1 => 'fa fa-users-line',
              ),
              1727 => 
              array (
                0 => 'Users Rays',
                1 => 'fa fa-users-rays',
              ),
              1728 => 
              array (
                0 => 'Users Rectangle',
                1 => 'fa fa-users-rectangle',
              ),
              1729 => 
              array (
                0 => 'Users Slash',
                1 => 'fa fa-users-slash',
              ),
              1730 => 
              array (
                0 => 'Users Viewfinder',
                1 => 'fa fa-users-viewfinder',
              ),
              1731 => 
              array (
                0 => 'United States Postal Service',
                1 => 'fab fa-usps',
              ),
              1732 => 
              array (
                0 => 'us-Sunnah Foundation',
                1 => 'fab fa-ussunnah',
              ),
              1733 => 
              array (
                0 => 'Utensils',
                1 => 'fa fa-utensils',
              ),
              1734 => 
              array (
                0 => 'V',
                1 => 'fa fa-v',
              ),
              1735 => 
              array (
                0 => 'Vaadin',
                1 => 'fab fa-vaadin',
              ),
              1736 => 
              array (
                0 => 'Van shuttle',
                1 => 'fa fa-van-shuttle',
              ),
              1737 => 
              array (
                0 => 'Vault',
                1 => 'fa fa-vault',
              ),
              1738 => 
              array (
                0 => 'Vector Square',
                1 => 'fa fa-vector-square',
              ),
              1739 => 
              array (
                0 => 'Venus',
                1 => 'fa fa-venus',
              ),
              1740 => 
              array (
                0 => 'Venus Double',
                1 => 'fa fa-venus-double',
              ),
              1741 => 
              array (
                0 => 'Venus Mars',
                1 => 'fa fa-venus-mars',
              ),
              1742 => 
              array (
                0 => 'vest',
                1 => 'fa fa-vest',
              ),
              1743 => 
              array (
                0 => 'vest-patches',
                1 => 'fa fa-vest-patches',
              ),
              1744 => 
              array (
                0 => 'Viacoin',
                1 => 'fab fa-viacoin',
              ),
              1745 => 
              array (
                0 => 'Viadeo',
                1 => 'fab fa-viadeo',
              ),
              1746 => 
              array (
                0 => 'Viadeo Square',
                1 => 'fab fa-viadeo-square',
              ),
              1747 => 
              array (
                0 => 'Vial',
                1 => 'fa fa-vial',
              ),
              1748 => 
              array (
                0 => 'Vial Circle-check',
                1 => 'fa fa-vial-circle-check',
              ),
              1749 => 
              array (
                0 => 'Vial Virus',
                1 => 'fa fa-vial-virus',
              ),
              1750 => 
              array (
                0 => 'Vials',
                1 => 'fa fa-vials',
              ),
              1751 => 
              array (
                0 => 'Viber',
                1 => 'fab fa-viber',
              ),
              1752 => 
              array (
                0 => 'Video',
                1 => 'fa fa-video',
              ),
              1753 => 
              array (
                0 => 'Video Slash',
                1 => 'fa fa-video-slash',
              ),
              1754 => 
              array (
                0 => 'Vihara',
                1 => 'fa fa-vihara',
              ),
              1755 => 
              array (
                0 => 'Vimeo',
                1 => 'fab fa-vimeo',
              ),
              1756 => 
              array (
                0 => 'Vimeo Square',
                1 => 'fab fa-vimeo-square',
              ),
              1757 => 
              array (
                0 => 'Vimeo',
                1 => 'fab fa-vimeo-v',
              ),
              1758 => 
              array (
                0 => 'Vine',
                1 => 'fab fa-vine',
              ),
              1759 => 
              array (
                0 => 'Virus',
                1 => 'fa fa-virus',
              ),
              1760 => 
              array (
                0 => 'Virus Covid',
                1 => 'fa fa-virus-covid',
              ),
              1761 => 
              array (
                0 => 'Virus Covid-slash',
                1 => 'fa fa-virus-covid-slash',
              ),
              1762 => 
              array (
                0 => 'Virus Slash',
                1 => 'fa fa-virus-slash',
              ),
              1763 => 
              array (
                0 => 'Viruses',
                1 => 'fa fa-viruses',
              ),
              1764 => 
              array (
                0 => 'VK',
                1 => 'fab fa-vk',
              ),
              1765 => 
              array (
                0 => 'VNV',
                1 => 'fab fa-vnv',
              ),
              1766 => 
              array (
                0 => 'Voicemail',
                1 => 'fa fa-voicemail',
              ),
              1767 => 
              array (
                0 => 'Volcano',
                1 => 'fa fa-volcano',
              ),
              1768 => 
              array (
                0 => 'Volleyball Ball',
                1 => 'fa fa-volleyball',
              ),
              1769 => 
              array (
                0 => 'Volume high',
                1 => 'fa fa-volume-high',
              ),
              1770 => 
              array (
                0 => 'Volume low',
                1 => 'fa fa-volume-low',
              ),
              1771 => 
              array (
                0 => 'Volume Off',
                1 => 'fa fa-volume-off',
              ),
              1772 => 
              array (
                0 => 'Volume X Mark',
                1 => 'fa fa-volume-xmark',
              ),
              1773 => 
              array (
                0 => 'Cardboard VR',
                1 => 'fa fa-vr-cardboard',
              ),
              1774 => 
              array (
                0 => 'Vue.js',
                1 => 'fab fa-vuejs',
              ),
              1775 => 
              array (
                0 => 'W',
                1 => 'fa fa-w',
              ),
              1776 => 
              array (
                0 => 'Walkie Talkie',
                1 => 'fa fa-walkie-talkie',
              ),
              1777 => 
              array (
                0 => 'Wallet',
                1 => 'fa fa-wallet',
              ),
              1778 => 
              array (
                0 => 'Wand magic',
                1 => 'fa fa-wand-magic',
              ),
              1779 => 
              array (
                0 => 'Wand magic sparkles',
                1 => 'fa fa-wand-magic-sparkles',
              ),
              1780 => 
              array (
                0 => 'Wand sparkles',
                1 => 'fa fa-wand-sparkles',
              ),
              1781 => 
              array (
                0 => 'Warehouse',
                1 => 'fa fa-warehouse',
              ),
              1782 => 
              array (
                0 => 'Watchman Monitoring',
                1 => 'fab fa-watchman-monitoring',
              ),
              1783 => 
              array (
                0 => 'Water',
                1 => 'fa fa-water',
              ),
              1784 => 
              array (
                0 => 'Water ladder',
                1 => 'fa fa-water-ladder',
              ),
              1785 => 
              array (
                0 => 'Square Wave',
                1 => 'fa fa-wave-square',
              ),
              1786 => 
              array (
                0 => 'Waze',
                1 => 'fab fa-waze',
              ),
              1787 => 
              array (
                0 => 'Weebly',
                1 => 'fab fa-weebly',
              ),
              1788 => 
              array (
                0 => 'Weibo',
                1 => 'fab fa-weibo',
              ),
              1789 => 
              array (
                0 => 'Hanging Weight',
                1 => 'fa fa-weight-hanging',
              ),
              1790 => 
              array (
                0 => 'Weight scale',
                1 => 'fa fa-weight-scale',
              ),
              1791 => 
              array (
                0 => 'Weixin (WeChat)',
                1 => 'fab fa-weixin',
              ),
              1792 => 
              array (
                0 => 'What\'s App',
                1 => 'fab fa-whatsapp',
              ),
              1793 => 
              array (
                0 => 'What\'s App Square',
                1 => 'fab fa-whatsapp-square',
              ),
              1794 => 
              array (
                0 => 'Wheat awn',
                1 => 'fa fa-wheat-awn',
              ),
              1795 => 
              array (
                0 => 'Wheat Awn-circle-exclamation',
                1 => 'fa fa-wheat-awn-circle-exclamation',
              ),
              1796 => 
              array (
                0 => 'Wheelchair',
                1 => 'fa fa-wheelchair',
              ),
              1797 => 
              array (
                0 => 'Wheelchair Move',
                1 => 'fa fa-wheelchair-move',
              ),
              1798 => 
              array (
                0 => 'Whiskey glass',
                1 => 'fa fa-whiskey-glass',
              ),
              1799 => 
              array (
                0 => 'WHMCS',
                1 => 'fab fa-whmcs',
              ),
              1800 => 
              array (
                0 => 'WiFi',
                1 => 'fa fa-wifi',
              ),
              1801 => 
              array (
                0 => 'Wikipedia W',
                1 => 'fab fa-wikipedia-w',
              ),
              1802 => 
              array (
                0 => 'Wind',
                1 => 'fa fa-wind',
              ),
              1803 => 
              array (
                0 => 'Window Maximize',
                1 => 'fa fa-window-maximize',
              ),
              1804 => 
              array (
                0 => 'Window Minimize',
                1 => 'fa fa-window-minimize',
              ),
              1805 => 
              array (
                0 => 'Window Restore',
                1 => 'fa fa-window-restore',
              ),
              1806 => 
              array (
                0 => 'Windows',
                1 => 'fab fa-windows',
              ),
              1807 => 
              array (
                0 => 'Wine Bottle',
                1 => 'fa fa-wine-bottle',
              ),
              1808 => 
              array (
                0 => 'Wine Glass',
                1 => 'fa fa-wine-glass',
              ),
              1809 => 
              array (
                0 => 'Wine glass empty',
                1 => 'fa fa-wine-glass-empty',
              ),
              1810 => 
              array (
                0 => 'wirsindhandwerk',
                1 => 'fab fa-wirsindhandwerk',
              ),
              1811 => 
              array (
                0 => 'Wix',
                1 => 'fab fa-wix',
              ),
              1812 => 
              array (
                0 => 'Wizards of the Coast',
                1 => 'fab fa-wizards-of-the-coast',
              ),
              1813 => 
              array (
                0 => 'Wodu',
                1 => 'fab fa-wodu',
              ),
              1814 => 
              array (
                0 => 'Wolf Pack Battalion',
                1 => 'fab fa-wolf-pack-battalion',
              ),
              1815 => 
              array (
                0 => 'Won Sign',
                1 => 'fa fa-won-sign',
              ),
              1816 => 
              array (
                0 => 'WordPress Logo',
                1 => 'fab fa-wordpress',
              ),
              1817 => 
              array (
                0 => 'Wordpress Simple',
                1 => 'fab fa-wordpress-simple',
              ),
              1818 => 
              array (
                0 => 'Worm',
                1 => 'fa fa-worm',
              ),
              1819 => 
              array (
                0 => 'WPBeginner',
                1 => 'fab fa-wpbeginner',
              ),
              1820 => 
              array (
                0 => 'WPExplorer',
                1 => 'fab fa-wpexplorer',
              ),
              1821 => 
              array (
                0 => 'WPForms',
                1 => 'fab fa-wpforms',
              ),
              1822 => 
              array (
                0 => 'wpressr',
                1 => 'fab fa-wpressr',
              ),
              1823 => 
              array (
                0 => 'Wrench',
                1 => 'fa fa-wrench',
              ),
              1824 => 
              array (
                0 => 'X',
                1 => 'fa fa-x',
              ),
              1825 => 
              array (
                0 => 'X-Ray',
                1 => 'fa fa-x-ray',
              ),
              1826 => 
              array (
                0 => 'Xbox',
                1 => 'fab fa-xbox',
              ),
              1827 => 
              array (
                0 => 'Xing',
                1 => 'fab fa-xing',
              ),
              1828 => 
              array (
                0 => 'Xing Square',
                1 => 'fab fa-xing-square',
              ),
              1829 => 
              array (
                0 => 'X Mark',
                1 => 'fa fa-xmark',
              ),
              1830 => 
              array (
                0 => 'Xmarks Lines',
                1 => 'fa fa-xmarks-lines',
              ),
              1831 => 
              array (
                0 => 'Y',
                1 => 'fa fa-y',
              ),
              1832 => 
              array (
                0 => 'Y Combinator',
                1 => 'fab fa-y-combinator',
              ),
              1833 => 
              array (
                0 => 'Yahoo Logo',
                1 => 'fab fa-yahoo',
              ),
              1834 => 
              array (
                0 => 'Yammer',
                1 => 'fab fa-yammer',
              ),
              1835 => 
              array (
                0 => 'Yandex',
                1 => 'fab fa-yandex',
              ),
              1836 => 
              array (
                0 => 'Yandex International',
                1 => 'fab fa-yandex-international',
              ),
              1837 => 
              array (
                0 => 'Yarn',
                1 => 'fab fa-yarn',
              ),
              1838 => 
              array (
                0 => 'Yelp',
                1 => 'fab fa-yelp',
              ),
              1839 => 
              array (
                0 => 'Yen Sign',
                1 => 'fa fa-yen-sign',
              ),
              1840 => 
              array (
                0 => 'Yin Yang',
                1 => 'fa fa-yin-yang',
              ),
              1841 => 
              array (
                0 => 'Yoast',
                1 => 'fab fa-yoast',
              ),
              1842 => 
              array (
                0 => 'YouTube',
                1 => 'fab fa-youtube',
              ),
              1843 => 
              array (
                0 => 'YouTube Square',
                1 => 'fab fa-youtube-square',
              ),
              1844 => 
              array (
                0 => 'Z',
                1 => 'fa fa-z',
              ),
              1845 => 
              array (
                0 => 'Zhihu',
                1 => 'fab fa-zhihu',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'tx_staticfilecache_cache' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:staticfilecache/Resources/Private/Language/locallang.xlf:staticfilecache.tx_staticfilecache_cache',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'tx_staticfilecache_cache_force' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:staticfilecache/Resources/Private/Language/locallang.xlf:staticfilecache.tx_staticfilecache_cache_force',
          'description' => 'LLL:EXT:staticfilecache/Resources/Private/Language/locallang.xlf:staticfilecache.tx_staticfilecache_cache_force.desc',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'tx_staticfilecache_cache_offline' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:staticfilecache/Resources/Private/Language/locallang.xlf:staticfilecache.tx_staticfilecache_cache_offline',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'tx_staticfilecache_cache_priority' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:staticfilecache/Resources/Private/Language/locallang.xlf:staticfilecache.tx_staticfilecache_cache_priority',
          'config' => 
          array (
            'type' => 'input',
            'default' => '0',
            'eval' => 'int+',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.seo, --palette--;;seo, --palette--;;robots, --palette--;;canonical, --palette--;;sitemap, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        6 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon,
                    --palette--;;external,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon,
                    --palette--;;shortcut,
                    --palette--;;shortcutpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon,
                    --palette--;;mountpoint,
                    --palette--;;mountpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, extendToSubpages',
        ),
        2 => 
        array (
          'showitem' => 'layout, lastUpdated, newUntil, no_search',
        ),
        3 => 
        array (
          'showitem' => 'target, cache_timeout, cache_tags',
        ),
        5 => 
        array (
          'showitem' => 'author, author_email',
        ),
        6 => 
        array (
          'showitem' => 'php_tree_stop, editlock',
        ),
        7 => 
        array (
          'showitem' => 'is_siteroot',
        ),
        8 => 
        array (
          'showitem' => 'backend_layout_next_level',
        ),
        'standard' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard',
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel, target',
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle_formlabel, nav_hide;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle_formlabel',
        ),
        'hiddenonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract',
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags',
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel',
        ),
        'editorial' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial',
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'layout, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module',
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace',
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links',
          'showitem' => 'target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching',
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags, --linebreak--, tx_staticfilecache_cache, tx_staticfilecache_cache_force, tx_staticfilecache_cache_offline, tx_staticfilecache_cache_priority',
        ),
        'language' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language',
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media',
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config',
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
        'seo' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo',
          'showitem' => 'seo_title;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'robots' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.robots',
          'showitem' => 'no_index;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel, no_follow;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
        ),
        'canonical' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.canonical',
          'showitem' => 'canonical_link',
        ),
        'sitemap' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.sitemap',
          'showitem' => 'sitemap_changefreq, sitemap_priority',
        ),
        'opengraph' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.opengraph',
          'showitem' => 'og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.twittercards',
          'showitem' => 'twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image, --linebreak--, twitter_card',
        ),
        'tx_faicon_icon' => 
        array (
          'showitem' => 'tx_faicon_icon',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'versioningWS' => true,
        'rootLevel' => -1,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, parent,
                --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,
                    items,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND {#sys_category}.{#pid}=###CURRENT_PID### AND {#sys_category}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                1 => 3,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                1 => 4,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                1 => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 8,
            'max' => 30,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND {#sys_file_collection}.{#pid}=###CURRENT_PID### AND {#sys_file_collection}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                1 => 'static',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                1 => 'folder',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                1 => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.storage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'folder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
            'default' => '',
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'static' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'folder' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,storage, folder, recursive,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'category' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,category,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_metadata',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND {#sys_file}.{#uid} = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.width',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.height',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'visible' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.visible',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'status' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.1',
                1 => 1,
                2 => 'actions-check',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.2',
                1 => 2,
                2 => 'actions-clock',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.3',
                1 => 3,
                2 => 'actions-view',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'placeholder' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:placeholder.keywords',
          ),
        ),
        'caption' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.caption',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'creator_tool' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator_tool',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'download_name' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.download_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'creator' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'publisher' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.publisher',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'source' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'copyright' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.copyright',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'location_country' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_region' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_region',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_city' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'latitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.latitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'longitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.longitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'ranking' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ranking',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'minitems' => 1,
            'maxitems' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 0,
                1 => 0,
              ),
              1 => 
              array (
                0 => 1,
                1 => 1,
              ),
              2 => 
              array (
                0 => 2,
                1 => 2,
              ),
              3 => 
              array (
                0 => 3,
                1 => 3,
              ),
              4 => 
              array (
                0 => 4,
                1 => 4,
              ),
              5 => 
              array (
                0 => 5,
                1 => 5,
              ),
            ),
          ),
        ),
        'content_creation_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_creation_date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 1660891040,
          ),
        ),
        'content_modification_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_modification_date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 1660891040,
          ),
        ),
        'note' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
        'unit' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.px',
                1 => 'px',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.cm',
                1 => 'cm',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.in',
                1 => 'in',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.mm',
                1 => 'mm',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.m',
                1 => 'm',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.p',
                1 => 'p',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.pt',
                1 => 'pt',
              ),
            ),
            'default' => '',
            'readOnly' => true,
          ),
        ),
        'duration' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.duration',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'color_space' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.RGB',
                1 => 'RGB',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.sRGB',
                1 => 'sRGB',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMYK',
                1 => 'CMYK',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMY',
                1 => 'CMY',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.YUV',
                1 => 'YUV',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.grey',
                1 => 'grey',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.indx',
                1 => 'indx',
              ),
            ),
            'default' => '',
            'readOnly' => true,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.pages',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'readOnly' => true,
          ),
        ),
        'language' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fe_groups' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright,
                    --palette--;;40,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        2 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;20, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    --palette--;;30,
                    --palette--;;60,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.camera,
                    color_space,
                    --palette--;;50,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        3 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;60,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.audio,
                    duration,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        4 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;60,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.video,
                    duration,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        5 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    fileinfo, title, description, ranking, keywords,
                    --palette--;;25, --palette--;;language,
                --div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,
                    creator, creator_tool, publisher, source, copyright, language,
                    --palette--;;40,
                    pages,
                    --palette--;;50,
                    --palette--;;60,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;10,
                    fe_groups,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        10 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility',
          'showitem' => 'visible, status',
        ),
        20 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility',
          'showitem' => 'alternative, --linebreak--, caption, --linebreak--, download_name',
        ),
        25 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility',
          'showitem' => 'caption, --linebreak--, download_name',
        ),
        30 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.gps',
          'showitem' => 'latitude, longitude',
        ),
        40 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location',
          'showitem' => 'location_country, location_region, location_city',
        ),
        50 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.metrics',
          'showitem' => 'width, height, unit',
        ),
        60 => 
        array (
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date',
          'showitem' => 'content_creation_date, content_modification_date',
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'formattedLabel_userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
        'formattedLabel_userFunc_options' => 
        array (
          'sys_file' => 
          array (
            0 => 'title',
            1 => 'name',
          ),
        ),
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_reference',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'size' => 1,
            'maxitems' => 1,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'table_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.table_local',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'default' => 'sys_file',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 20,
            'max' => 1024,
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				alternative,description,--linebreak--,
				link,title,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'groupName' => 'system',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                0 => 'Local filesystem',
                1 => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,
                    --palette--;Capabilities;capabilities,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    is_online,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'useColumnsForDefaultValues' => 'path,base',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required,trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'base' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.baseStorage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => true,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'maxitems' => 1,
            'eval' => 'required',
            'range' => 
            array (
              'lower' => 1,
            ),
          ),
        ),
        'path' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.folder',
          'displayCond' => 'FIELD:base:>:0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,base, path,read_only,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'sys_language' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_column' => 'flag',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_language',
          'mask' => 'flags-###TYPE###',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'language_isocode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Service\\IsoCodeService->renderIsoCodeSelectDropdown',
          ),
        ),
        'flag' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'multiple',
                1 => 'multiple',
                2 => 'flags-multiple',
              ),
              2 => 
              array (
                0 => 'ad',
                1 => 'ad',
                2 => 'flags-ad',
              ),
              3 => 
              array (
                0 => 'ae',
                1 => 'ae',
                2 => 'flags-ae',
              ),
              4 => 
              array (
                0 => 'af',
                1 => 'af',
                2 => 'flags-af',
              ),
              5 => 
              array (
                0 => 'ag',
                1 => 'ag',
                2 => 'flags-ag',
              ),
              6 => 
              array (
                0 => 'ai',
                1 => 'ai',
                2 => 'flags-ai',
              ),
              7 => 
              array (
                0 => 'al',
                1 => 'al',
                2 => 'flags-al',
              ),
              8 => 
              array (
                0 => 'am',
                1 => 'am',
                2 => 'flags-am',
              ),
              9 => 
              array (
                0 => 'an',
                1 => 'an',
                2 => 'flags-an',
              ),
              10 => 
              array (
                0 => 'ao',
                1 => 'ao',
                2 => 'flags-ao',
              ),
              11 => 
              array (
                0 => 'aq',
                1 => 'aq',
                2 => 'flags-aq',
              ),
              12 => 
              array (
                0 => 'ar',
                1 => 'ar',
                2 => 'flags-ar',
              ),
              13 => 
              array (
                0 => 'as',
                1 => 'as',
                2 => 'flags-as',
              ),
              14 => 
              array (
                0 => 'at',
                1 => 'at',
                2 => 'flags-at',
              ),
              15 => 
              array (
                0 => 'au',
                1 => 'au',
                2 => 'flags-au',
              ),
              16 => 
              array (
                0 => 'aw',
                1 => 'aw',
                2 => 'flags-aw',
              ),
              17 => 
              array (
                0 => 'ax',
                1 => 'ax',
                2 => 'flags-ax',
              ),
              18 => 
              array (
                0 => 'az',
                1 => 'az',
                2 => 'flags-az',
              ),
              19 => 
              array (
                0 => 'ba',
                1 => 'ba',
                2 => 'flags-ba',
              ),
              20 => 
              array (
                0 => 'bb',
                1 => 'bb',
                2 => 'flags-bb',
              ),
              21 => 
              array (
                0 => 'bd',
                1 => 'bd',
                2 => 'flags-bd',
              ),
              22 => 
              array (
                0 => 'be',
                1 => 'be',
                2 => 'flags-be',
              ),
              23 => 
              array (
                0 => 'bf',
                1 => 'bf',
                2 => 'flags-bf',
              ),
              24 => 
              array (
                0 => 'bg',
                1 => 'bg',
                2 => 'flags-bg',
              ),
              25 => 
              array (
                0 => 'bh',
                1 => 'bh',
                2 => 'flags-bh',
              ),
              26 => 
              array (
                0 => 'bi',
                1 => 'bi',
                2 => 'flags-bi',
              ),
              27 => 
              array (
                0 => 'bj',
                1 => 'bj',
                2 => 'flags-bj',
              ),
              28 => 
              array (
                0 => 'bl',
                1 => 'bl',
                2 => 'flags-bl',
              ),
              29 => 
              array (
                0 => 'bm',
                1 => 'bm',
                2 => 'flags-bm',
              ),
              30 => 
              array (
                0 => 'bn',
                1 => 'bn',
                2 => 'flags-bn',
              ),
              31 => 
              array (
                0 => 'bo',
                1 => 'bo',
                2 => 'flags-bo',
              ),
              32 => 
              array (
                0 => 'bq',
                1 => 'bq',
                2 => 'flags-bq',
              ),
              33 => 
              array (
                0 => 'br',
                1 => 'br',
                2 => 'flags-br',
              ),
              34 => 
              array (
                0 => 'bs',
                1 => 'bs',
                2 => 'flags-bs',
              ),
              35 => 
              array (
                0 => 'bt',
                1 => 'bt',
                2 => 'flags-bt',
              ),
              36 => 
              array (
                0 => 'bv',
                1 => 'bv',
                2 => 'flags-bv',
              ),
              37 => 
              array (
                0 => 'bw',
                1 => 'bw',
                2 => 'flags-bw',
              ),
              38 => 
              array (
                0 => 'by',
                1 => 'by',
                2 => 'flags-by',
              ),
              39 => 
              array (
                0 => 'bz',
                1 => 'bz',
                2 => 'flags-bz',
              ),
              40 => 
              array (
                0 => 'ca',
                1 => 'ca',
                2 => 'flags-ca',
              ),
              41 => 
              array (
                0 => 'catalonia',
                1 => 'catalonia',
                2 => 'flags-catalonia',
              ),
              42 => 
              array (
                0 => 'cc',
                1 => 'cc',
                2 => 'flags-cc',
              ),
              43 => 
              array (
                0 => 'cd',
                1 => 'cd',
                2 => 'flags-cd',
              ),
              44 => 
              array (
                0 => 'cf',
                1 => 'cf',
                2 => 'flags-cf',
              ),
              45 => 
              array (
                0 => 'cg',
                1 => 'cg',
                2 => 'flags-cg',
              ),
              46 => 
              array (
                0 => 'ch',
                1 => 'ch',
                2 => 'flags-ch',
              ),
              47 => 
              array (
                0 => 'ci',
                1 => 'ci',
                2 => 'flags-ci',
              ),
              48 => 
              array (
                0 => 'ck',
                1 => 'ck',
                2 => 'flags-ck',
              ),
              49 => 
              array (
                0 => 'cl',
                1 => 'cl',
                2 => 'flags-cl',
              ),
              50 => 
              array (
                0 => 'cm',
                1 => 'cm',
                2 => 'flags-cm',
              ),
              51 => 
              array (
                0 => 'cn',
                1 => 'cn',
                2 => 'flags-cn',
              ),
              52 => 
              array (
                0 => 'co',
                1 => 'co',
                2 => 'flags-co',
              ),
              53 => 
              array (
                0 => 'cr',
                1 => 'cr',
                2 => 'flags-cr',
              ),
              54 => 
              array (
                0 => 'cs',
                1 => 'cs',
                2 => 'flags-cs',
              ),
              55 => 
              array (
                0 => 'cu',
                1 => 'cu',
                2 => 'flags-cu',
              ),
              56 => 
              array (
                0 => 'cv',
                1 => 'cv',
                2 => 'flags-cv',
              ),
              57 => 
              array (
                0 => 'cw',
                1 => 'cw',
                2 => 'flags-cw',
              ),
              58 => 
              array (
                0 => 'cx',
                1 => 'cx',
                2 => 'flags-cx',
              ),
              59 => 
              array (
                0 => 'cy',
                1 => 'cy',
                2 => 'flags-cy',
              ),
              60 => 
              array (
                0 => 'cz',
                1 => 'cz',
                2 => 'flags-cz',
              ),
              61 => 
              array (
                0 => 'de',
                1 => 'de',
                2 => 'flags-de',
              ),
              62 => 
              array (
                0 => 'dj',
                1 => 'dj',
                2 => 'flags-dj',
              ),
              63 => 
              array (
                0 => 'dk',
                1 => 'dk',
                2 => 'flags-dk',
              ),
              64 => 
              array (
                0 => 'dm',
                1 => 'dm',
                2 => 'flags-dm',
              ),
              65 => 
              array (
                0 => 'do',
                1 => 'do',
                2 => 'flags-do',
              ),
              66 => 
              array (
                0 => 'dz',
                1 => 'dz',
                2 => 'flags-dz',
              ),
              67 => 
              array (
                0 => 'ec',
                1 => 'ec',
                2 => 'flags-ec',
              ),
              68 => 
              array (
                0 => 'ee',
                1 => 'ee',
                2 => 'flags-ee',
              ),
              69 => 
              array (
                0 => 'eg',
                1 => 'eg',
                2 => 'flags-eg',
              ),
              70 => 
              array (
                0 => 'eh',
                1 => 'eh',
                2 => 'flags-eh',
              ),
              71 => 
              array (
                0 => 'en-us-gb',
                1 => 'en-us-gb',
                2 => 'flags-en-us-gb',
              ),
              72 => 
              array (
                0 => 'england',
                1 => 'england',
                2 => 'flags-gb-eng',
              ),
              73 => 
              array (
                0 => 'er',
                1 => 'er',
                2 => 'flags-er',
              ),
              74 => 
              array (
                0 => 'es',
                1 => 'es',
                2 => 'flags-es',
              ),
              75 => 
              array (
                0 => 'et',
                1 => 'et',
                2 => 'flags-et',
              ),
              76 => 
              array (
                0 => 'eu',
                1 => 'eu',
                2 => 'flags-eu',
              ),
              77 => 
              array (
                0 => 'fi',
                1 => 'fi',
                2 => 'flags-fi',
              ),
              78 => 
              array (
                0 => 'fj',
                1 => 'fj',
                2 => 'flags-fj',
              ),
              79 => 
              array (
                0 => 'fk',
                1 => 'fk',
                2 => 'flags-fk',
              ),
              80 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              81 => 
              array (
                0 => 'fo',
                1 => 'fo',
                2 => 'flags-fo',
              ),
              82 => 
              array (
                0 => 'fr',
                1 => 'fr',
                2 => 'flags-fr',
              ),
              83 => 
              array (
                0 => 'ga',
                1 => 'ga',
                2 => 'flags-ga',
              ),
              84 => 
              array (
                0 => 'gb',
                1 => 'gb',
                2 => 'flags-gb',
              ),
              85 => 
              array (
                0 => 'gd',
                1 => 'gd',
                2 => 'flags-gd',
              ),
              86 => 
              array (
                0 => 'ge',
                1 => 'ge',
                2 => 'flags-ge',
              ),
              87 => 
              array (
                0 => 'gf',
                1 => 'gf',
                2 => 'flags-gf',
              ),
              88 => 
              array (
                0 => 'gg',
                1 => 'gg',
                2 => 'flags-gg',
              ),
              89 => 
              array (
                0 => 'gh',
                1 => 'gh',
                2 => 'flags-gh',
              ),
              90 => 
              array (
                0 => 'gi',
                1 => 'gi',
                2 => 'flags-gi',
              ),
              91 => 
              array (
                0 => 'gl',
                1 => 'gl',
                2 => 'flags-gl',
              ),
              92 => 
              array (
                0 => 'gm',
                1 => 'gm',
                2 => 'flags-gm',
              ),
              93 => 
              array (
                0 => 'gn',
                1 => 'gn',
                2 => 'flags-gn',
              ),
              94 => 
              array (
                0 => 'gp',
                1 => 'gp',
                2 => 'flags-gp',
              ),
              95 => 
              array (
                0 => 'gq',
                1 => 'gq',
                2 => 'flags-gq',
              ),
              96 => 
              array (
                0 => 'gr',
                1 => 'gr',
                2 => 'flags-gr',
              ),
              97 => 
              array (
                0 => 'gs',
                1 => 'gs',
                2 => 'flags-gs',
              ),
              98 => 
              array (
                0 => 'gt',
                1 => 'gt',
                2 => 'flags-gt',
              ),
              99 => 
              array (
                0 => 'gu',
                1 => 'gu',
                2 => 'flags-gu',
              ),
              100 => 
              array (
                0 => 'gw',
                1 => 'gw',
                2 => 'flags-gw',
              ),
              101 => 
              array (
                0 => 'gy',
                1 => 'gy',
                2 => 'flags-gy',
              ),
              102 => 
              array (
                0 => 'hk',
                1 => 'hk',
                2 => 'flags-hk',
              ),
              103 => 
              array (
                0 => 'hm',
                1 => 'hm',
                2 => 'flags-hm',
              ),
              104 => 
              array (
                0 => 'hn',
                1 => 'hn',
                2 => 'flags-hn',
              ),
              105 => 
              array (
                0 => 'hr',
                1 => 'hr',
                2 => 'flags-hr',
              ),
              106 => 
              array (
                0 => 'ht',
                1 => 'ht',
                2 => 'flags-ht',
              ),
              107 => 
              array (
                0 => 'hu',
                1 => 'hu',
                2 => 'flags-hu',
              ),
              108 => 
              array (
                0 => 'id',
                1 => 'id',
                2 => 'flags-id',
              ),
              109 => 
              array (
                0 => 'ie',
                1 => 'ie',
                2 => 'flags-ie',
              ),
              110 => 
              array (
                0 => 'il',
                1 => 'il',
                2 => 'flags-il',
              ),
              111 => 
              array (
                0 => 'im',
                1 => 'im',
                2 => 'flags-im',
              ),
              112 => 
              array (
                0 => 'in',
                1 => 'in',
                2 => 'flags-in',
              ),
              113 => 
              array (
                0 => 'io',
                1 => 'io',
                2 => 'flags-io',
              ),
              114 => 
              array (
                0 => 'iq',
                1 => 'iq',
                2 => 'flags-iq',
              ),
              115 => 
              array (
                0 => 'ir',
                1 => 'ir',
                2 => 'flags-ir',
              ),
              116 => 
              array (
                0 => 'is',
                1 => 'is',
                2 => 'flags-is',
              ),
              117 => 
              array (
                0 => 'it',
                1 => 'it',
                2 => 'flags-it',
              ),
              118 => 
              array (
                0 => 'jm',
                1 => 'jm',
                2 => 'flags-jm',
              ),
              119 => 
              array (
                0 => 'jo',
                1 => 'jo',
                2 => 'flags-jo',
              ),
              120 => 
              array (
                0 => 'jp',
                1 => 'jp',
                2 => 'flags-jp',
              ),
              121 => 
              array (
                0 => 'ke',
                1 => 'ke',
                2 => 'flags-ke',
              ),
              122 => 
              array (
                0 => 'kg',
                1 => 'kg',
                2 => 'flags-kg',
              ),
              123 => 
              array (
                0 => 'kh',
                1 => 'kh',
                2 => 'flags-kh',
              ),
              124 => 
              array (
                0 => 'ki',
                1 => 'ki',
                2 => 'flags-ki',
              ),
              125 => 
              array (
                0 => 'kl',
                1 => 'kl',
                2 => 'flags-kl',
              ),
              126 => 
              array (
                0 => 'km',
                1 => 'km',
                2 => 'flags-km',
              ),
              127 => 
              array (
                0 => 'kn',
                1 => 'kn',
                2 => 'flags-kn',
              ),
              128 => 
              array (
                0 => 'kp',
                1 => 'kp',
                2 => 'flags-kp',
              ),
              129 => 
              array (
                0 => 'kr',
                1 => 'kr',
                2 => 'flags-kr',
              ),
              130 => 
              array (
                0 => 'kw',
                1 => 'kw',
                2 => 'flags-kw',
              ),
              131 => 
              array (
                0 => 'ky',
                1 => 'ky',
                2 => 'flags-ky',
              ),
              132 => 
              array (
                0 => 'kz',
                1 => 'kz',
                2 => 'flags-kz',
              ),
              133 => 
              array (
                0 => 'la',
                1 => 'la',
                2 => 'flags-la',
              ),
              134 => 
              array (
                0 => 'lb',
                1 => 'lb',
                2 => 'flags-lb',
              ),
              135 => 
              array (
                0 => 'lc',
                1 => 'lc',
                2 => 'flags-lc',
              ),
              136 => 
              array (
                0 => 'li',
                1 => 'li',
                2 => 'flags-li',
              ),
              137 => 
              array (
                0 => 'lk',
                1 => 'lk',
                2 => 'flags-lk',
              ),
              138 => 
              array (
                0 => 'lr',
                1 => 'lr',
                2 => 'flags-lr',
              ),
              139 => 
              array (
                0 => 'ls',
                1 => 'ls',
                2 => 'flags-ls',
              ),
              140 => 
              array (
                0 => 'lt',
                1 => 'lt',
                2 => 'flags-lt',
              ),
              141 => 
              array (
                0 => 'lu',
                1 => 'lu',
                2 => 'flags-lu',
              ),
              142 => 
              array (
                0 => 'lv',
                1 => 'lv',
                2 => 'flags-lv',
              ),
              143 => 
              array (
                0 => 'ly',
                1 => 'ly',
                2 => 'flags-ly',
              ),
              144 => 
              array (
                0 => 'ma',
                1 => 'ma',
                2 => 'flags-ma',
              ),
              145 => 
              array (
                0 => 'mc',
                1 => 'mc',
                2 => 'flags-mc',
              ),
              146 => 
              array (
                0 => 'md',
                1 => 'md',
                2 => 'flags-md',
              ),
              147 => 
              array (
                0 => 'me',
                1 => 'me',
                2 => 'flags-me',
              ),
              148 => 
              array (
                0 => 'mf',
                1 => 'mf',
                2 => 'flags-mf',
              ),
              149 => 
              array (
                0 => 'mg',
                1 => 'mg',
                2 => 'flags-mg',
              ),
              150 => 
              array (
                0 => 'mh',
                1 => 'mh',
                2 => 'flags-mh',
              ),
              151 => 
              array (
                0 => 'mi',
                1 => 'mi',
                2 => 'flags-mi',
              ),
              152 => 
              array (
                0 => 'mk',
                1 => 'mk',
                2 => 'flags-mk',
              ),
              153 => 
              array (
                0 => 'ml',
                1 => 'ml',
                2 => 'flags-ml',
              ),
              154 => 
              array (
                0 => 'mm',
                1 => 'mm',
                2 => 'flags-mm',
              ),
              155 => 
              array (
                0 => 'mn',
                1 => 'mn',
                2 => 'flags-mn',
              ),
              156 => 
              array (
                0 => 'mo',
                1 => 'mo',
                2 => 'flags-mo',
              ),
              157 => 
              array (
                0 => 'mp',
                1 => 'mp',
                2 => 'flags-mp',
              ),
              158 => 
              array (
                0 => 'mq',
                1 => 'mq',
                2 => 'flags-mq',
              ),
              159 => 
              array (
                0 => 'mr',
                1 => 'mr',
                2 => 'flags-mr',
              ),
              160 => 
              array (
                0 => 'ms',
                1 => 'ms',
                2 => 'flags-ms',
              ),
              161 => 
              array (
                0 => 'mt',
                1 => 'mt',
                2 => 'flags-mt',
              ),
              162 => 
              array (
                0 => 'mu',
                1 => 'mu',
                2 => 'flags-mu',
              ),
              163 => 
              array (
                0 => 'mv',
                1 => 'mv',
                2 => 'flags-mv',
              ),
              164 => 
              array (
                0 => 'mw',
                1 => 'mw',
                2 => 'flags-mw',
              ),
              165 => 
              array (
                0 => 'mx',
                1 => 'mx',
                2 => 'flags-mx',
              ),
              166 => 
              array (
                0 => 'my',
                1 => 'my',
                2 => 'flags-my',
              ),
              167 => 
              array (
                0 => 'mz',
                1 => 'mz',
                2 => 'flags-mz',
              ),
              168 => 
              array (
                0 => 'na',
                1 => 'na',
                2 => 'flags-na',
              ),
              169 => 
              array (
                0 => 'nc',
                1 => 'nc',
                2 => 'flags-nc',
              ),
              170 => 
              array (
                0 => 'ne',
                1 => 'ne',
                2 => 'flags-ne',
              ),
              171 => 
              array (
                0 => 'nf',
                1 => 'nf',
                2 => 'flags-nf',
              ),
              172 => 
              array (
                0 => 'ng',
                1 => 'ng',
                2 => 'flags-ng',
              ),
              173 => 
              array (
                0 => 'ni',
                1 => 'ni',
                2 => 'flags-ni',
              ),
              174 => 
              array (
                0 => 'gb-nir',
                1 => 'gb-nir',
                2 => 'flags-gb-nir',
              ),
              175 => 
              array (
                0 => 'nl',
                1 => 'nl',
                2 => 'flags-nl',
              ),
              176 => 
              array (
                0 => 'no',
                1 => 'no',
                2 => 'flags-no',
              ),
              177 => 
              array (
                0 => 'np',
                1 => 'np',
                2 => 'flags-np',
              ),
              178 => 
              array (
                0 => 'nr',
                1 => 'nr',
                2 => 'flags-nr',
              ),
              179 => 
              array (
                0 => 'nu',
                1 => 'nu',
                2 => 'flags-nu',
              ),
              180 => 
              array (
                0 => 'nz',
                1 => 'nz',
                2 => 'flags-nz',
              ),
              181 => 
              array (
                0 => 'om',
                1 => 'om',
                2 => 'flags-om',
              ),
              182 => 
              array (
                0 => 'pa',
                1 => 'pa',
                2 => 'flags-pa',
              ),
              183 => 
              array (
                0 => 'pe',
                1 => 'pe',
                2 => 'flags-pe',
              ),
              184 => 
              array (
                0 => 'pf',
                1 => 'pf',
                2 => 'flags-pf',
              ),
              185 => 
              array (
                0 => 'pg',
                1 => 'pg',
                2 => 'flags-pg',
              ),
              186 => 
              array (
                0 => 'ph',
                1 => 'ph',
                2 => 'flags-ph',
              ),
              187 => 
              array (
                0 => 'pk',
                1 => 'pk',
                2 => 'flags-pk',
              ),
              188 => 
              array (
                0 => 'pl',
                1 => 'pl',
                2 => 'flags-pl',
              ),
              189 => 
              array (
                0 => 'pm',
                1 => 'pm',
                2 => 'flags-pm',
              ),
              190 => 
              array (
                0 => 'pn',
                1 => 'pn',
                2 => 'flags-pn',
              ),
              191 => 
              array (
                0 => 'pr',
                1 => 'pr',
                2 => 'flags-pr',
              ),
              192 => 
              array (
                0 => 'ps',
                1 => 'ps',
                2 => 'flags-ps',
              ),
              193 => 
              array (
                0 => 'pt',
                1 => 'pt',
                2 => 'flags-pt',
              ),
              194 => 
              array (
                0 => 'pw',
                1 => 'pw',
                2 => 'flags-pw',
              ),
              195 => 
              array (
                0 => 'py',
                1 => 'py',
                2 => 'flags-py',
              ),
              196 => 
              array (
                0 => 'qa',
                1 => 'qa',
                2 => 'flags-qa',
              ),
              197 => 
              array (
                0 => 'qc',
                1 => 'qc',
                2 => 'flags-qc',
              ),
              198 => 
              array (
                0 => 're',
                1 => 're',
                2 => 'flags-re',
              ),
              199 => 
              array (
                0 => 'ro',
                1 => 'ro',
                2 => 'flags-ro',
              ),
              200 => 
              array (
                0 => 'rs',
                1 => 'rs',
                2 => 'flags-rs',
              ),
              201 => 
              array (
                0 => 'ru',
                1 => 'ru',
                2 => 'flags-ru',
              ),
              202 => 
              array (
                0 => 'rw',
                1 => 'rw',
                2 => 'flags-rw',
              ),
              203 => 
              array (
                0 => 'sa',
                1 => 'sa',
                2 => 'flags-sa',
              ),
              204 => 
              array (
                0 => 'sb',
                1 => 'sb',
                2 => 'flags-sb',
              ),
              205 => 
              array (
                0 => 'sc',
                1 => 'sc',
                2 => 'flags-sc',
              ),
              206 => 
              array (
                0 => 'gb-sct',
                1 => 'gb-sct',
                2 => 'flags-gb-sct',
              ),
              207 => 
              array (
                0 => 'sd',
                1 => 'sd',
                2 => 'flags-sd',
              ),
              208 => 
              array (
                0 => 'se',
                1 => 'se',
                2 => 'flags-se',
              ),
              209 => 
              array (
                0 => 'sg',
                1 => 'sg',
                2 => 'flags-sg',
              ),
              210 => 
              array (
                0 => 'sh',
                1 => 'sh',
                2 => 'flags-sh',
              ),
              211 => 
              array (
                0 => 'si',
                1 => 'si',
                2 => 'flags-si',
              ),
              212 => 
              array (
                0 => 'sj',
                1 => 'sj',
                2 => 'flags-sj',
              ),
              213 => 
              array (
                0 => 'sk',
                1 => 'sk',
                2 => 'flags-sk',
              ),
              214 => 
              array (
                0 => 'sl',
                1 => 'sl',
                2 => 'flags-sl',
              ),
              215 => 
              array (
                0 => 'sm',
                1 => 'sm',
                2 => 'flags-sm',
              ),
              216 => 
              array (
                0 => 'sn',
                1 => 'sn',
                2 => 'flags-sn',
              ),
              217 => 
              array (
                0 => 'so',
                1 => 'so',
                2 => 'flags-so',
              ),
              218 => 
              array (
                0 => 'sr',
                1 => 'sr',
                2 => 'flags-sr',
              ),
              219 => 
              array (
                0 => 'ss',
                1 => 'ss',
                2 => 'flags-ss',
              ),
              220 => 
              array (
                0 => 'st',
                1 => 'st',
                2 => 'flags-st',
              ),
              221 => 
              array (
                0 => 'sv',
                1 => 'sv',
                2 => 'flags-sv',
              ),
              222 => 
              array (
                0 => 'sx',
                1 => 'sx',
                2 => 'flags-sx',
              ),
              223 => 
              array (
                0 => 'sy',
                1 => 'sy',
                2 => 'flags-sy',
              ),
              224 => 
              array (
                0 => 'sz',
                1 => 'sz',
                2 => 'flags-sz',
              ),
              225 => 
              array (
                0 => 'tc',
                1 => 'tc',
                2 => 'flags-tc',
              ),
              226 => 
              array (
                0 => 'td',
                1 => 'td',
                2 => 'flags-td',
              ),
              227 => 
              array (
                0 => 'tf',
                1 => 'tf',
                2 => 'flags-tf',
              ),
              228 => 
              array (
                0 => 'tg',
                1 => 'tg',
                2 => 'flags-tg',
              ),
              229 => 
              array (
                0 => 'th',
                1 => 'th',
                2 => 'flags-th',
              ),
              230 => 
              array (
                0 => 'tj',
                1 => 'tj',
                2 => 'flags-tj',
              ),
              231 => 
              array (
                0 => 'tk',
                1 => 'tk',
                2 => 'flags-tk',
              ),
              232 => 
              array (
                0 => 'tl',
                1 => 'tl',
                2 => 'flags-tl',
              ),
              233 => 
              array (
                0 => 'tm',
                1 => 'tm',
                2 => 'flags-tm',
              ),
              234 => 
              array (
                0 => 'tn',
                1 => 'tn',
                2 => 'flags-tn',
              ),
              235 => 
              array (
                0 => 'to',
                1 => 'to',
                2 => 'flags-to',
              ),
              236 => 
              array (
                0 => 'tr',
                1 => 'tr',
                2 => 'flags-tr',
              ),
              237 => 
              array (
                0 => 'tt',
                1 => 'tt',
                2 => 'flags-tt',
              ),
              238 => 
              array (
                0 => 'tv',
                1 => 'tv',
                2 => 'flags-tv',
              ),
              239 => 
              array (
                0 => 'tw',
                1 => 'tw',
                2 => 'flags-tw',
              ),
              240 => 
              array (
                0 => 'tz',
                1 => 'tz',
                2 => 'flags-tz',
              ),
              241 => 
              array (
                0 => 'ua',
                1 => 'ua',
                2 => 'flags-ua',
              ),
              242 => 
              array (
                0 => 'ug',
                1 => 'ug',
                2 => 'flags-ug',
              ),
              243 => 
              array (
                0 => 'um',
                1 => 'um',
                2 => 'flags-um',
              ),
              244 => 
              array (
                0 => 'us',
                1 => 'us',
                2 => 'flags-us',
              ),
              245 => 
              array (
                0 => 'uy',
                1 => 'uy',
                2 => 'flags-uy',
              ),
              246 => 
              array (
                0 => 'uz',
                1 => 'uz',
                2 => 'flags-uz',
              ),
              247 => 
              array (
                0 => 'va',
                1 => 'va',
                2 => 'flags-va',
              ),
              248 => 
              array (
                0 => 'vc',
                1 => 'vc',
                2 => 'flags-vc',
              ),
              249 => 
              array (
                0 => 've',
                1 => 've',
                2 => 'flags-ve',
              ),
              250 => 
              array (
                0 => 'vg',
                1 => 'vg',
                2 => 'flags-vg',
              ),
              251 => 
              array (
                0 => 'vi',
                1 => 'vi',
                2 => 'flags-vi',
              ),
              252 => 
              array (
                0 => 'vn',
                1 => 'vn',
                2 => 'flags-vn',
              ),
              253 => 
              array (
                0 => 'vu',
                1 => 'vu',
                2 => 'flags-vu',
              ),
              254 => 
              array (
                0 => 'gb-wls',
                1 => 'gb-wls',
                2 => 'flags-gb-wls',
              ),
              255 => 
              array (
                0 => 'wf',
                1 => 'wf',
                2 => 'flags-wf',
              ),
              256 => 
              array (
                0 => 'ws',
                1 => 'ws',
                2 => 'flags-ws',
              ),
              257 => 
              array (
                0 => 'ye',
                1 => 'ye',
                2 => 'flags-ye',
              ),
              258 => 
              array (
                0 => 'yt',
                1 => 'yt',
                2 => 'flags-yt',
              ),
              259 => 
              array (
                0 => 'za',
                1 => 'za',
                2 => 'flags-za',
              ),
              260 => 
              array (
                0 => 'zm',
                1 => 'zm',
                2 => 'flags-zm',
              ),
              261 => 
              array (
                0 => 'zw',
                1 => 'zw',
                2 => 'flags-zw',
              ),
            ),
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,language_isocode,flag,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'channel' => 
        array (
          'label' => 'channel',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'level' => 
        array (
          'label' => 'level',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
        'searchFields' => 'title,content',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'sys_news',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,content,crdate,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'searchFields' => 'groupName',
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'required,unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    groupName,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,icon,config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'groupName' => 'frontendaccess',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT({#fe_groups}.{#uid} = ###THIS_UID###)',
            'size' => 6,
            'autoSizeMax' => 10,
            'maxitems' => 20,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                1 => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'color' => 
        array (
          'label' => 'Farbe',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'size' => 10,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, --palette--;;tx_forum_forum,subgroup,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig, felogin_redirectPid,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, --palette--;;tx_forum_forum,subgroup,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig, felogin_redirectPid,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'tx_forum_forum' => 
        array (
          'showitem' => 'color',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'groupName' => 'frontendaccess',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'nospace,trim,lower,uniqueInPid,required',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,password,saltedPassword',
            'autocomplete' => false,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'size' => 6,
            'minitems' => 1,
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim,email',
            'max' => 255,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'maxitems' => 6,
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                1 => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'birth_day' => 
        array (
          'label' => 'Geburtstag',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'max' => 255,
          ),
        ),
        'username_path' => 
        array (
          'label' => 'Username Pathsegment',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'input',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'username',
              ),
              'replacements' => 
              array (
                '/' => '-',
                '.' => '',
                '®' => '',
                ',' => '',
                '|' => '',
                ' ' => '-',
              ),
            ),
          ),
        ),
        'profilbild' => 
        array (
          'label' => 'Profilbild',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'profilbild',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,
                    --palette--;;tx_forum_forum, company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig, felogin_redirectPid,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,
                    --palette--;;tx_forum_forum, company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig, felogin_redirectPid,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
        'tx_forum_forum' => 
        array (
          'showitem' => 'birth_day, profilbild, username_path',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'versioningWS' => true,
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.rootDescription',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clearDescription',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Constants',
              ),
              1 => 
              array (
                0 => 'Setup',
              ),
            ),
            'cols' => 2,
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 15,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_fileDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Fluid Content Elements (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              1 => 
              array (
                0 => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              2 => 
              array (
                0 => 'Form (form)',
                1 => 'EXT:form/Configuration/TypoScript/',
              ),
              3 => 
              array (
                0 => 'Indexed Search (indexed_search)',
                1 => 'EXT:indexed_search/Configuration/TypoScript',
              ),
              4 => 
              array (
                0 => 'XML Sitemap (seo)',
                1 => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
              5 => 
              array (
                0 => 'Container elements DEPRECATED - Bootstrap 4 (container_elements)',
                1 => 'EXT:container_elements/Configuration/TypoScript/Deprecated/Bootstrap4',
              ),
              6 => 
              array (
                0 => 'Faicon: Icons for Bootstrap Package (faicon)',
                1 => 'EXT:faicon/Configuration/TypoScript/BootstrapPackage',
              ),
              7 => 
              array (
                0 => 'Forum (forum)',
                1 => 'EXT:forum/Configuration/TypoScript',
              ),
              8 => 
              array (
                0 => 'Provider (provider)',
                1 => 'EXT:provider/Configuration/TypoScript',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOnDescription',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOnDescription',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 15,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_modeDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, constants, config,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,
                clear, root,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.include,
                includeStaticAfterBasedOn, include_static_file, basedOn, static_file_mode,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,--palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType,tx_container_parent',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'previewRenderer' => 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'felogin_login' => 'mimetypes-x-content-login',
          'ce_accordion' => 'ce_accordion',
          'ce_card' => 'ce_card',
          'ce_columns2' => 'ce_columns2',
          'ce_columns3' => 'ce_columns3',
          'ce_columns4' => 'ce_columns4',
          'ce_container' => 'ce_container',
          'ce_grid' => 'ce_grid',
          'ce_randomizer' => 'ce_randomizer',
          'ce_tabs' => 'ce_tabs',
          'ce_tile_unit' => 'ce_tile_unit',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
      ),
      'interface' => 
      array (
        'always_description' => 0,
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                1 => '--div--',
                2 => NULL,
                3 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                1 => 'header',
                2 => 'content-header',
                3 => 'default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                1 => 'text',
                2 => 'content-text',
                3 => 'default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                1 => 'textpic',
                2 => 'content-textpic',
                3 => 'default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                1 => 'image',
                2 => 'content-image',
                3 => 'default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                1 => 'textmedia',
                2 => 'content-textmedia',
                3 => 'default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                1 => '--div--',
                2 => NULL,
                3 => 'lists',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                1 => 'bullets',
                2 => 'content-bullets',
                3 => 'lists',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                1 => 'table',
                2 => 'content-table',
                3 => 'lists',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                1 => 'uploads',
                2 => 'content-special-uploads',
                3 => 'lists',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                1 => '--div--',
                2 => NULL,
                3 => 'menu',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                1 => 'menu_abstract',
                2 => 'content-menu-abstract',
                3 => 'menu',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                1 => 'menu_categorized_content',
                2 => 'content-menu-categorized',
                3 => 'menu',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                1 => 'menu_categorized_pages',
                2 => 'content-menu-categorized',
                3 => 'menu',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                1 => 'menu_pages',
                2 => 'content-menu-pages',
                3 => 'menu',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                1 => 'menu_subpages',
                2 => 'content-menu-pages',
                3 => 'menu',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                1 => 'menu_recently_updated',
                2 => 'content-menu-recently-updated',
                3 => 'menu',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                1 => 'menu_related_pages',
                2 => 'content-menu-related',
                3 => 'menu',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                1 => 'menu_section',
                2 => 'content-menu-section',
                3 => 'menu',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                1 => 'menu_section_pages',
                2 => 'content-menu-section',
                3 => 'menu',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                1 => 'menu_sitemap',
                2 => 'content-menu-sitemap',
                3 => 'menu',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                1 => 'menu_sitemap_pages',
                2 => 'content-menu-sitemap-pages',
                3 => 'menu',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                1 => '--div--',
                2 => NULL,
                3 => 'special',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                1 => 'shortcut',
                2 => 'content-special-shortcut',
                3 => 'special',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                1 => 'list',
                2 => 'content-plugin',
                3 => 'special',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                1 => 'div',
                2 => 'content-special-div',
                3 => 'special',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                1 => 'html',
                2 => 'content-special-html',
                3 => 'special',
              ),
              27 => 
              array (
                0 => 'Form',
                1 => 'form_formframework',
                2 => 'content-form',
                3 => 'forms',
              ),
              28 => 
              array (
                0 => 'Login Form',
                1 => 'felogin_login',
                2 => 'EXT:felogin/Resources/Public/Icons/Extension.png',
                3 => 'forms',
              ),
              29 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:accordion.title',
                1 => 'ce_accordion',
                2 => 'ce_accordion',
                3 => 'container',
              ),
              30 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.title',
                1 => 'ce_card',
                2 => 'ce_card',
                3 => 'container',
              ),
              31 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.twoColumnTitle',
                1 => 'ce_columns2',
                2 => 'ce_columns2',
                3 => 'container',
              ),
              32 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.threeColumnTitle',
                1 => 'ce_columns3',
                2 => 'ce_columns3',
                3 => 'container',
              ),
              33 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.fourColumnTitle',
                1 => 'ce_columns4',
                2 => 'ce_columns4',
                3 => 'container',
              ),
              34 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:container.title',
                1 => 'ce_container',
                2 => 'ce_container',
                3 => 'container',
              ),
              35 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:grid.title',
                1 => 'ce_grid',
                2 => 'ce_grid',
                3 => 'container',
              ),
              36 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:randomizer.title',
                1 => 'ce_randomizer',
                2 => 'ce_randomizer',
                3 => 'container',
              ),
              37 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tabs.title',
                1 => 'ce_tabs',
                2 => 'ce_tabs',
                3 => 'container',
              ),
              38 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.title',
                1 => 'ce_tile_unit',
                2 => 'ce_tile_unit',
                3 => 'container',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
              'lists' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
              'menu' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
              'forms' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
              'container' => 'LLL:EXT:container/Resources/Private/Language/locallang.xlf:container',
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND {#tt_content}.{#pid}=###CURRENT_PID### AND {#tt_content}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                1 => 'ruler-before',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                1 => 'ruler-after',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                1 => 'indent',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                1 => 'indent-left',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                1 => 'indent-right',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                1 => 'none',
              ),
            ),
            'default' => 'default',
          ),
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'B13\\Container\\Tca\\ItemProcFunc->colPos',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                1 => 101,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.content',
                1 => 101,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.imageContent',
                1 => 201,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                1 => 101,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                1 => 102,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                1 => 101,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                1 => 102,
              ),
              11 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column3',
                1 => 103,
              ),
              12 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                1 => 101,
              ),
              13 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                1 => 102,
              ),
              14 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column3',
                1 => 103,
              ),
              15 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column4',
                1 => 104,
              ),
              16 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                1 => 101,
              ),
              17 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:grid.elements',
                1 => 101,
              ),
              18 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                1 => 101,
              ),
              19 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                1 => 101,
              ),
              20 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.left',
                1 => 101,
              ),
              21 => 
              array (
                0 => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.right',
                1 => 102,
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                1 => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 80,
            'rows' => 15,
            'softref' => 'typolink_tag,email[subst],url',
            'search' => 
            array (
              'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                1 => 0,
                2 => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                1 => 1,
                2 => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                1 => 2,
                2 => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                1 => 8,
                2 => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                1 => 9,
                2 => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                1 => 10,
                2 => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                1 => 17,
                2 => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                1 => 18,
                2 => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                1 => 25,
                2 => 'content-beside-text-img-right',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                1 => 26,
                2 => 'content-beside-text-img-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
              6 => 
              array (
                0 => '7',
                1 => 7,
              ),
              7 => 
              array (
                0 => '8',
                1 => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => '1',
                1 => '1',
              ),
              2 => 
              array (
                0 => '2',
                1 => '2',
              ),
              3 => 
              array (
                0 => '3',
                1 => '3',
              ),
              4 => 
              array (
                0 => '4',
                1 => '4',
              ),
              5 => 
              array (
                0 => '5',
                1 => '5',
              ),
              6 => 
              array (
                0 => '6',
                1 => '6',
              ),
              7 => 
              array (
                0 => '7',
                1 => '7',
              ),
              8 => 
              array (
                0 => '8',
                1 => '8',
              ),
              9 => 
              array (
                0 => '9',
                1 => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                1 => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
                3 => 'none',
              ),
              1 => 
              array (
                0 => 'Indexed Search',
                1 => 'indexedsearch_pi2',
                2 => 'mimetypes-x-content-form-search',
                3 => 'default',
              ),
              2 => 
              array (
                0 => 'Forum',
                1 => 'forum_forum',
                2 => 'EXT:forum/Resources/Public/Icons/Extension.svg',
                3 => 'default',
              ),
              3 => 
              array (
                0 => 'Forum: Register',
                1 => 'forum_register',
                2 => 'EXT:forum/Resources/Public/Icons/Extension.svg',
                3 => 'default',
              ),
              4 => 
              array (
                0 => 'Forum: Login Form',
                1 => 'forum_login',
                2 => 'EXT:forum/Resources/Public/Icons/Extension.svg',
                3 => 'default',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
            ),
            'sortItems' => 
            array (
              'label' => 'asc',
            ),
            'default' => '',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'size' => 5,
            'fieldControl' => 
            array (
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                1 => 'extension',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                1 => 'name',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                1 => 'type',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                1 => 'size',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                1 => 'creation_date',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                1 => 'modification_date',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.title',
                1 => 'title',
              ),
            ),
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                1 => 'asc',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                1 => 'desc',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              '*,felogin_login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              '*,ce_accordion' => 'FILE:EXT:container_elements/Configuration/FlexForms/Accordion.xml',
              '*,ce_card' => 'FILE:EXT:container_elements/Configuration/FlexForms/Card.xml',
              '*,ce_columns2' => 'FILE:EXT:container_elements/Configuration/FlexForms/Columns2.xml',
              '*,ce_columns3' => 'FILE:EXT:container_elements/Configuration/FlexForms/Columns3.xml',
              '*,ce_columns4' => 'FILE:EXT:container_elements/Configuration/FlexForms/Columns4.xml',
              '*,ce_container' => 'FILE:EXT:container_elements/Configuration/FlexForms/Container.xml',
              '*,ce_grid' => 'FILE:EXT:container_elements/Configuration/FlexForms/Grid.xml',
              '*,ce_randomizer' => 'FILE:EXT:container_elements/Configuration/FlexForms/Randomizer.xml',
              '*,ce_tabs' => 'FILE:EXT:container_elements/Configuration/FlexForms/Tabs.xml',
              '*,ce_tile_unit' => 'FILE:EXT:container_elements/Configuration/FlexForms/TileUnit.xml',
            ),
            'search' => 
            array (
              'andWhere' => '{#CType}=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'size' => 20,
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableCategoryFields',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                1 => 'striped',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                1 => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                1 => 124,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                1 => 59,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                1 => 44,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                1 => 58,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                1 => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                1 => 39,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                1 => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_container_parent' => 
        array (
          'label' => 'LLL:EXT:container/Resources/Private/Language/locallang.xlf:container',
          'config' => 
          array (
            'default' => 0,
            'type' => 'select',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => ' AND 1=2',
            'itemsProcFunc' => 'B13\\Container\\Tca\\ItemProcFunc->txContainerParent',
            'renderType' => 'selectSingle',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType',
        ),
        'bullets' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bullets_type,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'header' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'text' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextpicPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextmediaPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    assets,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\ImagePreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'html' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
                    list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,
                    recursive,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'subtype_value_field' => 'list_type',
          'subtypes_excludelist' => 
          array (
            'indexedsearch_pi2' => 'layout,pages,recursive',
          ),
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'shortcut' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,
                    records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'table' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,
                    --palette--;;tableconfiguration,
                    table_caption,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;tablelayout,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    --palette--;;uploads,
                    --palette--;;uploadslayout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'form_formframework' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer',
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;header,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
        ),
        'felogin_login' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
        ),
        'ce_accordion' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_card' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_columns2' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_columns3' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_columns4' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_container' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_grid' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_randomizer' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_tabs' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'ce_tile_unit' => 
        array (
          'previewRenderer' => 'B13\\Container\\Backend\\Preview\\ContainerPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general, --palette--;;headers, --div--;Container, pi_flexform;LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:options, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, --palette--;;frames, --palette--;;appearanceLinks, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden, --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
          'showitem' => 'CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel, tx_container_parent',
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings',
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments',
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks',
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                filelink_sorting_direction,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility',
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout',
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks',
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            ',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout',
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
      ),
      'containerConfiguration' => 
      array (
        'ce_accordion' => 
        array (
          'cType' => 'ce_accordion',
          'icon' => 'container-elements-accordion',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:accordion.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:accordion.description',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                'colPos' => 101,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_card' => 
        array (
          'cType' => 'ce_card',
          'icon' => 'container-elements-card',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.description',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Card.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.content',
                'colPos' => 101,
              ),
            ),
            1 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:card.imageContent',
                'colPos' => 201,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_columns2' => 
        array (
          'cType' => 'ce_columns2',
          'icon' => 'container-elements-columns2',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.twoColumnTitle',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.twoColumnDescription',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                'colPos' => 101,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                'colPos' => 102,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_columns3' => 
        array (
          'cType' => 'ce_columns3',
          'icon' => 'container-elements-columns3',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.threeColumnTitle',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.threeColumnDescription',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                'colPos' => 101,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                'colPos' => 102,
              ),
              2 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column3',
                'colPos' => 103,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_columns4' => 
        array (
          'cType' => 'ce_columns4',
          'icon' => 'container-elements-columns4',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.fourColumnTitle',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.fourColumnDescription',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column1',
                'colPos' => 101,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column2',
                'colPos' => 102,
              ),
              2 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column3',
                'colPos' => 103,
              ),
              3 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:columns.column4',
                'colPos' => 104,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_container' => 
        array (
          'cType' => 'ce_container',
          'icon' => 'container-elements-container',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:container.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:container.description',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                'colPos' => 101,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_grid' => 
        array (
          'cType' => 'ce_grid',
          'icon' => 'container-elements-grid',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:grid.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:grid.description',
          'backendTemplate' => 'EXT:container/Resources/Private/Templates/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:grid.elements',
                'colPos' => 101,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_randomizer' => 
        array (
          'cType' => 'ce_randomizer',
          'icon' => 'container-elements-randomizer',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:randomizer.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:randomizer.description',
          'backendTemplate' => 'EXT:container/Resources/Private/Templates/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                'colPos' => 101,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_tabs' => 
        array (
          'cType' => 'ce_tabs',
          'icon' => 'container-elements-tabs',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tabs.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tabs.description',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:content',
                'colPos' => 101,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
        'ce_tile_unit' => 
        array (
          'cType' => 'ce_tile_unit',
          'icon' => 'container-elements-tileunit',
          'label' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.title',
          'description' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.description',
          'backendTemplate' => 'EXT:container_elements/Resources/Private/Templates/Backend/Container.html',
          'grid' => 
          array (
            0 => 
            array (
              0 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.left',
                'colPos' => 101,
              ),
              1 => 
              array (
                'name' => 'LLL:EXT:container_elements/Resources/Private/Language/locallang.xlf:tileUnit.right',
                'colPos' => 102,
              ),
            ),
          ),
          'gridTemplate' => 'EXT:container/Resources/Private/Templates/Grid.html',
          'gridPartialPaths' => 
          array (
            0 => 'EXT:backend/Resources/Private/Partials/',
            1 => 'EXT:container/Resources/Private/Partials/',
          ),
          'gridLayoutPaths' => 
          array (
          ),
          'saveAndCloseInNewContentElementWizard' => true,
          'registerInNewContentElementWizard' => true,
          'group' => 'container',
          'defaultValues' => 
          array (
          ),
        ),
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:tx_impexp_presets',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'user_uid',
        'typeicon_classes' => 
        array (
          'default' => 'actions-cog',
        ),
        'hideTable' => true,
        'rootLevel' => -1,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'public' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:public',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'user_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:user_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'item_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:item_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'preset_data' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:preset_data',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, public, user_uid, item_uid, preset_data',
        ),
      ),
    ),
    'sys_redirect' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect',
        'label' => 'source_host',
        'label_alt' => 'source_path',
        'label_alt_force' => true,
        'crdate' => 'createdon',
        'cruser_id' => 'createdby',
        'tstamp' => 'updatedon',
        'versioningWS' => false,
        'groupName' => 'system',
        'default_sortby' => 'source_host, source_path',
        'rootLevel' => -1,
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_redirect',
        ),
        'searchFields' => 'source_host,source_path,target,target_statuscode',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;source, --palette--;;targetdetails, protected,
                --div--;LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;visibility',
        ),
      ),
      'palettes' => 
      array (
        'visibility' => 
        array (
          'showitem' => 'disabled, --linebreak--, starttime, endtime',
        ),
        'source' => 
        array (
          'showitem' => 'source_host, --linebreak--, source_path, respect_query_parameters, is_regexp',
        ),
        'targetdetails' => 
        array (
          'showitem' => 'target, target_statuscode, --linebreak--, force_https, keep_query_parameters',
        ),
      ),
      'columns' => 
      array (
        'disabled' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'source_host' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim,required,TYPO3\\CMS\\Redirects\\Evaluation\\SourceHost',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host_global_text',
                  1 => '*',
                ),
              ),
            ),
            'default' => '*',
          ),
        ),
        'source_path' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
            'placeholder' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path.placeholder',
            'max' => 2048,
          ),
        ),
        'force_https' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.force_https.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'keep_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.keep_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'respect_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.respect_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'required',
            'renderType' => 'inputLink',
            'softref' => 'typolink',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'blindLinkOptions' => 'mail,folder,telephone',
                  'blindLinkFields' => 'class, target, title',
                ),
              ),
            ),
            'max' => 2048,
          ),
        ),
        'target_statuscode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.301',
                1 => 301,
                2 => '',
                3 => 'change',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.302',
                1 => 302,
                2 => '',
                3 => 'change',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.303',
                1 => 303,
                2 => '',
                3 => 'change',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.307',
                1 => 307,
                2 => '',
                3 => 'keep',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.308',
                1 => 308,
                2 => '',
                3 => 'keep',
              ),
            ),
            'itemGroups' => 
            array (
              'keep' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.keep',
              'change' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.change',
            ),
            'default' => 307,
          ),
        ),
        'hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 5,
            'default' => 0,
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'lasthiton' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.lasthiton',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'datetime,int',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'createdon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'datetime,int',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'disable_hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcountState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'is_regexp' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.is_regexp',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'protected' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
    ),
    'index_config' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'groupName' => 'system',
        'type' => 'type',
        'default_sortby' => 'crdate',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-index_config',
        ),
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 2,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.5',
                1 => '5',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'depth' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.depth',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_4',
                1 => '4',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'table2index' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.table2index',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.table2index.I.0',
                1 => '0',
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\IndexedSearch\\Hook\\AvailableTcaTables->populateTables',
            'maxitems' => 1,
          ),
        ),
        'alternative_source_pid' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.alternative_source_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'indexcfgs' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.indexcfgs',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'index_config,pages',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'get_params' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.get_params',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'fieldlist' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.fields',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'externalUrl' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.externalUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'filepath' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.filepath',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extensions' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.extensions',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'url_deny' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.url_deny',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 2,
          ),
        ),
        'records_indexonchange' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.records_indexonchange',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'timer_next_indexing' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_next_indexing',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'timer_offset' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_offset',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'time,int',
            'default' => 3600,
          ),
        ),
        'timer_frequency' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.0',
                1 => '3600',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.1',
                1 => '86400',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.2',
                1 => '604800',
              ),
            ),
            'maxitems' => 1,
            'default' => 86400,
          ),
        ),
        'recordsbatch' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.recordsbatch',
          'config' => 
          array (
            'type' => 'input',
            'size' => 8,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'set_id' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.set_id',
          'config' => 
          array (
            'type' => 'input',
            'readOnly' => true,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,timer_next_indexing, timer_offset, timer_frequency, set_id,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,starttime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,timer_next_indexing, timer_offset, timer_frequency, set_id, table2index, alternative_source_pid, fieldlist, get_params,recordsbatch,records_indexonchange,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,starttime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        2 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,timer_next_indexing, timer_offset, timer_frequency, set_id, filepath, extensions, depth,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,starttime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        3 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type, title, timer_next_indexing, timer_offset, timer_frequency, set_id, externalUrl, depth, url_deny,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,starttime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        4 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,timer_next_indexing, timer_offset, timer_frequency, set_id, alternative_source_pid;LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.rootpage, depth,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,starttime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        5 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,indexcfgs,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,starttime,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'be_dashboards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:be_dashboard',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'content-dashboard',
        ),
        'searchFields' => 'identifier,title',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    identifier,title,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => 1,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'documentation_link' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.documentation_link',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_welcome_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_welcome_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'remote' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.remote',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies, documentation_link, distribution_image, distribution_welcome_image',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'groupName' => 'content',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'searchFields' => 'subject,message',
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
                2 => 'sysnote-type-0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                1 => '1',
                2 => 'sysnote-type-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                1 => '3',
                2 => 'sysnote-type-3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                1 => '4',
                2 => 'sysnote-type-4',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                1 => '2',
                2 => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'position' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.top',
                1 => 1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.bottom',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                category, subject,message,position,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                personal,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'tx_forum_domain_model_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_category',
        'label' => 'category',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'category',
        'iconfile' => 'EXT:forum/Resources/Public/Icons/tx_forum_domain_model_category.gif',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'category,url_segment, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_forum_domain_model_category',
            'foreign_table_where' => 'AND {#tx_forum_domain_model_category}.{#pid}=###CURRENT_PID### AND {#tx_forum_domain_model_category}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'category' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_category.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'url_segment' => 
        array (
          'exclude' => true,
          'label' => 'URL / Slug',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 30,
            'max' => 255,
            'eval' => 'uniqueInSite',
            'fallbackCharacter' => '-',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'category',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_forum_domain_model_forum' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum',
        'label' => 'forum',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'forum',
        'iconfile' => 'EXT:forum/Resources/Public/Icons/tx_forum_domain_model_forum.gif',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'forum, description, category, url_segment, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_forum_domain_model_forum',
            'foreign_table_where' => 'AND {#tx_forum_domain_model_forum}.{#pid}=###CURRENT_PID### AND {#tx_forum_domain_model_forum}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'forum' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.forum',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'description' => 
        array (
          'label' => 'Beschreibung',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
          ),
        ),
        'url_segment' => 
        array (
          'exclude' => true,
          'label' => 'URL / Slug',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 30,
            'max' => 255,
            'eval' => 'uniqueInSite',
            'fallbackCharacter' => '-',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'forum',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
          ),
        ),
        'category' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_forum_domain_model_category',
            'default' => 0,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
    ),
    'tx_forum_domain_model_profilbilder' => 
    array (
      'ctrl' => 
      array (
        'title' => 'Profilbilder',
        'label' => 'Profilbilder',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'forum',
        'iconfile' => 'EXT:forum/Resources/Public/Icons/tx_forum_domain_model_forum.gif',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'profilbild, user_id, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_forum_domain_model_forum',
            'foreign_table_where' => 'AND {#tx_forum_domain_model_forum}.{#pid}=###CURRENT_PID### AND {#tx_forum_domain_model_forum}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'profilbild' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'profilbild',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
        'user_id' => 
        array (
          'exclude' => true,
          'label' => 'User ID',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
            'readOnly' => true,
          ),
        ),
      ),
    ),
    'tx_forum_domain_model_threads' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_threads',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title',
        'iconfile' => 'EXT:forum/Resources/Public/Icons/tx_forum_domain_model_forum.gif',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'title, text, forum, category, url_segment, user_id, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_forum_domain_model_forum',
            'foreign_table_where' => 'AND {#tx_forum_domain_model_forum}.{#pid}=###CURRENT_PID### AND {#tx_forum_domain_model_forum}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.thread_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'text' => 
        array (
          'label' => 'Beitragstext',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'url_segment' => 
        array (
          'exclude' => true,
          'label' => 'URL / Slug',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 30,
            'max' => 255,
            'eval' => 'uniqueInSite',
            'fallbackCharacter' => '-',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
          ),
        ),
        'forum' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.forum',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_forum_domain_model_forum',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'category' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_forum_domain_model_category',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'user_id' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.username',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'fe_users',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
    ),
    'tx_forum_domain_model_topic' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_topic',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,text',
        'iconfile' => 'EXT:forum/Resources/Public/Icons/tx_forum_domain_model_forum.gif',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'title, text, forum, category, thread, user_id, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_forum_domain_model_forum',
            'foreign_table_where' => 'AND {#tx_forum_domain_model_forum}.{#pid}=###CURRENT_PID### AND {#tx_forum_domain_model_forum}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.thread_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'text' => 
        array (
          'label' => 'Beitragstext',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'forum' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.forum',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_forum_domain_model_forum',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'category' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_forum_domain_model_category',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'thread' => 
        array (
          'exclude' => true,
          'label' => 'Beitrag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_forum_domain_model_threads',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'user_id' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:forum/Resources/Private/Language/locallang_db.xlf:tx_forum_domain_model_forum.username',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'fe_users',
            'default' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
    ),
  ),
  'categoryRegistry' => 'O:40:"TYPO3\\CMS\\Core\\Category\\CategoryRegistry":4:{s:11:"' . "\0" . '*' . "\0" . 'registry";a:0:{}s:13:"' . "\0" . '*' . "\0" . 'extensions";a:0:{}s:20:"' . "\0" . '*' . "\0" . 'addedCategoryTabs";a:0:{}s:11:"' . "\0" . '*' . "\0" . 'template";s:60:"


CREATE TABLE %s (
  %s int(11) DEFAULT \'0\' NOT NULL
);


";}',
);
#