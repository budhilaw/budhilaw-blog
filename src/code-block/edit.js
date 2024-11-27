import { useBlockProps } from "@wordpress/block-editor"
import {TextareaControl, TextControl} from '@wordpress/components'
export default function Edit(props) {
    const blockProps = useBlockProps()
    const { attributes, setAttributes } = props

    const handleChange = (event) => {
        setAttributes(event.target.value);
    };

  return (
      <div {...blockProps} style={{marginBottom: '1rem', backgroundColor: '#FEF3E2', padding: '1rem'}}>
          <div className="our-admin-container">
              <h3>Code Block</h3>
              <TextControl
                  label="Programming Language"
                  value={attributes.language || ''}
                  onChange={(value) => setAttributes({language: value})}
              />
              <textarea
                  value={attributes.code || ''}
                  onChange={handleChange}
                  style={{width: '100%', height: '200px'}}
                  className="our-admin-textarea"
                  rows="10"
                  cols="50"
                  placeholder="Enter your code here"
                  required
                  />
          </div>
      </div>
  )
}
