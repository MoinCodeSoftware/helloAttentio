<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'HelloMoincode.Greeting',
        'Greeting',
        [
            'Greeting' => 'show'
        ],
        // non-cacheable actions
        [
            'Greeting' => ''
        ]
    );

    // Register a hook to insert the greeting message in the footer
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'HelloMoincode\Greeting\Hooks\PageRendererHook->addGreetingMessage';
});
