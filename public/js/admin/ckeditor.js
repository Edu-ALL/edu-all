import plugin from "@tailwindcss/forms";
import { ClassicEditor, WordCount } from "ckeditor5";

const editorConfig = {
    toolbar: {
        items: [
            "undo",
            "redo",
            "|",
            "selectAll",
            "|",
            "bold",
            "italic",
            "|",
            "accessibilityHelp",
        ],
        shouldNotGroupWhenFull: false,
    },
    placeholder: "Type or paste your content here!",
    plugins: [WordCount],
};

ClassicEditor.create(document.querySelector("#editor"), editorConfig)
    .then((editor) => {
        console.log(editor);
    })
    .catch((error) => {
        console.error(error);
    });
