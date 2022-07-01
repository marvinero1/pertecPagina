<div class="modalInfProd fade-scale" id="ModalInfoProd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-2">
			<div class="modal-header">
				<h4 class="modal-title" style="text-align: center;">Información</h4>
				<button type="button" class="close button-modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<img id="myImg3" src="../images/productos/conversiones/referencia.jpg" style="display: block; margin: auto;" alt="matriz" /><br>
                <p style="text-align: center; color: black;">Las casillas que contienen datos pertenecen a las medidas disponibles del producto</p>
            </div>
			
		</div>
	</div>
</div>

<div id="myModalImg2" class="modal">
    <button onclick="closeMod();" class="close">×</button>
    <img class="modal-content-2" id="img02">
    <div id="caption2"></div>
</div>

<style>
    #myImg3 {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        width: 365px;
    }
    .modal-body{
        padding-top: 10px !important;
    }
    /* The Modal (background) */
    .modalInfProd {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1030;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(9, 48, 106, 0.6);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content-2 {
        margin: auto;
        display: block;
        width: 130% !important;
        max-width: 700px;
    }
    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }
    /* Add Animation */
    .modal-content-2,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }
    @keyframes  zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }
    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        opacity: 1;
    }
    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
    /* 100% Image Width on Smaller Screens */
    @media  only screen and (max-width: 700px) {
        .modal-content-2 {
            width: 100%;
        }
        .zoom:hover {
            left: 25%;
        }
    }
</style>
<script>
    // Get the modal
    var modal = document.getElementById('myModalImg2');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg3');

    var modalImg = document.getElementById("img02");
    var captionText = document.getElementById("caption2");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
    function closeMod() {
        modal.style.display = "none";
    }

</script>
<?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/productos/modalInfoProd.blade.php ENDPATH**/ ?>