import { __ } from '@wordpress/i18n';
import { 
    useBlockProps, 
    RichText,
    InspectorControls,
    URLInput
} from '@wordpress/block-editor';
import { 
    PanelBody, 
    TextControl,
    ColorPicker 
} from '@wordpress/components';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
    const blockProps = useBlockProps({
        style: {
            backgroundColor: attributes.backgroundColor,
            padding: '60px 20px',
            textAlign: 'center'
        }
    });

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Настройки Hero Section', 'my-custom-block')}>
                    <TextControl
                        label={__('Текст кнопки', 'my-custom-block')}
                        value={attributes.buttonText}
                        onChange={(value) => setAttributes({ buttonText: value })}
                    />
                    <div style={{ marginBottom: '16px' }}>
                        <label>{__('Ссылка кнопки', 'my-custom-block')}</label>
                        <URLInput
                            value={attributes.buttonUrl}
                            onChange={(value) => setAttributes({ buttonUrl: value })}
                        />
                    </div>
                    <label>{__('Цвет фона', 'my-custom-block')}</label>
                    <ColorPicker
                        color={attributes.backgroundColor}
                        onChangeComplete={(value) => 
                            setAttributes({ backgroundColor: value.hex })
                        }
                    />
                </PanelBody>
            </InspectorControls>

            <div {...blockProps}>
                <RichText
                    tagName="h1"
                    value={attributes.title}
                    onChange={(value) => setAttributes({ title: value })}
                    placeholder={__('Введите заголовок...', 'my-custom-block')}
                    style={{ 
                        color: '#ffffff',
                        fontSize: '48px',
                        marginBottom: '20px'
                    }}
                />
                <RichText
                    tagName="p"
                    value={attributes.subtitle}
                    onChange={(value) => setAttributes({ subtitle: value })}
                    placeholder={__('Введите подзаголовок...', 'my-custom-block')}
                    style={{ 
                        color: '#ffffff',
                        fontSize: '24px',
                        marginBottom: '30px'
                    }}
                />
               
            </div>
        </>
    );
}