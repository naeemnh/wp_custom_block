import { registerBlockType } from "@wordpress/blocks";
import Edit from "./edit";
import Save from "./save";
import "./style.scss";

registerBlockType("mehan-blocks/testimonial-block", {
	edit: Edit,
	save: Save,
});
