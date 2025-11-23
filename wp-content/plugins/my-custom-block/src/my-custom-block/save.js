import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({ attributes }) {
    const blockProps = useBlockProps.save({
        style: {
            backgroundColor: attributes.backgroundColor,
            padding: '60px 20px',
            textAlign: 'center'
        }
    });

    return (
        <div {...blockProps}>
            <RichText.Content
                tagName="h1"
                value={attributes.title}
                style={{
                    color: '#ffffff',
                    fontSize: '48px',
                    marginBottom: '20px'
                }}
            />
            <RichText.Content
                tagName="p"
                value={attributes.subtitle}
                style={{
                    color: '#ffffff',
                    fontSize: '24px',
                    marginBottom: '30px'
                }}
            />
            {attributes.buttonText && attributes.buttonUrl && (
                <a
                    href={attributes.buttonUrl}
                    className="hero-button"
                    style={{
                        display: 'inline-block',
                        padding: '15px 30px',
                        backgroundColor: '#ffffff',
                        color: attributes.backgroundColor || '#5b32a3',
                        textDecoration: 'none',
                        borderRadius: '5px',
                        fontWeight: 'bold',
                        transition: 'all 0.3s ease'
                    }}
                >
                    {attributes.buttonText}
                </a>
            )}
        </div>
    );
}