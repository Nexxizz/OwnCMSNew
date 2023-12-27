class AjaxRequest {
    constructor() {
        this.request = new XMLHttpRequest();
        this.name = '';
    }

    requestData() {
        let obj = document.getElementById('viewAjaxBody');
        // if (this.name !== '') {
        if (obj && obj.hasAttribute('data-info')) {
            this.name = obj.getAttribute('data-info');
            // console.log(this.name);
            this.request.open("GET", "view.php?site=" + this.name);
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
        let bodyViewAjax = document.getElementById("viewAjaxBody");

        // console.log(obj.navi.toString());
        // bodyViewAjax.append(obj.navi);
        let titleViewAjax = document.getElementById("viewAjaxTitle");

        titleViewAjax.innerText = obj.title;

        bodyViewAjax.innerHTML += obj.navi;
        bodyViewAjax.innerHTML += obj.content;
        bodyViewAjax.innerHTML += obj.footer;

        // console.log(obj.title);
    }
}

let ajaxInstance = new AjaxRequest();

