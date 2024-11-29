import { useBlockProps } from "@wordpress/block-editor"
import { TextControl } from '@wordpress/components'

export default function Edit(props) {
  const blockProps = useBlockProps()
  const { attributes, setAttributes } = props

  return (
      <div {...blockProps} style={{marginBottom: '1rem', backgroundColor: '#FEF3E2', padding: '1rem'}}>
          <div className="our-admin-container">
              <h3>Header Page</h3>
              <TextControl
                  label="Block Title"
                  value={attributes.title || ''}
                  onChange={(value) => setAttributes({title: value})}
              />
              <TextControl
                  label="Block Subtitle"
                  value={attributes.subtitle || ''}
                  onChange={(value) => setAttributes({subtitle: value})}
              />
          </div>
      </div>
  )
}
