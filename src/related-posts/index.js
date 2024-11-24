import { registerBlockType } from "@wordpress/blocks"
import metadata from "./block.json"
import Edit from "./edit"

registerBlockType(metadata.name, {
    edit: Edit,
    save: function () {
        return <div>
            <h1>Hello World</h1>
        </div>
    }
})