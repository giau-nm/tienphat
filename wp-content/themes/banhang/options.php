<?php
    if ( ! class_exists( 'Bap_Theme_Options' ) ) {
        class Bap_Theme_Options {
            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;
            public function __construct() {
                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }
            }
            public function initSettings() {
                $this->setArguments();
                $this->setHelpTabs();
                $this->setSections();
                if ( ! isset( $this->args['opt_name'] ) ) { 
                    return;
                }
                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }
            public function setSections() {
                $this->sections[] = array(
                    'title'  => __( 'Tùy chỉnh chung', 'HuyKira' ),
                    'desc'   => __( 'Tùy chỉnh chung của website', 'HuyKira' ),
                    'icon' => 'el-icon-font',
                    'fields' => array(
						array(
                            'id'       => 'logo',
                            'type'     => 'media',
                            'title'    => __( 'Tùy chọn logo', 'HuyKira' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Cho phép dùng đuôi: jpg, png, gif', 'HuyKira' ),
                        ),
                        array(
                            'id'       => 'logo_footer',
                            'type'     => 'media',
                            'title'    => __( 'Tùy chọn logo footer', 'HuyKira' ),
                            'compiler' => 'true',
                            'desc'     => __( 'Cho phép dùng đuôi: jpg, png, gif', 'HuyKira' ),
                        ),
                        array(
                               'id' => 'section2-start',
                               'type' => 'section',
                               'title' => __('Thông tin liên hệ', 'HuyKira'),
                               'indent' => true 
                           ),
                                array(
                                    'id'       => 'addft',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập Địa chỉ', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'emailft',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập địa chỉ mail', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'phoneft',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập số điện thoại', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'hotft',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập số di động', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'web',
                                    'type'     => 'text',
                                    'title'    => __( 'Nhập địa chỉ web', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                        array(
                            'id'     => 'section2-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),
                         array(
                               'id' => 'section3-start',
                               'type' => 'section',
                               'title' => __('Liên kết với mạng xã hội', 'HuyKira'),
                               'subtitle'     => __( 'Nhập full link mạng xã hội vào từng khu vực!', 'HuyKira' ),
                               'indent' => true 
                           ),
                                array(
                                    'id'       => 'fb',
                                    'type'     => 'text',
                                    'title'    => __( 'Page facebook', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'tw',
                                    'type'     => 'text',
                                    'title'    => __( 'Twitter', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'go',
                                    'type'     => 'text',
                                    'title'    => __( 'Google', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'li',
                                    'type'     => 'text',
                                    'title'    => __( 'Linkedin', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'in',
                                    'type'     => 'text',
                                    'title'    => __( 'Intagram', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                                array(
                                    'id'       => 'yo',
                                    'type'     => 'text',
                                    'title'    => __( 'Youtube', 'HuyKira' ),
                                    'compiler' => 'true',
                                ),
                        array(
                            'id'     => 'section3-end',
                            'type'   => 'section',
                            'indent' => false,
                        ),

                        array(
                            'id'       => 'copyr',
                            'type'     => 'text',
                            'title'    => __( 'Text bản quyền', 'HuyKira' ),
                            'compiler' => 'true',
                        )
                    )
                );
            }
            public function setHelpTabs() {
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }
            public function setArguments() {
                $theme = wp_get_theme(); 
                $this->args = array(
                    'opt_name'           => 'hk_options',
                    'display_name'       => $theme->get( 'Name' ),
                    'display_version'    => $theme->get( 'Version' ),
                    'menu_type'          => 'menu',
                    'allow_sub_menu'     => true,
                    'menu_title'         => __( 'Tùy chỉnh', 'redux-framework-demo' ),
                    'page_title'         => __( 'Tùy chỉnh', 'redux-framework-demo' ),
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    'async_typography'   => false,
                    'admin_bar'          => true,
                    'global_variable'    => '',
                    'dev_mode'           => false,
                    'customizer'         => true,
                    'page_priority'      => null,
                    'page_parent'        => 'themes.php',
                    'page_permissions'   => 'manage_options',
                    'menu_icon'          => '',
                    'last_tab'           => '',
                    'page_icon'          => 'icon-themes',
                    'page_slug'          => 'hk_options',
                    'save_defaults'      => true,
                    'default_show'       => false,
                    'default_mark'       => '',
                    'show_import_export' => true,
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    'output_tag'         => true,
                    'database'           => '',
                    'system_info'        => false,
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),

                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/huykiradotnet',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );

                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/huykira',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/huykira',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {

                        $v = str_replace( '-', '_', $this->args['opt_name'] );

                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Chào mừng bạn đến với khu vực tùy chỉnh website, Hãy cân nhắc kỹ trong quá trình tùy chỉnh! </p>', 'redux-framework-demo' ), $v );
                } else {

                    $this->args['intro_text'] = __( '<p>Chào mừng bạn đến với khu vực tùy chỉnh website, Hãy cân nhắc kỹ trong quá trình tùy chỉnh! </p>', 'redux-framework-demo' );
                }
            }
        }
        global $reduxConfig;
        $reduxConfig = new Bap_Theme_Options();
    }