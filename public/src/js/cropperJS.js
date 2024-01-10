function base64toFile(dataURI, fileName) {
  // Konversi data base64 menjadi byte array
  const byteString = atob(dataURI.split(',')[1]);
  const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
  const ab = new ArrayBuffer(byteString.length);
  const ia = new Uint8Array(ab);
  for (let i = 0; i < byteString.length; i++) {
    ia[i] = byteString.charCodeAt(i);
  }

  // Buat objek File dari byte array
  return new File([ab], fileName, { type: mimeString });
}

var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
var ratio = 5/2.5;

$("body").on("change", "#thumbnailImage", function(e){
    ratio = 5/2.5;
    var files = e.target.files;
    var done = function (url) {
        image.src = url;
        $modal.modal('show');
    };

    var reader;
    var file;
    var url;

    document.getElementById('modal').classList.remove('hidden');
    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                done(reader.result);
            };
        reader.readAsDataURL(file);
        }
    }
});

$("body").on("change", "#storeImage", function(e){
    ratio = 5/6;
    var files = e.target.files;
    var done = function (url) {
        image.src = url;
        $modal.modal('show');
    };

    var reader;
    var file;
    var url;
    document.getElementById('modal').classList.remove('hidden');
    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                done(reader.result);
            };
        reader.readAsDataURL(file);
        }
    }
});

$("body").on("change", "#myImage", function(e){
    ratio = 0/0;
    var files = e.target.files;
    var done = function (url) {
        image.src = url;
        $modal.modal('show');
    };

    var reader;
    var file;
    var url;
    document.getElementById('modal').classList.remove('hidden');
    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                done(reader.result);
            };
        reader.readAsDataURL(file);
        }
    }
});

$("body").on("change", "#showProfileImage", function(e){
    ratio = 1/1;
    var files = e.target.files;
    var done = function (url) {
        image.src = url;
        $modal.modal('show');
    };

    var reader;
    var file;
    var url;
    document.getElementById('modal').classList.remove('hidden');
    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                done(reader.result);
            };
        reader.readAsDataURL(file);
        }
    }
});

$("body").on("change", "#showImageTransfer", function(e){
    ratio = 0/0;
    var files = e.target.files;
    var done = function (url) {
        image.src = url;
        $modal.modal('show');
    };

    var reader;
    var file;
    var url;
    document.getElementById('modal').classList.remove('hidden');
    if (files && files.length > 0) {
        file = files[0];

        if (URL) {
            done(URL.createObjectURL(file));
        } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
                done(reader.result);
            };
        reader.readAsDataURL(file);
        }
    }
});

$modal.on('shown.bs.modal', function () {
    cropper = new Cropper(image, {
        aspectRatio: ratio,
        viewMode: 3,
        preview: '.preview'
    });
}).on('hidden.bs.modal', function () {
    document.getElementById('modal').classList.add('hidden');
    cropper.destroy();
    cropper = null;
});

$("#crop").click(function(){
    canvas = cropper.getCroppedCanvas({
        width: 1400,
        height: 1400,
    });

    canvas.toBlob(function(blob) {
        url = URL.createObjectURL(blob);
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function() {
            var base64data = reader.result;
            var fileName = "temporaryfile.png";
            var dataKu = base64toFile(base64data, fileName);
            $modal.modal('hide')
            document.getElementById('modal').classList.add('hidden');
            window.livewire.emit('processCroppedImage', base64data);
        }
    });
});
