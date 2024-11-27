import { registerBlockType } from "@wordpress/blocks"
import metadata from "./block.json"
import Edit from "./edit"

registerBlockType(metadata.name, {
  attributes: {
    code: {
      type: 'string',
      default: 'Code Block'
    },
    language: {
      type: 'string',
      default: 'html'
    }
  },
  edit: Edit,
  save: function ({ attributes }) {
    return (
      <div>
        <h1>{attributes.title}</h1>
      </div>
    )
  }
})