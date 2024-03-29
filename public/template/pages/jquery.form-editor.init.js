$(document).ready(function() {
    0 < $("#elm1").length && tinymce.init({
        selector: "textarea#elm1",
        theme: "modern",
        height: 300,
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        style_formats: [{
            title: "Bold text",
            inline: "b"
        }, {
            title: "Red text",
            inline: "span",
            styles: {
                color: "#ff0000"
            }
        }, {
            title: "Red header",
            block: "h1",
            styles: {
                color: "#ff0000"
            }
        }, {
            title: "Example 1",
            inline: "span",
            classes: "example1"
        }, {
            title: "Example 2",
            inline: "span",
            classes: "example2"
        }]
    })
});
