<?php
return array (
  'lanius' => 
  array (
    'routes' => 
    array (
      0 => 
      array (
        'route' => 'sitemap.xml',
        'type' => 'uri',
        'source' => 't3://page?uid=1&type=1533906435',
      ),
    ),
    'routeEnhancers' => 
    array (
      'Forum' => 
      array (
        'type' => 'Extbase',
        'extension' => 'Forum',
        'plugin' => 'Forum',
        'routes' => 
        array (
          0 => 
          array (
            'routePath' => '/{forum_title}',
            '_controller' => 'Thread::list',
            '_arguments' => 
            array (
              'forum_title' => 'forum',
            ),
          ),
          1 => 
          array (
            'routePath' => '/{forum_title}/{thread_title}',
            '_controller' => 'Thread::show',
            '_arguments' => 
            array (
              'forum_title' => 'forum',
              'thread_title' => 'thread',
            ),
          ),
          2 => 
          array (
            'routePath' => '/userprofil/{username}',
            '_controller' => 'User::show',
            '_arguments' => 
            array (
              'username' => 'user_id',
            ),
          ),
        ),
        'defaultController' => 'Thread::list',
        'defaults' => 
        array (
          'page' => '0',
        ),
        'requirements' => 
        array (
          'news_title' => '^[a-zA-Z0-9].*$',
        ),
        'aspects' => 
        array (
          'forum_title' => 
          array (
            'type' => 'PersistedAliasMapper',
            'tableName' => 'tx_forum_domain_model_forum',
            'routeFieldName' => 'url_segment',
          ),
          'thread_title' => 
          array (
            'type' => 'PersistedAliasMapper',
            'tableName' => 'tx_forum_domain_model_threads',
            'routeFieldName' => 'url_segment',
          ),
          'username' => 
          array (
            'type' => 'PersistedAliasMapper',
            'tableName' => 'fe_users',
            'routeFieldName' => 'username_path',
            'routeFieldPattern' => '^(?P.+)-(?P\\d+)',
          ),
        ),
      ),
    ),
    'base' => 'https://lanius-media-typo3.ddev.site/',
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'Deutsch',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/',
        'typo3Language' => 'de',
        'locale' => 'de_DE.utf8',
        'iso-639-1' => 'de',
        'navigationTitle' => 'Deutsch',
        'hreflang' => 'de-de',
        'direction' => '',
        'flag' => 'de',
        'websiteTitle' => '',
      ),
      1 => 
      array (
        'title' => 'English',
        'enabled' => true,
        'base' => '/en/',
        'typo3Language' => 'default',
        'locale' => 'en_GB.utf8',
        'iso-639-1' => 'en',
        'websiteTitle' => '',
        'navigationTitle' => 'English',
        'hreflang' => 'en-GB',
        'direction' => '',
        'fallbackType' => 'strict',
        'fallbacks' => '',
        'flag' => 'gb',
        'languageId' => 1,
      ),
    ),
    'rootPageId' => 1,
    'websiteTitle' => '',
  ),
);
#