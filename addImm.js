document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.customButton').forEach(function(button) {
        button.addEventListener('click', function() {
            var index = this.getAttribute('data-index');
            document.querySelector('.fileInput[data-index="' + index + '"]').click();
        });
    });

    document.querySelectorAll('.fileInput').forEach(function(input) {
        input.addEventListener('change', function() {
            var index = this.getAttribute('data-index');
            uploadImage(index);
        });
    });

    function uploadImage(index) {
        var input = document.querySelector('.fileInput[data-index="' + index + '"]');
        var file = input.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = new Image();
                img.src = e.target.result;
                img.style.width = '100%'; // Adatta l'immagine alla larghezza del contenitore
                img.style.height = 'auto'; // Mantiene il rapporto d'aspetto

                img.onload = function() {
                    var container = document.querySelector('.imageContainer[data-index="' + index + '"]');
                    container.innerHTML = '';
                    container.appendChild(img);
                    input.style.display = 'none';
                    document.querySelector('.customButton[data-index="' + index + '"]').style.display = 'none';
                };
            };

            reader.readAsDataURL(file);
        } else {
            alert('Seleziona un\'immagine prima di caricare!');
        }
    }

    document.querySelectorAll('.imageContainer').forEach(function(container) {
        container.addEventListener('click', function() {
            var index = this.getAttribute('data-index');
            deleteImage(index);
        });
    });

    function deleteImage(index) {
        var container = document.querySelector('.imageContainer[data-index="' + index + '"]');
        container.innerHTML = '';
        document.querySelector('.fileInput[data-index="' + index + '"]').value = '';
        document.querySelector('.customButton[data-index="' + index + '"]').style.display = 'block';
    }
});
