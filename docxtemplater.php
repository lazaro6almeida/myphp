<html>
    <body>
        <button onclick="generate()">Generate document</button>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.30.0/docxtemplater.js"></script>
    <script src="https://unpkg.com/pizzip@3.1.1/dist/pizzip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>
    <script src="https://unpkg.com/pizzip@3.1.1/dist/pizzip-utils.js"></script>
    <!--
    Mandatory in IE 6, 7, 8 and 9.
    -->
    <!--[if IE]>
        <script
            type="text/javascript"
            src="https://unpkg.com/pizzip@3.1.1/dist/pizzip-utils-ie.js"
        ></script>
    <![endif]-->
    <script>
        function loadFile(url, callback) {
            PizZipUtils.getBinaryContent(url, callback);
        }
        window.generate = function generate() {
            loadFile(
                "https://docxtemplater.com/tag-example.docx",
                function (error, content) {
                    if (error) {
                        throw error;
                    }
                    var zip = new PizZip(content);
                    var doc = new window.docxtemplater(zip, {
                        paragraphLoop: true,
                        linebreaks: true,
                    });

                    // Render the document (Replace {first_name} by John, {last_name} by Doe, ...)
                    doc.render({
                        first_name: "John",
                        last_name: "Doe",
                        phone: "0652455478",
                        description: "New Website",
                    });

                    var out = doc.getZip().generate({
                        type: "blob",
                        mimeType:
                            "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                        // compression: DEFLATE adds a compression step.
                        // For a 50MB output document, expect 500ms additional CPU time
                        compression: "DEFLATE",
                    });
                    // Output the document using Data-URI
                    saveAs(out, "output.docx");
                }
            );
        };
    </script>
</html>