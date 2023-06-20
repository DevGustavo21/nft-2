import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {Dropzone} from "dropzone";

Dropzone.autoDiscover = false;


const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Upload File',
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Delete File',
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        this.on("addedfile", function (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                let imagePreview = document.getElementById("image-preview");
                imagePreview.src = event.target.result;
            };
            reader.readAsDataURL(file);
        });
    }

})

dropzone.on('success', function (file, response){
    document.querySelector('[name="img_item"]').value = response.img_item;
    file.previewElement.innerHTML = "";
})

dropzone.on('removedfile', function (){
    document.querySelector('[name="img_item"]').value = "";
})


Dropzone.autoDiscover = false;



