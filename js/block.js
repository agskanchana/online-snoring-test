(function(blocks, element, components, editor) {
    var el = element.createElement;
    var InspectorControls = editor.InspectorControls;
    var ColorPicker = components.ColorPicker;
    var RangeControl = components.RangeControl;
    var PanelBody = components.PanelBody;

    blocks.registerBlockType('snoring-test/quiz-block', {
        title: 'Online Snoring Test',
        icon: 'dashboard',
        category: 'widgets',

        attributes: {
            background_color: {
                type: 'string',
                default: ''
            },
            icons_color: {
                type: 'string',
                default: ''
            },
            text_color: {
                type: 'string',
                default: ''
            },
            heading: {
                type: 'number',
                default: 36
            },
            general: {
                type: 'number',
                default: 15
            }
        },

        edit: function(props) {
            return [
                el(InspectorControls, { key: 'controls' },
                    el(PanelBody, { title: 'Colors', initialOpen: true },
                        el('div', { className: 'components-base-control' },
                            el('label', { className: 'components-base-control__label' }, 'Background Color'),
                            el(ColorPicker, {
                                color: props.attributes.background_color,
                                onChangeComplete: function(color) {
                                    props.setAttributes({ background_color: color.hex });
                                }
                            })
                        ),
                        el('div', { className: 'components-base-control' },
                            el('label', { className: 'components-base-control__label' }, 'Icons Color'),
                            el(ColorPicker, {
                                color: props.attributes.icons_color,
                                onChangeComplete: function(color) {
                                    props.setAttributes({ icons_color: color.hex });
                                }
                            })
                        ),
                        el('div', { className: 'components-base-control' },
                            el('label', { className: 'components-base-control__label' }, 'Text Color'),
                            el(ColorPicker, {
                                color: props.attributes.text_color,
                                onChangeComplete: function(color) {
                                    props.setAttributes({ text_color: color.hex });
                                }
                            })
                        )
                    ),
                    el(PanelBody, { title: 'Font Sizes', initialOpen: true },
                        el(RangeControl, {
                            label: 'Heading Size',
                            value: props.attributes.heading,
                            min: 18,
                            max: 60,
                            onChange: function(value) {
                                props.setAttributes({ heading: value });
                            }
                        }),
                        el(RangeControl, {
                            label: 'General Text Size',
                            value: props.attributes.general,
                            min: 12,
                            max: 40,
                            onChange: function(value) {
                                props.setAttributes({ general: value });
                            }
                        })
                    )
                ),
                el('div', { className: 'snoring-test-block-editor' },
                    el('div', { className: 'block-preview' },
                        el('h2', {}, 'Online Snoring Test'),
                        el('p', {}, 'This block will display the online snoring test from Snorer.com')
                    )
                )
            ];
        },

        save: function() {
            // Dynamic block, so we return null
            return null;
        }
    });
}(
    window.wp.blocks,
    window.wp.element,
    window.wp.components,
    window.wp.blockEditor || window.wp.editor
));