import { registerBlockType } from "@wordpress/blocks"
import metadata from "./block.json"
import Edit from "./edit"

registerBlockType(metadata.name, {
  attributes: {
    title: {
      type: 'string',
      default: ''
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