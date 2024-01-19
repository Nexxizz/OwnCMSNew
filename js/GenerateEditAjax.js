class Edit {
    constructor() {
        this.request = new XMLHttpRequest();
        this.name = '';
    }

    requestData() {
        let obj = document.getElementById('editAjaxBody');
        // if (this.name !== '') {
        if (obj && obj.hasAttribute('data-info')) {
            this.name = obj.getAttribute('data-info');
            // console.log(this.name);
            this.request.open("GET", "editGetJson.php?site=" + this.name);
            this.request.onreadystatechange = this.processData.bind(this);
            this.request.send(null);
        }
        // }
    }

    processData() {
        if (this.request.readyState === 4) {
            if (this.request.status === 200) {
                if (this.request.responseText != null) {
                    this.process(this.request.responseText);
                } else {
                    console.error("Dokument ist leer");
                }
            } else {
                console.error("Uebertragung fehlgeschlagen");
            }
        } else {
            // Uebertragung laeuft noch
        }
    }

    process(data) {
        let obj = JSON.parse(data);

        // console.log(obj.navi.toString());
        // bodyViewAjax.append(obj.navi);
        // let titleViewAjax = document.getElementById("viewAjaxTitle");

        let bodyElement = document.getElementById('editAjaxBody');

        // Formular Titel
        let formTitle = document.createElement('form');
        formTitle.id = 'titleFormular';
        formTitle.method = 'post';
        formTitle.action = 'editAjax.php?site=' + obj.name;

        let headerTitle = document.createElement('h3');
        headerTitle.innerText = "Titel";
        formTitle.appendChild(headerTitle);

        let textareaTitle = document.createElement('textarea');
        textareaTitle.name = 'titel';
        textareaTitle.id = 'titleId';
        textareaTitle.value = obj.title;
        textareaTitle.rows = 5;
        textareaTitle.cols = 120;

        formTitle.appendChild(textareaTitle);

        let submitButtonTitle = document.createElement('input');
        submitButtonTitle.type = 'submit';
        submitButtonTitle.value = 'Abschicken';

        formTitle.appendChild(submitButtonTitle);

        bodyElement.appendChild(formTitle);

        // Formular Navi
        let formNavi = document.createElement('form');
        formNavi.id = 'contentNavi';
        formNavi.method = 'post';
        formNavi.action = 'editAjax.php?site=' + obj.name;

        let headerNavi = document.createElement('h3');
        headerNavi.innerText = "Navigation";
        formNavi.appendChild(headerNavi);

        // Erstelle eine Textarea
        let textareaNavi = document.createElement('textarea');
        textareaNavi.name = 'navi';
        textareaNavi.id = 'naviId';
        textareaNavi.value = obj.navi;
        textareaNavi.rows = 15;
        textareaNavi.cols = 120;

        // Füge das Textfeld dem Formular hinzu
        formNavi.appendChild(textareaNavi);

        // Erstelle einen Submit-Button
        let submitButtonNavi = document.createElement('input');
        submitButtonNavi.type = 'submit';
        submitButtonNavi.value = 'Abschicken';

        // Füge den Submit-Button dem Formular hinzu
        formNavi.appendChild(submitButtonNavi);

        // Füge das Formular dem Body mit der ID 'editAjaxBody' hinzu
        bodyElement.appendChild(formNavi);

        // Formular Content
        let formContent = document.createElement('form');
        formContent.id = 'contentFormular';
        formContent.method = 'post';
        formContent.action = 'editAjax.php?site=' + obj.name;

        let headerContent = document.createElement('h3');
        headerContent.innerText = "Content";
        formContent.appendChild(headerContent);

        // Erstelle eine Textarea
        let textarea = document.createElement('textarea');
        textarea.name = 'content';
        textarea.id = 'contentId';
        textarea.value = obj.content;
        textarea.rows = 20;
        textarea.cols = 120;

        // Füge das Textfeld dem Formular hinzu
        formContent.appendChild(textarea);

        // Erstelle einen Submit-Button
        let submitButton = document.createElement('input');
        submitButton.type = 'submit';
        submitButton.value = 'Abschicken';

        // Füge den Submit-Button dem Formular hinzu
        formContent.appendChild(submitButton);

        // Füge das Formular dem Body mit der ID 'editAjaxBody' hinzu
        bodyElement.appendChild(formContent);

        // Formular Footer
        let formFooter = document.createElement('form');
        formFooter.id = 'formFooterId';
        formFooter.method = 'post';
        formFooter.action = 'editAjax.php?site=' + obj.name;

        let headerFooter = document.createElement('h3');
        headerFooter.innerText = "Footer";
        formFooter.appendChild(headerFooter);

        // Erstelle eine Textarea
        let textareaFooter = document.createElement('textarea');
        textareaFooter.name = 'navi';
        textareaFooter.id = 'naviId';
        textareaFooter.value = obj.footer;
        textareaFooter.rows = 15;
        textareaFooter.cols = 120;

        // Füge das Textfeld dem Formular hinzu
        formFooter.appendChild(textareaFooter);

        // Erstelle einen Submit-Button
        let submitButtonFooter = document.createElement('input');
        submitButtonFooter.type = 'submit';
        submitButtonFooter.value = 'Abschicken';

        // Füge den Submit-Button dem Formular hinzu
        formFooter.appendChild(submitButtonFooter);

        // Füge das Formular dem Body mit der ID 'editAjaxBody' hinzu
        bodyElement.appendChild(formFooter);

        // console.log(obj.title);
    }
}

let edit = new Edit();

