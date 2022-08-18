var builderOptions = {
    sectionElementList: [
        {
            domIdentif: ['section:not(.modal-alert):not(.section-carousel)'
                , 'footer', 'header:not(.section-carousel)'],
            controlsElements: ['ID', 'UpSection', 'DownSection', 'BgSection', 'SettingsSection', 'CodeEditor', 'Copy', 'Del'],
            positionControl: 'inside-top',
            settingsSection: {
                title: 'Section settings',
                elements: [
                    'SectionSkin'
                    , 'SectionVisibility'
                    , 'SectionMediaTextAlign'
                    , 'SectionPaddingSettings'
                    , 'SectionCBS(sectionOptions)'
                ]
            }
        }
        , {
            domIdentif: ['div.modal-alert'],
            controlsElements: ['ID', 'BgSection', 'SettingsSection', 'CodeEditor', 'Copy', 'Del'],
            positionControl: 'inside-top',
            settingsSection: {
                title: 'Section settings',
                elements: [
                    'SectionSkin'
                    , 'SectionVisibility'
                    , 'SectionCountDown'
                    , 'SectionMediaTextAlign'
                    , 'SectionPaddingSettings'
                    , 'SectionCBSCustomPosition(modalAlertOptions)'
                    , 'SectionCBSCustomPosition(modalAlertAnimation)'
                ]
            }
        }
        , {
            domIdentif: ['div.modal-panel'],
            controlsElements: ['ID', 'BgSection', 'SettingsSection', 'CodeEditor', 'Copy', 'Del'],
            positionControl: 'inside-top',
            settingsSection: {
                title: 'Section settings',
                elements: [
                    'SectionSkin'
                    , 'SectionVisibility'
                    , 'SectionMediaTextAlign'
                    , 'SectionPaddingSettings'
                    , 'SectionCBS(modalPanelOptions)'
                    , 'SectionCBS(modalPanelAnimation)'
                ]
            }
        }
        , {
            domIdentif: ['section.section-carousel', 'header.section-carousel'],
            controlsElements: ['ID', 'UpSection', 'DownSection', 'BgSection', 'SettingsSection', 'CodeEditor', 'Copy', 'Del'],
            positionControl: 'inside-top',
            settingsSection: {
                title: 'Section settings',
                elements: [
                    'SectionSkin'
                    , 'SectionVisibility'
                    , 'SectionMediaTextAlign'
                    , 'SectionPaddingSettings'
                    , 'SectionCBS(sectionOptions)'
                    , 'SectionCBS(carouselDots)'
                    , 'SectionCBS(carouselNavigation)'
                ]
            }
        }
        , {
            domIdentif: ['nav.navbar'],
            controlsElements: ['ID', 'UpSection', 'DownSection', 'BgSection', 'SettingsSection', 'CodeEditor', 'Copy', 'Del'],
            positionControl: 'inside-top',
            settingsSection: {
                title: 'Navigation settings',
                elements: [
                    'SectionSkin'
                    , 'SectionVisibility'
                    , 'SectionCBSCustomPosition(navBarPosition)'
                    , 'SectionCBSCustomPosition(navBarOptions)'
                ]
            }
        }
        , {
            domIdentif: ['.modal .modal-dialog'],
            controlsElements: ['ID', 'BgSection', 'SettingsSection', 'CodeEditor', 'Copy', 'Del'],
            positionControl: 'inside-top',
            settingsSection: {
                title: 'Modal settings',
                elements: [
                    'SectionSkin'
                    , 'SectionMediaTextAlign'
                    , 'SectionCountDown'
                    , 'SectionCBS(modalPopupOptions)'
                    , 'SectionCBS(modalPopupAnimation)'
                ]
            }
        }
    ],
    globalStyle: {
        mediaResolution: {
            mobile: "max-width: 576px",
            tablet: "max-width: 1279px",
            desktop: "min-width: 1280px"
        },
        sections: ['section', 'footer', 'header', 'nav', '.modal'],
        defaultActiveMedia: 'default',
        defaultActiveMode: 'light',
        defaultPropertiesForTags: [
            {
                name: "Body",
                tag: " ",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: "'OpenSans'"
                                },
                                dark: {
                                    value: "'OpenSans'"
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: "14px"
                                },
                                dark: {
                                    value: "14px"
                                }
                            }
                        }
                    },
                    {
                        name: "LineHeight",
                        title: "Line height",
                        property: 'line-height',
                        media: {
                            default: {
                                light: {
                                    value: "1.5"
                                },
                                dark: {
                                    value: "1.5"
                                }
                            }
                        }
                    },
                    {
                        name: "FontColor",
                        title: "Font color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#555"
                                },
                                dark: {
                                    value: "#ffffff"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Body",
                tag: "body",
                elements: [
                    {
                        name: "Padding",
                        title: "Padding",
                        property: 'padding',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundImage",
                        title: "Background image",
                        property: 'background-image',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundPosition",
                        title: "Background position",
                        property: 'background-position',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundRepeat",
                        title: "Background repeat",
                        property: 'background-repeat',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundSize",
                        title: "Background size",
                        property: 'background-size',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background color",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#fff"
                                },
                                dark: {
                                    value: "#232122"
                                }
                            }
                        }
                    }

                ]
            },
            {
                name: "Sections",
                tag: ["section", "footer", "header"],
                elements: [
                    {
                        name: "Margin",
                        title: "Margin",
                        property: 'margin',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Sections",
                tag: [".section-line", ".section-line-container::after"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Separator color",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "#888888"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Sections",
                tag: [".bg-wrap", ".bg-default"],
                elements: [
                    {
                        name: "BackgroundColor",
                        title: "Default background",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#fff"
                                },
                                dark: {
                                    value: "#232122"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "H1",
                tag: "h1",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: "'Montserrat'"
                                },
                                dark: {
                                    value: "'Montserrat'"
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: "100px"
                                },
                                dark: {
                                    value: "100px"
                                }
                            }
                            , tablet: {
                                light: {
                                    value: "70px"
                                },
                                dark: {
                                    value: "70px"
                                }
                            }
                            , mobile: {
                                light: {
                                    value: "40px"
                                },
                                dark: {
                                    value: "40px"
                                }
                            }
                        }
                    },
                    {
                        name: "FontWeight",
                        title: "Font weight",
                        property: 'font-weight',
                        media: {
                            default: {
                                light: {
                                    value: "200"
                                },
                                dark: {
                                    value: "200"
                                }
                            }
                        }
                    },
                    {
                        name: "LineHeight",
                        title: "Line height",
                        property: 'line-height',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LetterSpacing",
                        title: "Letter spacing",
                        property: 'letter-spacing',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontStyle",
                        title: "Font style",
                        property: 'font-style',
                        media: {
                            default: {
                                light: {
                                    value: "normal"
                                },
                                dark: {
                                    value: "normal"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Text decoration",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "TextTransform",
                        title: "Text transform",
                        property: 'text-transform',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontColor",
                        title: "Font color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#222"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "TextShadow",
                        title: "Text shadow",
                        property: 'text-shadow',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "H2",
                tag: "h2",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: "'Montserrat'"
                                },
                                dark: {
                                    value: "'Montserrat'"
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: "50px"
                                },
                                dark: {
                                    value: "50px"
                                }
                            }
                            , tablet: {
                                light: {
                                    value: "40px"
                                },
                                dark: {
                                    value: "40px"
                                }
                            }
                            , mobile: {
                                light: {
                                    value: "30px"
                                },
                                dark: {
                                    value: "30px"
                                }
                            }
                        }
                    },
                    {
                        name: "FontWeight",
                        title: "Font weight",
                        property: 'font-weight',
                        media: {
                            default: {
                                light: {
                                    value: "300"
                                },
                                dark: {
                                    value: "300"
                                }
                            }
                        }
                    },
                    {
                        name: "LineHeight",
                        title: "Line height",
                        property: 'line-height',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LetterSpacing",
                        title: "Letter spacing",
                        property: 'letter-spacing',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontStyle",
                        title: "Font style",
                        property: 'font-style',
                        media: {
                            default: {
                                light: {
                                    value: "normal"
                                },
                                dark: {
                                    value: "normal"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Text decoration",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "TextTransform",
                        title: "Text transform",
                        property: 'text-transform',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontColor",
                        title: "Font color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#222"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "TextShadow",
                        title: "Text shadow",
                        property: 'text-shadow',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "H3",
                tag: "h3",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: "'Montserrat'"
                                },
                                dark: {
                                    value: "'Montserrat'"
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: "35px"
                                },
                                dark: {
                                    value: "35px"
                                }
                            }
                            , mobile: {
                                light: {
                                    value: "25px"
                                },
                                dark: {
                                    value: "25px"
                                }
                            }
                        }
                    },
                    {
                        name: "FontWeight",
                        title: "Font weight",
                        property: 'font-weight',
                        media: {
                            default: {
                                light: {
                                    value: "300"
                                },
                                dark: {
                                    value: "300"
                                }
                            }
                        }
                    },
                    {
                        name: "LineHeight",
                        title: "Line height",
                        property: 'line-height',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LetterSpacing",
                        title: "Letter spacing",
                        property: 'letter-spacing',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontStyle",
                        title: "Font style",
                        property: 'font-style',
                        media: {
                            default: {
                                light: {
                                    value: "normal"
                                },
                                dark: {
                                    value: "normal"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Text decoration",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "TextTransform",
                        title: "Text transform",
                        property: 'text-transform',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontColor",
                        title: "Font color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#444"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "TextShadow",
                        title: "Text shadow",
                        property: 'text-shadow',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "H4",
                tag: "h4",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        order: "1",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: "'Montserrat'"
                                },
                                dark: {
                                    value: "'Montserrat'"
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: "18px"
                                },
                                dark: {
                                    value: "18px"
                                }
                            }
                        }
                    },
                    {
                        name: "FontWeight",
                        title: "Font weight",
                        property: 'font-weight',
                        media: {
                            default: {
                                light: {
                                    value: "400"
                                },
                                dark: {
                                    value: "400"
                                }
                            }
                        }
                    },
                    {
                        name: "LineHeight",
                        title: "Line height",
                        property: 'line-height',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LetterSpacing",
                        title: "Letter spacing",
                        property: 'letter-spacing',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontStyle",
                        title: "Font style",
                        property: 'font-style',
                        media: {
                            default: {
                                light: {
                                    value: "normal"
                                },
                                dark: {
                                    value: "normal"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Text decoration",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "TextTransform",
                        title: "Text transform",
                        property: 'text-transform',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontColor",
                        title: "Font color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#555"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "TextShadow",
                        title: "Text shadow",
                        property: 'text-shadow',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Link",
                tag: "a:not(.btn)",
                elements: [
                    {
                        name: "FontColor",
                        title: "Color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Text decoration",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Link",
                tag: "a:not(.btn):hover",
                elements: [
                    {
                        name: "FontColor",
                        title: "Hover color",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#000000"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Hover text decoration",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: "underline"
                                },
                                dark: {
                                    value: "underline"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Navigation",
                tag: ".navbar-nav a",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        order: "1",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        order: "2",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontWeight",
                        title: "Font weight",
                        order: "3",
                        property: 'font-weight',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LineHeight",
                        title: "Line height",
                        order: "4",
                        property: 'line-height',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LetterSpacing",
                        title: "Letter spacing",
                        order: "5",
                        property: 'letter-spacing',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontStyle",
                        title: "Font style",
                        order: "6",
                        property: 'font-style',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontColor",
                        title: "Font color",
                        order: "7",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#777"
                                },
                                dark: {
                                    value: "#aaa"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Decoration",
                        order: "9",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: "none"
                                },
                                dark: {
                                    value: "none"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        order: "11",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "rgba(255,255,255,0)"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0)"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Navigation",
                tag: [".navbar-nav a.nav-link:hover", ".navbar-nav .nav-item:hover > a.nav-link", ".navbar-nav a.nav-link.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Hover font color",
                        order: "8",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#222"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "TextDecoration",
                        title: "Hover decoration",
                        order: "10",
                        property: 'text-decoration',
                        media: {
                            default: {
                                light: {
                                    value: "none"
                                },
                                dark: {
                                    value: "none"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Hover background",
                        order: "12",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "rgba(255,255,255,0)"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0)"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Tabs",
                tag: ".nav-tabs a.nav-link",
                elements: [
                    {
                        name: "FontColor",
                        title: "Font color",
                        order: "1",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#A2AAB1"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0.2)"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        order: "5",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Tabs",
                tag: ".nav-tabs",
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border color",
                        order: "3",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0.2)"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Tabs",
                tag: [".nav-tabs a.nav-link:hover", ".nav-tabs a.nav-link.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Active font color",
                        order: "2",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#444"
                                },
                                dark: {
                                    value: "#FFF"
                                }
                            }
                        }
                    },
                    {
                        name: "BorderColor",
                        title: "Active border color",
                        order: "4",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#444"
                                },
                                dark: {
                                    value: "#FFF"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Active background",
                        order: "6",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Pagination",
                tag: ".pagination .page-link",
                elements: [
                    {
                        name: "FontColor",
                        title: "Font color",
                        order: "1",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BorderColor",
                        title: "Border color",
                        order: "3",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "#555"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        order: "5",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Pagination",
                tag: [".pagination .page-link:hover", ".pagination .page-link.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Active font color",
                        order: "2",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BorderColor",
                        title: "Active border color",
                        order: "4",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "#555"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Active background",
                        order: "6",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "#555"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons",
                tag: ".btn",
                elements: [
                    {
                        name: "FontFamily",
                        title: "Font family",
                        order: "1",
                        property: 'font-family',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontSize",
                        title: "Font size",
                        property: 'font-size',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "FontWeight",
                        title: "Font weight",
                        property: 'font-weight',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "LetterSpacing",
                        title: "Letter spacing",
                        property: 'letter-spacing',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "TextTransform",
                        title: "Text transform",
                        property: 'text-transform',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    },
                    {
                        name: "BorderRadius",
                        title: "Border radius",
                        property: 'border-radius',
                        media: {
                            default: {
                                light: {
                                    value: "0px 0px 0px 0px"
                                },
                                dark: {
                                    value: "0px 0px 0px 0px"
                                }
                            }
                        }
                    },
                    {
                        name: "BorderWidth",
                        title: "Border width",
                        property: 'border-width',
                        media: {
                            default: {
                                light: {
                                    value: "2px 2px 2px 2px"
                                },
                                dark: {
                                    value: "2px 2px 2px 2px"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons primary",
                tag: [".btn-primary", ".badge-primary"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Font",
                        order: "1",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#FFF"
                                },
                                dark: {
                                    value: "#FFF"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        order: "7",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#AF9F8C"
                                },
                                dark: {
                                    value: "#AF9F8C"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons primary",
                tag: [".btn-primary:hover", ".btn-primary:active", ".btn-primary.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Font :hover",
                        order: "2",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#FFF"
                                },
                                dark: {
                                    value: "#FFF"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background :hover",
                        order: "8",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#998B7A"
                                },
                                dark: {
                                    value: "#998B7A"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons primary",
                tag: ".btn-outline-primary",
                elements: [
                    {
                        name: "FontColor",
                        title: "Font outline",
                        order: "3",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#AF9F8C"
                                },
                                dark: {
                                    value: "#AF9F8C"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons primary",
                tag: [".btn-outline-primary:hover", ".btn-outline-primary:active", ".btn-outline-primary.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Font outline :hover",
                        order: "4",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#998B7A"
                                },
                                dark: {
                                    value: "#998B7A"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons primary",
                tag: [".btn-primary", ".btn-outline-primary"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border",
                        order: "5",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#AF9F8C"
                                },
                                dark: {
                                    value: "#AF9F8C"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons primary",
                tag: [".btn-primary:hover", ".btn-primary:active", ".btn-primary.active", ".btn-outline-primary:hover", ".btn-outline-primary:active", ".btn-outline-primary.active"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border :hover",
                        order: "6",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#998B7A"
                                },
                                dark: {
                                    value: "#998B7A"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons secondary",
                tag: [".btn-secondary", ".badge-secondary"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Font",
                        order: "1",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#FFF"
                                },
                                dark: {
                                    value: "#FFF"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        order: "7",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#A2AAB1"
                                },
                                dark: {
                                    value: "#444"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons secondary",
                tag: [".btn-secondary:hover", ".btn-secondary:active", ".btn-secondary.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Font :hover",
                        order: "2",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#FFF"
                                },
                                dark: {
                                    value: "#FFF"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background :hover",
                        order: "8",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#91989F"
                                },
                                dark: {
                                    value: "#555"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons secondary",
                tag: ".btn-outline-secondary",
                elements: [
                    {
                        name: "FontColor",
                        title: "Font outline",
                        order: "3",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#A2AAB1"
                                },
                                dark: {
                                    value: "#888"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons secondary",
                tag: [".btn-outline-secondary:hover", ".btn-outline-secondary:active", ".btn-outline-secondary.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Font outline :hover",
                        order: "4",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#91989F"
                                },
                                dark: {
                                    value: "#888"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons secondary",
                tag: [".btn-secondary", ".btn-outline-secondary"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border",
                        order: "5",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#A2AAB1"
                                },
                                dark: {
                                    value: "#444"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Buttons secondary",
                tag: [".btn-secondary:hover", ".btn-secondary:active", ".btn-secondary.active", ".btn-outline-secondary:hover", ".btn-outline-secondary:active", ".btn-outline-secondary.active"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border :hover",
                        order: "6",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#91989F"
                                },
                                dark: {
                                    value: "#555"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Forms",
                tag: ".form-group",
                elements: [
                    {
                        name: "Margin",
                        title: "Field margin",
                        order: "1",
                        property: 'margin',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Forms",
                tag: [".form-control", ".form-inline>.btn-link"],
                elements: [
                    {
                        name: "BorderRadius",
                        title: "Field border radius",
                        order: "2",
                        property: 'border-radius',
                        media: {
                            default: {
                                light: {
                                    value: "0px 0px 0px 0px"
                                },
                                dark: {
                                    value: "0px 0px 0px 0px"
                                }
                            }
                        }
                    },
                    {
                        name: "BorderWidth",
                        title: "Field border width",
                        order: "3",
                        property: 'border-width',
                        media: {
                            default: {
                                light: {
                                    value: "0px 0px 1px 0px"
                                },
                                dark: {
                                    value: "0px 0px 1px 0px"
                                }
                            }
                        }
                    },
                    {
                        name: "BorderColor",
                        title: "Field border color",
                        order: "4",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "rgba(0,0,0,0.2)"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0.2)"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Field background color",
                        order: "6",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: ""
                                },
                                dark: {
                                    value: ""
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Forms",
                tag: [".form-control::placeholder", ".form-control .placeholder"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Placeholder",
                        order: "5",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#aaa"
                                },
                                dark: {
                                    value: "#aaa"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Forms",
                tag: ["input[type=checkbox]+.lbl::after", "input[type=radio]+.lbl::after"],
                elements: [
                    {
                        name: "BackgroundColor",
                        title: "Active element color",
                        order: "7",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#A48F77"
                                },
                                dark: {
                                    value: "#A48F77"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Icons and decor",
                tag: "svg.svg-default",
                elements: [
                    {
                        name: "FontColor",
                        title: "Default",
                        property: 'fill',
                        media: {
                            default: {
                                light: {
                                    value: "#555"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Icons and decor",
                tag: "svg.svg-primary",
                elements: [
                    {
                        name: "FontColor",
                        title: "Primary",
                        property: 'fill',
                        media: {
                            default: {
                                light: {
                                    value: "#c3b6a5"
                                },
                                dark: {
                                    value: "#c3b6a5"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Icons and decor",
                tag: "svg.svg-secondary",
                elements: [
                    {
                        name: "FontColor",
                        title: "Secondary",
                        property: 'fill',
                        media: {
                            default: {
                                light: {
                                    value: "#bbc3cc"
                                },
                                dark: {
                                    value: "#555"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Gallery",
                tag: [".gallery-item:not(.masonry-item)", ".masonry-item.gallery-item .wrapper"],
                elements: [
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#ffffff"
                                },
                                dark: {
                                    value: "#232122"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Carousel",
                tag: [".owl-prev", ".owl-next"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Arrows",
                        order: "3",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#444"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background",
                        order: "5",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#fff"
                                },
                                dark: {
                                    value: "#444"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Carousel",
                tag: [".owl-prev:hover", ".owl-next:hover"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Arrows :hover",
                        order: "4",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#444"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background :hover",
                        order: "6",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#ded8d0"
                                },
                                dark: {
                                    value: "#af9f8c"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Carousel",
                tag: ".owl-dot>span",
                elements: [
                    {
                        name: "BorderColor",
                        title: "Paginator",
                        order: "1",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "#444"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Carousel",
                tag: [".owl-dot.active>span", ".owl-dot:hover>span"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Paginator :hover",
                        order: "2",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#444"
                                },
                                dark: {
                                    value: "#fff"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Other",
                tag: ["[class*=border]", "hr", ".separate-list li", ".media"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border color",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0.2)"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Preloader",
                tag: ["#preloader>div", "#preloader>div>*", "#preloader>div::before", "#preloader>div::after"],
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border color",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#DDD"
                                },
                                dark: {
                                    value: "#888"
                                }
                            }
                        }
                    },
                    {
                        name: "BackgroundColor",
                        title: "Background color",
                        order: "6",
                        property: 'background-color',
                        media: {
                            default: {
                                light: {
                                    value: "#DDD"
                                },
                                dark: {
                                    value: "#888"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Other",
                tag: ".border-x2",
                elements: [
                    {
                        name: "BorderColor",
                        title: "Border-x2 color",
                        property: 'border-color',
                        media: {
                            default: {
                                light: {
                                    value: "#D1D7DD"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0.2)"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Other",
                tag: ".text-primary",
                elements: [
                    {
                        name: "FontColor",
                        title: "Text primary",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#AF9F8C"
                                },
                                dark: {
                                    value: "#AF9F8C"
                                }
                            }
                        }
                    }
                ]
            },
            {
                name: "Other",
                tag: [".text-secondary", ".breadcrumb-item + .breadcrumb-item::before", ".breadcrumb-item.active"],
                elements: [
                    {
                        name: "FontColor",
                        title: "Text secondary",
                        property: 'color',
                        media: {
                            default: {
                                light: {
                                    value: "#A2AAB1"
                                },
                                dark: {
                                    value: "rgba(255,255,255,0.5)"
                                }
                            }
                        }
                    }
                ]
            }
        ]
    },
    editElementsList: [
        {
            group: 'button',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.btn:not(button)'],
            positionControl: 'outside-top',
            context: 'row',
            dragItems: 'p, h1, h2, h3, h4, .btn, ul, img, svg',
            controlsElements: ['DragElement', 'StaticLink', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'ElementCBS(buttonType)'
                , 'MarginSettings'
                , 'ElementButtonSize'
                , 'ElementButtonIcon'
                , 'ElementButtonWidth'
                , 'ElementCBS(buttonOptions)'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderColorES'
                , 'BorderStyleES'
                , 'BoxShadowES'
                , 'FontFamilyES'
                , 'FontColorES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'TextDecorationES'
                , 'TextTransformES'
                , 'TextShadowES'
                , 'MarginES'
                , 'PaddingES'
            ]
        }
        , {
            group: 'form-button',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['form [type=submit]'],
            positionControl: 'outside-top',
            controlsElements: ['ElementSettings', 'ElementStyle'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl'],
            elementSettings: [
                'ElementSkin'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(buttonType)'
                , 'ElementButtonSize'
                , 'ElementButtonIcon'
                , 'ElementButtonWidth'
                , 'ElementCBS(buttonOptions)'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderColorES'
                , 'BorderStyleES'
                , 'BoxShadowES'
                , 'FontFamilyES'
                , 'FontColorES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'TextDecorationES'
                , 'TextTransformES'
                , 'TextShadowES'
                , 'MarginES'
                , 'PaddingES'
            ]
        }
        , {
            group: 'images',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['*:not(.spr-gallery) img:not(.item-img):not([alt=button])'],
            positionControl: 'outside-top-right',
            context: 'row',
            dragItems: 'p, h1, h2, h3, h4, .btn, ul, img, svg',
            controlsElements: ['DragElement', 'ImageSettings', 'Link', 'ElementSettings',
                'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementParallax'
                , 'ElementCBS(styleBoxOptions)'
            ],
            elementStyle: [
                'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderStyleES'
                , 'BorderColorES'
                , 'BoxShadowES'
                , 'PositionES'
                , 'ZIndexES'
                , 'CoordinatesES'
                , 'MarginES'
                , 'PaddingES'
                , 'SizeES'
            ]
        }
        , {
            group: 'images-in-gallery',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.spr-gallery > img.item-img'],
            positionControl: 'inside-top',
            controlsElements: ['ImageSettings', 'Link', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementParallax'
                , 'ElementCBS(styleBoxOptions)'
            ],
            elementStyle: [
                'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderStyleES'
                , 'BorderColorES'
                , 'BoxShadowES'
                , 'PositionES'
                , 'ZIndexES'
                , 'CoordinatesES'
                , 'MarginES'
                , 'PaddingES'
                , 'SizeES'
            ]
        }
        , {
            group: 'svg',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['svg:not(.item-img):not(.icon):not(.circular-chart)'],
            positionControl: 'inside-top',
            context: 'row',
            dragItems: 'p, h1, h2, h3, h4, .btn, ul, img, svg',
            controlsElements: ['ImageSettings', 'Link', 'ElementSettings', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementParallax'
                , 'ElementCBS(colorSvgOptions)'
            ]
        }
        , {
            group: 'svg',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['svg.circular-chart'],
            positionControl: 'inside-top',
            controlsElements: ['ElementStyle', 'DelElement'],
            elementStyle: [
                'StrokeColorES'
            ]
        }
        , {
            group: 'icons',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['svg.icon'],
            positionControl: 'inside-top',
            controlsElements: ['ImageSettings', 'Link', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(colorSvgOptions)'
                , 'ElementCBS(styleBoxOptions)'
            ],
            elementStyle: [
                'FillColorES'
                , 'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderColorES'
                , 'BorderStyleES'
                , 'BoxShadowES'
                , 'MarginES'
                , 'PaddingES'
            ]
        }
        , {
            group: 'hr',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['hr'],
            positionControl: 'inside-top',
            controlsElements: ['ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'MarginSettings'
            ],
            elementStyle: [
                'BorderWidthES'
                , 'BorderColorES'
                , 'BorderStyleES'
                , 'SizeES'
            ]
        }
        , {
            group: 'countdown',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.countdown'],
            positionControl: 'outside-top',
            controlsElements: ['SettingsCountdownElement', 'AOSSettings', 'ElementSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'iframe',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.video-iframe'],
            positionControl: 'outside-top',
            controlsElements: ['VideoLink(iframe)', 'ElementSettings', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'contactform',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            editType: '-form',
            domIdentif: ['form.contact_form'],
            positionControl: 'outside-top',
            controlsElements: ['FormSettings', 'ConstructorForm', 'ElementSettings', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(FormOptions)'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'text',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['p', 'small'],
            positionControl: 'outside-top',
            context: 'row',
            dragItems: 'p, h1, h2, h3, h4, .btn, ul, img, svg',
            controlsElements: ['DragElement', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl', 'TextLink', 'TextAlignLeft', 'TextAlignCenter', 'TextAlignRight'],
            elementStyle: [
                'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundImageES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderColorES'
                , 'BorderStyleES'
                , 'BoxShadowES'
                , 'PositionES'
                , 'ZIndexES'
                , 'CoordinatesES'
                , 'FontFamilyES'
                , 'FontColorES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'TextDecorationES'
                , 'TextTransformES'
                , 'TextShadowES'
                , 'MarginES'
                , 'PaddingES'
                , 'SizeES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(colorTextOptions)'
                , 'ElementCBS(sizeTextOptions)'
                , 'ElementCBS(styleTextOptions)'
            ]
        }
        , {
            group: 'list',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['ul:not(.navbar-nav):not(.nav-tabs):not(.sub-menu)'],
            positionControl: 'outside-top',
            context: 'row',
            dragItems: 'p, h1, h2, h3, h4, .btn, ul, img, svg',
            controlsElements: ['DragElement', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementStyle: [
                'FontColorES'
                , 'FontFamilyES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'MarginES'
                , 'PaddingES'
                , 'TextDecorationES'
                , 'TextShadowES'
                , 'TextTransformES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(colorTextOptions)'
                , 'ElementCBS(sizeTextOptions)'
                , 'ElementCBS(styleTextOptions)'
            ]
        }
        , {
            group: 'list-item',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['ul:not(.navbar-nav):not(.nav-tabs)>li', 'ol>li'],
            positionControl: 'outside-top',
            controlsElements: ['DragElement', 'CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl', 'TextLink', 'TextAlignLeft', 'TextAlignCenter', 'TextAlignRight']
        }
        , {
            group: 'navbar-list-item',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['ul.navbar-nav>li'],
            positionControl: 'outside-top',
            controlsElements: ['StaticLink(a)', 'ElementSettings(a)', 'CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl'],
            elementSettings: [
                'Visibility'
                , 'ElementButtonIcon'
            ]
        }
        , {
            group: 'navtab-list-item',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['ul.nav-tabs>li'],
            positionControl: 'outside-top',
            controlsElements: ['CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl']
        }
        , {
            group: 'accordion-header',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.accordion-header'],
            positionControl: 'outside-top',
            controlsElements: ['ElementSettings', 'ElementStyle'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl'],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'FontColorES'
                , 'FontFamilyES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'TextDecorationES'
                , 'TextTransformES'
                , 'TextShadowES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'ElementMediaTextAlign'
                , 'ElementButtonIcon'
            ]
        }
        , {
            group: 'masonry-filter-button',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.masonry-filter .btn-group button'],
            positionControl: 'outside-top',
            controlsElements: ['DragElement', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl'],
            elementSettings: [
                'ElementSkin'
                , 'ElementMediaTextAlign'
                , 'ElementCBS(buttonType)'
                , 'MarginSettings'
                , 'ElementButtonSize'
                , 'ElementButtonIcon'
                , 'ElementButtonWidth'
                , 'ElementCBS(buttonOptions)'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderColorES'
                , 'BorderStyleES'
                , 'BoxShadowES'
                , 'FontFamilyES'
                , 'FontColorES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'TextDecorationES'
                , 'TextTransformES'
                , 'TextShadowES'
                , 'MarginES'
                , 'PaddingES'
            ]
        }
        , {
            group: 'h',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['h1', 'h2', 'h3', 'h4'],
            positionControl: 'outside-top',
            context: 'row',
            dragItems: 'p, h1, h2, h3, h4, .btn, ul, img, svg',
            controlsElements: ['DragElement', 'ElementH', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            typography: ['TextBold', 'TextItalic', 'TextUpper', 'TextUnderline', 'TextStrikethrough', 'TextMarker', 'TextRtl', 'TextLink', 'TextAlignLeft', 'TextAlignCenter', 'TextAlignRight'],
            elementStyle: [
                'MarginES'
                , 'PaddingES'
                , 'FontColorES'
                , 'FontFamilyES'
                , 'FontSizeES'
                , 'FontStyleES'
                , 'FontWeightES'
                , 'LetterSpacingES'
                , 'LineHeightES'
                , 'TextDecorationES'
                , 'TextTransformES'
                , 'TextShadowES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(colorTextOptions)'
                , 'ElementCBS(styleTextOptions)'
            ]
        }
        , {
            group: 'element-copy-del',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.content-box'],
            positionControl: 'outside-top',
            context: 'row',
            dragItems: '.content-box',
            controlsElements: ['DragElement', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderStyleES'
                , 'BorderColorES'
                , 'BoxShadowES'
                , 'PositionES'
                , 'CoordinatesES'
                , 'MarginES'
                , 'PaddingES'
                , 'SizeES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'gallery-item-element',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['*:not(.masonry-item) > .gallery-item:not(.masonry-item)'],
            positionControl: 'outside-top',
            controlsElements: ['ImageSettings(img, svg)', 'Link(img, svg)', 'ElementSettings(.gallery-item)', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderStyleES'
                , 'BorderColorES'
                , 'MarginES'
                , 'PaddingES'
                , 'SizeES'
                , 'BoxShadowES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(galleryItemOptions)'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'gallery-masonry-item-element',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.masonry-item'],
            positionControl: 'outside-top',
            controlsElements: ['ImageSettings(img, svg)', 'Link(img, svg)', 'ElementSettings', 'ElementStyle', 'AOSSettings', 'CopyElement', 'DelElement'],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'BorderRadiusES'
                , 'BorderWidthES'
                , 'BorderStyleES'
                , 'BorderColorES'
                , 'MarginES'
                , 'PaddingES'
                , 'SizeES'
                , 'BoxShadowES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(galleryItemOptions)'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'filter buttons',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.masonry-filter .controls'],
            positionControl: 'inside-top',
            controlsElements: ['ElementSettings', 'ElementStyle', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaJustifyAlign'
                , 'PaddingSettings'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
            ]
        }
        , {
            group: 'element-half-bg',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.bg-box'],
            positionControl: 'inside-top',
            controlsElements: ['AOSSettings', 'ElementSettings', 'ElementStyle', 'DelElement'],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
            ],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(styleBoxOptions)'
            ]
        }
        , {
            group: 'megamenu-bg',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.sub-menu', '.mega-menu-container', '.offcanvas'],
            positionControl: 'inside-top',
            controlsElements: ['ElementSettings', 'ElementStyle', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'ElementCBS(styleSubNavOptions)'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
            ]
        }
        , {
            group: 'slider-bg',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.carousel-single .item'],
            positionControl: 'inside-top',
            controlsElements: ['ElementSettings', 'ElementStyle', 'CopyElement', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'PaddingSettings'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
            ]
        }
        , {
            group: 'element-tabs',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.tab-content'],
            positionControl: 'outside-top',
            controlsElements: ['ElementSettings', 'ElementStyle'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(styleBoxOptions)'
            ],
            elementStyle: [
                'BackgroundImageES'
                , 'BackgroundPositionES'
                , 'BackgroundColorES'
                , 'BackgroundRepeatES'
                , 'BackgroundSizeES'
                , 'MarginES'
                , 'PaddingES'
            ]
        }
        , {
            group: 'element-del-settings',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.form-container', '.spr-settings-del'],
            positionControl: 'outside-top',
            controlsElements: ['ElementSettings', 'DelElement'],
            elementSettings: [
                'ElementSkin'
                , 'Visibility'
                , 'ElementMediaTextAlign'
                , 'MarginSettings'
                , 'ElementCBS(styleTextOptions)'
            ]
        }
        , {
            group: 'element-del',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.share-list li', '.spr-option-del'],
            positionControl: 'outside-top',
            controlsElements: ['DelElement']
        }
        , {
            group: 'linkItem',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.social-list li'],
            positionControl: 'outside-top',
            controlsElements: ['Link(a)', 'CopyElement', 'DelElement']
        }
        , {
            group: 'map',
            mode: 'edit-elements',
            btnContlType: 'nowrap',
            domIdentif: ['.g-map'],
            positionControl: 'inside-top',
            controlsElements: ['GMapSettings', 'DelElement']
        }
    ],
    customControlElements: {
        navBarPosition: {
            title: 'Navbar position',
            buttons: [
                {
                    title: 'Sticky top',
                    innerHTML: '<img alt="Sticky top" src="images/builder-thumbs/sticky.png"/>',
                    value: 'sticky-top'
                }
                , {
                    title: 'Absolute top',
                    innerHTML: '<img alt="Absolute top" src="images/builder-thumbs/absolute-top.png"/>',
                    value: 'absolute-top'
                }
                , {
                    title: 'Fixed top',
                    innerHTML: '<img alt="Fixed top" src="images/builder-thumbs/fixed-top.png"/>',
                    value: 'fixed-top'
                }
                , {
                    title: 'Fixed bottom',
                    innerHTML: '<img alt="Fixed bottom" src="images/builder-thumbs/fixed-bottom.png"/>',
                    value: 'fixed-bottom'
                }
                , {
                    title: 'Show on scroll',
                    innerHTML: '<img alt="show-on-scroll" src="images/builder-thumbs/hide-on-scroll.png"/>',
                    value: 'show-on-scroll'
                }
                , {
                    title: 'Hide on scroll',
                    innerHTML: '<img alt="show-on-scroll" src="images/builder-thumbs/hide-on-scroll.png"/>',
                    value: 'hide-on-scroll'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        navBarOptions: {
            title: 'Navbar options',
            buttons: [
                {
                    title: 'Boxed',
                    innerHTML: '<img alt="Boxed" src="images/builder-thumbs/boxed.png"/>',
                    value: 'boxed'
                }
                , {
                    title: 'Shadow',
                    innerHTML: '<img alt="Shadow" src="images/builder-thumbs/shadow.png"/>',
                    value: 'shadow'
                }
                , {
                    title: 'Margin',
                    innerHTML: '<img alt="Margin" src="images/builder-thumbs/margin.png"/>',
                    value: 'margin'
                }
                , {
                    title: 'Margin x2',
                    innerHTML: '<img alt="Margin x2" src="images/builder-thumbs/margin.png"/>',
                    value: 'margin-x2'
                }
                , {
                    title: 'Padding',
                    innerHTML: '<img alt="Padding" src="images/builder-thumbs/padding.png"/>',
                    value: 'padding'
                }
                , {
                    title: 'Padding x2',
                    innerHTML: '<img alt="Padding x2" src="images/builder-thumbs/padding.png"/>',
                    value: 'padding-x2'
                }
                , {
                    title: 'Separator screen',
                    innerHTML: '<img alt="Border bottom" src="images/builder-thumbs/border-bottom.png"/>',
                    value: 'border-bottom'
                }
                , {
                    title: 'Separator content',
                    innerHTML: '<img alt="Border bottom" src="images/builder-thumbs/border-bottom-container.png"/>',
                    value: 'border-bottom-container'
                }
            ],
            onlyOne: false,
            allowSelectNothing: true
        },
        sectionOptions: {
            title: 'Section options',
            buttons: [
                {
                    title: 'Full height',
                    innerHTML: '<img alt="100% height" src="images/builder-thumbs/full-height.png"/>',
                    value: 'full-height'
                }
                , {
                    title: 'Boxed',
                    innerHTML: '<img alt="Boxed" src="images/builder-thumbs/boxed.png"/>',
                    value: 'boxed'
                }
                , {
                    title: 'Margin',
                    innerHTML: '<img alt="Margin" src="images/builder-thumbs/margin.png"/>',
                    value: 'margin'
                }
                , {
                    title: 'Margin x2',
                    innerHTML: '<img alt="Margin x2" src="images/builder-thumbs/margin.png"/>',
                    value: 'margin-x2'
                }
                , {
                    title: 'Margin x3',
                    innerHTML: '<img alt="Margin x2" src="images/builder-thumbs/margin.png"/>',
                    value: 'margin-x3'
                }
                , {
                    title: 'Overall',
                    innerHTML: '<img alt="Overall" src="images/builder-thumbs/overall.png"/>',
                    value: 'overall'
                }
                , {
                    title: 'Separator screen',
                    innerHTML: '<img alt="Border bottom" src="images/builder-thumbs/border-bottom.png"/>',
                    value: 'section-line'
                }
                , {
                    title: 'Separator content',
                    innerHTML: '<img alt="Border bottom" src="images/builder-thumbs/border-bottom-container.png"/>',
                    value: 'section-line-container'
                }
            ],
            onlyOne: false,
            allowSelectNothing: true
        },
        modalAlertOptions: {
            title: 'Alert position',
            buttons: [
                {
                    title: 'Fixed top',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/fixed-top.png"/>',
                    value: 'fixed-top'
                }
                , {
                    title: 'Fixed bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/fixed-bottom.png"/>',
                    value: 'fixed-bottom'
                }

            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        modalAlertAnimation: {
            title: 'Alert animation',
            buttons: [
                {
                    title: 'Slide',
                    innerHTML: '<img alt="Slide" src="images/builder-thumbs/slide.png"/>',
                    value: 'slide'
                }
                , {
                    title: 'Fade',
                    innerHTML: '<img alt="Fade" src="images/builder-thumbs/fade.png"/>',
                    value: 'fade'
                }

            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        modalPanelOptions: {
            title: 'Panel position',
            buttons: [
                {
                    title: 'Fixed left',
                    innerHTML: '<img alt="Fixed left" src="images/builder-thumbs/fixed-left.png"/>',
                    value: 'fixed-left'
                }
                , {
                    title: 'Fixed center',
                    innerHTML: '<img alt="Fixed center" src="images/builder-thumbs/fixed-center.png"/>',
                    value: 'fixed-center'
                }
                , {
                    title: 'Fixed right',
                    innerHTML: '<img alt="Fixed right" src="images/builder-thumbs/fixed-right.png"/>',
                    value: 'fixed-right'
                }

            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        modalPanelAnimation: {
            title: 'Panel animation',
            buttons: [
                {
                    title: 'Slide',
                    innerHTML: '<img alt="Slide" src="images/builder-thumbs/slide.png"/>',
                    value: 'slide'
                }
                , {
                    title: 'Fade',
                    innerHTML: '<img alt="Fade" src="images/builder-thumbs/fade.png"/>',
                    value: 'fade'
                }

            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        modalPopupOptions: {
            title: 'Popup options',
            buttons: [
                {
                    title: 'Shadow',
                    innerHTML: '<img alt="Full height" src="images/builder-thumbs/shadow.png" />',
                    value: 'shadow'
                }
                , {
                    title: 'Rounded',
                    innerHTML: '<img alt="Full height" src="images/builder-thumbs/rounded.png" />',
                    value: 'rounded'
                }
                , {
                    title: 'Border',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/border.png"/>',
                    value: 'border'
                }
                , {
                    title: 'Border x2',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/border-x2.png"/>',
                    value: 'border-x2'
                }
                , {
                    title: 'Padding',
                    innerHTML: '<img alt="Full height" src="images/builder-thumbs/padding.png" />',
                    value: 'padding'
                }
                , {
                    title: 'Padding x2',
                    innerHTML: '<img alt="Full height" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x2'
                }
                , {
                    title: 'Padding x3',
                    innerHTML: '<img alt="Full height" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x3padding'
                }
                , {
                    title: 'Padding x4',
                    innerHTML: '<img alt="Full height" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x4'
                }

            ],
            onlyOne: false,
            allowSelectNothing: true
        },
        modalPopupAnimation: {
            title: 'Popup animation',
            buttons: [
                {
                    title: 'Slide',
                    innerHTML: '<img alt="Slide" src="images/builder-thumbs/slide.png"/>',
                    value: 'slide'
                }
                , {
                    title: 'Zoom',
                    innerHTML: '<img alt="Zoom" src="images/builder-thumbs/zoom.png"/>',
                    value: 'zoom'
                }

            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        carouselDots: {
            title: 'Carousel dots',
            buttons: [
                {
                    title: 'None',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-dots-none.png"/>',
                    value: 'carousel-dots-none'
                }
                , {
                    title: 'Center',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-dots-center.png"/>',
                    value: 'carousel-dots-center-bottom'
                }
                , {
                    title: 'Left bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-dots-lb.png"/>',
                    value: 'carousel-dots-left-bottom'
                }
                , {
                    title: 'Right bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-dots-rb.png"/>',
                    value: 'carousel-dots-right-bottom'
                }
                , {
                    title: 'Fluid top',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-dots-at.png"/>',
                    value: 'carousel-dots-aside-top'
                }
                , {
                    title: 'Fluid bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-dots-ab.png"/>',
                    value: 'carousel-dots-aside-bottom'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        carouselNavigation: {
            title: 'Carousel navigation',
            buttons: [
                {
                    title: 'None',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-nav-none.png"/>',
                    value: 'carousel-nav-none'
                }
                , {
                    title: 'Center',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-nav-center.png"/>',
                    value: 'carousel-nav-center-bottom'
                }
                , {
                    title: 'Left bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-nav-lb.png"/>',
                    value: 'carousel-nav-left-bottom'
                }
                , {
                    title: 'Right bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-nav-rb.png"/>',
                    value: 'carousel-nav-right-bottom'
                }
                , {
                    title: 'Fluid center',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-nav-ac.png"/>',
                    value: 'carousel-nav-aside-center'
                }
                , {
                    title: 'Fluid bottom',
                    innerHTML: '<img alt="Option" src="images/builder-thumbs/carousel-nav-ab.png"/>',
                    value: 'carousel-nav-aside-bottom'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        styleTextOptions: {
            title: 'Text effect',
            buttons: [
                {
                    title: 'Shadow',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-shadow"><strong>T</strong></h3></div>',
                    value: 'fx-text-shadow'
                }
                , {
                    title: 'Thin shadow',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-thin-shadow"><strong>T</strong></h3></div>',
                    value: 'fx-text-thin-shadow'
                }
                , {
                    title: 'Hard shadow',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-hard-shadow"><strong>T</strong></h3></div>',
                    value: 'fx-text-hard-shadow'
                }
                , {
                    title: 'Pushed',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-pushed-shadow"><strong>T</strong></h3></div>',
                    value: 'fx-text-pushed-shadow'
                }
                , {
                    title: 'Flat shadow',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-isometric-shadow"><strong>T</strong></h3></div>',
                    value: 'fx-text-isometric-shadow'
                }
                , {
                    title: 'Glow',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-glow"><strong>T</strong></h3></div>',
                    value: 'fx-text-glow'
                }
                , {
                    title: '3D',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-3d"><strong>T</strong></h3></div>',
                    value: 'fx-text-3d'
                }
                , {
                    title: 'Isometric',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-isometric"><strong>T</strong></h3></div>',
                    value: 'fx-text-isometric'
                }
                , {
                    title: 'Anaglyphic',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><h3 class="fx-text-anaglyphic"><strong>T</strong></h3></div>',
                    value: 'fx-text-anaglyphic'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        sizeTextOptions: {
            title: 'Text size',
            buttons: [
                {
                    title: 'Small',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><span class="small">Text</span></div>',
                    value: 'small'
                }
                , {
                    title: 'Lead',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><span class="lead">Text</span></div>',
                    value: 'lead'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        colorTextOptions: {
            title: 'Text color',
            buttons: [
                {
                    title: 'Primary',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><strong class="text-primary">Text</strong></div>',
                    value: 'text-primary'
                }
                , {
                    title: 'Secondary',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><strong class="text-secondary">Text</strong></div>',
                    value: 'text-secondary'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        FormOptions: {
            title: 'Form type',
            buttons: [
                {
                    title: 'Vertical',
                    innerHTML: '<img alt="Shadow" src="images/builder-thumbs/form-vertical.png" />',
                    value: 'form-vertical'
                }
                , {
                    title: 'Horizontal',
                    innerHTML: '<img alt="Shadow" src="images/builder-thumbs/form-inline.png" />',
                    value: 'form-inline'
                }
            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        styleBoxOptions: {
            title: 'Box options',
            buttons: [
                {
                    title: 'Shadow',
                    innerHTML: '<img alt="Shadow" src="images/builder-thumbs/shadow.png" />',
                    value: 'shadow'
                }
                , {
                    title: 'Default bg',
                    innerHTML: '<img alt="Default bg" src="images/builder-thumbs/default-bg.png"/>',
                    value: 'bg-default'
                }
                , {
                    title: 'Border',
                    innerHTML: '<img alt="Border" src="images/builder-thumbs/border.png"/>',
                    value: 'border'
                }
                , {
                    title: 'Border x2',
                    innerHTML: '<img alt="Border x2" src="images/builder-thumbs/border-x2.png"/>',
                    value: 'border-x2'
                }
                , {
                    title: 'Padding',
                    innerHTML: '<img alt="Padding" src="images/builder-thumbs/padding.png" />',
                    value: 'padding'
                }
                , {
                    title: 'Padding x2',
                    innerHTML: '<img alt="Padding x2" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x2'
                }
                , {
                    title: 'Padding x3',
                    innerHTML: '<img alt="Padding x3" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x3'
                }
                , {
                    title: 'Padding x4',
                    innerHTML: '<img alt="Padding x4" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x4'
                }
                , {
                    title: 'Margin',
                    innerHTML: '<img alt="margin" src="images/builder-thumbs/margin.png" />',
                    value: 'margin'
                }
                , {
                    title: 'Margin x2',
                    innerHTML: '<img alt="margin x2" src="images/builder-thumbs/margin.png" />',
                    value: 'margin-x2'
                }
                , {
                    title: 'Margin x3',
                    innerHTML: '<img alt="margin x3" src="images/builder-thumbs/margin.png" />',
                    value: 'margin-x3'
                }
                , {
                    title: 'Margin x4',
                    innerHTML: '<img alt="margin x4" src="images/builder-thumbs/margin.png" />',
                    value: 'margin-x4'
                }
                , {
                    title: 'Rounded',
                    innerHTML: '<img alt="Rounded" src="images/builder-thumbs/rounded.png"/>',
                    value: 'rounded'
                }
                , {
                    title: 'Circle',
                    innerHTML: '<img alt="Circle" src="images/builder-thumbs/rounded-circle.png"/>',
                    value: 'rounded-circle'
                }

            ],
            onlyOne: false,
            allowSelectNothing: true
        },
        galleryItemOptions: {
            title: 'Gallery item options',
            buttons: [
                {
                    title: 'Style 1',
                    innerHTML: '<img alt="Item style 1" src="images/builder-thumbs/gallery-style-1.png" />',
                    value: 'gallery-style-1'
                }
                , {
                    title: 'Style 2',
                    innerHTML: '<img alt="Item style 2" src="images/builder-thumbs/gallery-style-2.png" />',
                    value: 'gallery-style-2'
                }
                , {
                    title: 'Style 3',
                    innerHTML: '<img alt="Item style 3" src="images/builder-thumbs/gallery-style-3.png" />',
                    value: 'gallery-style-3'
                }
                , {
                    title: 'Style 4',
                    innerHTML: '<img alt="Item style 4" src="images/builder-thumbs/gallery-style-4.png" />',
                    value: 'gallery-style-4'
                }
                , {
                    title: 'Style 5',
                    innerHTML: '<img alt="Item style 5" src="images/builder-thumbs/gallery-style-5.png" />',
                    value: 'gallery-style-5'
                }
                , {
                    title: 'Style 6',
                    innerHTML: '<img alt="Item style 6" src="images/builder-thumbs/gallery-style-6.png" />',
                    value: 'gallery-style-6'
                }
                , {
                    title: 'Style 7',
                    innerHTML: '<img alt="Item style 7" src="images/builder-thumbs/gallery-style-7.png" />',
                    value: 'gallery-style-7'
                }
                , {
                    title: 'Style 8',
                    innerHTML: '<img alt="Item style 8" src="images/builder-thumbs/gallery-style-8.png" />',
                    value: 'gallery-style-8'
                }
                , {
                    title: 'Style 9',
                    innerHTML: '<img alt="Item style 9" src="images/builder-thumbs/gallery-style-9.png" />',
                    value: 'gallery-style-9'
                }
                , {
                    title: 'Style 10',
                    innerHTML: '<img alt="Item style 10" src="images/builder-thumbs/gallery-style-10.png" />',
                    value: 'gallery-style-10'
                }
            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        styleSubNavOptions: {
            title: 'Navigation options',
            buttons: [
                {
                    title: 'Shadow',
                    innerHTML: '<img alt="Shadow" src="images/builder-thumbs/shadow.png" />',
                    value: 'shadow'
                }
                , {
                    title: 'Default bg',
                    innerHTML: '<img alt="Default bg" src="images/builder-thumbs/default-bg.png"/>',
                    value: 'bg-default'
                }
                , {
                    title: 'Padding',
                    innerHTML: '<img alt="Padding" src="images/builder-thumbs/padding.png" />',
                    value: 'padding'
                }
                , {
                    title: 'Padding x2',
                    innerHTML: '<img alt="Padding x2" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x2'
                }
                , {
                    title: 'Padding x3',
                    innerHTML: '<img alt="Padding x3" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x3'
                }
                , {
                    title: 'Padding x4',
                    innerHTML: '<img alt="Padding x4" src="images/builder-thumbs/padding.png" />',
                    value: 'padding-x4'
                }
            ],
            onlyOne: false,
            allowSelectNothing: true
        },
        //        styleImgOptions: {
        //            title: 'Image options',
        //            buttons: [
        //                {
        //                    title: 'Shadow',
        //                    innerHTML: '<img alt="Shadow" src="images/builder-thumbs/shadow.png" />',
        //                    value: 'shadow'
        //                }
        //                , {
        //                    title: 'Border',
        //                    innerHTML: '<img alt="Border" src="images/builder-thumbs/border.png"/>',
        //                    value: 'border'
        //                }
        //                , {
        //                    title: 'Border x2',
        //                    innerHTML: '<img alt="Border x2" src="images/builder-thumbs/border-x2.png"/>',
        //                    value: 'border-x2'
        //                }
        //                , {
        //                    title: 'Rounded',
        //                    innerHTML: '<img alt="Rounded" src="images/builder-thumbs/rounded.png"/>',
        //                    value: 'rounded'
        //                }
        //                , {
        //                    title: 'Circle',
        //                    innerHTML: '<img alt="Circle" src="images/builder-thumbs/rounded-circle.png"/>',
        //                    value: 'rounded-circle'
        //                }
        //            ],
        //            onlyOne: false,
        //            allowSelectNothing: true
        //        },
        colorSvgOptions: {
            title: 'SVG options',
            buttons: [
                {
                    title: 'Default',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><svg width="80px" height="60px" viewBox="0 0 80 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-default"><path d="M40,46 C47.1797017,46 53,40.1797017 53,33 C53,28.2135322 48.6666667,21.8801988 40,14 C31.3333333,21.8801988 27,28.2135322 27,33 C27,40.1797017 32.8202983,46 40,46 Z" id="drop"></path></svg></div>',
                    value: 'svg-default'
                }
                , {
                    title: 'Primary',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><svg width="80px" height="60px" viewBox="0 0 80 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-primary"><path d="M40,46 C47.1797017,46 53,40.1797017 53,33 C53,28.2135322 48.6666667,21.8801988 40,14 C31.3333333,21.8801988 27,28.2135322 27,33 C27,40.1797017 32.8202983,46 40,46 Z" id="drop"></path></svg></div>',
                    value: 'svg-primary'
                }
                , {
                    title: 'Secondary',
                    innerHTML: '<div class="preview-container d-flex align-items-center text-center"><svg width="80px" height="60px" viewBox="0 0 80 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-secondary"><path d="M40,46 C47.1797017,46 53,40.1797017 53,33 C53,28.2135322 48.6666667,21.8801988 40,14 C31.3333333,21.8801988 27,28.2135322 27,33 C27,40.1797017 32.8202983,46 40,46 Z" id="drop"></path></svg></div>',
                    value: 'svg-secondary'
                }
            ],
            onlyOne: true,
            allowSelectNothing: true
        },
        mapColorScheme: {
            title: 'Color scheme',
            buttons: [
                {
                    title: 'Light',
                    innerHTML: '<img alt="Light" src="images/builder-thumbs/map-light.png"/>',
                    value: 'light'
                }
                , {
                    title: 'Dark',
                    innerHTML: '<img alt="Dark" src="images/builder-thumbs/map-dark.png"/>',
                    value: 'dark'
                }
                , {
                    title: 'Dream',
                    innerHTML: '<img alt="Dream" src="images/builder-thumbs/map-dream.png"/>',
                    value: 'dream'
                }
                , {
                    title: 'Apple',
                    innerHTML: '<img alt="Apple" src="images/builder-thumbs/map-apple.png"/>',
                    value: 'apple'
                }
                , {
                    title: 'Mono',
                    innerHTML: '<img alt="Mono" src="images/builder-thumbs/map-mono.png"/>',
                    value: 'mono'
                }
                , {
                    title: 'Clean',
                    innerHTML: '<img alt="clean" src="images/builder-thumbs/map-clean.png"/>',
                    value: 'clean'
                }
                , {
                    title: 'Night',
                    innerHTML: '<img alt="night" src="images/builder-thumbs/map-night.png"/>',
                    value: 'night'
                }
            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        buttonType: {
            title: 'Button type',
            buttons: [
                {
                    innerHTML: '<button type="button" class="btn btn-primary">Primary</button>',
                    value: 'btn-primary'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-primary">Primary</button>',
                    value: 'btn-outline-primary'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-secondary">Secondary</button>',
                    value: 'btn-secondary'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-secondary">Secondary</button>',
                    value: 'btn-outline-secondary'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-success">Success</button>',
                    value: 'btn-success'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-success">Success</button>',
                    value: 'btn-outline-success'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-danger">Danger</button>',
                    value: 'btn-danger'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-danger">Danger</button>',
                    value: 'btn-outline-danger'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-warning">Warning</button>',
                    value: 'btn-warning'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-warning">Warning</button>',
                    value: 'btn-outline-warning'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-info">Info</button>',
                    value: 'btn-info'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-info">Info</button>',
                    value: 'btn-outline-info'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-light">Light</button>',
                    value: 'btn-light'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-light">Light</button>',
                    value: 'btn-outline-light'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-dark">Dark</button>',
                    value: 'btn-dark'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-dark">Dark</button>',
                    value: 'btn-outline-dark'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-fb">Facebook</button>',
                    value: 'btn-fb'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-fb">Facebook</button>',
                    value: 'btn-outline-fb'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-gp">Google</button>',
                    value: 'btn-gp'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-gp">Google</button>',
                    value: 'btn-outline-gp'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-tw">Twitter</button>',
                    value: 'btn-tw'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-tw">Twitter</button>',
                    value: 'btn-outline-tw'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-li">Linkedin</button>',
                    value: 'btn-li'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-outline-li">Linkedin</button>',
                    value: 'btn-outline-li'
                }
                , {
                    innerHTML: '<button type="button" class="btn btn-link">Link</button>',
                    value: 'btn-link'
                }

            ],
            onlyOne: true,
            allowSelectNothing: false
        },
        buttonOptions: {
            title: 'Button effect',
            buttons: [
                {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-3d">3D</button>',
                    value: 'fx-btn-3d'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-pill">Pill</button>',
                    value: 'fx-btn-pill'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-zoom">Zoom</button>',
                    value: 'fx-btn-zoom'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-up">Up</button>',
                    value: 'fx-btn-up'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-shadow">Shadow</button>',
                    value: 'fx-btn-shadow'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-hard-shadow">Shadow 2</button>',
                    value: 'fx-btn-hard-shadow'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-hidden-icon">Hidden icon</button>',
                    value: 'fx-btn-hidden-icon'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-blick">Blick</button>',
                    value: 'fx-btn-blick'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-wave">Wave</button>',
                    value: 'fx-btn-wave'
                }
                , {
                    title: '',
                    innerHTML: '<button type="button" class="btn btn-primary fx-btn-glow">Glow</button>',
                    value: 'fx-btn-glow'
                }
            ],
            onlyOne: false,
            allowSelectNothing: true
        }
    },
    baseFilesForProject: {
        css: [
            'bootstrap.weber.css'
            , 'fx.css'
        ],
        js: [
            'jquery-2.1.4.min.js'
            , 'bootstrap.min.js'
        ],
        plugins: [
            'https://maps.googleapis.com/maps/api/js?key=' + googleKey
            , 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'
        ]
    }
    , fullVersionSource: '../../../../membership/extend'
    , previewSettings: {
        //Auth::user()->id
        dir: publicpath+'/tmp/' + userId + '/' + project_id +'/preview' //Directory to upload like /preview or /../preview
    }
};
