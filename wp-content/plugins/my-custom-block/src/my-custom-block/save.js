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
                tagName="h2" 
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
           
        </div>
    );
}