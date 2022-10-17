import Dropzone from "dropzone";
Dropzone.autoDiscover = false;


const dropzone = new Dropzone('#dropzone', {
  dictFallbackText: 'Sube aqui tu imagen',
  acceptedFiles: '.png, .jpg, .gif, .jpeg',
  addRemoveLinks: true,
  dictRemoveFile: 'Borrar Archivo',
  maxFiles: 1,
  uploadMultiple: false
});

dropzone.on('sending', function(file, xhr, formData) {

});


dropzone.on('sucess', function(file, response) {

})

dropzone.on('error', function(file, message) {

})

dropzone.on('removedFile', function() {

});
