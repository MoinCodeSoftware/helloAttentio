<?php
namespace HelloMoincode\Greeting\Hooks;

class PageRendererHook
{
    public function addGreetingMessage(&$params, &$reference)
    {
        $hour = (int)date('H');

        if ($hour < 12) {
            $greeting = 'attentio wünscht einen guten Morgen';
        } elseif ($hour < 18) {
            $greeting = 'attentio wünscht einen guten Tag';
        } else {
            $greeting = 'attentio wünscht einen guten Abend';
        }

        $footerContent = '<div class="greeting">' . $greeting . '</div>';
        $params['pObj']->content .= $footerContent;
    }
}
