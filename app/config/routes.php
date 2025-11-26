<?php
// Simple routes configuration
// Key = route pattern, Value = destination controller/method with optional $1..$n placeholders
// Examples:
// '' => 'Home/index'               (root)
// 'say/(:any)' => 'Home/hello/$1'  (maps /say/Edwin -> Home::hello('Edwin'))

return [
    '' => 'Home/index',
    'say/(:any)' => 'Home/hello/$1',
    // add custom routes below
];
