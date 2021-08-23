<?php

namespace App\Helper;

class HelperComponent
{

    public static function SideBar()
    {
        return [

            [
                "single_link" => setSingleLink('Dashboard ', "fas fa-tachometer-alt", null, null, null, '/'),
            ],
             [
                "heading" => "Apps & Pages",
             ],

            [
                "single_link" => setSingleLink('Articles ', "fas fa-book", null, null, null, '/articles'),
            ],

            [
                "single_link" => setSingleLink('Blogs ', "far fa-newspaper", null, null, null, '/blogs'),
            ],

            [
                "single_link" => setSingleLink('Events ', "far fa-calendar-plus", null, null, null, '/events'),
            ],
            // [
            //     "heading" => "Management",
            //     "menu" => [
            //         "title" => 'User Management',
            //         "icon" => "people",
            //         "color_code" => "",
            //         "can" => "",
            //         "v-can" => "",
            //         "sub_menu" => [
            //             setSubMenu(
            //                 null,
            //                 "Users",
            //                 "supervisor_account",
            //                 null,
            //                 null,
            //                 "/users",
            //             ),
            //             setSubMenu(
            //                 null,
            //                 "Roles",
            //                 null,
            //                 null,
            //                 null,
            //                 "/roles",
            //             ),
            //         ]
            //     ]

            // ],
            // [
            //     "heading" => "Apps & Pages",
            //     "menu" => [
            //         "title" => "Content",
            //         "icon" => "home",
            //         "color_code" => "",
            //         "can" => "",
            //         "v-can" => "",
            //         "sub_menu" => [
            //             setSubMenu(
            //                 null,
            //                 "Articles",
            //                 "article",
            //                 null,
            //                 null,
            //                 "/articles",
            //             ),
            //             setSubMenu(
            //                 null,
            //                 "Blogs",
            //                 "feed",
            //                 null,
            //                 null,
            //                 "/blogs",
            //             ),
            //             setSubMenu(
            //                 null,
            //                 "Events",
            //                 "feed",
            //                 null,
            //                 null,
            //                 "/events",
            //             ),

            //         ]
            //     ]

            // ],

        ];
        }
    }

